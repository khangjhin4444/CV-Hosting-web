<?php 
$tempId = $_SESSION['tempId'];
// echo $tempId;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Info</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/information.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
  <div class="container-fluid h-100">
    <div class="row h-100">
      <!-- Sidebar -->
      <div class="col-12 col-lg-2 sidebar">
        <div>
          <div class="d-lg-flex d-none p-3 pb-4" style="gap: 10px;">
            <img src="images/cv 1.png" alt="">
            <h4 style="color: black;">LGBTQ+</h4 style="color: black;">
          </div>
          <div class="step active" id="1">
            <div class="circle">1</div>
            <span>Heading</span>
          </div>
          <div class="step" id="2">
            <div class="circle">2</div>
            <span>Working history</span>
          </div>
          <div class="step" id="3">
            <div class="circle">3</div>
            <span>Education</span>
          </div>
          <div class="step" id="4">
            <div class="circle">4</div>
            <span>Skills</span>
          </div>
          <div class="step" id="5">
            <div class="circle">5</div>
            <span>Summary</span>
          </div>
          <div class="step" id="6">
            <div class="circle">6</div>
            <span>Finalize</span>
          </div>

          <span>Resume progress</span>
          <div class="progress-bar">
            <div class="progress"></div>
          </div>
        </div>
        
      </div>

      <!-- Main Content -->
      <div class="col-12 col-lg-10 main-content" id="step1" style="display: block;">
        <div class="d-flex align-items-center gap-2 mb-5">
          <i class="bi bi-arrow-left" style="font-size: 35px; font-weight: bold"></i>
          <a href="?page=select_template" class="text-primary p-0" style="font-size: 25px; font-weight: bold;">Go Back</a>
        </div>
        
        <div class="row">
          <div class="col-12 col-xxl-9">
            <h3 style="font-weight: 600;">What is the preferred method for employers to reach you?</h3>
            <p class="text-muted" style="font-weight: 600;">We recommend providing your email and phone number.</p>
            <form class="pt-3">
              <div class="row pb-2">
                <div class="col-12 col-md-6">
                  <label for="name">NAME <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="name" placeholder="e.g. Khoa">
                </div>
                <div class="col-12 col-md-6">
                  <label for="surname">SURNAME</label>
                  <input type="text" class="form-control" id="surname" placeholder="e.g. Huỳnh Ngọc">
                </div>
              </div>
              <div class="row pb-2">
                <div class="col-12 col-md-12 col-lg-6">
                  <label for="city">CITY</label>
                  <input type="text" class="form-control" id="city" placeholder="e.g. Hồ Chí Minh">
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                  <label for="country">COUNTRY</label>
                  <input type="text" class="form-control" id="country" placeholder="e.g. Việt Nam">
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                  <label for="postcode">POSTCODE</label>
                  <input type="text" class="form-control" id="postcode" placeholder="e.g. 500000">
                </div>
              </div>
              <div class="row pb-2">
                <div class="col-12 col-md-6">
                  <label for="phone">PHONE</label>
                  <input type="text" class="form-control" id="phone" placeholder="e.g. 09326868686">
                </div>
                <div class="col-12 col-md-6">
                  <label for="email">EMAIL ADDRESS <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" id="email" placeholder="e.g. khoa.huynh314@hcmut.edu.com">
                </div>
              </div>
              
            </form>
          </div>

          <div class="col-12 col-xxl-3 d-none d-lg-block text-center">
            <img src="cv_template_img/Business-Analyst-Resume-Example-RNerd 1.png" alt="" srcset="">
            <p class="pt-2" style="color: blue;">Change templates</p>
          </div>
        </div>
        <button class="btn-next  mt-5" id="btn-step1" style="width: 200px; padding-top: 20px; padding-bottom: 20px; position: absolute; bottom: 55px; right: 45px;">NEXT: Work History</button>
      </div>

      <div class="col-12 col-lg-10 main-content" id="step2" style="display: none;">
        <div class="d-flex align-items-center gap-2 mb-5">
          <i class="bi bi-arrow-left" style="font-size: 35px; font-weight: bold"></i>
          <a href="#" class="text-primary p-0" style="font-size: 25px; font-weight: bold;" id="back-step2">Go Back</a>
        </div>
        
        <div class="row">
          <div class="col-12 col-xxl-9">
            <p class="p-0 m-0" style="font-weight: Bold; font-size: 20px;">Now let's complete your</p>
            <h3 class="p-0" style="font-weight: bolder;">WORK HISTORY</h3>
            <p class="p-0" style="font-weight: Bold; font-size: 20px;">Here's what to keep in mind:</p>
            <p class="p-0" style="font-size: 25px;">You can list work experience, internships, scholarships, 
            relevant coursework, and academic achievements.</p>
            
          </div>

          <div class="col-12 col-xxl-3 d-none d-lg-block text-center">
            <img src="cv_template_img/Business-Analyst-Resume-Example-RNerd 1.png" alt="" srcset="">
            <p class="pt-2" style="color: blue;">Change templates</p>
          </div>
        </div>
        <button class="btn-next mt-5" id="btn-step2" style="width: 200px; padding-top: 20px; padding-bottom: 20px; position: absolute; bottom: 55px; right: 45px;">NEXT</button>
      </div>

      <div class="col-12 col-lg-10 main-content" id="step3" style="display: none;">
        <div class="d-flex align-items-center gap-2 mb-5">
          <i class="bi bi-arrow-left" style="font-size: 35px; font-weight: bold"></i>
          <a href="#" class="text-primary p-0" style="font-size: 25px; font-weight: bold;" id="back-step3">Go Back</a>
        </div>
        
        <div class="row">
            <h3 style="font-weight: 600;">Share details about your most recent job,<br>and we'll work backward from there.</h3>
            <form class="pt-3">
              <div class="row pb-2">
                <div class="col-12 col-md-6">
                  <label for="title">TITLE <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="title" placeholder="e.g. Khoa">
                </div>
                <div class="col-12 col-md-6">
                  <label for="employer">EMPLOYER <span class="text-danger">*</span></label> 
                  <input type="text" class="form-control" id="employer" placeholder="e.g. Huỳnh Ngọc">
                </div>
              </div>
              <div class="row pb-2">
                <div class="col-12 col-md-12 col-lg-6">
                  <label for="location">LOCATION</label>
                  <input type="text" class="form-control" id="location" placeholder="e.g. Hồ Chí Minh">
                </div>
              </div>
              <div class="row pb-2" style="height: 100px;">
                <div class="col-12 col-md-6">
                  <label for="start-date">START DATE</label>
                  <div class="row pb-2" style="height: 100%;">
                    <div class="col-12 col-xxl-6">
                      <select name="startMonth" id="startMonth" style="width: 100%; height: 65%;">
                        <option disabled selected>Month</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                      </select>
                    </div>
                    <div class="col-12 col-xxl-6">
                      <select name="startYear" id="startYear" style="width: 100%; height: 65%;">
                        <option disabled selected>Year</option>
                        <option value="2025">2025</option>
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2000">2000</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <label for="email">END DATE</label>
                  <div class="row pb-2" style="height: 100%;">
                    <div class="col-12 col-xxl-6">
                      <select name="endMonth" id="endMonth" style="width: 100%; height: 65%;">
                        <option disabled selected>Month</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                      </select>
                    </div>
                    <div class="col-12 col-xxl-6">
                      <select name="endYear" id="endYear" style="width: 100%; height: 65%">
                        <option disabled selected>Year</option>
                        <option value="2025">2025</option>
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2000">2000</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="d-none d-lg-block col-lg-6"></div>
                <div class="col-12 col-lg-6 d-flex align-items-center gap-2">
                  <input type="checkbox" id="currentlyWorking" style="width: 30px; height: 30px;"> <p style="padding: 0; font-size: 20px; margin: 0;">I currently work here</p>
                </div>
              </div>
            </form>
        </div>
        <button class="btn-next mt-5" id="btn-step3" style="width: 200px; padding-top: 20px; padding-bottom: 20px; position: absolute; bottom: 55px; right: 45px;">NEXT: Education</button>
      </div>

      <div class="col-12 col-lg-10 main-content" id="step4" style="display: none;">
        <div class="d-flex align-items-center gap-2 mb-5">
          <i class="bi bi-arrow-left" style="font-size: 35px; font-weight: bold"></i>
          <a href="#" class="text-primary p-0" style="font-size: 25px; font-weight: bold;" id="back-step4">Go Back</a>
        </div>
        
        <div class="row">
          <div class="col-12 col-xxl-9">
            <p class="p-0 m-0" style="font-weight: Bold; font-size: 20px;">Great, let's add your</p>
            <h3 class="p-0" style="font-weight: bolder;">EDUCATION DETAILS</h3>
            <p class="p-0" style="font-weight: Bold; font-size: 20px;">Here's what to keep in mind:</p>
            <p class="p-0" style="font-size: 25px;">Employers often skim this section, and we'll handle the <br> formatting to make it stand out.</p>
            
          </div>

          <div class="col-12 col-xxl-3 d-none d-lg-block text-center">
            <img src="cv_template_img/Business-Analyst-Resume-Example-RNerd 1.png" alt="" srcset="">
            <p class="pt-2" style="color: blue;">Change templates</p>
          </div>
        </div>
        <button class="btn-next mt-5" id="btn-step4" style="width: 200px; padding-top: 20px; padding-bottom: 20px; position: absolute; bottom: 55px; right: 45px;">NEXT</button>
      </div>

      <div class="col-12 col-lg-10 main-content" id="step5" style="display: none;">
        <div class="d-flex align-items-center gap-2 mb-5">
          <i class="bi bi-arrow-left" style="font-size: 35px; font-weight: bold"></i>
          <a href="#" class="text-primary p-0" style="font-size: 25px; font-weight: bold;" id="back-step5">Go Back</a>
        </div>
        
        <div class="row">
            <h3 style="font-weight: 600;">Share your education details,<br><span style="font-weight: 500; font-size: 20px;">including any completed or ongoing studies, even if you haven't graduated yet. <span></h3>
            <form class='pt-3'>
              <div class="row pb-2">
                <div class="col-12 col-md-6">
                  <label for="institution">INSTITUTION <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="institution" placeholder="e.g. HCMUT">
                </div>
                <div class="col-12 col-md-6">
                  <label for="school-location">SCHOOL LOCATION</label> 
                  <input type="text" class="form-control" id="school-location" placeholder="e.g. Ho Chi Minh City">
                </div>
              </div>
              <div class="row pb-2">
                <div class="col-12 col-md-12 col-lg-6">
                  <label for="degree">DEGREE</label>
                  <input type="text" class="form-control" id="degree" placeholder="e.g.">
                </div>
              </div>
              <div class="row pb-2" style="height: 100px;">
                <div class="col-12 col-md-6">
                  <label for="field-study">FIELD STUDY</label>
                  <input type="text" class="form-control" id="field-study" placeholder="e.g. Computer Science">
                </div>
                <div class="col-12 col-md-6">
                  <label for="graduation-year">GRADUATION YEAR</label>
                  <div class="row pb-2" style="height: 100%;">
                    <div class="col-12 col-xxl-6">
                      <select name="gradMonth" id="gradMonth" style="width: 100%; height: 65%;">
                        <option disabled selected>Month</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                      </select>
                    </div>
                    <div class="col-12 col-xxl-6">
                      <select name="gradYear" id="gradYear" style="width: 100%; height: 65%">
                        <option disabled selected>Year</option>
                        <option value="2025">2025</option>
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2000">2000</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </form>
        </div>
        <button class="btn-next mt-5" id="btn-step5" style="width: 200px; padding-top: 20px; padding-bottom: 20px; position: absolute; bottom: 55px; right: 45px;">NEXT</button>
      </div>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/information.js"></script>
</body>
</html>