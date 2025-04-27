<?php

require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../config/constant.php';

$user = $_SESSION['user'];
$userId = $_SESSION['user']['id'];

$email = htmlspecialchars($user['email']);

// Lấy tên từ DB
$stmt = $conn->prepare('SELECT first_name, last_name FROM users WHERE email = :email');
$stmt->bindParam(':email', $email);
$stmt->execute();
$userData = $stmt->fetch(PDO::FETCH_ASSOC);
$displayName = htmlspecialchars($userData['first_name'] . ' ' . $userData['last_name']);

$templates = [];

$userCVs = [];

try {
  $stmt = $conn->prepare('SELECT * FROM cvs WHERE user_id = ?');
  $stmt->execute([$userId]);
  $cvs = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $i = 1;
  foreach ($cvs as $cv) {
    $userCVs[$cv['cv_id']] = $cv;
    $templates[] = [
      'id' => $cv['cv_id'],
      'template_name' => 'cv_' . htmlspecialchars($cv['content']),
    ];
    $i++;
  }

  foreach ($templates as $template) {
    $templateId = $template['id'];

    if (isset($userCVs[$templateId])) {
      $cvId = $templateId;

      // Fetch heading
      $stmt = $conn->prepare('SELECT * FROM personal_info WHERE cv_id = ?');
      $stmt->execute([$cvId]);
      $heading = $stmt->fetch(PDO::FETCH_ASSOC);

      // Fetch working history
      $stmt = $conn->prepare('SELECT * FROM working_history WHERE cv_id = ?');
      $stmt->execute([$cvId]);
      $working_history = $stmt->fetchAll(PDO::FETCH_ASSOC);

      // Fetch education
      $stmt = $conn->prepare('SELECT * FROM education WHERE cv_id = ?');
      $stmt->execute([$cvId]);
      $education = $stmt->fetchAll(PDO::FETCH_ASSOC);

      // Fetch skills
      $stmt = $conn->prepare('SELECT skill_name FROM skills WHERE cv_id = ?');
      $stmt->execute([$cvId]);
      $skills = $stmt->fetchAll(PDO::FETCH_COLUMN);

      // Fetch summary
      $stmt = $conn->prepare('SELECT summary_text FROM summaries WHERE cv_id = ?');
      $stmt->execute([$cvId]);
      $summary = $stmt->fetchAll(PDO::FETCH_COLUMN);

      // Fetch additional
      $stmt = $conn->prepare('SELECT * FROM additional WHERE cv_id = ?');
      $stmt->execute([$cvId]);
      $finalize = $stmt->fetchAll(PDO::FETCH_ASSOC);

      // Store data
      $userCVs[$templateId]['data'] = [
        'heading' => $heading,
        'working_history' => $working_history,
        'education' => $education,
        'skills' => $skills,
        'summary' => $summary,
        'finalize' => $finalize,
      ];
    } else {
      // If no CV exists for this template, set data as null or handle accordingly
      $userCVs[$templateId]['data'] = null;
    }
  }

} catch (Exception $e) {
  exit('Error fetching ' . $e->getMessage());
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV view</title>
  <link rel="stylesheet" href="/CV-Hosting-web-main/public/css/node_modules/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="/CV-Hosting-web-main/public/css/header.css">
  <link rel="stylesheet" href="/CV-Hosting-web-main/public/css/body.css">
  <link rel="stylesheet" href="/CV-Hosting-web-main/public/css/select_template.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="/CV-Hosting-web-main/public/css/my_cvs.css">
  <style>
    .form-floating label::after,
    .form-floating input {
      background-color: #F8F0E5 !important;
    }

    html,
    body {
      font-family: Montserrat;
      margin: 0;
      padding: 0;
      height: 100%;
      background-color: #F8F0E5;
      position: relative;
    }
  </style>

  <!-- <link rel="stylesheet" type="text/css" href="/CV-Hosting-web-main/public/css/cv_1.css" media="all" /> -->
  <style>
    .cv_template {
      transform: scale(0.4);
      transform-origin: top left;
      /* Đảm bảo thu nhỏ từ góc trên bên trái */
      width: 250%;
      /* Bù lại kích thước để tránh bị cắt nội dung */
      height: 110%;
      /* Bù lại kích thước để tránh bị cắt nội dung */
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg pt-0" style="background-color: #F8F0E5;">
    <div class="container-fluid d-flex align-items-center">
      <a href="<?= BASE_URL ?>/index.php?page=home" class="navbar-brand d-flex align-items-center"
        style="margin-right: 100px;">
        <img src="/CV-Hosting-web-main/public/images/cv 1.png" class="img-fluid"
          style="margin-left: 10px; margin-right: 3px; width: 30px; height: 100%;">
        <p class="my-0" style="font-weight: bolder; margin-left: 20px;">CV Hosting</p>
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

      <div class="collapse navbar-collapse justify-content-end">
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

      <div class="collapse navbar-collapse w-auto" id="navbarContent">
        <ul class="navbar-nav align-items-center flex ms-auto">
          <li class="navbar-item">
            <a href="<?= BASE_URL ?>/index.php?page=home" class="nav-link">Home</a>
          </li>
          <li class="navbar-item">
            <a href="<?= BASE_URL ?>/index.php?page=my_cvs" class="nav-link" style="width: 90px;">My CVs</a>
          </li>
          <li class="navbar-item">
            <a href="#" class="nav-link ">
              <p class="w-100 m-0" style="display: inline-block; white-space: nowrap;"><?= $displayName ?>
              </p>
            </a>
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
    <div class="container pt-2 text-center" style="background-color: #F8F0E5;">
      <h1 style="font-weight: 600;">Created CVs</h1>

  </section>
  <section class="pb-5 h-100">
    <div class="container-fluid h-100">
      <div class="row h-100 justify-content-center">
        <?php foreach ($templates as $temp) {

          $cvId = $temp['id'];
          $cvData = $userCVs[$cvId]['data'] ?? null;

          if ($cvData) {
            // Gán dữ liệu cho template
            $heading = $cvData['heading'];
            $working_history = $cvData['working_history'];
            $education = $cvData['education'];
            $skills = $cvData['skills'];
            $summary = $cvData['summary'];
            $finalize = $cvData['finalize'];
            echo "<div class='col-3 temp-wrapper p-0'>";
            echo "<div class='temp' data-id='" . $temp['id'] . "'>";

            // Include template và truyền dữ liệu
            ob_start();

            // Thực thi file PHP
            include __DIR__ . '/../../public/templates/' . $temp['template_name'] . '.php';

            // Lấy toàn bộ nội dung sau khi đã render
            $fullContent = ob_get_clean();

            // Tìm phần body
            echo "<div id='cv-content-" . $temp['id'] . "'>";
            if (preg_match('/<body[^>]*>(.*?)<\/body>/is', $fullContent, $matches)) {
              $bodyContent = $matches[1];
              echo $bodyContent;
            }
            echo '</div>';
            echo "
                    <div class='temp-buttons'>
                      <button class='edit-btn' >Delete</button>
                      
                      <button class='share-btn' onclick='shareTemplate(" . $temp['id'] . ', "' . $temp['template_name'] . "\")'>Share</button>
                    </div>
                  </div>
                </div>
            ";
          }
        } ?>
      </div>
    </div>
  </section>
  <!-- <script src="/CV-Hosting-web-main/public/js/my_cvs.js"></script> -->
  <script>
    function shareTemplate(cvId, template) {
      const cvElement = document.getElementById('cv-content-' + cvId);
      if (!cvElement) {
        alert('Error: CV content not found.');
        return;
      }
      const cvHtml = cvElement.innerHTML;

      const formData = new FormData();
      formData.append('cv_html', cvHtml);

      fetch('/CV-Hosting-web-main/public/index.php?page=generate_share_link', {
        method: 'POST',
        body: formData
      })
        .then(response => response.json())
        .then(result => {
          if (result.success) {
            window.location.href = result.link;
          } else {
            alert('Error sharing CV: ' + result.message);
          }
        })
        .catch(error => {
          alert('An error occurred while sharing the CV. Please try again.');
          console.error('Error:', error);
        });
    }
  </script>
</body>

</html>