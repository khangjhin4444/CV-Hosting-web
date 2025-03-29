<?php echo 'hello';
$year = $_SESSION['year'];
echo $year;
$student = $_SESSION['student'];
echo $student;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Choose a template</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/body.css">
  <link rel="stylesheet" href="css/select_template.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <style>
    .form-floating label::after,.form-floating input {
        background-color: #F8F0E5 !important;
    }
    html, body {
      font-family: Montserrat;
      margin: 0;
      padding: 0;
      height: 100%;
      background-color: #F8F0E5;
      position: relative;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg pt-0 pb-3" style="background-color: #F8F0E5;">
    <div class="container-fluid">         
      <a href="#" class="navbar-brand d-flex" style="margin-right: 100px;">
        <img src="images/cv 1.png" class="img-fluid" style="margin-left: 10px; margin-right: 3px; width: 50px; height: 100%;">
        <p style="font-weight: bolder; margin-left: 20px;">LGBTQ+</p>
      </a>
      
      <div class="row">
        <button class="search-btn navbar-toggler shadow-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#searchBar">
          <img src="images/search-icon.png" alt="" class="img-fluid">
        </button>
        
        <button class="navbar-toggler shadow-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse mt-2 hidden-search" id="searchBar" style="visibility:hidden;">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">
            <img src="images/search-icon.png" style="width: 16px; height: 16px;
           margin: 10px;">
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
          gap: 6px;  width: 220px; display: flex;">
          <div>
            <img src="images/search-icon.png" style="width: 16px; height: 16px;
           margin: 10px;">
          </div>
           
           <input type="text" placeholder="Search" style="border: none;
             width: 90%;
             outline:none;
             background-color: transparent;">
        </div>
      </div>

      
      
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ms-auto">
          <li class="navbar-item">
            <a href="#" class="nav-link">Home</a>
          </li>
          <li class="navbar-item">
            <a href="#" class="nav-link">CVs</a>
          </li>
          <li class="navbar-item">
            <a href="#" class="nav-link">Login</a>
          </li>
          <li class="navbar-item">
            <a href="#" class="nav-link">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section>
    <div class="container pt-4 text-center" style="background-color: #F8F0E5;">
      <h1 style="font-weight: 600;">Choose your appropriate CVs</h1>
      <p class="lead pt-3 pb-3" style="font-size: 25px;">Add your name here to see the preview of you cover letter.</p>
      <div class="row align-items-center justify-content-center input-row">
        <div class="col col-lg-4">
            <div class="form-floating">
                <input type="text" id="fname" name="fname" class="form-control"  placeholder="Eren">
                <label for="fname">First Name</label>
            </div>
        </div>
        <div class="col col-lg-4">
            <div class="form-floating">
                <input type="text" id="lname" name="lname" class="form-control" placeholder="Yeager">
                <label for="lname">Last Name</label>
            </div>
        </div>
      </div>
    </div>
  </section>
  
  <section>
    <div class="container">
      <div class="grid-container">
        <span class="category" style="grid-area: category;">
          <h2 class="mb-3">Category</h2>
          <button class="chosen cate-btn">RECOMMENDED</button>
          <br>
          <button class="cate-btn">ALL</button>
        </span>
        <span style="grid-area: temp-list;" class="temp-list-grid">
          <!-- render template here -->
        </span>
        
      </div>
    </div>
  </section>

  <section>
    <div class="footer container-fluid p-3 px-5" style="height: 120px; visibility: hidden;">
        <div class="row align-items-center w-100">
            <!-- Cột 1 (bên trái) -->
            <div class="col-auto" style="grid-area: back-btn;">
                <button class="back-btn">
                    <i class="bi bi-arrow-left" style="font-weight: bold;"></i>
                    Back
                </button>
            </div>

            <!-- Khoảng trống ở giữa -->
            <div class="col" style="grid-area: blank;"></div>

            <!-- Cột 2 (bên phải) -->
            <div class="col-auto" style="grid-area: choose-later;">
                <a href="">Choose Later</a>
            </div>

            <!-- Cột 3 (bên phải) -->
            <div class="col-auto" style="grid-area: confirm-btn;">
                <button class="confirm-btn">USE THIS TEMPLATE</button>
            </div>
        </div>
    </div>
  </section>

  
  <script src="./js/select_template.js"></script>
</body>
</html>
