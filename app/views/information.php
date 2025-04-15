<?php
$tempId = $_SESSION['tempId'];
// echo $tempId;
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../config/constant.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Info</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/CV-Hosting-web-main/public/css/information.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/CV-Hosting-web-main/public/css/cv_1.css" media="all" />
</head>

<body>
  <div class="container-fluid" style="height: 100%;">
    <div class="row" style="height: 100%;">
      <!-- Sidebar -->
      <div class="col-12 col-lg-3 sidebar">
        <div>
          <div class="d-lg-flex d-none p-3 pb-4" style="gap: 10px;">
            <img src="/CV-Hosting-web-main/public/images/cv 1.png" alt="">
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
      <div class="col-12 col-lg-9 main-content" id="step1">
        <div class="d-flex align-items-center gap-2 mb-2">
          <a href="<?= BASE_URL ?>/index.php?page=select_template" class="p-0"
            style="font-size: 25px; font-weight: bold; text-decoration: none; color: black;"><i
              class="bi bi-arrow-left pe-2" style="font-size: 35px; font-weight: bold"></i><span class="text-primary">Go
              Back</span></a>
        </div>

        <div class="row">
          <div class="col-12 col-xxl-9">
            <h3 style="font-weight: 600;">What is the preferred method for employers<br> to reach you?</h3>
            <p class="text-muted" style="font-weight: 600;">We recommend providing your email and phone number.</p>
            <form class="pt-3">
              <div class="row pb-2">
                <div class="col-12 col-md-6">
                  <label for="name">NAME <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="name" placeholder="e.g. Khoa">
                </div>
                <div class="col-12 col-md-6">
                  <label for="surname">SURNAME <span class="text-danger">*</span></label>
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
                  <label for="phone">PHONE <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="phone" placeholder="e.g. 09326868686">
                </div>
                <div class="col-12 col-md-6">
                  <label for="email">EMAIL ADDRESS <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" id="email" placeholder="e.g. khoa.huynh314@hcmut.edu.com">
                </div>
              </div>

            </form>
          </div>

          <div class="col-12 col-xxl-3 d-none d-xxl-block cv-container" id="<?php echo $tempId; ?>">
            <!-- <img src="cv_template_img/Business-Analyst-Resume-Example-RNerd 1.png" alt="" srcset="">-->

          </div>
        </div>
        <button class="btn-next  mt-5" id="btn-step1"
          style="width: 200px; padding-top: 20px; padding-bottom: 20px;">NEXT: Work History</button>
      </div>

      <div class="col-12 col-lg-9 main-content" id="step2a">
        <div class="d-flex align-items-center gap-2 mb-5">
          <a id="back-step2a" href="#" class="p-0"
            style="font-size: 25px; font-weight: bold; text-decoration: none; color: black;"><i
              class="bi bi-arrow-left pe-2" style="font-size: 35px; font-weight: bold"></i><span class="text-primary">Go
              Back</span></a>
        </div>

        <div class="row">
          <div class="col-12 col-xxl-9">
            <p class="p-0 m-0" style="font-weight: Bold; font-size: 20px;">Now let's complete your</p>
            <h3 class="p-0" style="font-weight: bolder;">WORK HISTORY</h3>
            <p class="p-0" style="font-weight: Bold; font-size: 20px;">Here's what to keep in mind:</p>
            <p class="p-0" style="font-size: 25px;">You can list work experience, internships, scholarships,
              relevant coursework, and academic achievements.</p>

          </div>

          <div class="col-12 col-xxl-3 d-xxl-block cv-container" id="<?php echo $tempId; ?>">
            <!-- <img src="cv_template_img/Business-Analyst-Resume-Example-RNerd 1.png" alt="" srcset="">
            <p class="pt-2" style="color: blue;">Change templates</p> -->
          </div>
        </div>
        <button class="btn-next mt-5" id="btn-step2a"
          style="width: 200px; padding-top: 20px; padding-bottom: 20px; position:fixed; bottom: 40px; right: 35px;">NEXT</button>
      </div>

      <div class="col-12 col-lg-9 main-content" id="step2b">
        <div class="d-flex align-items-center gap-2 mb-2">
          <a id="back-step2b" href="#" class="p-0"
            style="font-size: 25px; font-weight: bold; text-decoration: none; color: black;"><i
              class="bi bi-arrow-left pe-2" style="font-size: 35px; font-weight: bold"></i><span class="text-primary">Go
              Back</span></a>
        </div>

        <div class="row">
          <h3 style="font-weight: 600;">Share details about your most recent job,<br>and we'll work backward from there.
          </h3>
          <form class="pt-3">
            <div class="row pb-2">
              <div class="col-12 col-md-6">
                <label for="title">TITLE <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="title" placeholder="e.g. Senior">
              </div>
              <div class="col-12 col-md-6">
                <label for="employer">EMPLOYER <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="employer" placeholder="e.g. Software Engineer">
              </div>
            </div>
            <div class="row pb-2">
              <div class="col-12 col-md-12 col-lg-6">
                <label for="location">LOCATION</label>
                <input type="text" class="form-control" id="location" placeholder="e.g. Dream Company">
              </div>
            </div>
            <div class="row pb-2">
              <div class="col-12 col-lg-6">
                <label for="start-date">START DATE</label>
                <div class="row pb-2">
                  <div class="col-6 col-lg-6">
                    <select name="startMonth" id="startMonth" style="width: 100%; height: 65px;">
                      <option disabled selected>Month</option>
                      <option value="January">January</option>
                      <option value="February">February</option>
                      <option value="March">March</option>
                      <option value="April">April</option>
                      <option value="May">May</option>
                      <option value="June">June</option>
                      <option value="July">July</option>
                      <option value="August">August</option>
                      <option value="September">September</option>
                      <option value="October">October</option>
                      <option value="November">November</option>
                      <option value="December">December</option>
                    </select>
                  </div>
                  <div class="col-6 col-lg-6">
                    <select name="startYear" id="startYear" style="width: 100%; height: 65px;">
                      <option disabled selected>Year</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-6">
                <label for="email">END DATE</label>
                <div class="row pb-2">
                  <div class="col-6 col-lg-6">
                    <select name="endMonth" id="endMonth" style="width: 100%; height: 65px;">
                      <option disabled selected>Month</option>
                      <option value="January">January</option>
                      <option value="February">February</option>
                      <option value="March">March</option>
                      <option value="April">April</option>
                      <option value="May">May</option>
                      <option value="June">June</option>
                      <option value="July">July</option>
                      <option value="August">August</option>
                      <option value="September">September</option>
                      <option value="October">October</option>
                      <option value="November">November</option>
                      <option value="December">December</option>
                    </select>
                  </div>
                  <div class="col-6 col-lg-6">
                    <select name="endYear" id="endYear" style="width: 100%; height: 65px;">
                      <option disabled selected>Year</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="d-lg-block col-lg-6"></div>
              <div class="col-12 col-lg-6 d-flex align-items-center gap-2">
                <input type="checkbox" id="currentlyWorking" style="width: 30px; height: 30px;">
                <p style="padding: 0; font-size: 20px; margin: 0;">I currently work here</p>
              </div>
            </div>
          </form>
        </div>
        <button class="btn-next mt-5" id="btn-step2b"
          style="width: 200px; padding-top: 20px; padding-bottom: 20px;">NEXT: Education</button>
      </div>

      <div class="col-12 col-lg-9 main-content" id="step3a">
        <div class="d-flex align-items-center gap-2 mb-5">
          <a id="back-step3a" href="#" class="p-0"
            style="font-size: 25px; font-weight: bold; text-decoration: none; color: black;"><i
              class="bi bi-arrow-left pe-2" style="font-size: 35px; font-weight: bold"></i><span class="text-primary">Go
              Back</span></a>
        </div>

        <div class="row">
          <div class="col-12 col-xxl-9">
            <p class="p-0 m-0" style="font-weight: Bold; font-size: 20px;">Great, let's add your</p>
            <h3 class="p-0" style="font-weight: bolder;">EDUCATION DETAILS</h3>
            <p class="p-0" style="font-weight: Bold; font-size: 20px;">Here's what to keep in mind:</p>
            <p class="p-0" style="font-size: 25px;">Employers often skim this section, and we'll handle the <br>
              formatting to make it stand out.</p>

          </div>

          <div class="col-12 col-xxl-3  d-xxl-block cv-container" id="<?php echo $tempId; ?>">
            <!-- <img src="cv_template_img/Business-Analyst-Resume-Example-RNerd 1.png" alt="" srcset="">
            <p class="pt-2" style="color: blue;">Change templates</p> -->
          </div>
        </div>
        <button class="btn-next mt-5" id="btn-step3a"
          style="width: 200px; padding-top: 20px; padding-bottom: 20px; position:fixed; bottom: 40px; right: 35px;">NEXT</button>
      </div>

      <div class="col-12 col-lg-9 main-content" id="step3b">
        <div class="d-flex align-items-center gap-2 mb-2">
          <a id="back-step3b" href="#" class="p-0"
            style="font-size: 25px; font-weight: bold; text-decoration: none; color: black;"><i
              class="bi bi-arrow-left pe-2" style="font-size: 35px; font-weight: bold"></i><span class="text-primary">Go
              Back</span></a>
        </div>

        <div class="row">
          <h3 style="font-weight: 600;">Share your education details,<br><span
              style="font-weight: 500; font-size: 20px;">including any completed or ongoing studies, even if you haven't
              graduated yet. <span></h3>
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
            <div class="row pb-2">
              <div class="col-12 col-lg-6">
                <label for="field-study">FIELD STUDY</label>
                <input type="text" class="form-control" id="field-study" placeholder="e.g. Computer Science">
              </div>
              <div class="col-12 col-lg-6">
                <label for="graduation-year">GRADUATION YEAR</label>
                <div class="row">
                  <div class="col-6">
                    <select name="gradMonth" id="gradMonth" style="width: 100%; height: 57px;">
                      <option disabled selected>Month</option>
                      <option value="January">January</option>
                      <option value="February">February</option>
                      <option value="March">March</option>
                      <option value="April">April</option>
                      <option value="May">May</option>
                      <option value="June">June</option>
                      <option value="July">July</option>
                      <option value="August">August</option>
                      <option value="September">September</option>
                      <option value="October">October</option>
                      <option value="November">November</option>
                      <option value="December">December</option>
                    </select>
                  </div>
                  <div class="col-6">
                    <select name="gradYear" id="gradYear" style="width: 100%; height: 57px;">
                      <option disabled selected>Year</option>
                    </select>
                  </div>
                </div>
              </div>


            </div>
          </form>
        </div>
        <button class="btn-next mt-5" id="btn-step3b"
          style="width: 200px; padding-top: 20px; padding-bottom: 20px;">NEXT</button>
      </div>

      <div class="col-12 col-lg-9 main-content" id="step3c">
        <div class="d-flex align-items-center gap-2 mb-2">
          <a id="back-step3c" href="#" class="p-0"
            style="font-size: 25px; font-weight: bold; text-decoration: none; color: black;"><i
              class="bi bi-arrow-left pe-2" style="font-size: 35px; font-weight: bold"></i><span class="text-primary">Go
              Back</span></a>
        </div>

        <div class="row">
          <h3 style="font-weight: 600;">Education summary<br><span style="font-weight: 500; font-size: 20px;">Provide
              details about your education, including any ongoing studies or incomplete programs.<span></h3>
          <div class="c-container">

          </div>


          <div class="d-flex align-items-center justify-content-center p-5 mt-5" style="border: 3px dashed lightblue">
            <button class="add-course-work"
              style="border: none; background-color: transparent; color:blue; text-decoration: underline; font-size: 20px;">+
              Add any additional course work</button>
          </div>

        </div>
        <button class="btn-next mt-5" id="btn-step3c"
          style="width: 200px; padding-top: 20px; padding-bottom: 20px;">NEXT: Skill</button>
      </div>

      <div class="col-12 col-lg-9 main-content" id="step4a">
        <div class="d-flex align-items-center gap-2 mb-5">
          <a id="back-step4a" href="#" class="p-0"
            style="font-size: 25px; font-weight: bold; text-decoration: none; color: black;"><i
              class="bi bi-arrow-left pe-2" style="font-size: 35px; font-weight: bold"></i><span class="text-primary">Go
              Back</span></a>
        </div>

        <div class="row">
          <div class="col-12 col-xxl-9">
            <p class="p-0 m-0" style="font-weight: Bold; font-size: 20px;">Now let's focus on your</p>
            <h3 class="p-0" style="font-weight: bolder;">SKILLS DETAILS</h3>
            <p class="p-0 m-0" style=" font-size: 20px;">Employers look for key skills at a glance, and we'll help you
            </p>
            <p class="p-0 m-0" style="font-size: 20px;">select the most relevant ones</p>

          </div>

          <div class="col-12 col-xxl-3 d-none d-xxl-block cv-container" id="<?php echo $tempId; ?>">
            <!-- <img src="cv_template_img/Business-Analyst-Resume-Example-RNerd 1.png" alt="" srcset="">
            <p class="pt-2" style="color: blue;">Change templates</p> -->
          </div>
        </div>
        <button class="btn-next mt-5" id="btn-step4a"
          style="width: 200px; padding-top: 20px; padding-bottom: 20px; position:fixed; bottom: 40px; right: 35px;">NEXT</button>
      </div>

      <div class="col-12 col-lg-9 main-content" id="step4b">
        <div class="d-flex align-items-center gap-2 mb-2">
          <a id="back-step4b" href="#" class="p-0"
            style="font-size: 25px; font-weight: bold; text-decoration: none; color: black;"><i
              class="bi bi-arrow-left pe-2" style="font-size: 35px; font-weight: bold"></i><span class="text-primary">Go
              Back</span></a>
        </div>
        <!-- <div class="row">
          <div class="col-12 col-lg-8 order-1">
            
          </div>
          <div class="col-12 col-lg-4 align-self-end text-center order-3" style="text-decoration: underline;">
            
          </div>
        </div> -->

        <div class="row pt-2">
          <div class="col-12 col-xxl-8">
            <h3 style="font-weight: 600; margin: 0; padding: 0;">What skills would you like to highlight?<br><span
                style="font-weight: 500; font-size: 20px;">Choose from our pre-written examples below or <br> write your
                own.<span></h3>
            <div
              style="height: 14vh; background-color: #F9E6CB; padding: 14px 16px; padding-right: 35px; border-bottom: 1px solid black;">
              <h6 style="font-weight: bold;">SEARCH BY JOB TITLE FOR PRE-WRITTEN EXAMPLES</h6>
              <div class="d-flex align-items-center">
                <input class="me-auto search-input" type="text" placeholder="Search by job title"
                  style="padding-left: 14px; height: 45px; width: 100%; border: 1px solid black; background-color: #F9E6CB;">
                <div
                  style="display: flex; align-items: center; justify-content: center; width: 45px; height: 45px; background-color: #E9A354; border-radius: 50%; margin-left: 10px;">
                  <button class="search-btn" style="border: none; background-color: transparent;">
                    <img src="/CV-Hosting-web-main/public/images/search-icon.png" alt="" srcset=""
                      style="width: 25px; height: 25px;">
                  </button>
                </div>
              </div>
            </div>
            <div style="height: 38vh; background-color: #F7E9D6; padding: 10px 12px;">
              <div class="overflow-y-auto ps-3 pe-4 skill-container"
                style="width: 100%; height: 34vh; scrollbar-width: none;">
              </div>
            </div>
          </div>
          <div class="col-12 col-xxl-4 text-center">
            <h3 class="pt-3" style="text-decoration: underline; margin-bottom: 24px;">TEXT EDITOR</h3>
            <div id="editor" style="height: 46vh; background-color: white;" contenteditable="true" spellcheck="false">
            </div>
          </div>
        </div>
        <button class="btn-next mt-4" id="btn-step4b"
          style="width: 200px; padding-top: 20px; padding-bottom: 20px;">NEXT: Summary</button>
      </div>

      <div class="col-12 col-lg-9 main-content" id="step5a">
        <div class="d-flex align-items-center gap-2 mb-5">
          <a id="back-step5a" href="#" class="p-0"
            style="font-size: 25px; font-weight: bold; text-decoration: none; color: black;"><i
              class="bi bi-arrow-left pe-2" style="font-size: 35px; font-weight: bold"></i><span class="text-primary">Go
              Back</span></a>
        </div>

        <div class="row">
          <div class="col-12 col-xxl-9">
            <p class="p-0 m-0" style="font-weight: Bold; font-size: 20px;">Finally, let's work on</p>
            <h3 class="p-0" style="font-weight: bolder;">SUMMARY</h3>
            <p class="p-0 m-0" style=" font-size: 20px; font-weight: 600;">Here's what to keep in mind:</p>
            <p class="p-0 m-0" style="font-size: 20px;">Your summary highlights why you're a great fit for the job.<br>
              We'll provide expert content that you can tailor to make it stand out.</p>
          </div>

          <div class="col-12 col-xxl-3 d-hidden d-xxl-block cv-container" id="<?php echo $tempId; ?>">
            <!-- <img src="cv_template_img/Business-Analyst-Resume-Example-RNerd 1.png" alt="" srcset="">
            <p class="pt-2" style="color: blue;">Change templates</p> -->
          </div>
        </div>
        <button class="btn-next mt-5" id="btn-step5a"
          style="width: 200px; padding-top: 20px; padding-bottom: 20px; position:fixed; bottom: 40px; right: 35px;">NEXT</button>
      </div>

      <div class="col-12 col-lg-9 main-content" id="step5b">
        <div class="d-flex align-items-center gap-2 mb-2">
          <a id="back-step5b" href="#" class="p-0"
            style="font-size: 25px; font-weight: bold; text-decoration: none; color: black;"><i
              class="bi bi-arrow-left pe-2" style="font-size: 35px; font-weight: bold"></i><span class="text-primary">Go
              Back</span></a>
        </div>
        <!-- <div class="row">
          <div class="col-12 col-lg-8">
            
          </div>
          <div class="col-12 col-lg-4 align-self-end text-center" style="text-decoration: underline;">
            <h3>TEXT EDITOR</h3>
          </div>
        </div> -->

        <div class="row pt-2">
          <div class="col-12 col-xxl-8">
            <h3 style="font-weight: 600; margin: 0; padding: 0;">Briefly tell us about your background<br><span
                style="font-weight: 500; font-size: 20px;">Choose from our pre-written examples below or <br> write your
                own.<span></h3>
            <div
              style="height: 14vh; background-color: #F9E6CB; padding: 14px 16px; padding-right: 35px; border-bottom: 1px solid black;">
              <h6 style="font-weight: bold;">SEARCH BY JOB TITLE FOR PRE-WRITTEN EXAMPLES</h6>
              <div class="d-flex align-items-center">
                <input class="me-auto search-input" type="text" placeholder="Search by job title"
                  style="padding-left: 14px; height: 45px; width: 100%; border: 1px solid black; background-color: #F9E6CB;">
                <div
                  style="display: flex; align-items: center; justify-content: center; width: 45px; height: 45px; background-color: #E9A354; border-radius: 50%; margin-left: 10px;">
                  <button class="search-btn" style="border: none; background-color: transparent;">
                    <img src="/CV-Hosting-web-main/public/images/search-icon.png" alt="" srcset=""
                      style="width: 25px; height: 25px;">
                  </button>
                </div>
              </div>
            </div>
            <div style="height: 38vh; background-color: #F7E9D6; padding: 10px 12px;">
              <div class="overflow-y-auto ps-3 pe-4 summary-container"
                style="width: 100%; height: 34vh; scrollbar-width: none;">
              </div>
            </div>
          </div>
          <div class="col-12 col-xxl-4 text-center">
            <h3 class="pt-3" style="text-decoration: underline; margin-bottom: 24px;">TEXT EDITOR</h3>
            <div id="editor-2" style="height: 46vh; background-color: white;" contenteditable="true" spellcheck="false">
            </div>
          </div>
        </div>
        <button class="btn-next mt-4" id="btn-step5b"
          style="width: 200px; padding-top: 20px; padding-bottom: 20px;">NEXT: Finalize</button>
      </div>

      <div class="col-12 col-lg-9 main-content active" id="step6">
        <div class="d-flex align-items-center gap-2">
          <a id="back-step6" href="#" class="p-0"
            style="font-size: 25px; font-weight: bold; text-decoration: none; color: black;"><i
              class="bi bi-arrow-left pe-2" style="font-size: 35px; font-weight: bold"></i><span class="text-primary">Go
              Back</span></a>
        </div>

        <div class="row">
          <div class="col-12 col-xxl-9">
            <h4 class="p-0" style="font-weight: bolder;">Do you have anything else to add?<br>These sections are
              optional.</h4>
            <div class="row pt-4">
              <div class="col-12 col-lg-6 d-flex align-items-center gap-2">
                <input class="step6-check" type="checkbox" name="" id="1" style="width: 30px; height: 30px;">
                <div style="font-size: 20px;">Websites</div>
              </div>
              <div class="col-12 col-lg-6">
                <input class="websites checked-input" id="1" type="text" placeholder="e.g. linkedin.com/in/yourname">
              </div>
            </div>

            <div class="row pt-4">
              <div class="col-12 col-lg-6 d-flex align-items-center gap-2">
                <input class=" step6-check" type="checkbox" name="" id="2" style="width: 30px; height: 30px;">
                <div style="font-size: 20px;">Certifications</div>
              </div>
              <div class="col-12 col-lg-6">
                <input class="certifications checked-input" id="2" type="text">
              </div>
            </div>

            <div class="row pt-4">
              <div class="col-12 col-lg-6 d-flex align-items-center gap-2">
                <input class="step6-check" type="checkbox" name="" id="3" style="width: 30px; height: 30px;">
                <div style="font-size: 20px;">Languages</div>
              </div>
              <div class="col-12 col-lg-6">
                <input class="checked-input languages" id="3" type="text">
              </div>
            </div>
            <div class="row pt-4">
              <div class="col-12 col-lg-6 d-flex align-items-center gap-2">
                <input class="step6-check" type="checkbox" name="" id="4" style="width: 30px; height: 30px;">
                <div style="font-size: 20px;">Programing Languages</div>
              </div>
              <div class="col-12 col-lg-6">
                <input class="checked-input pro-languages" id="4" type="text">
              </div>
            </div>

            <div class="row pt-4">
              <div class="col-12 col-lg-6 d-flex align-items-center gap-2">
                <input class="step6-check" type="checkbox" name="" id="6" style="width: 30px; height: 30px;">
                <input type="text" style="font-size: 20px; border: none; background-color: #F8F0E5; width: 100%;"
                  value="Fill Your Own">
              </div>
              <div class="col-12 col-lg-6">
                <input class="checked-input" id="6" type="text">
              </div>
            </div>
          </div>

          <div class="col-12 col-xxl-3 d-none d-xxl-block cv-container" id="<?php echo $tempId; ?>" data-state="normal">
            <!-- <img src="cv_template_img/Business-Analyst-Resume-Example-RNerd 1.png" alt="" srcset="">
            <p class="pt-2" style="color: blue;">Change templates</p> -->
          </div>
        </div>
        <button class="btn-next mt-5" id="btn-step6"
          style="width: 200px; padding-top: 20px; padding-bottom: 20px; position:fixed; bottom: 40px; right: 35px;">NEXT</button>
      </div>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
  <script src="/CV-Hosting-web-main/public/js/information.js"></script>
</body>

</html>