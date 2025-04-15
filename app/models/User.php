<?php 
require_once __DIR__ . '/../helpers/validation.php';

class User{
    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function register($email, $password, $firstName, $lastName){
        if (!Validation::validateEmail($email)) {
            return ['success' => False, 'msg' => 'Invalid email']; 
        }
        if (!Validation::validatePassword($password)) {
            return ['success' => False, 'msg' => 'Invalid password']; 
        }

        $stmt = $this->conn->prepare("SELECT id, oauth_provider FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $existingUser = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($existingUser) {
            return ['success' => False, 'msg' => 'Email already exists'];
        }

        $hashPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $this->conn->prepare("INSERT INTO users (email, password, first_name, last_name) VALUES (:email, :password, :first_name, :last_name)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashPassword);
        $stmt->bindParam(':first_name', $firstName);
        $stmt->bindParam(':last_name', $lastName);

        return $stmt->execute();
    }

    public function login($email, $password){
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            return ['success' => true, 'user' => $user];
        }

        return ['success' => false, 'msg' => 'Invalid email or password'];
    }

    public function findByOauth($oauthId, $provider){
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE oauth_id = :oauth_id AND oauth_provider = :oauth_provider");
        $stmt->bindParam(':oauth_id', $oauthId);
        $stmt->bindParam(':oauth_provider', $provider);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function linkOauth($email, $provider, $oauthId, $firstName, $lastName){
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $stmt = $this->conn->prepare("UPDATE users SET oauth_id = :oauth_id, oauth_provider = :oauth_provider WHERE email = :email");
            $stmt->bindParam(':oauth_id', $oauthId);
            $stmt->bindParam(':oauth_provider', $provider);
            $stmt->bindParam(':email', $email);
            return $stmt->execute();
        } else{
            $stmt = $this->conn->prepare("INSERT INTO users (email, oauth_id, oauth_provider, first_name, last_name) VALUES (:email, :oauth_id, :oauth_provider, :first_name, :last_name)");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':oauth_id', $oauthId);
            $stmt->bindParam(':oauth_provider', $provider);
            $stmt->bindParam(':first_name', $firstName);
            $stmt->bindParam(':last_name', $lastName);
            return $stmt->execute();
        }
    }
}

?>