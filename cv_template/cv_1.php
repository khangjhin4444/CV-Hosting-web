<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jonathan Doe | Web Designer, Director | name@yourdomain.com</title>
    <meta charset="utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="public\css\cv_1.css" media="all" />
    <style>
        body {
            transform: scale(0.2);
            transform-origin: top left;
            /* Đảm bảo thu nhỏ từ góc trên bên trái */
            width: 500%;
            /* Bù lại kích thước để tránh bị cắt nội dung */
            height: 500%;
            /* Bù lại kích thước để tránh bị cắt nội dung */
        }
    </style>
</head>

<body>
    <div class="cv_template">
        <div class="container my-5">
            <!-- Header -->
            <header id="hd" class="row border-bottom pb-4 mb-4 display-flex">
                <div class="col-md-6">
                    <h1 class="text-uppercase"><?php echo $heading['name'] . ' ' . $heading['surname']; ?></h1>
                    <!-- <h2 class="text-uppercase">Web Designer, Director</h2> -->
                </div>
                <div class="col-md-6 text-md-end contact-info">
                    <h4><a href="#" class="btn btn-dark">Download PDF</a></h4>
                    <h6><?php echo $heading['address']; ?></h6>
                    <h5><?php echo $heading['phone']; ?></h5>
                    <h5><a href="mailto:name@yourdomain.com"><?php echo $heading['email']; ?></a></h5>
                </div>
            </header>

            <!-- Main Content -->
            <main id="bd">
                <!-- Profile -->
                <section class="column d-flex mb-4 border-bottom">
                    <div class="col-md-3">
                        <h2 class="h4">Profile Summary</h2>
                    </div>
                    <div class="container col-md-9">
                        <?php foreach ($summary as $sum)
                            echo "<p class='lead enlarge mb-2'>$sum</p>
                        ";
                        ?>
                    </div>
                </section>

                <!-- Skills -->
                <section class="row mb-4 border-bottom">
                    <div class="col-md-3">
                        <h2 class="h4">Skills</h2>
                    </div>
                    <div class="col-md-9 mb-3">
                        <div class="row">
                            <?php foreach ($skills as $skill)
                                echo "<div class='col-md-4 talent'>
                                    <h2 class='h5'>$skill</h2>
                                </div>";
                            ?>
                        </div>
                    </div>
                </section>

                <!-- Technical -->
                <section class="row mb-4 border-bottom">
                    <div class="col-md-3">
                        <h2 class="h4">Technical</h2>
                    </div>
                    <div class="col-md-9">
                        <div class="row skills-list">
                            <?php foreach ($finalize as $final) {
                                echo "<div class='col-md-4'>
                                    <ul class='list-unstyled'>";
                                foreach ($final as $res) {
                                    echo '<li>' . $res . '</li>';
                                }
                                echo "</ul>
                                </div>"
                                ;
                            } ?>
                        </div>
                    </div>
                </section>

                <!-- Experience -->
                <section class="row mb-4 border-bottom">
                    <div class="col-md-3">
                        <h2 class="h4">Experience</h2>
                    </div>
                    <div class="col-md-9">
                        <?php foreach ($working_history as $experience)
                            echo "<div class='job mb-4 row gap-0'>
                                <h2 class='h5'>" . $experience['location'] . "</h2>
                                <h3>" . $experience['title'] . ', ' . $experience['employer'] . "</h3>
                                <h4>" . $experience['start_date'] . ' to ' . $experience['end_date'] . "</h4>
                                <p>Intrinsicly enable optimal core competencies through corporate relationships.
                                    Phosfluorescently implement worldwide vortals and client-focused imperatives.
                                    Conveniently initiate virtual paradigms and top-line convergence.</p>
                            </div>";
                        ?>
                    </div>
                </section>

                <!-- Education -->
                <section class="row">
                    <div class="col-md-3">
                        <h2 class="h4">Education</h2>
                    </div>
                    <?php foreach ($education as $edu)
                        echo "<div class='col-md-9'>
                            <h2 class='h5'>" . $edu['insitution'] . ' - ' . $edu['school_location'] . "</h2>
                            <h3>" . $edu['degree'] . ' of ' . $edu['field_study'];
                    if ($edu['gpa'] != '') {
                        echo " — " . "<strong>" . $edu['gpa'] . "</strong>";
                    }
                    echo "</h3>
                        </div>";
                    ?>
                </section>
            </main>

            <!-- Footer -->
            <footer id="ft" class="border-top text-center py-4 mt-4">
                <p>Jonathan Doe — <a href="mailto:name@yourdomain.com">name@yourdomain.com</a> — (313) - 867-5309</p>
            </footer>
        </div>
    </div>


    <!-- Bootstrap JS (Optional, for interactive components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>