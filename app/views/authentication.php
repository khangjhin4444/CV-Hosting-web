<?php

require_once __DIR__ . '/../../config/constant.php';
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../controllers/AuthController.php';

$authController = new AuthController($conn);
$action = $_GET['action'] ?? 'login';



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if ($action === 'register') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];

    $result = $authController->register($email, $password, $firstName, $lastName);
    // Kiểm tra nếu là AJAX request (từ fetch API)
    $isAjax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
              strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ||
              strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false;
    
    if ($isAjax) {
      // Nếu là AJAX request, trả về JSON
      header('Content-Type: application/json');
      echo json_encode($result);
      exit;
    } else {
      // Nếu là form submit thông thường, chuyển hướng
      if ($result['success']) {
        header('Location: ' . BASE_URL . '/index.php?page=authentication&action=login');
        exit;
      } else {
        $error = $result['msg'];
      }
    }
  } elseif ($action === 'login') {
    // Tương tự cho login...
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $authController->login($email, $password);
    
    // Kiểm tra nếu là AJAX request
    $isAjax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
              strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ||
              strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false;
    
    if ($isAjax) {
      header('Content-Type: application/json');
      echo json_encode($result);
      exit;
    } else {
      if ($result['success']) {
        header('Location: ' . BASE_URL . '/index.php?page=home');
        exit;
      } else {
        $error = $result['msg'];
      }
    }
  }
}

if ($action === 'logout') {
  $authController->logout();
  header('Location: ' . BASE_URL . '/index.php?page=home');
  exit;
}

if ($action === 'start-google-login') {
  $authController->startGoogleLogin();

}

if ($action === 'start-facebook-login') {
  $authController->startFacebookLogin();
}

if ($action === 'google_callback') {

  $code = $_GET['code'];
  $state = $_GET['state'];
  $result = $authController->handleGoogleCallback($code, $state);

  if ($result['success']) {
    header('Location: ' . BASE_URL . '/index.php?page=home');
    exit;
  } else {
    $error = $result['msg'];
    $action = 'login';
  }
}

if ($action === 'facebook_callback') {
  $code = $_GET['code'];
  $state = $_GET['state'];
  $result = $authController->handleFacebookCallback($code, $state);
  if ($result['success']) {
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
  <link rel="stylesheet" href="/CV-Hosting-web-main/public/css/node_modules/bootstrap/dist/css/bootstrap.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">

  <style>
    p {
      margin: 0;
    }
  </style>
</head>

<body>
  <!-- <script type="text/javascript" src="/eel.js"></> -->
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
            z-index: 0;" src="/CV-Hosting-web-main/public/images/9384988_4171344.jpg">
    </div>
    <div class="right">

    </div>
  </div>

  <script src="/CV-Hosting-web-main/public/js/authentication.js" type="module"></script>
</body>

</html>