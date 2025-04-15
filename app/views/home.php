<?php

require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../config/constant.php';



$authController = new AuthController($conn);


// Kiểm tra đăng xuất
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    $authController->logout();
    header('Location: ' . BASE_URL . '/index.php?page=home');
    exit;
}

// Lấy thông tin người dùng
$isLoggedIn = isset($_SESSION['user']);
$displayName = '';
$role = 'user'; 

if ($isLoggedIn) {
    
    $user = $_SESSION['user'];
    $email = htmlspecialchars($user['email']);
    $role = isset($user['role']) ? $user['role'] : 'user'; 

    // Lấy tên từ DB
    $stmt = $conn->prepare('SELECT first_name, last_name FROM users WHERE email = :email');
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $userData = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($userData) {
        // Nếu có dữ liệu, hiển thị tên
        $displayName = htmlspecialchars($userData['first_name']. " " .$userData['last_name']);
    } else {
        // Nếu không có dữ liệu, hiển thị email
        $displayName = $email;
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Creator - CV Hosting</title>
    <link rel="stylesheet" href="/CV-Hosting-web-main/public/css/node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="/CV-Hosting-web-main/public/css/header.css">
    <link rel="stylesheet" href="/CV-Hosting-web-main/public/css/body.css">
    <link rel="stylesheet" href="/CV-Hosting-web-main/public/css/home.css">
    <link rel="stylesheet" href="/CV-Hosting-web-main/public/css/cv_1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        html, body {
            font-family: Montserrat;
            background-color: #F8F0E5;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg pt-0" style="background-color: #F8F0E5;">
        <div class="container-fluid">
            <a href="<?= BASE_URL ?>/index.php?page=home" class="navbar-brand d-flex" style="margin-right: 100px;">
                <img src="/CV-Hosting-web-main/public/images/cv 1.png" class="img-fluid" style="margin-left: 10px; margin-right: 3px; width: 50px; height: 100%;">
                <p style="font-weight: bolder; margin-left: 20px;">CV Hosting</p>
            </a>

            <div class="row">
                <button class="search-btn navbar-toggler shadow-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#searchBar">
                    <img src="/CV-Hosting-web-main/public/images/search-icon.png" alt="" class="img-fluid">
                </button>
                <button class="navbar-toggler shadow-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse mt-2 hidden-search" id="searchBar" style="visibility: hidden;">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        <img src="/CV-Hosting-web-main/public/images/search-icon.png" style="width: 16px; height: 16px; margin: 10px;">
                    </span>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </div>

            <div class="collapse navbar-collapse  justify-content-end" style="width: 100%;">
                <div class="px-2 search-button" style="
                    background-color: white;
                    border: none;
                    cursor: text;
                    border-radius: 10px;
                    gap: 6px;
                    width: 220px;
                    display: flex;">
                    <div>
                        <img src="/CV-Hosting-web-main/public/images/search-icon.png" style="width: 16px; height: 16px; margin: 10px;">
                    </div>
                    <input type="text" placeholder="Search" style="
                        border: none;
                        width: 90%;
                        outline: none;
                        background-color: transparent;">
                </div>
            </div>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ">
                    <li class="navbar-item">
                        <a href="<?= BASE_URL ?>/index.php?page=home" class="nav-link">Home</a>
                    </li>
                    <?php if ($isLoggedIn): ?>
                        <li class="navbar-item">
                            <a href="<?= BASE_URL ?>/index.php?page=my_cvs" class="nav-link" style="width: 90px;">My CVs</a>
                        </li>
                        <?php if ($role === 'admin'): ?>
                            <li class="navbar-item">
                                <a href="<?= BASE_URL ?>/index.php?page=admin" class="nav-link">Admin</a>
                            </li>
                        <?php endif; ?>
                        <li class="navbar-item">
                            <a href="#" class="nav-link" style="width: 200px;"><?= $displayName ?></a>
                        </li>
                        <li class="navbar-item">
                            <a href="<?= BASE_URL ?>/index.php?page=home&action=logout" class="nav-link" style="width: 90px;">Log Out</a>
                        </li>
                    <?php else: ?>
                        <li class="navbar-item">
                            <a href="<?= BASE_URL ?>/index.php?page=authentication" class="nav-link">Login</a>
                        </li>
                        <li class="navbar-item">
                            <a href="<?= BASE_URL ?>/index.php?page=authentication" class="nav-link">Register</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content giữ nguyên từ phiên bản trước -->
    <section class="first-section text-lg-start text-center pt-5" style="background-color: #F8F0E5;">
        <div class="container">
            <div class="d-md-flex align-items-center justify-content-around">
                <div class="mb-5">
                    <h2>CV | Resume making</h2>
                    <h1 style="font-weight: bold;">My awesome CV</h1>
                    <a href="<?= BASE_URL ?>/index.php?page=experience">
                        <button style="
                            background-color: #102C57;
                            color: white;
                            width: 160px;
                            padding-top: 8px;
                            padding-bottom: 8px;
                            margin-top: 30px;">
                            CREATE A CV
                        </button>
                    </a>
                </div>
                <div>
                    <div class="img-container" style="position: relative; margin-top: 10px;">
                        <img src="/CV-Hosting-web-main/public/images/Image (1).png" class="img-fluid" alt="ad-img" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-center">
        <div class="container-fluid pb-5" style="background-color: #F8F0E5; padding-top: 70px; padding-left: 100px; padding-right: 100px;">
            <div class="p-4 fs-2" style="
                font-weight: 600;
                font-size: 35px;
                border: 2px solid rgba(0, 0, 0, 0.2);
                border-left: none;
                border-right: none;">
                Stand out with your CV - Unlock new opportunities!
            </div>
        </div>
    </section>

    <section class="text-start">
        <div class="container-fluid" style="background-color: #F8F0E5;">
            <div class="container" style="
                padding-top: 100px;
                padding-bottom: 100px;
                background-color: #F8F0E5;">
                <div>
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg order-lg-1 order-2">
                            <img src="/CV-Hosting-web-main/public/images/Vector.png" alt="" srcset="">
                            <h1 class="fs-2" style="
                                font-weight: 600;
                                font-size: 35px;">
                                Generate an interview-ready cv in minutes
                            </h1>
                            <p class="pt-5 fs-5" style="font-size: 25px;">
                                Create a polished, professional CV in minutes with our expertly designed templates. Stand out, impress recruiters, and land your next job with ease!
                            </p>
                        </div>
                        <div class="col-lg pb-5 order-lg-2 order-1">
                            <img src="/CV-Hosting-web-main/public/images/Vector (1).png" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-start pt-5 pb-5" style="background-color: #F8F0E5;">
        <div class="container">
            <div class="row align-items-center justify-content-around">
                <div class="col-md pb-5">
                    <img src="/CV-Hosting-web-main/public/images/Vector (2).png" class="img-fluid" alt="" srcset="">
                </div>
                <div class="col-md pt-5">
                    <img src="/CV-Hosting-web-main/public/images/Vector.png" alt="" srcset="">
                    <h1 class="fs-2" style="
                        font-weight: 600;
                        font-size: 35px;">
                        Make a matching cover letter.
                    </h1>
                    <p class="pt-5 fs-5" style="font-size: 25px;">
                        Our <a href="#">Cover Letter Generator</a> features prewritten content targeted to the job that you can customize and add to your letter with a single click.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid wrapper pb-5 m-0 p-0 d-flex  justify-content-center align-items-center" style="
        position: relative;
        flex-direction: column;
        width: 100%;
        background-color: #102C57;">
        <div class="text-center">
            <h1 class="pt-5 pb-2 fs-2" style="color: white;">
                Add a <span style="color: #DAC0A3;">Cover letter</span> for Extra impact
            </h1>
            <p class="lead pb-5 px-5 fs-3" style="color: white;">
                98% of hiring managers appreciate a well-written cover letter. Use these templates to improve yours!
            </p>
        </div>
        

        <i id="left" class="bi bi-chevron-left"></i>
        <ul class="carousel p-0 m-0 gx-5">
            
        </ul>
        <i id="right" class="bi bi-chevron-right"></i>
        <div class="container d-flex justify-content-center align-items-center pt-5">
            <button class="btn btn-lg" style="
                color: #DAC0A3;
                background-color: #102C57;
                border: 2px solid #DAC0A3;
                border-radius: 0%;">
                VIEW ALL TEMPLATE
            </button>
        </div>
    </div>

    <section class="text-start pt-5">
        <div class="container" style="background-color: #FFFFFF;">
            <div class="row align-items-start justify-content-around">
                <div class="col-md pb-5">
                    <h1 class="mb-5" style="font-weight: 600;">Let's work together</h1>
                    <p style="margin-top: 50px; margin-bottom: 60px;">
                        This is a template Figma file, turned into code using Anima. Learn more at AnimaApp.com This is a template Figma file, turned into code using Anima. Learn more at AnimaApp.com
                    </p>
                    <div>
                        <img style="padding-right: 15px;" src="/CV-Hosting-web-main/public/images/discord.png" alt="">
                        <img style="padding-right: 15px;" src="/CV-Hosting-web-main/public/images/Vector-facebook.png" alt="">
                        <img style="padding-right: 15px;" src="/CV-Hosting-web-main/public/images/basket.png" alt="">
                        <img style="padding-right: 15px;" src="/CV-Hosting-web-main/public/images/insta.png" alt="">
                        <img style="padding-right: 15px;" src="/CV-Hosting-web-main/public/images/be.png" alt="">
                    </div>
                </div>
                <div class="col-md pb-5 feedback" style="
                    display: flex;
                    flex-direction: column;
                    gap: 20px;">
                    <form action="<?= BASE_URL ?>/index.php?page=contact" method="POST">
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <textarea rows="10" cols="50" name="message" placeholder="Type your message here" required></textarea>
                        <button type="submit" style="
                            margin-bottom: 20px;
                            margin-top: 15px;
                            width: 250px;
                            background-color: #2D2D2D;
                            color: white;
                            padding: 30px 30px;
                            font-weight: bolder;">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="/CV-Hosting-web-main/public/js/header.js"></script>
    <script src="/CV-Hosting-web-main/public/js/home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>