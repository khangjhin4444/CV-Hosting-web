<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Killua | Graphic & Web Designer</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="public\css\cv_2.css">
</head>

<body>
    <div class="resume container shadow-lg my-5 rounded px-5 py-4">
        <!-- Top Section -->
        <div class="top border-top py-4 text-start rounded-top">
            <h5 class="title display-5 text-uppercase"><?php echo $heading['name'] . ' ' . $heading['surname']; ?></h5>
            <h6 class="sub_title text-muted">Graphic & Web Designer</h6>
        </div>
        <!-- Bottom Section -->
        <div class="bottom py-4">
            <div class="row g-4">
                <!-- Left Column -->
                <div class="col-md-3 left">
                    <!-- Profile -->
                    <div class="left_content d-flex align-items-center mb-2">
                        <nav class="navbar mark p-1 me-2">
                            <span class="navbar-toggler-icon" style="height: 20px; width: 20px; color: #faa91e;"></span>
                        </nav>
                        <p class="h5 text-uppercase fw-semibold mb-0">Profile</p>
                    </div>

                    <div class="text small fs-6">
                        Improve your ability to find and apply for the right jobs, develop your interview skills
                        and
                        learn how to perform in the workplace with confidence. <br><br>
                        At each level, tutor videos and workplace scenarios guide you through the materials,
                        explain
                        key language and grammar points and give you vocabulary that you can use in everyday
                        business life.
                    </div>
                    <!-- Contact -->
                    <div class="left_content contact my-5">
                        <div class="row">
                            <div class="container">
                                <div class="row align-items-center mb-3">
                                    <div class="col-auto">
                                        <i class="bi bi-telephone-fill"></i>
                                    </div>
                                    <div class="col">
                                        <h6 class="info_title mb-1">Phone</h6>
                                        <div class="info_text small"><?php echo $heading['phone']; ?></div>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-3">
                                    <div class="col-auto">
                                        <i class="bi bi-envelope-fill"></i>
                                    </div>
                                    <div class="col">
                                        <h6 class="info_title mb-1">Email</h6>
                                        <div class="info_text small"><?php echo $heading['email']; ?></div>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-3">
                                    <div class="col-auto">
                                        <i class="bi bi-globe"></i>
                                    </div>
                                    <div class="col">
                                        <h6 class="info_title mb-1">Web</h6>
                                        <div class="info_text small">www.killua.com</div>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-3">
                                    <div class="col-auto">
                                        <i class="bi bi-twitter"></i>
                                    </div>
                                    <div class="col">
                                        <h6 class="info_title mb-1">Twitter</h6>
                                        <div class="info_text small">www.twitter.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Expertise -->
                    <div class="left_content d-flex align-items-center mb-2">
                        <nav class="navbar mark p-1 me-2">
                            <span class="navbar-toggler-icon" style="height: 20px; width: 20px; color: #faa91e;"></span>
                        </nav>
                        <p class="h5 text-uppercase fw-semibold mb-0">Expertise</p>
                    </div>
                    <div class="left_content d-flex">

                        <div class="ex_texts small">
                            <div class="fs-6">Project Design</div>
                            <div class="fs-6">Product Placement</div>
                            <div class="fs-6">Layout Design</div>
                            <div class="fs-6">Public Relations</div>
                            <div class="fs-6">Photography</div>
                            <div class="fs-6">User Interface</div>
                            <div class="fs-6">User Experience</div>
                        </div>
                    </div>
                </div>
                <!-- Right Column -->
                <div class="col-md-8 right border-start ps-4">
                    <!-- Work Experience -->
                    <div class="left_content d-flex align-items-center mb-2">
                        <nav class="navbar mark p-1 me-2">
                            <span class="navbar-toggler-icon" style="height: 20px; width: 20px; color: #faa91e;"></span>
                        </nav>
                        <p class="h5 text-uppercase fw-semibold mb-0">Work Experience</p>
                    </div>
                    <div class="right_content mb-4">
                        <?php foreach ($working_history as $works)

                            echo "<div class='ex_block d-flex mb-4 align-items-start'>
                            <div class='dot ms-2 me-3 d-flex align-items-center justify-content-center'
                                style='width: 24px; height: 24px; font-size: 18px; font-weight: bold; color: #faa91e;'>
                                +
                            </div>
                            <div class='inform'>
                                <div class='inform_top d-flex justify-content-between align-items-center'>
                                    <div class='title fw-bold' style='font-size: 1.1rem; color: #333;'>"
                                . $works['location'] . "
                                    </div>
                                    <div class='date small bg-orange-light text-white px-2 py-1 rounded'
                                        style='font-size: 0.85rem;'>
                                        " . $works['start_date'] . " - " . $works['end_date'] . "
                                    </div>
                                </div>
                                <div class='inform_bottom'>
                                    <h6 class='sub_title text-orange mt-0 mb-1' style='font-size: 1rem;'>
                                        " . $works['employer'] . "
                                    </h6>
                                    <div class='text small text-muted' style='font-size: 0.9rem; line-height: 1.5;'>
                                        A modern job calls for a modern resume. Show employers that you're up to date
                                        and make a great first
                                        impression by selecting the right template.
                                    </div>
                                </div>
                            </div>
                        </div>";
                        ?>
                        <!-- Education -->
                        <div class="left_content d-flex align-items-center mb-2">
                            <nav class="navbar mark p-1 me-2">
                                <span class="navbar-toggler-icon"
                                    style="height: 20px; width: 20px; color: #faa91e;"></span>
                            </nav>
                            <p class="h5 text-uppercase fw-semibold mb-0">Education</p>
                        </div>
                        <div class="right_content edu row mb-4">
                            <?php foreach ($education as $edu)
                                echo "
                            <div class='edu_block d-flex mb-4 align-items-start'>
                                    <div class='dot ms-2 me-3 d-flex align-items-center justify-content-center'
                                        style='width: 24px; height: 24px; font-size: 18px; font-weight: bold; color: #faa91e;'>
                                        +
                                    </div>
                                    <div class='inform'>
                                        <div class='title fw-bold' style='font-size: 1.1rem; color: #333;'>
                                            " . $edu['degree'] . " in " . $edu['field_study'] . "
                                        </div>
                                        <h6 class='sub_title text-orange mt-1 mb-1' style='font-size: 1rem;'>
                                            " . $edu['school_location'] . "
                                        </h6>
                                        <div class='text small text-muted' style='font-size: 0.9rem; line-height: 1.5;'>
                                            BU has been educating students of all kinds for more than 150 years:
                                            undergraduates, international scholars, master's and doctoral degree candidates.
                                        </div>
                                        <div class='date small bg-orange-light text-white px-2 py-1 rounded mt-2'
                                            style='font-size: 0.85rem;'>
                                            Expected in " . $edu['graduation_date'] . "
                                        </div>
                                    </div>
                                </div>";
                            ?>
                        </div>
                        <!-- Skills -->
                        <div class="left_content d-flex align-items-center mb-2">
                            <nav class="navbar mark p-1 me-2">
                                <span class="navbar-toggler-icon"
                                    style="height: 20px; width: 20px; color: #faa91e;"></span>
                            </nav>
                            <p class="h5 text-uppercase fw-semibold mb-0">Skills</p>
                        </div>
                        <div class="right_content skills row mb-4">
                            <div class="skill col-6 d-flex mb-3">
                                <h6 class="dot me-2">+</h6>
                                <div class="skill_content">
                                    <h6 class="title small">Photoshop</h6>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-orange" style="width: 77%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill col-6 d-flex mb-3">
                                <h6 class="dot me-2">+</h6>
                                <div class="skill_content">
                                    <h6 class="title small">Illustrator</h6>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-orange" style="width: 88%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill col-6 d-flex mb-3">
                                <h6 class="dot me-2">+</h6>
                                <div class="skill_content">
                                    <div class="title small">Sketch</div>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-orange" style="width: 66%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill col-6 d-flex mb-3">
                                <h6 class="dot me-2">+</h6>
                                <div class="skill_content">
                                    <h6 class="title small">HTML & CSS</h6>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-orange" style="width: 66%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill col-6 d-flex mb-3">
                                <h6 class="dot me-2">+</h6>
                                <div class="skill_content">
                                    <h6 class="title small">InDesign</h6>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-orange" style="width: 66%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill col-6 d-flex mb-3">
                                <h6 class="dot me-2">+</h6>
                                <div class="skill_content">
                                    <h6 class="title small">After Effects</h6>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-orange" style="width: 55%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Interests & Hobby -->
                        <div class="left_content d-flex align-items-center mb-4">
                            <nav class="navbar mark p-1 me-2">
                                <span class="navbar-toggler-icon"
                                    style="height: 20px; width: 20px; color: #faa91e;"></span>
                            </nav>
                            <p class="h5 text-uppercase fw-semibold mb-0">Interests & Hobby</p>
                        </div>
                        <div class="right_content hobby d-flex justify-content-between">
                            <i class="bi bi-film fs-3"></i>
                            <i class="bi bi-bicycle fs-3"></i>
                            <i class="bi bi-airplane fs-3"></i>
                            <i class="bi bi-headphones fs-3"></i>
                            <i class="bi bi-camera fs-3"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap JS (Optional) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
</body>

</html>