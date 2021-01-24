<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Knight Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Knight - v2.2.0
  * Template URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container">

      <!-- The main logo is shown in mobile version only. The centered nav-logo in nav menu is displayed in desktop view  -->
      <div class="logo d-block d-lg-none">
        <a href="{{ url('/') }}"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul class="nav-inner">
                    <!-- Authentication Links -->
                    @if (Route::has('login'))
                @auth
                    <li class="active"><a href="{{ url('/') }}">Home</a></li>
                    <li class="drop-down"><a href="">About</a>
                        <ul>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#team">Our Team</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact Us</a></li>
                    <li class="drop-down"><a href="#portfolio">People</a>
                        <ul>
                        <li><a href="{{ url('/people-found') }}">Al Founded Reports</a></li>
                        <li><a href="{{ url('/missing-persons') }}">All Missed Reports</a></li>
                        </ul>
                    </li>
                    <li class="drop-down"><a href="">Make Report</a>
                        <ul>
                        <li><a href="{{ url('/create-found-one') }}">Report Founded One</a></li>
                        <li><a href="{{ url('/create-missing-one') }}">Report Missed One</a></li>
                        </ul>
                    </li>
                    
                    @else
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                        <li class="drop-down"><a href="">About</a>
                            <ul>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#team">Our Team</a></li>
                            </ul>
                        </li>
                        <li><a href="#contact">Contact Us</a></li>
                        <li class="drop-down"><a href="#portfolio">People</a>
                            <ul>
                            <li><a href="{{ url('/people-found') }}">Al Founded Reports</a></li>
                            <li><a href="{{ url('/missing-persons') }}">All Missed Reports</a></li>
                            </ul>
                        </li>
                        <li class="drop-down"><a href="">Make A Report</a>
                            <ul>
                            <li><a href="{{ url('/create-found-one') }}">Report Founded One</a></li>
                            <li><a href="{{ url('/create-missing-one') }}">Report Missed One</a></li>
                            </ul>
                        </li>
                        <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
            
                @endif
            @endif

            @guest
                
                @else
                    <li class="drop-down"><a href="">{{ Auth::user()->name }}</a>
                        <ul>
                            <a href="{{ route('profile',auth()->user()) }}">My Profile</a>
                            <a href="{{ route('mycases',auth()->user()) }}">My Cases</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
            @endguest
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    @yield('content')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-bottom">

      <div class="container">


        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
