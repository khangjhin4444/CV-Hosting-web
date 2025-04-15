<?php

require_once __DIR__ . '/../../config/constant.php';
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../controllers/AuthController.php';

$authController = new AuthController($conn);
$action = $_GET['action'] ?? 'login';

if (isset($_SESSION['user']) && $action !== 'logout' && $action !== 'google_callback' && $action !== 'facebook_callback') {
    echo($_GET['action']);
    // header('Location: ' . BASE_URL . '/index.php?page=home');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if ($action === 'register'){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];

        $result = $authController->register($email, $password, $firstName, $lastName);
        if ($result['success']){
            header('Location: ' . BASE_URL . '/index.php?page=authentication&action=login');
            exit;
        } else {
            $error = $result['msg'];
        }
    } elseif ($action === 'login'){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = $authController->login($email, $password);
        if ($result['success']){
            header('Location: ' . BASE_URL . '/index.php?page=home');
            exit;
        } else {
            $error = $result['msg'];
        }
    } 
}

if ($action === 'logout'){
  $authController->logout();
  header('Location: ' . BASE_URL . '/index.php?page=home');
  exit;
}

if ($action === 'start-google-login'){
  $authController->startGoogleLogin();

}

if ($action === 'start-facebook-login'){
  $authController->startFacebookLogin();
}

if ($action === 'google_callback'){
  
  $code = $_GET['code'];
  $state = $_GET['state'];
  $result = $authController->handleGoogleCallback($code, $state);
  echo($state . " " . $result['msg']);
  if ($result['success']){
    header('Location: ' . BASE_URL . '/index.php?page=home');
    exit;
  } else {
    $error = $result['msg'];
    $action = 'login';
  }
}

if ($action === 'facebook_callback'){
  $code = $_GET['code'];
  $state = $_GET['state'];
  $result = $authController->handleFacebookCallback($code, $state);
  if ($result['success']){
    header('Location: ' . BASE_URL . '/index.php?page=home');
    exit;
  } else {
    $error = $result['msg'];
    $action = 'login';
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>

  <link rel="stylesheet" href="/CV-Hosting-web-main/public/css/authentication.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
</head>

<body>
  <!-- <script type="text/javascript" src="/eel.js"></script> -->
  <div style="display: flex;
      height: 100vh;">
    <div class="left">
      <img style="
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Bao phủ toàn bộ phần left */
            z-index: 0;" src="https://scontent.fsgn5-9.fna.fbcdn.net/v/t1.15752-9/476898424_1141758257695666_349601744524452141_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=0024fc&_nc_ohc=MI4qGH7xsGAQ7kNvwHiz7DS&_nc_oc=AdmIsvXuKAiXK1T63hWanD7T712cIkcKLVlgqIgpF224dCYuQBmFjarIpSvBqzhEC1weH8O8Ea_6hx0ioNl9MZsP&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent.fsgn5-9.fna&oh=03_Q7cD2AEWM02gBjjqdKbNhs4FR-8X636YYceAOVEu56lYedPJqg&oe=6824EBAE">
      <img style=" position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            object-fit: contain;
            z-index: 1; " src="">
    </div>    <div class="right">

    </div>
  </div>

  <script src="/CV-Hosting-web-main/public/js/authentication.js" type="module"></script>
</body>

</html>
