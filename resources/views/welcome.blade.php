

  <!-- ======= Top Bar ======= -->
  

  <!-- ======= Header ======= -->
  
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    @include('component.header')
      
      
      <!-- .navbar -->


    
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to Hospital</h1>
      <h2>Design and developed by Abdulwahab Taofeeq</h2>
      <a href="{{route("student")}}" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose HOSPITAL?</h3>
              <p>
                Medica tests can helps to detect conditions , determine a diagosis , plan treatment for saftery of an individual
              </p>
              
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Automated Appointment</h4>
                    <p>It scheduled date for students</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Student Interest</h4>
                    <p>It prioritize student availability</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Health</h4>
                    <p>Health is wealth</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
           
            <p>This website is design and develop by Abdulwahab Taofeeq 
              
              in partial fufilment of the requirements for the award of Bachelor of Science In Computer  Science              
              
              <h3>Random Health Quotes</h3>
            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href=""></a></h4>
              <p class="description">“The art of medicine consists of amusing the patient while nature cures the disease.” ― Voltaire  </p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href=""></a></h4>
              <p class="description">"A man too busy to take care of his health is like a mechanic too busy to take care of his tools.”</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              {{-- <h4 class="title"><a href="">Dine Pad</a></h4> --}}
              <p class="description">

                "Poor health is not caused by something you don’t have; it’s caused by disturbing something that you already have. Healthy is not something that you need to get, it’s something you have already if you don’t disturb it
                "
              </p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
  

    <!-- ======= Services Section ======= -->
    

    <!-- ======= Appointment Section ======= -->
   
    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Departments</h2>
      <p>List of some deparment in the College of Health Sciences.</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Anatomy</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Physiology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Biochemistry</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Community Medicine</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Pharmacology</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Anatomy</h3>
                    <p class="fst-italic">

                      Anatomy, a field in the biological sciences concerned with the identification and description of the body structures of living things
                    </p>
                    <p>
                      Gross anatomy involves the study of major body structures by dissection and observation and in its narrowest sense is concerned only with the human bodys
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Physiology</h3>
                    <p class="fst-italic">

                      Physiology is the study of how the human body works. It describes the chemistry and physics behind basic body functions, from how molecules behave in cells to how systems of organs work together. It helps us understand what happens in a healthy body in everyday life and what goes wrong when someone gets sick
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Biochemistry</h3>
                    <p class="fst-italic">
                      Biochemistry is the application of chemistry to the study of biological processes at the cellular and molecular level. It emerged as a distinct discipline around the beginning of the 20th century when scientists combined chemistry, physiology, and biology to investigate the chemistry of living systems
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Community Medicine</h3>
                    <p class="fst-italic">
                      Community medicine is concerned with the prevention of disease, the determinants and natural history of disease in populations, and the influence of the environment and of society on health and disease
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Pharmacology</h3>
                    <p class="fst-italic">pharmacology, branch of medicine that deals with the interaction of drugs with the systems and processes of living animals, in particular, the mechanisms of drug action as well as the therapeutic and other uses of the drug.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->

    <!-- ======= Doctors Section ======= -->
  

    <!-- ======= Frequently Asked Questions Section ======= -->
    
    <!-- ======= Testimonials Section ======= -->
   

    <!-- ======= Gallery Section ======= -->
    
    <!-- ======= Contact Section ======= -->
   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>