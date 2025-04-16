<?php
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../config/constant.php';

$user = $_SESSION['user'];
$email = htmlspecialchars($user['email']);
$stmt = $conn->prepare('SELECT first_name, last_name FROM users WHERE email = :email');
$stmt->bindParam(':email', $email);
$stmt->execute();
$userData = $stmt->fetch(PDO::FETCH_ASSOC);

$displayName = $userData['first_name'] . ' ' . $userData['last_name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Experience</title>
  <link rel="stylesheet" href="/CV-Hosting-web-main/public/css/node_modules/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="/CV-Hosting-web-main/public/css/header.css">
  <link rel="stylesheet" href="/CV-Hosting-web-main/public/css/body.css">
  <link rel="stylesheet" href="/CV-Hosting-web-main/public/css/experience.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

  <style>
    html,
    body {
      font-family: Montserrat;
      margin: 0;
      padding: 0;
      height: 100%;
      background-color: #F8F0E5;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg pt-0" style="background-color: #F8F0E5;">
    <div class="container-fluid">
      <a href="<?= BASE_URL ?>/index.php?page=home" class="navbar-brand d-flex" style="margin-right: 100px;">
        <img src="/CV-Hosting-web-main/public/images/cv 1.png" class="img-fluid"
          style="margin-left: 10px; margin-right: 3px; width: 50px; height: 100%;">
        <p style="font-weight: bolder; margin-left: 20px;">CV Hosting</p>
      </a>

      <div class="row">
        <button class="search-btn navbar-toggler shadow-0 border-0" type="button" data-bs-toggle="collapse"
          data-bs-target="#searchBar">
          <img src="/CV-Hosting-web-main/public/images/search-icon.png" alt="" class="img-fluid">
        </button>
        <button class="navbar-toggler shadow-0 border-0" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarContent">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse mt-2 hidden-search" id="searchBar" style="visibility: hidden;">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">
            <img src="/CV-Hosting-web-main/public/images/search-icon.png"
              style="width: 16px; height: 16px; margin: 10px;">
          </span>
          <input type="text" class="form-control" placeholder="Search">
        </div>
      </div>

      <div class="collapse navbar-collapse ms-auto justify-content-end" style="width: 100%;">
        <div class="px-2 search-button" style="
                background-color: white;
                border: none;
                cursor: text;
                border-radius: 10px;
                gap: 6px;
                width: 220px;
                display: flex;">
          <div>
            <img src="/CV-Hosting-web-main/public/images/search-icon.png"
              style="width: 16px; height: 16px; margin: 10px;">
          </div>
          <input type="text" placeholder="Search" style="
                    border: none;
                    width: 90%;
                    outline: none;
                    background-color: transparent;">
        </div>
      </div>

      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ms-auto">
          <li class="navbar-item">
            <a href="<?= BASE_URL ?>/index.php?page=home" class="nav-link">Home</a>
          </li>
          <li class="navbar-item">
            <a href="<?= BASE_URL ?>/index.php?page=my_cvs" class="nav-link" style="width: 90px;">My CVs</a>
          </li>
          <li class="navbar-item">
            <a href="#" class="nav-link w-100"><?= $displayName ?></a>
          </li>
          <li class="navbar-item">
            <a href="<?= BASE_URL ?>/index.php?page=home&action=logout" class="nav-link" style="width: 90px;">Log
              Out</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <section>
    <div class="container-fluid pt-4 text-center" style="background-color: #F8F0E5;">
      <h1 style="font-weight: 600;">How long have you been working ?</h1>
      <h3 class="pt-3 pb-5">We'll find the best templates for your experience level.</h3>
      <div class="row align-items-center justify-content-center gy-3">
        <div class="col col-xxl-2">
          <button id="none" class="year-btn">No experience</button>
        </div>
        <div class="col col-xxl-2">
          <button id="3" class="year-btn">Less than 3 years</button>
        </div>
        <div class="col col-xxl-2">
          <button id="5" class="year-btn">3-5 years</button>
        </div>
        <div class="col col-xxl-2">
          <button id="10" class="year-btn">5-10 years</button>
        </div>
        <div class="col col-xxl-2">
          <button id="11" class="year-btn">10+ years</button>
        </div>
      </div>

      <div class="student student-display">
        <h2 class="pt-5 pb-5" style="font-weight: 600;">Are you student</h2>
        <div class="row align-items-center justify-content-center gy-2">
          <div class="col col-xxl-2">
            <button id="yes" class="student-btn">Yes</button>
          </div>
          <div class="col col-xxl-2">
            <button id="no" class="student-btn">No</button>
          </div>
          <div class="col col-xxl-2">
            <button id="graduate" class="student-btn">Recent Graduate</button>
          </div>
        </div>
      </div>

    </div>
  </section>
  <div class="container pt-4" style="justify-content: flex-end; display:flex;">
    <button class="confirm-button">CONFIRM</button>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/CV-Hosting-web-main/public/js/experience.js"></script>
</body>

</html>