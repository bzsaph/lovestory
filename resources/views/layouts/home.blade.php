<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Interesing story</title>
  <meta content="bazimyas@gmail.com" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('public/assets/home/img/favicon.png') }}" rel="icon">
  <link href="{{ url('public/assets/home/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('public/assets/home/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('public/assets/home/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ url('public/assets/home/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ url('public/assets/home/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ url('public/assets/home/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ url('public/assets/home/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('public/assets/home/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- ======= Top Bar ======= -->
 <section id="topbar" class="d-none d-lg-flex align-items-center fixed-top topbar-transparent" style="background: #35322d !important">
    <div class="container text-right">
      <i class="icofont-phone"></i> whatsapp: +250788377874
      <i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 11:00 AM - 23:00 PM
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent"  style="background: #35322d !important">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light text-upper" ><a href="/"><span>Story advice</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="/"><img src="public/assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li><a href="/#about">About</a></li>
          <li><a href="/#chefs">Team</a></li>
          <li><a href="/still">Product <sup><span class="badge badge-light btn btn-success">here</span></sup></a></li>
          <li><a href="/#contact">Contact</a></li>
        <li><a href="/login">Login </a></li>


        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

<div>
    @yield('content')
</div>
<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
      <h3>story advice</h3>
      <p> Story advice aims to help every body to write all read story with out any cost of charge but to help growing</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>storytell</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

        Designed by <a href="yanjye.com">yanjye </a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ url('public/assets/home/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('public/assets/home/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('public/assets/home/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ url('public/assets/home/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ url('public/assets/home/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
  <script src="{{ url('public/assets/home/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('public/assets/home/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ url('public/assets/home/vendor/owl.carousel/owl.carousel.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('public/assets/home//js/main.js') }}"></script>

</body>

</html>


