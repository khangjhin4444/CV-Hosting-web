
<!-- <div class="rela-block page">
    <div class="rela-block top-bar">
        <div class="caps name">
            <div class="abs-center">Kyle J Shanks</div>
        </div>
    </div>
    <div class="side-bar">
        <div class="mugshot">
            <div class="logo">
                <svg viewbox="0 0 80 80" class="rela-block logo-svg">
                    <path d="M 10 10 L 52 10 L 72 30 L 72 70 L 30 70 L 10 50 Z" stroke-width="2.5" fill="none" />
                </svg>
                <p class="logo-text">kj</p>
            </div>
        </div>
        <p>123 My Place Drive</p>
        <p>Astoria, New York 11105</p>
        <p>1-800-CALLPLZ</p>
        <p>emailsareforsquares@gmail.com</p><br>
        <p class="rela-block social twitter">Twitter stuff</p>
        <p class="rela-block social pinterest">Pinterest things</p>
        <p class="rela-block social linked-in">Linked-in man</p>
        <p class="rela-block caps side-header">Expertise</p>
        <p class="rela-block list-thing">HTML</p>
        <p class="rela-block list-thing">CSS (Stylus)</p>
        <p class="rela-block list-thing">JavaScript & jQuery</p>
        <p class="rela-block list-thing">Killer Taste</p>
        <p class="rela-block caps side-header">Education</p>
        <p class="rela-block list-thing">Advanced potion making</p>
        <p class="rela-block list-thing">Degree in popping and locking</p>
        <p class="rela-block list-thing">Knitting game on point</p>
        <p class="rela-block list-thing">Culinary af</p>
    </div>
    <div class="rela-block content-container">
        <h2 class="rela-block caps title">Jr Front-End Developer</h2>
        <div class="rela-block separator"></div>
        <div class="rela-block caps greyed">Profile</div>
        <p class="long-margin">Retro DIY quinoa, mixtape williamsburg master cleanse bushwick tumblr chillwave
            dreamcatcher hella wolf paleo. Knausgaard semiotics truffaut cornhole hoodie, YOLO meggings gochujang tofu.
            Locavore ugh kale chips iPhone biodiesel typewriter freegan, kinfolk brooklyn kitsch man bun. Austin neutra
            etsy, lumbersexual paleo cornhole sriracha kinfolk meggings kickstarter. </p>
        <div class="rela-block caps greyed">Experience</div>

        <h3>Job #1</h3>
        <p class="light">First job description</p>
        <p class="justified">Plaid gentrify put a bird on it, pickled XOXO farm-to-table irony raw denim messenger bag
            leggings. Hoodie PBR&B photo booth, vegan chillwave meh paleo freegan ramps. Letterpress shabby chic fixie
            semiotics. Meditation sriracha banjo pour-over. Gochujang pickled hashtag mixtape cred chambray. Freegan
            microdosing VHS, 90's bicycle rights aesthetic hella PBR&B. </p>

        <h3>Job #2</h3>
        <p class="light">Second Job Description</p>
        <p class="justified">Beard before they sold out photo booth distillery health goth. Hammock franzen green juice
            meggings, ethical sriracha tattooed schlitz mixtape man bun stumptown swag whatever distillery blog.
            Affogato iPhone normcore, meggings actually direct trade lomo plaid franzen shoreditch. Photo booth pug
            paleo austin, pour-over banh mi scenester vice food truck slow-carb. Street art kogi normcore, vice everyday
            carry crucifix thundercats man bun raw denim echo park pork belly helvetica vinyl. </p>

        <h3>Job #3</h3>
        <p class="light">Third Job Description</p>
        <p class="justified">Next level roof party lo-fi fingerstache skateboard, kogi tumblr. Shabby chic put a bird on
            it chambray, 3 wolf moon swag beard brooklyn post-ironic taxidermy art party microdosing keffiyeh marfa. Put
            a bird on it 3 wolf moon cliche helvetica knausgaard. Mumblecore fingerstache lomo, artisan freegan keffiyeh
            paleo kinfolk kale chips street art blog flannel.</p>
    </div>
</div> -->

<?php
// Ensure variables are accessible (they are defined in my_cvs.php)
$heading = isset($heading) ? $heading : [];
$working_history = isset($working_history) ? $working_history : [];
$education = isset($education) ? $education : [];
$skills = isset($skills) ? $skills : [];
$summary = isset($summary) ? $summary : [];
?>
<div class="cv_template">
    <head>
        <link rel="stylesheet" href="/CV-Hosting-web-main/public/css/cv_5 copy.css">
    </head>
    <div class="rela-block page">
        <div class="rela-block top-bar">
            <div class="caps name">
                <div class="abs-center">
                    <span class="f-name"><?= htmlspecialchars($heading['name'] ?? 'Kyle') ?></span>
                    <span class="l-name"><?= htmlspecialchars($heading['surname'] ?? 'Shanks') ?></span>
                </div>
            </div>
        </div>
        <div class="side-bar">
            <div class="mugshot">
                <div class="logo">
                    <svg viewbox="0 0 80 80" class="rela-block logo-svg">
                        <path d="M 10 10 L 52 10 L 72 30 L 72 70 L 30 70 L 10 50 Z" stroke-width="2.5" fill="none" />
                    </svg>
                    <p class="logo-text">kj</p>
                </div>
            </div>
            <p id="city_cv"><?= htmlspecialchars($heading['city'] ?? 'Astoria') ?></p>
            <p id="phone_cv"><?= htmlspecialchars($heading['phone'] ?? '1-800-CALLPLZ') ?></p>
            <p id="email_cv"><?= htmlspecialchars($heading['email'] ?? 'emailsareforsquares@gmail.com') ?></p><br>
            <p class="rela-block caps side-header">Expertise</p>
            <?php foreach ($skills as $skill): ?>
                <p class="rela-block list-thing"><?= htmlspecialchars($skill) ?></p>
            <?php endforeach; ?>
            <p class="rela-block caps side-header">Education</p>
            <?php foreach ($education as $edu): ?>
                <p class="rela-block list-thing cv_uni"><?= htmlspecialchars($edu['insitution'] ?? 'Ho Chi Minh University of Technology') ?></p>
                <p class="rela-block list-thing cv_degree"><?= htmlspecialchars($edu['degree'] ?? 'Bachelor') ?> in <span class="cv_field_study"><?= htmlspecialchars($edu['field_study'] ?? 'Computer Science') ?></span></p>
                <p class="rela-block list-thing cv_year"><?= htmlspecialchars($edu['graduation_date'] ?? '2024-06') ?></p>
                <p class="rela-block list-thing cv_city"><?= htmlspecialchars($edu['school_location'] ?? 'Ho Chi Minh City, Viet Nam') ?></p>
            <?php endforeach; ?>
        </div>
        <div class="rela-block content-container">
            <h2 class="rela-block caps title">Jr Full-Stack Developer</h2>
            <div class="rela-block separator"></div>
            <div class="rela-block caps greyed">Profile</div>
            <?php foreach ($summary as $item): ?>
                <p class="long-margin"><?= htmlspecialchars($item) ?></p>
            <?php endforeach; ?>
            <div class="rela-block caps greyed">Experience</div>
            <?php foreach ($working_history as $job): ?>
                <h3 class="cv_title"><?= htmlspecialchars($job['title'] ?? 'Fresher') ?></h3>
                <p class="light cv_employer"><?= htmlspecialchars($job['employer'] ?? 'Software Engineer') ?></p>
                <p class="light cv_location"><?= htmlspecialchars($job['location'] ?? 'Dream Company') ?></p>
                <p class="light"><span class="start_date_cv"><?= htmlspecialchars($job['start_date'] ?? '2020-05') ?></span> - <span class="end_date_cv"><?= htmlspecialchars($job['end_date'] ?? 'now') ?></span></p>
            <?php endforeach; ?>
        </div>
    </div>
</div>