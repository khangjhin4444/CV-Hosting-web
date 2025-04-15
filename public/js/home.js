let tempList = [{
    id: 1, name: "Template 1", src: `<div class="cv_template" style="font-family: Georgia, serif;
color: #444;">
<div class="container-fluid">
    <!-- Header -->
    <header id="hd" class="row border-bottom pb-4 mb-4 display-flex">
        <div class="col-md-6">
            <h1 class="text-uppercase"><span class="f-name">Lorem</span> <span class="l-name">Ispum</span></h1>
        </div>
        <div class="col-md-6 text-md-end contact-info">
            
            <h6 id="city_cv">Lorem ipsum dolor sit amet</h6>
            <h5 id="phone_cv">Lorem ipsum</h5>
            <h5 class="email_cv_h5 ><a id = "email_cv" href="mailto:name@yourdomain.com">lorem@ipsum.com</a></h5>
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
    id: 2, name: "Template 2", src: `<div class="cv_template" style="font-family: Georgia, serif;
color: #444;">
<div class="container-fluid">
    <!-- Header -->
    <header id="hd" class="row border-bottom pb-4 mb-4 display-flex">
        <div class="col-md-6">
            <h1 class="text-uppercase name-display">Lorem Ipsum</h1>
        </div>
        <div class="col-md-6 text-md-end contact-info">
            
            <h6>Lorem ipsum dolor sit amet</h6>
            <h5>Lorem ipsum</h5>
            <h5><a href="mailto:name@yourdomain.com">lorem@ipsum.com</a></h5>
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
                <div class="row">
                    <div class='col-md-4 talent'>
                        <h2 class='h5'>Lorem ipsum</h2>
                    </div>
                    <div class='col-md-4 talent'>
                        <h2 class='h5'>Dolor sit</h2>
                    </div>
                    <div class='col-md-4 talent'>
                        <h2 class='h5'>Amet consectetur</h2>
                    </div>
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
                    <h2 class='h5'>Lorem ipsum</h2>
                    <h3>Web Designer, Lorem Corp</h3>
                    <h4>Jan 2020 to Dec 2022</h4>
                    <p>Intrinsicly enable optimal core competencies through corporate relationships.
                        Phosfluorescently implement worldwide vortals and client-focused imperatives.
                        Conveniently initiate virtual paradigms and top-line convergence.</p>
                </div>
            </div>
        </section>

        <!-- Education -->
        <section class="row">
            <div class="col-md-3">
                <h2 class="h4">Education</h2>
            </div>
            <div class='col-md-9'>
                <h2 class='h5'>Lorem University - Lorem City</h2>
                <h3>Bachelor of Lorem Studies — <strong>3.8</strong></h3>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer id="ft" class="border-top text-center py-4 mt-4">
        <p>Jonathan Doe — <a href="mailto:name@yourdomain.com">name@yourdomain.com</a> — (313) - 867-5309</p>
    </footer>
</div>` }
    , {
    id: 3, name: "Template 3", src: `<div class="cv_template" style="font-family: Georgia, serif;
color: #444;">
<div class="container-fluid">
    <!-- Header -->
    <header id="hd" class="row border-bottom pb-4 mb-4 display-flex">
        <div class="col-md-6">
            <h1 class="text-uppercase name-display">Lorem Ipsum</h1>
        </div>
        <div class="col-md-6 text-md-end contact-info">
            
            <h6>Lorem ipsum dolor sit amet</h6>
            <h5>Lorem ipsum</h5>
            <h5><a href="mailto:name@yourdomain.com">lorem@ipsum.com</a></h5>
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
                <div class="row">
                    <div class='col-md-4 talent'>
                        <h2 class='h5'>Lorem ipsum</h2>
                    </div>
                    <div class='col-md-4 talent'>
                        <h2 class='h5'>Dolor sit</h2>
                    </div>
                    <div class='col-md-4 talent'>
                        <h2 class='h5'>Amet consectetur</h2>
                    </div>
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
                    <div class='col-md-4'>
                        <ul class='list-unstyled'>
                            <li>Lorem ipsum</li>
                            <li>Dolor sit</li>
                            <li>Amet consectetur</li>
                        </ul>
                    </div>
                    <div class='col-md-4'>
                        <ul class='list-unstyled'>
                            <li>Adipiscing elit</li>
                            <li>Sed do</li>
                            <li>Eiusmod tempor</li>
                        </ul>
                    </div>
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
                    <h2 class='h5'>Lorem ipsum</h2>
                    <h3>Web Designer, Lorem Corp</h3>
                    <h4>Jan 2020 to Dec 2022</h4>
                    <p>Intrinsicly enable optimal core competencies through corporate relationships.
                        Phosfluorescently implement worldwide vortals and client-focused imperatives.
                        Conveniently initiate virtual paradigms and top-line convergence.</p>
                </div>
                
            </div>
        </section>

        <!-- Education -->
        <section class="row">
            <div class="col-md-3">
                <h2 class="h4">Education</h2>
            </div>
            <div class='col-md-9'>
                <h2 class='h5'>Lorem University - Lorem City</h2>
                <h3>Bachelor of Lorem Studies — <strong>3.8</strong></h3>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer id="ft" class="border-top text-center py-4 mt-4">
        <p>Jonathan Doe — <a href="mailto:name@yourdomain.com">name@yourdomain.com</a> — (313) - 867-5309</p>
    </footer>
</div>` }
    , {
    id: 4, name: "Template 4", src: `<div class="cv_template" style="font-family: Georgia, serif;
color: #444;">
<div class="container-fluid">
    <!-- Header -->
    <header id="hd" class="row border-bottom pb-4 mb-4 display-flex">
        <div class="col-md-6">
            <h1 class="text-uppercase name-display">Lorem Ipsum</h1>
        </div>
        <div class="col-md-6 text-md-end contact-info">
            
            <h6>Lorem ipsum dolor sit amet</h6>
            <h5>Lorem ipsum</h5>
            <h5><a href="mailto:name@yourdomain.com">lorem@ipsum.com</a></h5>
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
                <div class="row">
                    <div class='col-md-4 talent'>
                        <h2 class='h5'>Lorem ipsum</h2>
                    </div>
                    <div class='col-md-4 talent'>
                        <h2 class='h5'>Dolor sit</h2>
                    </div>
                    <div class='col-md-4 talent'>
                        <h2 class='h5'>Amet consectetur</h2>
                    </div>
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
                    <div class='col-md-4'>
                        <ul class='list-unstyled'>
                            <li>Lorem ipsum</li>
                            <li>Dolor sit</li>
                            <li>Amet consectetur</li>
                        </ul>
                    </div>
                    <div class='col-md-4'>
                        <ul class='list-unstyled'>
                            <li>Adipiscing elit</li>
                            <li>Sed do</li>
                            <li>Eiusmod tempor</li>
                        </ul>
                    </div>
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
                    <h2 class='h5'>Lorem ipsum</h2>
                    <h3>Web Designer, Lorem Corp</h3>
                    <h4>Jan 2020 to Dec 2022</h4>
                    <p>Intrinsicly enable optimal core competencies through corporate relationships.
                        Phosfluorescently implement worldwide vortals and client-focused imperatives.
                        Conveniently initiate virtual paradigms and top-line convergence.</p>
                </div>
                
            </div>
        </section>

        <!-- Education -->
        <section class="row">
            <div class="col-md-3">
                <h2 class="h4">Education</h2>
            </div>
            <div class='col-md-9'>
                <h2 class='h5'>Lorem University - Lorem City</h2>
                <h3>Bachelor of Lorem Studies — <strong>3.8</strong></h3>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer id="ft" class="border-top text-center py-4 mt-4">
        <p>Jonathan Doe — <a href="mailto:name@yourdomain.com">name@yourdomain.com</a> — (313) - 867-5309</p>
    </footer>
</div>` }
    , {
    id: 5, name: "Template 5", src: `<div class="cv_template" style="font-family: Georgia, serif;
color: #444;">
<div class="container-fluid">
    <!-- Header -->
    <header id="hd" class="row border-bottom pb-4 mb-4 display-flex">
        <div class="col-md-6">
            <h1 class="text-uppercase name-display">Lorem Ipsum</h1>
        </div>
        <div class="col-md-6 text-md-end contact-info">
            
            <h6>Lorem ipsum dolor sit amet</h6>
            <h5>Lorem ipsum</h5>
            <h5><a href="mailto:name@yourdomain.com">lorem@ipsum.com</a></h5>
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
                <div class="row">
                    <div class='col-md-4 talent'>
                        <h2 class='h5'>Lorem ipsum</h2>
                    </div>
                    <div class='col-md-4 talent'>
                        <h2 class='h5'>Dolor sit</h2>
                    </div>
                    <div class='col-md-4 talent'>
                        <h2 class='h5'>Amet consectetur</h2>
                    </div>
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
                    <div class='col-md-4'>
                        <ul class='list-unstyled'>
                            <li>Lorem ipsum</li>
                            <li>Dolor sit</li>
                            <li>Amet consectetur</li>
                        </ul>
                    </div>
                    <div class='col-md-4'>
                        <ul class='list-unstyled'>
                            <li>Adipiscing elit</li>
                            <li>Sed do</li>
                            <li>Eiusmod tempor</li>
                        </ul>
                    </div>
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
                    <h2 class='h5'>Lorem ipsum</h2>
                    <h3>Web Designer, Lorem Corp</h3>
                    <h4>Jan 2020 to Dec 2022</h4>
                    <p>Intrinsicly enable optimal core competencies through corporate relationships.
                        Phosfluorescently implement worldwide vortals and client-focused imperatives.
                        Conveniently initiate virtual paradigms and top-line convergence.</p>
                </div>
                
            </div>
        </section>

        <!-- Education -->
        <section class="row">
            <div class="col-md-3">
                <h2 class="h4">Education</h2>
            </div>
            <div class='col-md-9'>
                <h2 class='h5'>Lorem University - Lorem City</h2>
                <h3>Bachelor of Lorem Studies — <strong>3.8</strong></h3>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer id="ft" class="border-top text-center py-4 mt-4">
        <p>Jonathan Doe — <a href="mailto:name@yourdomain.com">name@yourdomain.com</a> — (313) - 867-5309</p>
    </footer>
</div>` }
    , {
    id: 6, name: "Template 6", src: `<div class="cv_template" style="font-family: Georgia, serif;
color: #444;">
<div class="container-fluid">
    <!-- Header -->
    <header id="hd" class="row border-bottom pb-4 mb-4 display-flex">
        <div class="col-md-6">
            <h1 class="text-uppercase name-display">Lorem Ipsum</h1>
        </div>
        <div class="col-md-6 text-md-end contact-info">
            
            <h6>Lorem ipsum dolor sit amet</h6>
            <h5>Lorem ipsum</h5>
            <h5><a href="mailto:name@yourdomain.com">lorem@ipsum.com</a></h5>
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
                <div class="row">
                    <div class='col-md-4 talent'>
                        <h2 class='h5'>Lorem ipsum</h2>
                    </div>
                    <div class='col-md-4 talent'>
                        <h2 class='h5'>Dolor sit</h2>
                    </div>
                    <div class='col-md-4 talent'>
                        <h2 class='h5'>Amet consectetur</h2>
                    </div>
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
                    <div class='col-md-4'>
                        <ul class='list-unstyled'>
                            <li>Lorem ipsum</li>
                            <li>Dolor sit</li>
                            <li>Amet consectetur</li>
                        </ul>
                    </div>
                    <div class='col-md-4'>
                        <ul class='list-unstyled'>
                            <li>Adipiscing elit</li>
                            <li>Sed do</li>
                            <li>Eiusmod tempor</li>
                        </ul>
                    </div>
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
                    <h2 class='h5'>Lorem ipsum</h2>
                    <h3>Web Designer, Lorem Corp</h3>
                    <h4>Jan 2020 to Dec 2022</h4>
                    <p>Intrinsicly enable optimal core competencies through corporate relationships.
                        Phosfluorescently implement worldwide vortals and client-focused imperatives.
                        Conveniently initiate virtual paradigms and top-line convergence.</p>
                </div>
                
            </div>
        </section>

        <!-- Education -->
        <section class="row">
            <div class="col-md-3">
                <h2 class="h4">Education</h2>
            </div>
            <div class='col-md-9'>
                <h2 class='h5'>Lorem University - Lorem City</h2>
                <h3>Bachelor of Lorem Studies — <strong>3.8</strong></h3>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer id="ft" class="border-top text-center py-4 mt-4">
        <p>Jonathan Doe — <a href="mailto:name@yourdomain.com">name@yourdomain.com</a> — (313) - 867-5309</p>
    </footer>
</div>` }
    , {
    id: 7, name: "Template 7", src: `<div class="cv_template" style="font-family: Georgia, serif;
color: #444;">
<div class="container-fluid">
    <!-- Header -->
    <header id="hd" class="row border-bottom pb-4 mb-4 display-flex">
        <div class="col-md-6">
            <h1 class="text-uppercase name-display">Lorem Ipsum</h1>
        </div>
        <div class="col-md-6 text-md-end contact-info">
            
            <h6>Lorem ipsum dolor sit amet</h6>
            <h5>Lorem ipsum</h5>
            <h5><a href="mailto:name@yourdomain.com">lorem@ipsum.com</a></h5>
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
                <div class="row">
                    <div class='col-md-4 talent'>
                        <h2 class='h5'>Lorem ipsum</h2>
                    </div>
                    <div class='col-md-4 talent'>
                        <h2 class='h5'>Dolor sit</h2>
                    </div>
                    <div class='col-md-4 talent'>
                        <h2 class='h5'>Amet consectetur</h2>
                    </div>
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
                    <div class='col-md-4'>
                        <ul class='list-unstyled'>
                            <li>Lorem ipsum</li>
                            <li>Dolor sit</li>
                            <li>Amet consectetur</li>
                        </ul>
                    </div>
                    <div class='col-md-4'>
                        <ul class='list-unstyled'>
                            <li>Adipiscing elit</li>
                            <li>Sed do</li>
                            <li>Eiusmod tempor</li>
                        </ul>
                    </div>
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
                    <h2 class='h5'>Lorem ipsum</h2>
                    <h3>Web Designer, Lorem Corp</h3>
                    <h4>Jan 2020 to Dec 2022</h4>
                    <p>Intrinsicly enable optimal core competencies through corporate relationships.
                        Phosfluorescently implement worldwide vortals and client-focused imperatives.
                        Conveniently initiate virtual paradigms and top-line convergence.</p>
                </div>
                
            </div>
        </section>

        <!-- Education -->
        <section class="row">
            <div class="col-md-3">
                <h2 class="h4">Education</h2>
            </div>
            <div class='col-md-9'>
                <h2 class='h5'>Lorem University - Lorem City</h2>
                <h3>Bachelor of Lorem Studies — <strong>3.8</strong></h3>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer id="ft" class="border-top text-center py-4 mt-4">
        <p>Jonathan Doe — <a href="mailto:name@yourdomain.com">name@yourdomain.com</a> — (313) - 867-5309</p>
    </footer>
</div>` }];

const carousel = document.querySelector('.carousel');
const arrowBtns = document.querySelectorAll('.wrapper i')
// const firstCardWidth = carousel.querySelector(".card").offsetWidth;
const carouselChildrens = [...carousel.children];


document.addEventListener("DOMContentLoaded", () => {
    let html = "";
    tempList.forEach((temp) => {
        html += `
            <li class="card position-relative">
                <div class="cv-preview-wrapper">${temp.src}</div>
                <div class="card-img-overlay d-none pb-4">
                    <button id="${temp.id}" class="btn use-btn">USE THIS TEMPLATE</button>
                </div>
            </li>
        `;
    });
    carousel.innerHTML = html;
    
    // Use event delegation
    carousel.addEventListener('click', (e) => {
        const button = e.target.closest('.use-btn');
        if (button) {
            e.stopPropagation();
            const id = button.id;
            window.location.href = `/CV-Hosting-web-main/public/index.php?page=information&tempId=${id}`;
        }
    });
});


let isDragging  = false, startX, startScrollLeft;

// let cardPreView = Math.round(carousel.offsetWidth / firstCardWidth)

// carouselChildrens.slice(-cardPreView).reverse().forEach(card => {
//     card.insertAdjacentHTML("afterbegin", card.outerHTML)
// })

// carouselChildrens.slice(0, cardPreView).forEach(card => {
//     card.insertAdjacentHTML("beforeend", card.outerHTML)
// })

arrowBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        carousel.scrollLeft += btn.id ==='left' ? -firstCardWidth : firstCardWidth;
    })
})


const dragStart = (e) => {
    isDragging = true;
    carousel.classList.add("dragging");
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    if (!isDragging) return;
    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);

}

const dragStop = () => {
    isDragging = false;
    carousel.classList.remove('dragging');
}

carousel.addEventListener('mousemove', dragging);
carousel.addEventListener('mousedown', dragStart);
document.addEventListener('mouseup', dragStop)