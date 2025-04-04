<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV Creator</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/body.css">
  <link rel="stylesheet" href="css/home.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
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

  <!-- content -->
  <section class="first-section text-lg-start text-center pt-5" style="background-color: #F8F0E5;">
    <div class="container">
      <div class="d-md-flex align-items-center justify-content-around" >
        <div class="mb-5">
          <h2>CV | Resume making</h2>
          <h1 style="font-weight: bold;">My awesome CV</h1>
          <a href="?page=experience.php">
            <button  style="background-color: #102C57;
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
          <div class="img-container" style="position: relative;margin-top: 10px;">
            <!-- <img class="cv-image img-1" src="images/Developer X.png" style="position: absolute; top: 0; left: 70px; z-index: 1; width: 80%;">
            <img class="cv-image img-2" src="images/Creative X.png" style="position: absolute; top: 70px; left: 120px; z-index: 2; width: 80%;">
            <img class="cv-image img-3" src="images/Designer X.png" style="position: absolute; top: 140px; left: 170px; z-index: 3; width: 80%;"> -->
            <img src="images/Image (1).png" class="img-fluid" alt="ad-img" srcset="">
          </div>
        </div>
       
      </div>
    </div>
  </section>

  <section class="text-center">
    <div class="container-fluid pb-5" style="background-color: #F8F0E5; padding-top: 70px; padding-left: 100px; padding-right: 100px;">
      <div class="p-4 fs-2" style="
        font-weight: 600;
        font-size: 35px; border: 2px solid rgba(0, 0, 0, 0.2); border-left: none; border-right: none;">Stand out with your CV - Unlock new opportunities!</div>
    </div>
  </section>

  <section class="text-start">
    <div class="container-fluid" style="background-color:#F8F0E5;">
      <div class="container" style="
      padding-top: 100px;
      padding-bottom: 100px;
      background-color: #F8F0E5;">
      <div>
        <div class="row align-items-center justify-content-between">
          <div class="col-lg order-lg-1 order-2">
            <img src="images/Vector.png" alt="" srcset="">
            <h1 class="fs-2" style="
            font-weight: 600;
            font-size: 35px;">Generate an interview-ready cv in minutes</h1>
            <p class="pt-5 fs-5" style="font-size: 25px;">Create a polished, professional CV in minutes with our expertly designed templates. Stand out, impress recruiters, and land your next job with ease!</p>
          </div>

          <div class="col-lg pb-5 order-lg-2 order 1" >
            <img src="images/Vector (1).png" class="img-fluid">
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
          <img src="images/Vector (2).png" class="img-fluid" alt="" srcset="">
        </div>
        <div class="col-md pt-5">
          <img src="images/Vector.png" alt="" srcset="">
          <h1 class="fs-2" style="
          font-weight: 600;
          font-size: 35px;">Make a matching cover letter.</h1>
          <p class="pt-5 fs-5" style="font-size: 25px;">Our <a href="#">Cover Letter Generator</a> features prewritten content targeted to the job that you can customize and add to your letter with a single click.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- <section class="carousel-container">
    <h2 class="text-light">Add a <span class="text-warning">Cover letter</span> for Extra Impact</h2>
    <p class="text-light">98% of hiring managers appreciate a well-written cover letter. Use these templates to improve yours!</p>
    <div class="carousel-wrapper d-flex justify-content-center" style="width: 100%;">
        <button class="btn-nav" id="prevBtn">&#10094;</button>
        <div class="carousel">
            <div class="card"><img src="images/Creative X.png" alt="Template 1" width="100%"></div>
            <div class="card"><img src="images/Designer X.png" alt="Template 2" width="100%"></div>
            <div class="card"><img src="images/Developer X.png" alt="Template 3" width="100%"></div>
            <div class="card"><img src="images/Creative X.png" alt="Template 4" width="100%"></div>
            <div class="card"><img src="images/Creative X.png" alt="Template 1" width="100%"></div>
            <div class="card"><img src="images/Designer X.png" alt="Template 2" width="100%"></div>
            <div class="card"><img src="images/Developer X.png" alt="Template 3" width="100%"></div>
            <div class="card"><img src="images/Creative X.png" alt="Template 4" width="100%"></div>
        </div>
        <button class="btn-nav" id="nextBtn">&#10095;</button>
    </div>
  </section> -->

  <div class="container-fluid wrapper pb-5 m-0 p-0 d-flex text-center justify-content-center align-items-center" style="position: relative;
  flex-direction: column;
  width: 100%;
  background-color: #102C57;
  ">
    <h1 class="pt-5 pb-2 fs-2" style="color: white;">Add a <span style="color: #DAC0A3;">Cover letter</span> for Extra impact</h1>
    <p class="lead pb-5 px-5 fs-3" style="color: white;">98% of hiring managers appreciate a well-written cover letter. Use these templates to improve yours!</p>
    
    <i id="left" class="bi bi-chevron-left"></i>
    <ul class="carousel p-0 m-0 gx-5">
      <li class="card">
        <img src="images/CV template.png" alt="" draggable="false" class="img-fluid">
        <div class="card-img-overlay d-none pb-4">
          <button class="btn">USE THIS TEMPLATE</button>
        </div>
      </li>
      <li class="card">
        <img src="images/CV template (1).png" alt="" draggable = "false" class="img-fluid">
        <div class="card-img-overlay d-none pb-4">
          <button class="btn">USE THIS TEMPLATE</button>
        </div>
      </li>
      <li class="card">
        <img src="images/CV template (2).png" alt="" draggable = "false" class="img-fluid">
        <div class="card-img-overlay d-none pb-4">
          <button class="btn">USE THIS TEMPLATE</button>
        </div>
      </li>
      <li class="card">
        <img src="images/CV template (2).png" alt="" draggable = "false" class="img-fluid">
        <div class="card-img-overlay d-none pb-4">
          <button class="btn">USE THIS TEMPLATE</button>
        </div>
      </li>
      <li class="card">
        <img src="images/CV template (1).png" alt="" draggable = "false" class="img-fluid">
        <div class="card-img-overlay d-none pb-4">
          <button class="btn">USE THIS TEMPLATE</button>
        </div>
      </li>
      <li class="card">
        <img src="images/CV template.png" alt="" draggable = "false" class="img-fluid">
        <div class="card-img-overlay d-none pb-4">
          <button class="btn">USE THIS TEMPLATE</button>
        </div>
      </li>
      <li class="card">
        <img src="images/CV template (1).png" alt="" draggable = "false" class="img-fluid">
        <div class="card-img-overlay d-none pb-4">
          <button class="btn">USE THIS TEMPLATE</button>
        </div>
      </li>
      <li class="card">
        <img src="images/CV template (2).png" alt="" draggable = "false" class="img-fluid">
        <div class="card-img-overlay d-none pb-4">
          <button class="btn">USE THIS TEMPLATE</button>
        </div>
      </li>
      <li class="card">
        <img src="images/CV template (2).png" alt="" draggable = "false" class="img-fluid">
        <div class="card-img-overlay d-none pb-4">
          <button class="btn">USE THIS TEMPLATE</button>
        </div>
      </li>
      <li class="card">
        <img src="images/CV template (1).png" alt="" draggable = "false" class="img-fluid">
        <div class="card-img-overlay d-none pb-4">
          <button class="btn">USE THIS TEMPLATE</button>
        </div>
      </li>
    </ul>
    <i id="right" class="bi bi-chevron-right"></i>
    <div class="container d-flex justify-content-center align-items-center pt-5">
      <button class="btn btn-lg" style="color: #DAC0A3; background-color: #102C57; border: 2px solid #DAC0A3; border-radius: 0%;">VIEW ALL TEMPLATE</button>
    </div>
  </div>

  <section class="text-start pt-5">
    <div class="container" style="background-color: #FFFFFF;">
      <div class="row align-items-start justify-content-around">
        <div class="col-md pb-5">
          <h1 class="mb-5" style="font-weight: 600;">Let's work together</h1>
          <p style="margin-top: 50px; margin-bottom: 60px;">This is a template Figma file, turned into code using Anima. Learn more at AnimaApp.com This is a template Figma file, turned into code using Anima. Learn more at AnimaApp.com</p>
          <div>
            <img style="padding-right: 15px;" src="images/discord.png" alt="">
            <img style="padding-right: 15px;" src="images/facebook.png" alt="">
            <img style="padding-right: 15px;" src="images/basket.png" alt="">
            <img style="padding-right: 15px;" src="images/insta.png" alt="">
            <img style="padding-right: 15px;" src="images/be.png" alt="">
          </div>
        </div>
        <div class="col-md pb-5 feedback" style="display: flex;
          flex-direction: column;
          gap:20px;">
          <input type="text" placeholder="Name">
          <input type="text" placeholder="Email">
          <textarea rows="10" cols="50" placeholder="Type your message here"></textarea>
          <button  style="margin-bottom: 20px; margin-top: 15px; width: 250px; background-color: #2D2D2D; color: white; padding: 30px 30px; font-weight: bolder;">Submit</button>
        </div>
      </div>
    </div>
  </section>
  
  

  <script src="js/header.js"></script>
  <script src="js/home.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>