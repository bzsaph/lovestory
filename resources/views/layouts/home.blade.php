<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('tittle')
    <title>Lovestory ! home page </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/img/favicon.ico')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css')}}">
</head>
<body>
<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{ url('assets/img/logo/logo.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
<!-- Header Start -->
<div class="header-area">
    <div class="main-header header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo -->
                <div class="col-xl-2 col-lg-2">
                    <div class="logo">
                        <a href="index"><img src="{{ url('assets/img/logo/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-10">
                    <!-- Main-menu -->
                    <div class="main-menu f-right d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li><a href="/index"> home</a></li>
                                <li><a href="/about">About</a></li>
                                <li><a href="/gallery">gallery</a></li>
                                <li><a href="/booking">Guestbook</a></li>
                                <li><a href="/blog">Blog</a>
                                <ul class="submenu">
                                        <li><a href="blog">Blog</a></li>
                                        <li><a href="single-blog">Blog Details</a></li>
                                        <li><a href="elements">Element</a></li>
                                </ul>
                                </li>
                                <li><a href="contact">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->
</header>
<div class="container">
    @yield('content')
</div>
<footer>
    <!-- Footer Start-->
    <div class="footer-main" data-background="{{ url('assets/img/gallery/section_bg4.png')}}">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-2  col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index"><img src="{{ url('assets/img/logo/logo2_footer.png')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3  col-lg-3 col-lg-2 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Lovestory Info</h4>
                                <ul>
                                    <li><a href="#">Advice to life</a></li>
                                    <li><a href="#">What is love</a></li>
                                    <li><a href="#">Select friend</a></li>
                                    <li><a href="#">How to say yes/no </a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2  col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>ABOUT US</h4>
                                <ul>
                                    <li><a href="#">Rwanda kigali</a></li>
                                    <li><a href="#">James mark s</a></li>
                                    <li><a href="#">yanjye.com@gmail.com</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2  col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>LOCATION</h4>
                                <ul>
                                    <li><a href="#">yanjye.com</a></li>
                                    <li>whatsapp:+250788377874</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://yanjye.com/" target="_blank">Lovestory</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>

    <!-- JS here -->

    <script src="{{ url('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ url('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ url('assets/js/popper.min.js')}}"></script>
    <script src="{{ url('assets/js/bootstrap.min.js')}}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ url('assets/js/jquery.slicknav.min.js')}}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ url('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ url('assets/js/slick.min.js')}}"></script>
    <!-- Date Picker -->
    <script src="{{ url('assets/js/gijgo.min.js')}}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ url('assets/js/wow.min.js')}}"></script>
    <script src="{{ url('assets/js/animated.headline.js')}}"></script>
    <script src="{{ url('assets/js/jquery.magnific-popup.js')}}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ url('assets/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{ url('assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ url('assets/js/jquery.sticky.js')}}"></script>

    <!-- counter , waypoint -->
    <script src="{{ url('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ url('assets/js/waypoints.min.js')}}"></script>

    <!-- contact js -->
    <script src="{{ url('assets/js/contact.js')}}"></script>
    <script src="{{ url('assets/js/jquery.form.js')}}"></script>
    <script src="{{ url('assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{ url('assets/js/mail-script.js')}}"></script>
    <script src="{{ url('assets/js/jquery.ajaxchimp.min.js')}}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ url('assets/js/plugins.js')}}"></script>
    <script src="{{ url('assets/js/main.js')}}"></script>

</body>
</html>
