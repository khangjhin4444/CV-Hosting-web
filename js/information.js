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
              <h4><a href="#" class="btn btn-dark">Download PDF</a></h4>
              <h6 id="city_cv">Lorem ipsum dolor sit amet</h6>
              <h5 id="phone_cv">Lorem ipsum</h5>
              <h5 ><a id = "email_cv" href="mailto:name@yourdomain.com">lorem@ipsum.com</a></h5>
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
                  <div class='job mb-4 row gap-0'>
                      <h2 class='h5'>Dolor sit</h2>
                      <h3>Director, Ipsum Inc</h3>
                      <h4>Mar 2018 to Dec 2019</h4>
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
              <h4><a href="#" class="btn btn-dark">Download PDF</a></h4>
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
                  <div class='job mb-4 row gap-0'>
                      <h2 class='h5'>Dolor sit</h2>
                      <h3>Director, Ipsum Inc</h3>
                      <h4>Mar 2018 to Dec 2019</h4>
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
              <div class='col-md-9'>
                  <h2 class='h5'>Ipsum College - Dolor Town</h2>
                  <h3>Master of Ipsum Design</h3>
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
              <h4><a href="#" class="btn btn-dark">Download PDF</a></h4>
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
                  <div class='job mb-4 row gap-0'>
                      <h2 class='h5'>Dolor sit</h2>
                      <h3>Director, Ipsum Inc</h3>
                      <h4>Mar 2018 to Dec 2019</h4>
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
              <div class='col-md-9'>
                  <h2 class='h5'>Ipsum College - Dolor Town</h2>
                  <h3>Master of Ipsum Design</h3>
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
              <h4><a href="#" class="btn btn-dark">Download PDF</a></h4>
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
                  <div class='job mb-4 row gap-0'>
                      <h2 class='h5'>Dolor sit</h2>
                      <h3>Director, Ipsum Inc</h3>
                      <h4>Mar 2018 to Dec 2019</h4>
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
              <div class='col-md-9'>
                  <h2 class='h5'>Ipsum College - Dolor Town</h2>
                  <h3>Master of Ipsum Design</h3>
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
              <h4><a href="#" class="btn btn-dark">Download PDF</a></h4>
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
                  <div class='job mb-4 row gap-0'>
                      <h2 class='h5'>Dolor sit</h2>
                      <h3>Director, Ipsum Inc</h3>
                      <h4>Mar 2018 to Dec 2019</h4>
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
              <div class='col-md-9'>
                  <h2 class='h5'>Ipsum College - Dolor Town</h2>
                  <h3>Master of Ipsum Design</h3>
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
              <h4><a href="#" class="btn btn-dark">Download PDF</a></h4>
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
                  <div class='job mb-4 row gap-0'>
                      <h2 class='h5'>Dolor sit</h2>
                      <h3>Director, Ipsum Inc</h3>
                      <h4>Mar 2018 to Dec 2019</h4>
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
              <div class='col-md-9'>
                  <h2 class='h5'>Ipsum College - Dolor Town</h2>
                  <h3>Master of Ipsum Design</h3>
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
              <h4><a href="#" class="btn btn-dark">Download PDF</a></h4>
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
                  <div class='job mb-4 row gap-0'>
                      <h2 class='h5'>Dolor sit</h2>
                      <h3>Director, Ipsum Inc</h3>
                      <h4>Mar 2018 to Dec 2019</h4>
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
              <div class='col-md-9'>
                  <h2 class='h5'>Ipsum College - Dolor Town</h2>
                  <h3>Master of Ipsum Design</h3>
              </div>
          </section>
      </main>

      <!-- Footer -->
      <footer id="ft" class="border-top text-center py-4 mt-4">
          <p>Jonathan Doe — <a href="mailto:name@yourdomain.com">name@yourdomain.com</a> — (313) - 867-5309</p>
      </footer>
  </div>` }];


let cv_containers = document.querySelectorAll(".cv-container")
cv_containers.forEach((cv_container) => {
    cv_container.innerHTML = tempList[cv_container.id - 1].src;
    cv_container.innerHTML += '<a class="text-center mt-5"><p class="pt-4" style="color: blue;">Change templates</p></a>';
})

let currentCheckbox = document.getElementById("currentlyWorking");

currentCheckbox.addEventListener('change', () => {
    if (currentCheckbox.checked) {
        document.getElementById("endYear").disabled = true
        document.getElementById("endMonth").disabled = true
    } else {
        document.getElementById("endYear").disabled = false
        document.getElementById("endMonth").disabled = false
    }
})


document.getElementById('name').addEventListener('input', function () {
    const nameDisplay = document.querySelectorAll('.f-name').forEach(display => {
        display.innerHTML = this.value;
    });
})
document.getElementById('surname').addEventListener('input', function () {
    const nameDisplay = document.querySelectorAll('.l-name').forEach(display => {
        display.innerHTML = this.value;
    });
})
document.getElementById('city').addEventListener('input', function () {
    const nameDisplay = document.querySelectorAll('#city_cv').forEach(display => {
        display.innerHTML = this.value;
    });
})
document.getElementById('phone').addEventListener('input', function () {
    const nameDisplay = document.querySelectorAll('#phone_cv').forEach(display => {
        display.innerHTML = this.value;
    });
})
document.getElementById('email').addEventListener('input', function () {
    const nameDisplay = document.querySelectorAll('#email_cv').forEach(display => {
        display.innerHTML = this.value;
    });
})

// WORKING HISTORY

document.getElementById('title').addEventListener('input', function () {
    const nameDisplay = document.querySelectorAll('#email_cv').forEach(display => {
        display.innerHTML = this.value;
    });
})
document.getElementById('employer').addEventListener('input', function () {
    const nameDisplay = document.querySelectorAll('#email_cv').forEach(display => {
        display.innerHTML = this.value;
    });
})
document.getElementById('location').addEventListener('input', function () {
    const nameDisplay = document.querySelectorAll('#email_cv').forEach(display => {
        display.innerHTML = this.value;
    });
})
document.getElementById('startMonth').addEventListener('change', function () {
    const nameDisplay = document.querySelectorAll('#email_cv').forEach(display => {
        display.innerHTML = this.value;
    });
})
document.getElementById('startYear').addEventListener('change', function () {
    const nameDisplay = document.querySelectorAll('#email_cv').forEach(display => {
        display.innerHTML = this.value;
    });
})
document.getElementById('endMonth').addEventListener('change', function () {
    const nameDisplay = document.querySelectorAll('#email_cv').forEach(display => {
        display.innerHTML = this.value;
    });
})
document.getElementById('endYear').addEventListener('change', function () {
    const nameDisplay = document.querySelectorAll('#email_cv').forEach(display => {
        display.innerHTML = this.value;
    });
})


let backStep2a = document.getElementById("back-step2a")
let backStep2b = document.getElementById("back-step2b")
let backStep3a = document.getElementById("back-step3a")
let backStep3b = document.getElementById("back-step3b")
let backStep4a = document.getElementById("back-step4a")
let backStep4b = document.getElementById("back-step4b")
let backStep5a = document.getElementById("back-step5a")
let backStep5b = document.getElementById("back-step5b")
let backStep6 = document.getElementById("back-step6")


let buttonStep1 = document.getElementById("btn-step1")
let buttonStep2a = document.getElementById("btn-step2a")
let buttonStep2b = document.getElementById("btn-step2b")
let buttonStep3a = document.getElementById("btn-step3a")
let buttonStep3b = document.getElementById("btn-step3b")
let buttonStep4a = document.getElementById("btn-step4a")
let buttonStep4b = document.getElementById("btn-step4b")
let buttonStep5a = document.getElementById("btn-step5a")
let buttonStep5b = document.getElementById("btn-step5b")
let buttonStep6 = document.getElementById("btn-step6")

const progressElement = document.querySelector('.sidebar .progress-bar .progress');


buttonStep1.addEventListener('click', () => {
    handleButtonClick('step2a')
    changeSideBar('2')
    progressElement.style.width = "20%"
})
buttonStep2a.addEventListener('click', () => {
    handleButtonClick('step2b')
})
buttonStep2b.addEventListener('click', () => {
    handleButtonClick('step3a')
    changeSideBar('3')
    progressElement.style.width = "40%"
})
buttonStep3a.addEventListener('click', () => {
    handleButtonClick('step3b')
})
buttonStep3b.addEventListener('click', () => {
    handleButtonClick('step4a')
    changeSideBar("4")
    progressElement.style.width = "60%"
})
buttonStep4a.addEventListener('click', () => {
    handleButtonClick('step4b')
})
buttonStep4b.addEventListener('click', () => {
    handleButtonClick('step5a')
    changeSideBar("5")
    progressElement.style.width = "80%"
})
buttonStep5a.addEventListener('click', () => {
    handleButtonClick('step5b')
})
buttonStep5b.addEventListener('click', () => {
    handleButtonClick('step6')
    changeSideBar("6")
    progressElement.style.width = "100%"
})
buttonStep6.addEventListener('click', () => {

})


backStep2a.addEventListener('click', () => {
    handleButtonClick('step1')
    changeSideBar('1')
    progressElement.style.width = "0%"
})
backStep2b.addEventListener('click', () => {
    handleButtonClick('step2a')
})
backStep3a.addEventListener('click', () => {
    handleButtonClick('step2b')
    changeSideBar('2')
    progressElement.style.width = "20%"
})
backStep3b.addEventListener('click', () => {
    handleButtonClick('step3a')
})
backStep4a.addEventListener('click', () => {
    handleButtonClick('step3b')
    changeSideBar('3')
    progressElement.style.width = "40%"
})
backStep4b.addEventListener('click', () => {
    handleButtonClick('step4a')
})
backStep5a.addEventListener('click', () => {
    handleButtonClick('step4b')
    changeSideBar('4')
    progressElement.style.width = "60%"
})
backStep5b.addEventListener('click', () => {
    handleButtonClick('step5a')
})
backStep6.addEventListener('click', () => {
    handleButtonClick('step5b')
    changeSideBar('5')
    progressElement.style.width = "80%"
})

function handleButtonClick(step) {
    // Lấy tất cả các phần tử main-content
    const contents = document.querySelectorAll(".main-content");

    // Xóa class active và đặt lại trạng thái ban đầu
    contents.forEach(content => {
        content.classList.remove("active");
        content.style.display = "block"; // Đảm bảo tất cả đều có display block tạm thời
    });

    // Tìm nội dung tương ứng với bước được chọn
    const targetContent = document.getElementById(step);

    // Thêm class active để kích hoạt hiệu ứng
    setTimeout(() => {
        targetContent.classList.add("active");

        // Ẩn các nội dung khác sau khi hiệu ứng hoàn tất
        contents.forEach(content => {
            if (content !== targetContent) {
                content.style.display = "none";
            }
        });
    }, 20); // Delay nhỏ để CSS áp dụng
}

function changeSideBar(step) {
    document.querySelectorAll(".step").forEach(head => {
        if (head.id == step) {
            if (head.classList.contains("finish")) {
                head.classList.remove("finish")
                head.querySelector(".circle").innerHTML = head.id
            }
            head.classList.add("active")
        } else {
            head.classList.remove("active")
        }
        if (Number(head.id) == Number(step) - 1) {
            head.classList.add("finish")
            head.querySelector(".circle").innerHTML = '<img src="images/check-lg.svg">'
        }
    })
}

const yearSelects = document.querySelectorAll('select[name$="Year"]');
const currentYear = new Date().getFullYear();
for (let y = currentYear; y >= 1980; y--) {
    const option = new Option(y, y);
    yearSelects.forEach(select => select.appendChild(option.cloneNode(true)));
}


let skillExamples = [{ name: 'Teamwork and collaboration', job: ['IT', 'Teacher'] },
{ name: 'Friendly, positive attitude', job: ['IT', 'Teacher'] },
{ name: 'Problem-solving', job: ['IT', 'Teacher'] },
{ name: 'Time management', job: ['IT', 'Teacher'] },
{ name: 'Over thinking', job: ['IT'] },
{ name: 'Creative', job: ['IT'] },
{ name: 'Adaptive', job: ['IT'] }
]

let searchInput = document.querySelector(".search-input");
let searchBtn = document.querySelector(".search-btn");
let skillContainer = document.querySelector(".skill-container");

renderSkill("")

searchBtn.addEventListener('click', () => {
    if (searchInput.value !== "") {
        // console.log("Please enter a job title to search for skills.")
        renderSkill(searchInput.value)
    } else {
        renderSkill("")
    }
})

function renderSkill(job) {
    skillContainer.innerHTML = '<div class="row p-2" style="border: 1px solid black;">Ready to use examples</div>';
    if (job === "") {
        console.log("None")
        skillExamples.forEach(skill => {
            skillContainer.insertAdjacentHTML('beforeend',
                `
          <div class="row p-2" style="border: 1px solid black; border-top: none;">
            <div class="row align-items-center p-0">
              <div class="col-1">
                <button class="add-to-editor" data-content="${skill.name}" style="border: none; padding: 0; margin: 0; background-color: transparent;">
                  <img src="images/plus.png" alt="" srcset="" style="width: 30px; height: 30px;">
                </button>
              </div>
              <div class="col-11 text-start">
                <div style="font-weight: 500;">${skill.name}</div>
              </div>
            </div>
          </div>
        `
            )
        })
    } else {
        skillExamples.forEach(skill => {
            if (skill.job.some(j => j.toLowerCase().includes(job.toLowerCase()))) {
                console.log(job)
                skillContainer.insertAdjacentHTML('beforeend',
                    `
            <div class="row p-2" style="border: 1px solid black; border-top: none;">
              <div class="row align-items-center p-0">
                <div class="col-1">
                  <button class="add-to-editor" data-content="${skill.name}" style="border: none; padding: 0; margin: 0; background-color: transparent;">
                    <img src="images/plus.png" alt="" srcset="" style="width: 30px; height: 30px;">
                  </button>
                </div>
                <div class="col-11 text-start">
                  <div style="font-weight: 500;">${skill.name}</div>
                </div>
              </div>
            </div>
          `
                )
            }
        })
    }

}

const quill = new Quill('#editor', {
    theme: 'snow'
});

const quill_2 = new Quill('#editor-2', {
    theme: 'snow'
});

document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".add-to-editor");
    const editor = document.getElementById("editor");

    // Biến để lưu nội dung đã chọn
    const selectedContents = new Set();

    buttons.forEach(button => {
        button.addEventListener("click", function () {
            const content = this.getAttribute("data-content");

            // Toggle: nếu đã chọn thì bỏ, chưa thì thêm
            if (selectedContents.has(content)) {
                selectedContents.delete(content);
                this.querySelector("img").src = "images/plus.png"; // đổi lại biểu tượng "+"
            } else {
                selectedContents.add(content);
                this.querySelector("img").src = "images/check-lg.svg"; // đổi biểu tượng (ví dụ thành dấu tick)
            }

            const html = `<ul>${Array.from(selectedContents)
                .map(item => `<li>${item}</li>`)
                .join("")}</ul>`;

            quill.clipboard.dangerouslyPasteHTML(html);
        });
    });
});