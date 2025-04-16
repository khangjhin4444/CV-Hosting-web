
    <!-- <header class="bg-light text-center py-3">
        <h1 class="display-4 fw-bold text-teal text-uppercase mb-1">Your Name</h1>
        <div class="d-flex justify-content-center gap-3 mb-3">
            <a href="#" class="link-secondary fs-3" aria-label="GitHub"><i class="bi bi-github"></i></a>
            <a href="#" class="link-secondary fs-3" aria-label="Code"><i class="bi bi-code-slash"></i></a>
            <a href="#" class="link-secondary fs-3" aria-label="Website"><i class="bi bi-globe"></i></a>
        </div>
        <p><a href="mailto:examplemail@mail.com" class="link-secondary text-decoration-none">examplemail@mail.com</a>
        </p>
    </header>

    <main class="container py-3">
        <section class="card mb-3 shadow-sm">
            <div class="card-body">
                <h2 class="card-title h4 text-uppercase text-teal fw-semibold">Summary</h2>
                <hr class="border-dotted">
                <p class="text-muted small">Front end developer</p>
            </div>
        </section>
        <section class="card mb-4 shadow-sm">
            <div class="card-body">
                <h2 class="card-title h4 text-uppercase text-teal fw-semibold">Skills</h2>
                <hr class="border-dotted">
                <div class="row row-cols-1 row-cols-md-2 g-2">
                    <div class="col"><span class="badge bg-light text-dark border">HTML5 / CSS3</span></div>
                    <div class="col"><span class="badge bg-light text-dark border">SASS / Less</span></div>
                    <div class="col"><span class="badge bg-light text-dark border">JavaScript / jQuery</span></div>
                    <div class="col"><span class="badge bg-light text-dark border">Bootstrap / Foundation</span></div>
                    <div class="col"><span class="badge bg-light text-dark border">Git / GitHub</span></div>
                    <div class="col"><span class="badge bg-light text-dark border">Photoshop / Illustrator</span></div>
                </div>
            </div>
        </section>
        <section class="card mb-4 shadow-sm">
            <div class="card-body">
                <h2 class="card-title h4 text-uppercase text-teal fw-semibold">Professional Experience</h2>
                <hr class="border-dotted">
                <div class="mb-3">
                    <h3 class="h6 text-teal">Some Company <span class="text-muted small">| SomeCity, CA</span></h3>
                    <p class="text-muted small mb-1">Someposition | 8/2025 - 10/2025</p>
                    <p class="text-muted small">Developed and maintained web applications using modern front-end
                        technologies. Collaborated with cross-functional teams to deliver user-focused solutions.</p>
                </div>
                <div class="mb-3">
                    <h3 class="h6 text-teal">Some Company <span class="text-muted small">| SomeCity, CA</span></h3>
                    <p class="text-muted small mb-1">Someposition | 8/2025 - 10/2025</p>
                    <p class="text-muted small">Designed responsive interfaces and optimized performance for
                        high-traffic websites. Implemented accessibility best practices.</p>
                </div>
                <div>
                    <h3 class="h6 text-teal">Some Company <span class="text-muted small">| SomeCity, CA</span></h3>
                    <p class="text-muted small mb-1">Someposition | 8/2025 - 10/2025</p>
                    <p class="text-muted small">Led front-end development for key projects, ensuring scalability and
                        maintainability. Mentored junior developers.</p>
                </div>
            </div>
        </section>
        <section class="card mb-4 shadow-sm">
            <div class="card-body">
                <h2 class="card-title h4 text-uppercase text-teal fw-semibold">Education</h2>
                <hr class="border-dotted">
                <div class="mb-3">
                    <h3 class="h6 text-teal">Some School <span class="text-muted small">| Online Training</span></h3>
                    <p class="text-muted small">Online coding bootcamp with focus on front-end technologies, languages,
                        and tools.<br>10/2025 - 01/2026</p>
                </div>
                <div>
                    <h3 class="h6 text-teal">Some College <span class="text-muted small">| Some City, CA</span></h3>
                    <p class="text-muted small">PhD, Computer Science<br>2025 - 2027</p>
                </div>
            </div>
        </section>
    </main> -->

<?php
$heading = isset($heading) ? $heading : [];
$working_history = isset($working_history) ? $working_history : [];
$education = isset($education) ? $education : [];
$skills = isset($skills) ? $skills : [];
$summary = isset($summary) ? $summary : [];
?>

<header class="bg-light text-center py-3">
    <h1 class="display-4 fw-bold text-teal text-uppercase mb-1">
        <span class="f-name"><?= htmlspecialchars($heading['name'] ?? 'John') ?></span>
        <span class="l-name"><?= htmlspecialchars($heading['surname'] ?? 'Doe') ?></span>
    </h1>
    <p><a href="mailto:<?= htmlspecialchars($heading['email'] ?? 'examplemail@mail.com') ?>" id="email_cv" class="link-secondary text-decoration-none"><?= htmlspecialchars($heading['email'] ?? 'examplemail@mail.com') ?></a></p>
    <p id="phone_cv"><?= htmlspecialchars($heading['phone'] ?? '(313) - 867-5309') ?></p>
    <p id="city_cv"><?= htmlspecialchars($heading['city'] ?? 'Ho Chi Minh') ?></p>
</header>

<main class="container py-3">
    <section class="card mb-3 shadow-sm">
        <div class="card-body">
            <h2 class="card-title h4 text-uppercase text-teal fw-semibold">Summary</h2>
            <hr class="border-dotted">
            <?php foreach ($summary as $item): ?>
                <p class="text-muted small"><?= htmlspecialchars($item) ?></p>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="card mb-4 shadow-sm">
        <div class="card-body">
            <h2 class="card-title h4 text-uppercase text-teal fw-semibold">Skills</h2>
            <hr class="border-dotted">
            <div class="row row-cols-1 row-cols-md-2 g-2">
                <?php foreach ($skills as $skill): ?>
                    <div class="col"><span class="badge bg-light text-dark border"><?= htmlspecialchars($skill) ?></span></div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="card mb-4 shadow-sm">
        <div class="card-body">
            <h2 class="card-title h4 text-uppercase text-teal fw-semibold">Professional Experience</h2>
            <hr class="border-dotted">
            <?php foreach ($working_history as $job): ?>
                <div class="mb-3">
                    <h3 class="h6 text-teal cv_employer"><?= htmlspecialchars($job['employer'] ?? 'Software Engineer') ?> <span class="text-muted small cv_location">| <?= htmlspecialchars($job['location'] ?? 'Dream Company') ?></span></h3>
                    <p class="text-muted small mb-1 cv_title"><?= htmlspecialchars($job['title'] ?? 'Fresher') ?> | <span class="start_date_cv"><?= htmlspecialchars($job['start_date'] ?? '2020-05') ?></span> - <span class="end_date_cv"><?= htmlspecialchars($job['end_date'] ?? 'now') ?></span></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="card mb-4 shadow-sm">
        <div class="card-body">
            <h2 class="card-title h4 text-uppercase text-teal fw-semibold">Education</h2>
            <hr class="border-dotted">
            <?php foreach ($education as $edu): ?>
                <div class="mb-3">
                    <h3 class="h6 text-teal cv_uni"><?= htmlspecialchars($edu['insitution'] ?? 'Ho Chi Minh University of Technology') ?> <span class="text-muted small cv_city">| <?= htmlspecialchars($edu['school_location'] ?? 'Ho Chi Minh City, Viet Nam') ?></span></h3>
                    <p class="text-muted small cv_degree"><?= htmlspecialchars($edu['degree'] ?? 'Bachelor') ?>, <span class="cv_field_study"><?= htmlspecialchars($edu['field_study'] ?? 'Computer Science') ?></span><br><span class="cv_year"><?= htmlspecialchars($edu['graduation_date'] ?? '2024-06') ?></span></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>