<?php
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use League\OAuth2\Client\Provider\Google;
use League\OAuth2\Client\Provider\Facebook;

class AuthController {
    private $userModel;
    private $googleProvider;
    private $facebookProvider;

    public function __construct($conn){
        $this->userModel = new User($conn);

        $this->googleProvider = new Google([
            'clientId' => '880006161529-bdgcldoj4lacab82ep9lbt8bq0cb6kn4.apps.googleusercontent.com',
            'clientSecret' => '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',
            'redirectUri' => 'http://localhost/CV-Hosting-web-main/public/index.php?page=authentication&action=google_callback',
        ]);

        $this->facebookProvider = new Facebook([
            'clientId' => '695956439553498',
            'clientSecret' => '224b88c47646cbe55452aa2a6aafd115',
            'redirectUri' => 'http://localhost/cv-hosting-web/public/index.php?page=authentication&action=facebook_callback',
            'graphApiVersion' => 'v20.0',
        ]);
    }

    public function register($email, $password, $firstName, $lastName){
        return $this->userModel->register($email, $password, $firstName, $lastName);
    }

    public function login($email, $password){
        $result = $this->userModel->login($email, $password);
        if ($result['success']) {
            $_SESSION['user'] = [
                'id' => $result['user']['id'],
                'email' => $result['user']['email'],
                'role' => $result['user']['role'],
            ];
        }
        return $result;
    }

    public function logout(){
        session_destroy();
        return ['success' => true, 'msg' => 'Logout successful'];
    }

    public function startGoogleLogin(){
        
        $authUrl = $this->googleProvider->getAuthorizationUrl([
            'scope' => ['email', 'profile'],
        ]);
        $_SESSION['oauth_state'] = $this->googleProvider->getState();
        echo "Oauth state: " . $authUrl;
        header('Location: ' . $authUrl);
        exit;
    }

    public function handleGoogleCallback($code, $state) {
        error_log("Google callback: code=$code, state=$state");
        if (!isset($_SESSION['oauth_state']) || $state !== $_SESSION['oauth_state']) {
            error_log("State mismatch: session=" . ($_SESSION['oauth_state'] ?? 'not set') . ", received=$state");
            return ['success' => false, 'msg' => 'Invalid state'];
        }

        
        
        try {
            
    
            // Lấy access token
            $accessToken = $this->googleProvider->getAccessToken('authorization_code', [
                'code' => $code,
            ]);
    
            // Lấy thông tin người dùng
            $userDetails = $this->googleProvider->getResourceOwner($accessToken);
            $data = $userDetails->toArray();
            error_log("User details: " . json_encode($data));
    
            $email = $data['email'] ?? null;
            $oauthId = $data['sub'] ?? null; 
            $firstName = $data['given_name'] ?? '';
            $lastName = $data['family_name'] ?? '';
    
            if (!$email || !$oauthId) {
                error_log("Missing email or oauthId in user details: " . json_encode($data));
                return ['success' => false, 'msg' => 'Invalid user details'];
            }
    
            // Liên kết tài khoản OAuth
            $linkResult = $this->userModel->linkOauth($email, 'google', $oauthId, $firstName, $lastName);
            error_log("Link OAuth result: " . json_encode($linkResult));
    
            // Tìm người dùng
            $user = $this->userModel->findByOauth($oauthId, 'google');
            error_log("User found: " . json_encode($user));
    
            if ($user) {
                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'email' => $user['email'],
                    'role' => $user['role'],
                ];
                error_log("Session set: " . json_encode($_SESSION['user']));
                return ['success' => true, 'msg' => 'Login successful'];
            }
    
            return ['success' => false, 'msg' => 'Login failed: User not found'];
        } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
            error_log("OAuth error: " . $e->getMessage() . "\nStack trace: " . $e->getTraceAsString());
            return ['success' => false, 'msg' => 'OAuth error: ' . $e->getMessage()];
        } catch (Exception $e) {
            error_log("General error: " . $e->getMessage() . "\nStack trace: " . $e->getTraceAsString());
            return ['success' => false, 'msg' => 'Error: ' . $e->getMessage()];
        }
    }

    public function startFacebookLogin(){
        $authUrl = $this->facebookProvider->getAuthorizationUrl([
            'scope' => ['email', 'public_profile'],
        ]);
        $_SESSION['oauth_state'] = $this->facebookProvider->getState();
        header('Location: ' . $authUrl);
        exit;
    }

    public function handleFacebookCallback($code, $state){
        if (!isset($_SESSION['oauth_state']) || $state !== $_SESSION['oauth_state']) {
            return ['success' => false, 'msg' => 'Invalid state']; 
        }

        try{
            $accessToken = $this->facebookProvider->getAccessToken('authorization_code', [
                'code' => $code,
            ]);
            $userDetails = $this->facebookProvider->getResourceOwner($accessToken);
            $email = $userDetails->getEmail();
            $oauthId = $userDetails->getId();
            $firstName = $userDetails->getFirstName();
            $lastName = $userDetails->getLastName();

            $this->userModel->linkOauth($email, 'facebook', $oauthId, $firstName, $lastName);

            $user = $this->userModel->findByOauth($oauthId, 'facebook');
            if ($user) {
                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'email' => $user['email'],
                    'role' => $user['role'],
                ];
                return ['success' => true, 'msg' => 'Login successful']; 
            }
            return ['success' => false, 'msg' => 'Login failed'];
        } catch (Exception $e) {
            return ['success' => false, 'msg' => 'Error: ' . $e->getMessage()];
        }
    }
}

?>