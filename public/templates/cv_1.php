<?php
// Ensure variables are accessible (they are defined in my_cvs.php)
$heading = isset($heading) ? $heading : [];
$working_history = isset($working_history) ? $working_history : [];
$education = isset($education) ? $education : [];
$skills = isset($skills) ? $skills : [];
$summary = isset($summary) ? $summary : [];
?>

<head>
    <link rel="stylesheet" href="/CV-Hosting-web-main/public/css/cv_1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<!-- <div class="cv_template" style="font-family: Georgia, serif; color: #444;">
  <div class="container-fluid">
      <header id="hd" class="row border-bottom pb-4 mb-4 display-flex">
          <div class="col-md-6">
              <h1 class="text-uppercase">
                  <span class="f-name"><?= htmlspecialchars($heading['name'] ?? 'Lorem') ?></span>
                  <span class="l-name"><?= htmlspecialchars($heading['surname'] ?? 'Ispum') ?></span>
              </h1>
          </div>
          <div class="col-md-6 text-md-end contact-info">
              <h6 id="city_cv"><?= htmlspecialchars($heading['city'] ?? 'Lorem ipsum dolor sit amet') ?></h6>
              <h5 id="phone_cv"><?= htmlspecialchars($heading['phone'] ?? 'Lorem ipsum') ?></h5>
              <h5><a id="email_cv" href="mailto:<?= htmlspecialchars($heading['email'] ?? 'lorem@ipsum.com') ?>"><?= htmlspecialchars($heading['email'] ?? 'lorem@ipsum.com') ?></a></h5>
          </div>
      </header>

      <main id="bd">
          <section class="column d-flex mb-4 border-bottom">
              <div class="col-md-3">
                  <h2 class="h4">Profile Summary</h2>
              </div>
              <div class="container col-md-9">
                  <?php foreach ($summary as $item) { ?>
                      <p class='lead enlarge mb-2'><?= htmlspecialchars($item) ?></p>
                  <?php } ?>
              </div>
          </section>

          <section class="row mb-4 border-bottom">
              <div class="col-md-3">
                  <h2 class="h4">Skills</h2>
              </div>
              <div class="col-md-9 mb-3">
                  <div class="row">
                      <?php foreach ($skills as $skill) { ?>
                          <div class='col-md-4 talent'>
                              <h2 class='h5'><?= htmlspecialchars($skill) ?></h2>
                          </div>
                      <?php } ?>
                  </div>
              </div>
          </section>

          <section class="row mb-4 border-bottom">
              <div class="col-md-3">
                  <h2 class="h4">Experience</h2>
              </div>
              <div class="col-md-9">
                  <?php foreach ($working_history as $job) { ?>
                      <div class='job mb-4 row gap-0'>
                          <h2 class='h5 cv_title'><?= htmlspecialchars($job['title'] ?? 'Lorem ipsum') ?></h2>
                          <h3 class='cv_employer'><?= htmlspecialchars($job['employer'] ?? 'Web Designer, Lorem Corp') ?></h3>
                          <h4>
                              <span class='start_date_cv'><?= htmlspecialchars($job['start_date'] ?? 'Jan 2020') ?></span> to
                              <span class='end_date_cv'><?= htmlspecialchars($job['end_date'] ?? 'Dec 2022') ?></span>
                          </h4>
                          <p class='cv_location'><?= htmlspecialchars($job['location'] ?? 'Lorem City') ?></p>
                      </div>
                  <?php } ?>
              </div>
          </section>

          <section class="row">
              <div class="col-md-3">
                  <h2 class="h4">Education</h2>
              </div>
              <div class='col-md-9'>
                  <?php foreach ($education as $edu) { ?>
                      <h2 class='h5 cv_uni'><?= htmlspecialchars($edu['insitution'] ?? 'Lorem University') ?> - <span class='cv_city'><?= htmlspecialchars($edu['school_location'] ?? 'Lorem City') ?></span></h2>
                      <h3 class='cv_degree'><?= htmlspecialchars($edu['degree'] ?? 'Bachelor of Lorem Studies') ?> — <strong class='cv_field_study'><?= htmlspecialchars($edu['field_study'] ?? 'Lorem Studies') ?></strong></h3>
                      <h4 class='cv_year'><?= htmlspecialchars($edu['graduation_date'] ?? '2024-06') ?></h4>
                  <?php } ?>
              </div>
          </section>
      </main>

      <footer id="ft" class="border-top text-center py-4 mt-4">
          <p>
              <span class="f-name"><?= htmlspecialchars($heading['name'] ?? 'Jonathan') ?></span>
              <span class="l-name"><?= htmlspecialchars($heading['surname'] ?? 'Doe') ?></span> —
              <a id="email_cv" href="mailto:<?= htmlspecialchars($heading['email'] ?? 'name@yourdomain.com') ?>"><?= htmlspecialchars($heading['email'] ?? 'name@yourdomain.com') ?></a> —
              <span id="phone_cv"><?= htmlspecialchars($heading['phone'] ?? '(313) - 867-5309') ?></span>
          </p>
      </footer>
  </div>
</div> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV View</title>
</head>

<body>
    <link rel="stylesheet" href="/CV-Hosting-web-main/public/css/cv_1.css" media="all">
    <div data-id="1" class="cv-preview-wrapper temp justify-content-center align-items-center">
        <div class="cv_template template-1 container-fluid" style="font-family: Georgia, serif;
color: #444;">
            <!-- Header -->
            <header id="hd" class="row border-bottom pb-4 mb-4 display-flex">
                <div class="col-md-6">
                    <h1 class="text-uppercase">
                        <span class="f-name"><?= htmlspecialchars($heading['name'] ?? 'Lorem') ?></span>
                        <span class="l-name"><?= htmlspecialchars($heading['surname'] ?? 'Ispum') ?></span>
                    </h1>
                </div>
                <div class="col-md-6 text-md-end contact-info">
                    <h6 id="city_cv"><?= htmlspecialchars($heading['city'] ?? 'Lorem ipsum dolor sit amet') ?></h6>
                    <h5 id="phone_cv"><?= htmlspecialchars($heading['phone'] ?? 'Lorem ipsum') ?></h5>
                    <h5><a id="email_cv"
                            href="mailto:<?= htmlspecialchars($heading['email'] ?? 'lorem@ipsum.com') ?>"><?= htmlspecialchars($heading['email'] ?? 'lorem@ipsum.com') ?></a>
                    </h5>
                    <?php if ($finalize[0]['website']) { ?>
                        <h5 class="cv_mywebsites">www.<?= htmlspecialchars($finalize[0]['website']) ?></h5>
                    <?php } ?>

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
                        <?php foreach ($summary as $item) { ?>
                            <p class='lead enlarge mb-2'><?= htmlspecialchars($item) ?></p>
                        <?php } ?>
                    </div>
                </section>

                <!-- Skills -->
                <section class="row mb-4 border-bottom">
                    <div class="col-md-3">
                        <h2 class="h4">Skills</h2>
                    </div>
                    <div class="col-md-9 mb-3">
                        <div class="row">
                            <?php foreach ($skills as $skill) { ?>
                                <div class='col-md-4 talent'>
                                    <h2 class='h5'><?= htmlspecialchars($skill) ?></h2>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </section>


                <!-- Experience -->
                <section class="row mb-4 border-bottom">
                    <div class="col-md-3">
                        <h2 class="h4">Experience</h2>
                    </div>
                    <div class="col-md-9">
                        <?php foreach ($working_history as $job) { ?>
                            <div class='job mb-4 row gap-0'>
                                <?php
                                if ($job['location']) {
                                    echo "<h2 class='h5 cv_location'>" . htmlspecialchars($job['location']) . '</h2>';
                                }
                                ?>
                                <h3><span class="cv_title"><?= htmlspecialchars($job['title'] ?? 'Lorem ipsum') ?></span>,
                                    <span
                                        class="cv_employer"><?= htmlspecialchars($job['employer'] ?? 'Web Designer, Lorem Corp') ?></span>
                                </h3>
                                <h4>
                                    <span
                                        class='start_date_cv'><?= htmlspecialchars($job['start_date'] ?? 'Jan 2020') ?></span>
                                    to
                                    <span class='end_date_cv'><?= htmlspecialchars($job['end_date'] ?? 'Dec 2022') ?></span>
                                </h4>
                            </div>
                        <?php } ?>
                    </div>
                </section>

                <!-- Education -->
                <section class="row mb-2 cv_education">
                    <div class="col-md-3">
                        <h2 class="h4">Education</h2>
                    </div>
                    <div class='col-md-9'>
                        <?php foreach ($education as $edu) { ?>
                            <h2 class='h5 cv_uni'><?= htmlspecialchars($edu['insitution'] ?? 'Lorem University') ?> - <span
                                    class='cv_city'><?= htmlspecialchars($edu['school_location'] ?? 'Lorem City') ?></span>
                            </h2>
                            <h3 class='cv_degree'><?= htmlspecialchars($edu['degree'] ?? 'Bachelor of Lorem Studies') ?> of
                                <span
                                    class='cv_field_study'><?= htmlspecialchars($edu['field_study'] ?? 'Lorem Studies') ?></span>
                            </h3>
                            <h4 class='cv_year'>Graduation Year:
                                <?= htmlspecialchars($edu['graduation_date'] ?? '2024-06') ?>
                            </h4>
                        <?php } ?>
                    </div>
                </section>
            </main>
            <?php if (!empty($finalize[0]['languages']) || !empty($finalize[0]['programming_languages'])) { ?>
                <div class="container row languages-container">

                    <?php if (!empty($finalize[0]['languages'])) { ?>
                        <section class="cv_languages col-5">
                            <div>
                                <h2 class="h4">Languages</h2>
                            </div>
                            <div class="col-md-9 mb-3">
                                <ul class="list-unstyled">
                                    <li class="h5 mb-2">• <?= htmlspecialchars($finalize[0]['languages']) ?> </li>
                                </ul>
                            </div>
                        </section>
                    <?php } ?>

                    <?php if (!empty($finalize[0]['programming_languages'])) {
                        $prog_langs = explode(',', $finalize[0]['programming_languages']);
                        ?>
                        <section class="cv_pro_languages col-7">
                            <div>
                                <h2 class="h4">Programming Languages</h2>
                            </div>
                            <div class="col-md-9 mb-3">
                                <ul class="list-unstyled">
                                    <?php foreach ($prog_langs as $lang) { ?>
                                        <li class="h5 mb-2">• <?= htmlspecialchars(trim($lang)) ?> </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </section>
                    <?php } ?>

                </div>
            <?php } ?>

            <!-- Footer -->
            <footer id="ft" class="border-top text-center py-4 mt-4">
                <p>
                    <span class="f-name"><?= htmlspecialchars($heading['name'] ?? 'Jonathan') ?></span>
                    <span class="l-name"><?= htmlspecialchars($heading['surname'] ?? 'Doe') ?></span> —
                    <a id="email_cv"
                        href="mailto:<?= htmlspecialchars($heading['email'] ?? 'name@yourdomain.com') ?>"><?= htmlspecialchars($heading['email'] ?? 'name@yourdomain.com') ?></a>
                    —
                    <span id="phone_cv"><?= htmlspecialchars($heading['phone'] ?? '(313) - 867-5309') ?></span>
                </p>
            </footer>
        </div>
    </div>
</body>

</html>