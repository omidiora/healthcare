<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
  <!-- =======================================================
  * Template Name: Medilab - v4.8.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
   <header>
    <img src="{{ public_path('uniosun.jpg') }}" style="width: 100%; height: 50px;">
    <p style="text-align: center;font-weight:bold">Student Medical Appointment Slip</p>
   </header>
  <!-- ======= Top Bar ======= -->
  <div class="container" style="margin-top: 120px">
    <div class="row justify-content-center">           
            <div class="card">
               

                <div class="card-header" style="font-weight: bold;font-size:21px" >{{ __('Student Scheduled Date.') }}</div>
             
            
                
              <div class="col-md-8 offset-md-3">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('SubmitProfile') }}" style="margin-top:10px">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end font-weight-bold">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                {{Auth::user()->name }}
                               
                            </div>
                        </div>

                        <div class="row mb-3 ">
                            <label for="email" class="col-md-4 col-form-label text-md-end font-weight-bold">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                {{Auth::user()->email }}
                            </div>
                        </div>


                       


                        <div class="row mb-3">
                            <label for="matric_no font-weight-bold" class="col-md-4 col-form-label text-md-end font-weight-bold">{{ __('Date') }}</label>

                            <div class="col-md-6">
                                {{\Carbon\Carbon::parse(Auth::user()->schedule_date)->toDateString()}}
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="matric_no" class="col-md-4 col-form-label text-md-end font-weight-bold">{{ __('Time') }}</label>

                            <div class="col-md-6">
                                {{\Carbon\Carbon::parse(Auth::user()->schedule_date)->format('g:i a')}}
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="department" class="col-md-4 col-form-label text-md-end font-weight-bold">{{ __('Department') }}</label>

                            <div class="col-md-6">
                                {{Auth::user()->department }}
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="department" class="col-md-4 col-form-label text-md-end font-weight-bold">{{ __('Location') }}</label>

                            <div class="col-md-6">
                                {{"School Clinic"}}
                            </div>
                        </div>

                        



                        

                       

                      
                    </form>
                </div>
            </div>
        
        </div>
    </div>
</div>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>