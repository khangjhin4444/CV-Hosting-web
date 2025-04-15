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
            'clientSecret' => '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GOCSPX-ioJ0yoDAiSgdJU9o2MdAZvMemp_I',
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
        var_dump(getenv('GOOGLE_CLIENT_ID'));
        $authUrl = $this->googleProvider->getAuthorizationUrl([
            'scope' => ['email', 'profile'],
        ]);
        $_SESSION['oauth_state'] = $this->googleProvider->getState();
        header('Location: ' . $authUrl);
        exit;
    }

    public function handleGoogleCallback($code, $state){
        if (!isset($_SESSION['oauth_state']) || $state !== $_SESSION['oauth_state']) {
            
            return ['success' => false, 'msg' => 'Invalid state']; 
        }

        try{
            $accessToken = $this->googleProvider->getAccessToken('authorization_code', [
                'code' => $code,
            ]);
            $userDetails = $this->googleProvider->getResourceOwner($accessToken);
            $email = $userDetails->getEmail();
            $oauthId = $userDetails->getId();
            $firstName = $userDetails->getFirstName();
            $lastName = $userDetails->getLastName();
            
            error_log("Oauth login: $email, $oauthId, $firstName, $lastName");
            $link = $this->userModel->linkOauth($email, 'google', $oauthId, $firstName, $lastName);
            var_dump("Link result: " . json_encode($link));

            $this->userModel->linkOauth($email, 'google', $oauthId, $firstName, $lastName);

            $user = $this->userModel->findByOauth($oauthId, 'google');
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