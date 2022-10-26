<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medilab Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v4.8.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    @include('component.header')
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
                    <p>kindly bring along the hard copy to the health center.</p>
                    <form method="GET" action="{{ route('generatePDF') }}" style="margin-top:10px">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                {{Auth::user()->name }}
                               
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                {{Auth::user()->email }}
                            </div>
                        </div>


                       




                        <div class="row mb-3">
                            <label for="matric_no" class="col-md-4 col-form-label text-md-end">{{ __('Date') }}</label>

                            <div class="col-md-6">
                                {{\Carbon\Carbon::parse(Auth::user()->schedule_date)->toDateString()}}
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="matric_no" class="col-md-4 col-form-label text-md-end">{{ __('Time') }}</label>

                            <div class="col-md-6">
                                {{\Carbon\Carbon::parse(Auth::user()->schedule_date)->format('g:i a')}}
                            </div>
                        </div>


                   
                        



                        <div class="row mb-3">
                            <label for="department" class="col-md-4 col-form-label text-md-end">{{ __('Department') }}</label>

                            <div class="col-md-6">
                                {{Auth::user()->department }}
                            </div>
                        </div>


                       

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('print') }}
                                </button>
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