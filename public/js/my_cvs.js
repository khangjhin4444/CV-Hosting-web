let tempList = [{
    id: 1, name: "Template 1", src: `
    <link rel="stylesheet" type="text/css" href="/CV-Hosting-web-main/public/css/cv_1.css" media="all" />
    <div data-id="1" class="cv-preview-wrapper temp justify-content-center align-items-center">
    <div class="cv_template container-fluid" style="font-family: Georgia, serif;
color: #444;">
    <!-- Header -->
    <header id="hd" class="row border-bottom pb-4 mb-4 display-flex">
        <div class="col-md-6">
            <h1 class="text-uppercase"><span class="f-name">Lorem</span> <span class="l-name">Ispum</span></h1>
        </div>
        <div class="col-md-6 text-md-end contact-info">
            
            <h6 id="city_cv">Lorem ipsum dolor sit amet</h6>
            <h5 id="phone_cv">Lorem ipsum</h5>
            <h5 class="email_cv_h5" ><a id = "email_cv" href="mailto:name@yourdomain.com">lorem@ipsum.com</a></h5>
            <h5 class ="cv_websites"></h5>
        </div>
    </header>

    <!-- Main Content -->
    <main id="bd">
        <!-- Profile -->
        <section class="column d-flex mb-4 border-bottom">
            <div class="col-md-3">
                <h2 class="h4">Profile Summary</h2>
            </div>
            <div class="container col-md-9 cv_summary">
                <p class='lead enlarge mb-2'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p class='lead enlarge mb-2'>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </section>

        <!-- Skills -->
        <section class="row mb-4 border-bottom">
            <div class="col-md-3">
                <h2 class="h4">Skills</h2>
            </div>
            <div class="col-md-9 mb-3">
                <div class="row skills-list">
                </div>
            </div>
        </section>


        <!-- Experience -->
        <section class="row mb-4 border-bottom">
            <div class="col-md-3">
                <h2 class="h4">Experience</h2>
            </div>
            <div class="col-md-9">
                <div class='job mb-4 row gap-0'>
                    <h2 class='h5 cv_location'>Lorem ipsum</h2>
                    <h3><span class="cv_title">Web Designer</span>, <span class="cv_employer">Lorem Corp</span></h3>
                    <h4><span class="start_date_cv">Jan 2020</span> to <span class="end_date_cv">Dec 2022</span></h4>
                    <p>Intrinsicly enable optimal core competencies through corporate relationships.
                        Phosfluorescently implement worldwide vortals and client-focused imperatives.
                        Conveniently initiate virtual paradigms and top-line convergence.</p>
                </div>
            </div>
        </section>

        <!-- Education -->
        <section class="row mb-2  cv_education">
            <div class="col-md-3">
                <h2 class="h4">Education</h2>
            </div>
            <div class='col-md-9'>
                <h2 class='h5'><span class="cv_uni">Lorem</span> University - <span class="cv_city">Lorem</span> City</h2>
                <h3><span class="cv_degree">Bachelor</span> of <span class="cv_field_study"></span></h3>
                <h5>Gradution year: <span class="cv_year"></span></h5>
            </div>
        </section>
        <div class="container row languages-container">
            <section class="cv_languages col-5"></section>
            <section class="cv_pro_languages col-7"></
        section>
        </div>
        <section class="row cv_certi">
        <div class="col-md-3">
                <h2 class="h4">Certifications</h2>
            </div>
            <div class='col-md-9'>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <div id="ft" class="border-top text-center py-4 mt-4">
        <p>Jonathan Doe — <a href="mailto:name@yourdomain.com">name@yourdomain.com</a> — (313) - 867-5309</p>
    </div>
</div>` }
    , {
    id: 2, name: "Template 2", src: `<div data-id="2" class="cv-preview-wrapper temp align-items-center">
    <div class="cv_template container-fluid" style="font-family: "Varela Round", sans-serif;
color: #444;">
<link rel="stylesheet" type="text/css" href="/CV-Hosting-web-main/public/css/cv_2 copy.css" media="all" />
        <div class="template-2 top border-top py-4 text-start rounded-top">
            <h5 class="title display-5 text-uppercase text-start"><span class="f-name">Lorem</span> <span class="l-name">Ispum</span></h5>
            <h6 class="sub_title text-muted">Graphic & Web Designer</h6>
        </div>
        <div class="bottom py-4">
            <div class="row g-4">
                <div class="col-4 left">
                    <div class="left_content d-flex align-items-center mb-2">
                        <nav class="navbar mark p-1 me-2">
                            <span class="navbar-toggler-icon" style="height: 20px; width: 20px; color: #faa91e;"></span>
                        </nav>
                        <p class="h5 text-uppercase fw-semibold mb-0">Profile</p>
                    </div>

                    <div class="text small h6 cv_summary">
                        Improve your ability to find and apply for the right jobs, develop your interview skills
                        and
                        learn how to perform in the workplace with confidence.
                    </div>
                    <div class="left_content contact my-5">
                        <div class="row">
                            <div class="container">
                                <div class="row align-items-center mb-3">
                                    <div class="col-auto">
                                        <i class="bi bi-telephone-fill"></i>
                                    </div>
                                    <div class="col">
                                        <h6 class="info_title mb-1">Phone</h6>
                                        <div class="info_text small" id="phone_cv">Lorem ipsum</div>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-3">
                                    <div class="col-auto">
                                        <i class="bi bi-envelope-fill"></i>
                                    </div>
                                    <div class="col">
                                        <h6 class="info_title mb-1">Email</h6>
                                        <div class="info_text small"><a id="email_cv" style="word-break: break-all; white-space: normal;">lorem@ipsum.com</a></div>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-3">
                                    <div class="col-auto">
                                        <i class="bi bi-globe"></i>
                                    </div>
                                    <div class="col">
                                        <h6 class="info_title mb-1">Web</h6>
                                        <div class="info_text small" id="cv_websites">www.killua.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <div class="col-8 right border-start ps-4">
                    <div class="left_content d-flex align-items-center mb-2">
                        <nav class="navbar mark p-1 me-2">
                            <span class="navbar-toggler-icon" style="height: 20px; width: 20px; color: #faa91e;"></span>
                        </nav>
                        <p class="h5 text-uppercase fw-semibold mb-0">Work Experience</p>
                    </div>
                    <div class="right_content mb-4">
                        <div class='ex_block d-flex mb-4 align-items-start'>
                            <div class='dot ms-2 me-3 d-flex align-items-center justify-content-between'
                                style='width: 24px; height: 24px; font-size: 18px; font-weight: bold; color: #faa91e;'>
                                +
                            </div>
                            <div class='inform'>
                                <div class='inform_top d-flex justify-content-between align-items-center mb-1' style="text-align:start;">
                                    <div class='title fw-bold cv_location' style='font-size: 1.1rem; color: #333;'>Lorem ipsum
                                    </div>
                                    <div class='date small bg-orange-light text-white px-2 py-1 rounded'
                                        style='font-size: 0.85rem;'>
                                        <span class="start_date_cv">Jan 2020</span> to <span class="end_date_cv">Dec 2022</span>
                                    </div>
                                </div>
                                <div class='inform_bottom'>
                                    <h6 class='sub_title text-orange mt-0 mb-1' style='font-size: 1rem;'><span class="cv_title">Web Designer</span>, <span class="cv_employer">Lorem Corp</span></h6>
                                    <div class='text small text-muted' style='font-size: 0.9rem; line-height: 1.5;'>
                                        A modern job calls for a modern resume. Show employers that you're up to date
                                        and make a great first
                                        impression by selecting the right template.
                                    </div>
                                </div>
                            </div>
                        </div>"
                        <div class="left_content d-flex align-items-center mb-2">
                            <nav class="navbar mark p-1 me-2">
                                <span class="navbar-toggler-icon"
                                    style="height: 20px; width: 20px; color: #faa91e;"></span>
                            </nav>
                            <p class="h5 text-uppercase fw-semibold mb-0">Education</p>
                        </div>
                        <div class="right_content edu row mb-4">
                            <div class='edu_block d-flex mb-4 align-items-start'>
                                    <div class='dot ms-2 me-3 d-flex align-items-center justify-content-center'
                                        style='width: 24px; height: 24px; font-size: 18px; font-weight: bold; color: #faa91e;'>
                                        +
                                    </div>
                                    <div class='inform'>
                                        <div class='title fw-bold' style='font-size: 1.1rem; color: #333;'>
                                            <span class="cv_degree">Bachelor</span> in <span class="cv_field_study"></span>
                                        </div>
                                        <h6 class='sub_title text-orange mt-1 mb-1' style='font-size: 1rem;'>
                                            <span class="cv_uni">Lorem</span> University                                        </h6>
                                        <div class='text small text-muted' style='font-size: 0.9rem; line-height: 1.5;'>
                                            BU has been educating students of all kinds for more than 150 years:
                                            undergraduates, international scholars, master's and doctoral degree candidates.
                                        </div>
                                        <div class='date small bg-orange-light text-white px-2 py-1 rounded mt-2'
                                            style='font-size: 0.85rem;'>
                                            Expected in <span class="cv_year"></span>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="left_content d-flex align-items-center mb-2">
                            <nav class="navbar mark p-1 me-2">
                                <span class="navbar-toggler-icon"
                                    style="height: 20px; width: 20px; color: #faa91e;"></span>
                            </nav>
                            <p class="h5 text-uppercase fw-semibold mb-0">Skills</p>
                        </div>
                        <div class="right_content skills row mb-4">
                            <div class="skill col gap-2 mb-3">
                                <div class="skill_content">
                                    <div class=" title small text-muted row h6 skills-list">
                </div>
                                </div>
                            </div>
                        </div>
                        </div>
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
                            <i class="bi bi-book fs-3"></i>
                            <i class="bi bi-headphones fs-3"></i>
                            <i class="bi bi-camera fs-3"></i>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>` }
    , {
    id: 3, name: "Template 3", src: `<div data-id="3" class="cv-preview-wrapper temp"><div class="cv_template" style="font-family: Georgia, serif;
    color: #444;">
<link rel="stylesheet" href="/CV-Hosting-web-main/public/css/cv_3 copy.css">
    <div class="container-fluid">
        <!-- Header -->
        <header class="bg-light text-center py-3">
        <h1 class="display-4 fw-bold text-teal text-uppercase mb-1"><span class="f-name">Lorem</span> <span class="l-name">Ispum</span></h1>
        <div class="d-flex justify-content-center gap-3 mb-2">
            <a href="#" class="link-secondary fs-3" aria-label="GitHub"><i class="bi bi-github"></i></a>
            <a href="#" class="link-secondary fs-3" aria-label="Code"><i class="bi bi-code-slash"></i></a>
            <a href="#" class="link-secondary fs-3" aria-label="Website"><i class="bi bi-globe"></i></a>
        </div>
        <p class="m-0"><a href="mailto:examplemail@mail.com" class="link-secondary text-decoration-none" id="email_cv">examplemail@mail.com</a>
        </p>
        <p class="link-secondary text-decoration-none m-0" id="phone_cv">Lorem ipsum</p>
        <p class ="text-decoration-none m-0 link-secondary cv_websites"></p>
    </header>

    <main class="container py-3">
        <section class="card mb-3 shadow-sm">
            <div class="card-body">
                <h2 class="card-title h4 text-uppercase text-teal fw-semibold">Summary</h2>
                <hr class="border-dotted">
                <p class="text-muted small cv_summary">Front end developer</p>
            </div>
        </section>
        <section class="card mb-4 shadow-sm">
            <div class="card-body">
                <h2 class="card-title h4 text-uppercase text-teal fw-semibold">Skills</h2>
                <hr class="border-dotted">
                <div class="row text-muted skills-list">
                </div>
            </div>
        </section>
        <section class="card mb-4 shadow-sm">
            <div class="card-body">
                <h2 class="card-title h4 text-uppercase text-teal fw-semibold">Professional Experience</h2>
                <hr class="border-dotted">
                <div class="mb-3">
                    <h3 class="h5 text-teal"><span class="cv_location">Some Company</span> <span class="text-muted">|</span> <span class="cv_employer text-muted">Web Designer</span></h3>
                    <p class="text-muted mb-1 h5"><span class="cv_title">Lorem Corp</span> <span>|</span> <span class="start_date_cv">Jan 2020</span> to <span class="end_date_cv">Dec 2022</span></p>
                    <p class="text-muted h5">Developed and maintained web applications using modern front-end
                        technologies. Collaborated with cross-functional teams to deliver user-focused solutions.</p>
                </div>
            </div>
        </section>
        <section class="card mb-4 shadow-sm">
            <div class="card-body">
                <h2 class="card-title h4 text-uppercase text-teal fw-semibold">Education</h2>
                <hr class="border-dotted">
                <div class="mb-3">
                    <h3 class="h5 text-teal"><span class="cv_uni">Lorem</span> University <span class="text-muted">|</span> <span class="text-muted cv_city"> City</span></h3>
                    <p class="text-muted h5"><span class="cv_degree">Bachelor</span> of <span class="cv_field_study"></span><br>Gradution year: <span class="cv_year"></span></p>
                </div>
            </div>
        </section>
    </main>    </div></div>` },
{
    id: 4, name: "Template 3", src: `<div data-id="4" class="cv-preview-wrapper temp"><div class="cv_template" style="font-family: Georgia, serif;
color: #444;">
<link rel="stylesheet" href="/CV-Hosting-web-main/public/css/cv_4 copy.css">
<div class="resume-wrapper">
        <div class="row g-0">
            <div class="col-md-5 profile bg-white text-gray p-5">
                <div class="text-center text-md-start">
                    <div class="d-flex align-items-center mb-4">
                        <div class="picture-resume me-3">
                            <img src="" alt="John Anderson" class="rounded-circle" />
                        </div>
                        <h1 class="display-5 text-uppercase text-dark"><span class="f-name">Lorem</span> <span class="l-name">Ispum</span></h1>
                    </div>
                    <div class="contact-info mb-4">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-2">
                                <span class="fw-bold text-dark me-2">Call</span>
                                <span id="phone_cv">+34 123 456 789</span>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <span class="fw-bold text-dark me-2">Mail</span>
                                <span id="email_cv">lorem@ipsum.com</span>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <span class="fw-bold text-dark me-2">Web</span>
                                <span><a href="#" class="text-teal cv_websites">lorem.com</a></span>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <span class="fw-bold text-dark me-2">Home</span>
                                <span>Los Angeles, CA</span>
                            </li>
                        </ul>
                    </div>
                    <div class="contact-presentation mb-4 cv_summary">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus euismod congue nisi, nec
                            consequat quam. In consectetur faucibus turpis eget laoreet. Sed nec imperdiet purus.</p>
                    </div>
                    <div class="contact-social">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-2">
                                <span class="fw-bold text-dark me-2">Twitter</span>
                                <span><a href="#" class="text-teal">@janderson</a></span>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <span class="fw-bold text-dark me-2">Dribbble</span>
                                <span><a href="#" class="text-teal">janderson</a></span>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <span class="fw-bold text-dark me-2">Codepen</span>
                                <span><a href="#" class="text-teal">janderson</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-7 experience bg-dark text-gray p-5">
                <h3 class="h4 text-uppercase text-teal mb-4">Experience</h3>
                <div class="experience-wrapper mb-5">
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <div class="experience-title text-white">Company name</div>
                            <div class="time">Nov 2012 - Present</div>
                        </div>
                        <div class="col-md-8">
                            <div class="experience-title text-white">Front End Developer</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a elit facilisis,
                                adipiscing leo in, dignissim magna.</p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <div class="experience-title text-white">Company name</div>
                            <div class="time">Nov 2010 - Present</div>
                        </div>
                        <div class="col-md-8">
                            <div class="experience-title text-white">Freelance, Web Designer / Web Developer</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a elit facilisis,
                                adipiscing leo in, dignissim magna.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="experience-title text-white">Company name</div>
                            <div class="time">Nov 2009 - Nov 2010</div>
                        </div>
                        <div class="col-md-8">
                            <div class="experience-title text-white">Web Designer</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a elit facilisis,
                                adipiscing leo in, dignissim magna.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h3 class="h4 text-uppercase text-teal mb-4">Skills</h3>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                HTML / HTML5
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-teal" style="width: 80%"></div>
                                </div>
                            </li>
                            <li class="mb-3">
                                CSS / CSS3 / SASS / LESS
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-teal" style="width: 90%"></div>
                                </div>
                            </li>
                            <li class="mb-3">
                                Javascript
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-teal" style="width: 50%"></div>
                                </div>
                            </li>
                            <li class="mb-3">
                                Jquery
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-teal" style="width: 60%"></div>
                                </div>
                            </li>
                            <li class="mb-3">
                                Wordpress
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-teal" style="width: 70%"></div>
                                </div>
                            </li>
                            <li class="mb-3">
                                Photoshop
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-teal" style="width: 70%"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h3 class="h4 text-uppercase text-teal mb-4">Hobbies</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a elit facilisis, adipiscing
                            leo in, dignissim magna.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a elit facilisis, adipiscing
                            leo in, dignissim magna.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div>` }, {
    id: 5, name: "cv_5", src: `<div data-id="5" class="cv-preview-wrapper temp"><div class="cv_template" style="font-family: Georgia, serif;
color: #444;">
<link rel="stylesheet" type="text/css" href="/CV-Hosting-web-main/public/css/cv_5 copy.css" media="all" />

<div class="rela-block container page template-5 pb-3">
    <div class="rela-block top-bar">
        <div class="caps name">
            <div class="abs-center pb-5"><span class="f-name">Lorem</span> <span class="l-name">Ispum</span></div>
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
        <p class="mb-1">123 My Place Drive</p>
        <p class="mb-1">Astoria, New York 11105</p>
        <p class="mb-1">1-800-CALLPLZ</p>
        <p class="mb-1">emailsareforsquares@gmail.com</p><br>
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
        <p class="mb-3">Retro DIY quinoa, mixtape williamsburg master cleanse bushwick tumblr chillwave
            starter. </p>
        <div class="rela-block caps greyed">Experience</div>

        <h3>Job #1</h3>
        <p class="light">First job description</p>
        <p class="justified">Plaid gentrify put a bird on it, pickled XOXO farm-to-table irony raw denim messenger bag
            leggings. Hoodie PBR&B photo booth, vegan chillwave meh paleo freegan ramps. Letterpress shabby chic fixie
            semiotics. Meditation sriracha banjo pour-over. Gochujang pickled hashtag mixtape cred chambray. Freegan
            microdosing VHS, 90's bicycle rights aesthetic hella PBR&B. </p>
    </div>
</div>
</div></div>` }
    , {
    id: 6, name: "Template 6", src: `<div data-id="6" class="cv-preview-wrapper temp">
    <link id="theme-style" rel="stylesheet" href="/CV-Hosting-web-main/public/css/cv_6.css">
    <div class="template-6 cv_template">
        <div class="wrapper">
            <div class="sidebar-wrapper">
                <div class="profile-container">
                    <img class="profile" src="assets/images/profile.png" alt="" />
                    <h1 class="name text-uppercase"><span class="f-name">Lorem</span> <span class="l-name">Ispum</span></h1>
                    <h3 class="tagline">Full Stack Developer</h3d>
                </div><!--//profile-container-->

                <div class="contact-container container-block">
                    <ul class="list-unstyled contact-list">
                        <li class="email"><i class="fa-solid fa-envelope"></i><a
                                href="mailto: yourname@email.com">alan.doe@website.com</a></li>
                        <li class="phone"><i class="fa-solid fa-phone"></i><a href="tel:0123 456 789">0123 456 789</a>
                        </li>
                        <li class="website"><i class="fa-solid fa-globe"></i><a
                                href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/orbit-free-resume-cv-bootstrap-theme-for-developers/"
                                target="_blank">portfoliosite.com</a></li>
                        <li class="linkedin"><i class="fa-brands fa-linkedin-in"></i><a href="#"
                                target="_blank">linkedin.com/in/alandoe</a></li>
                        <li class="github"><i class="fa-brands fa-github"></i><a href="#"
                                target="_blank">github.com/username</a></li>
                        <li class="twitter"><i class="fa-brands fa-x-twitter"></i><a
                                href="https://twitter.com/3rdwave_themes" target="_blank">@twittername</a></li>
                    </ul>
                </div><!--//contact-container-->
                <div class="education-container container-block">
                    <h2 class="container-block-title">Education</h2>
                    <div class="item">
                        <h4 class="degree">MSc in Computer Science</h4>
                        <h5 class="meta">University of London</h5>
                        <div class="time">2016 - 2018</div>
                    </div><!--//item-->
                    <div class="item">
                        <h4 class="degree">BSc in Applied Mathematics</h4>
                        <h5 class="meta">Bristol University</h5>
                        <div class="time">2012 - 2016</div>
                    </div><!--//item-->
                </div><!--//education-container-->

                <div class="languages-container container-block">
                    <h2 class="container-block-title">Languages</h2>
                    <ul class="list-unstyled interests-list">
                        <li>English <span class="lang-desc">(Native)</span></li>
                        <li>French <span class="lang-desc">(Professional)</span></li>
                        <li>Spanish <span class="lang-desc">(Professional)</span></li>
                    </ul>
                </div><!--//interests-->

                <div class="interests-container container-block">
                    <h2 class="container-block-title">Interests</h2>
                    <ul class="list-unstyled interests-list">
                        <li>Climbing</li>
                        <li>Snowboarding</li>
                        <li>Cooking</li>
                    </ul>
                </div><!--//interests-->

            </div><!--//sidebar-wrapper-->

            <div class="main-wrapper">

                <section class="section summary-section">
                    <h2 class="section-title"><span class="icon-holder"><i class="fa-solid fa-user"></i></span>Career
                        Profile</h2>
                    <div class="summary">
                        <p>Summarise your career here lorem ipsum dolor sit amet, consectetuer adipiscing elit. You can
                            <a href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/orbit-free-resume-cv-bootstrap-theme-for-developers/"
                                target="_blank">download this free resume/CV template here</a>. Aenean commodo ligula
                            eget
                            dolor aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
                    </div><!--//summary-->
                </section><!--//section-->

                <section class="section experiences-section">
                    <h2 class="section-title"><span class="icon-holder"><i
                                class="fa-solid fa-briefcase"></i></span>Experiences</h2>

                    <div class="item">
                        <div class="meta">
                            <div class="upper-row">
                                <h3 class="job-title">Lead Developer</h3>
                                <div class="time">2023 - Present</div>
                            </div><!--//upper-row-->
                            <div class="company">Startup Hubs, San Francisco</div>
                        </div><!--//meta-->
                        <div class="details">
                            <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                eu,
                                pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.</p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto beatae vitae dicta sunt explicabo. </p>
                        </div><!--//details-->
                    </div><!--//item-->

                    <div class="item">
                        <div class="meta">
                            <div class="upper-row">
                                <h3 class="job-title">Senior Software Engineer</h3>
                                <div class="time">2018 - 2023</div>
                            </div><!--//upper-row-->
                            <div class="company">Google, London</div>
                        </div><!--//meta-->
                        <div class="details">
                            <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                eu,
                                pretium quis, sem.</p>

                        </div><!--//details-->
                    </div><!--//item-->

                    <div class="item">
                        <div class="meta">
                            <div class="upper-row">
                                <h3 class="job-title">UI Developer</h3>
                                <div class="time">2016 - 2018</div>
                            </div><!--//upper-row-->
                            <div class="company">Amazon, London</div>
                        </div><!--//meta-->
                        <div class="details">
                            <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                eu,
                                pretium quis, sem.</p>
                        </div><!--//details-->
                    </div><!--//item-->

                </section><!--//section-->

                <section class="skills-section section">
                    <h2 class="section-title"><span class="icon-holder"><i class="fa-solid fa-rocket"></i></span>Skills
                        &amp; Proficiency</h2>
                    <div class="skillset">
                        <div class="item">
                            <h3 class="level-title">Python &amp; Django</h3>
                            <div class="progress level-bar">
                                <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 99%"
                                    aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div><!--//item-->

                        <div class="item">
                            <h3 class="level-title">Javascript</h3>
                            <div class="progress level-bar">
                                <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 98%"
                                    aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div><!--//item-->

                        <div class="item">
                            <h3 class="level-title">React &amp; Angular</h3>
                            <div class="progress level-bar">
                                <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 98%"
                                    aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div><!--//item-->

                        <div class="item">
                            <h3 class="level-title">HTML5 &amp; CSS</h3>
                            <div class="progress level-bar">
                                <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 95%"
                                    aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div><!--//item-->

                        <div class="item">
                            <h3 class="level-title">Ruby on Rails</h3>
                            <div class="progress level-bar">
                                <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 85%"
                                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div><!--//item-->

                        <div class="item">
                            <h3 class="level-title">Sketch &amp; Photoshop</h3>
                            <div class="progress level-bar">
                                <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 60%"
                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div><!--//item-->

                    </div>
                </section><!--//skills-section-->

            </div><!--//main-body-->
        </div>
    </div></div>` }
    ];


  function renderTemplates() {
    const tempListGrid = document.querySelector('.temp-list-grid');
    tempListGrid.innerHTML = '';
  
    tempList.forEach((temp) => {
      // Wrapper chứa cả template và nút
      const wrapper = document.createElement('div');
      wrapper.classList.add('temp-wrapper');
  
      // Template content
      const div = document.createElement('div');
      div.setAttribute('data-id', temp.id);
      div.classList.add('temp');
      div.innerHTML = temp.src;
  
      // Buttons dưới div
      const buttonsDiv = document.createElement('div');
      buttonsDiv.classList.add('temp-buttons');
  
      const editBtn = document.createElement('button');
      editBtn.classList.add('edit-btn');
      editBtn.textContent = 'Edit';
  
      const shareBtn = document.createElement('button');
      shareBtn.classList.add('share-btn');
      shareBtn.textContent = 'Share';
  
      buttonsDiv.appendChild(editBtn);
      buttonsDiv.appendChild(shareBtn);
  
      // Gắn vào wrapper
      wrapper.appendChild(div);
      wrapper.appendChild(buttonsDiv);
  
      // Thêm vào grid
      tempListGrid.appendChild(wrapper);
    });
  }
  
renderTemplates();
