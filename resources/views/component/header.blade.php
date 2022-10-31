<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>health</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
  <!-- =======================================================
  * Template Name: HOSPITAL - v4.8.1
  * Template URL: https://bootstrapmade.com/HOSPITAL-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>



<header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="/">HOSPITAL</a></h1>



<nav id="navbar" class="navbar order-last order-lg-0">
    <ul>
      <li><a class="nav-link scrollto active" href="/">Home</a></li>
     
      @if (!Auth::check())
      <li><a class="nav-link scrollto" href="/login">Login</a></li>
      @endif

      @if (!Auth::check())
      <li><a class="nav-link scrollto" href="/register">Register</a></li>
      @endif
     
      <li><a class="nav-link scrollto" href="{{route("student")}}">Report Details</a></li>
      <li><a class="nav-link scrollto" href="{{route("contact")}}">Contact</a></li>
     

      <li>
@if(Auth::check())

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
  @csrf
</form>
</li>

<li>
<a  class="btn btn-danger" type="submit" 
href="{{ route('logout') }}"
onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" style="color:white">
 {{ __('Logout') }}</a>
</li>
@endif
     
    </ul>

  </nav>


</div>
</header>
