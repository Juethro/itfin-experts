<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1"> <!-- 0 == light, 1 == dark -->

    <title>ITFIN Expert - IT Consultant</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
    <!-- CSS ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/feature.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <main class="page-wrapper">
        <!-- Start Header Area  -->
        <header class="rainbow-header header-default header-transparent header-sticky">
            <div class="container position-relative">
                <div class="row align-items-center row--0">
                    <div class="col-lg-3 col-md-6 col-4">
                        <div class="logo">
                            <a href="/">
                                <img class="logo-light" src="{{ asset('assets/images/logo/logo.png') }}" alt="Corporate Logo">
                                <img class="logo-dark" src="{{ asset('assets/images/logo/logo-dark.png') }}" alt="Corporate Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6 col-8 position-static">
                        <div class="header-right">

                            <nav class="mainmenu-nav d-none d-lg-block">
                                <ul class="mainmenu">
                                    <li><a href="/">Home</a></li>

                                    <li><a href="/en/about">About</a></li>

                                    <li class="has-droupdown has-menu-child-item"><a href="#">Service</a>
                                        <ul class="submenu">
                                            <li><a href="#">Service 1</a></li>
                                            <li><a href="#">Service 2</a></li>
                                            <li><a href="#">Service 3</a></li>
                                            <li><a href="#">Service 4</a></li>
                                            <li><a href="#">Service 5</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="/en/portfolio">Portfolio</a></li>

                                    <li><a href="/en/contact">Contact Us</a></li>
                                </ul>
                            </nav>

                            <!-- Start Mobile-Menu-Bar -->
                            <div class="mobile-menu-bar ml--5 d-block d-lg-none">
                                <div class="hamberger">
                                    <button class="hamberger-button">
                                        <i class="feather-menu"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Start Mobile-Menu-Bar -->

                            <div id="my_switcher" class="my_switcher">
                                <ul>
                                    <li>
                                        <a href="javascript: void(0);" data-theme="light" class="setColor light">
                                            <img class="sun-image" src="{{ asset('assets/images/icons/sun-01.svg') }}" alt="Sun images">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                                            <img class="Victor Image" src="{{ asset('assets/images/icons/vector.svg') }}" alt="Vector Images">
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Area  -->
        <div class="popup-mobile-menu">
            <div class="inner">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.html">
                            <img class="logo-light" src="{{ asset('assets/images/logo/logo.png') }}" alt="Corporate Logo">
                            <img class="logo-dark" src="{{ asset('assets/images/logo/logo-dark.png') }}" alt="Corporate Logo">
                        </a>
                    </div>
                    <div class="close-menu">
                        <button class="close-button">
                            <i class="feather-x"></i>
                        </button>
                    </div>
                </div>
                <ul class="mainmenu">
                    <li><a href="/">Home</a></li>

                    <li><a href="/en/about">About</a></li>

                    <li class="with-megamenu has-menu-child-item"><a href="#">Service</a>
                        <div class="rainbow-megamenu">
                            <div class="wrapper">
                                <div class="row row--0">
                                    <div class="col-lg-3 single-mega-item">
                                        <ul class="mega-menu-item">
                                            <ul class="submenu">
                                                <li><a href="#">Service 1</a></li>
                                                <li><a href="#">Service 2</a></li>
                                                <li><a href="#">Service 3</a></li>
                                                <li><a href="#">Service 4</a></li>
                                                <li><a href="#">Service 5</a></li>
                                            </ul>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li><a href="/en/portfolio">Portfolio</a></li>

                    <li><a href="/en/contact">Contact</a></li>
                </ul>
            </div>
        </div>
        <!-- Start Theme Style  -->
        <div>
            <div class="rainbow-gradient-circle"></div>
            <div class="rainbow-gradient-circle theme-pink"></div>
        </div>
        <!-- End Theme Style  -->

        @yield('content')

        <!-- Start Footer Area  -->
        <footer class="rainbow-footer footer-style-default variation-two">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="rainbow-footer-widget">
                                <h4 class="title">Services</h4>
                                <div class="inner">
                                    <ul class="footer-link link-hover">
                                        <li><a href="/en/about">About</a></li>
                                        <li><a href="/en/portfolio">Portfolio</a></li>
                                        <li><a href="/en/contact">Contact</a></li>
                                        <li><a href="/en/service">Service</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="rainbow-footer-widget">
                                <div class="widget-menu-top">
                                    <h4 class="title">Solutions</h4>
                                    <div class="inner">
                                        <ul class="footer-link link-hover">
                                            <li><a href="#">Brand</a></li>
                                            <li><a href="#">call To Action</a></li>
                                            <li><a href="#">Counter</a></li>
                                            <li><a href="#">Service</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="rainbow-footer-widget">
                                <h4 class="title">Company</h4>
                                <div class="inner">
                                    <ul class="footer-link link-hover">
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">Tab Styles</a></li>
                                        <li><a href="#">Service</a></li>
                                        <li><a href="#">Social</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="rainbow-footer-widget">
                                <h4 class="title">Resources</h4>
                                <div class="inner">
                                    <ul class="footer-link link-hover">
                                        <li><a href="#">Team</a></li>
                                        <li><a href="#">Testimonial</a></li>
                                        <li><a href="#">Service</a></li>
                                        <li><a href="#">Timeline</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="rainbow-footer-widget">
                                <h4 class="title">Stay With Us.</h4>
                                <div class="inner">
                                    <h6 class="subtitle">2000+ Our clients are subscribe Around the World</h6>
                                    <ul class="social-icon social-default justify-content-start">
                                        <li><a href="https://www.facebook.com/">
                                                <i class="feather-facebook"></i>
                                            </a>
                                        </li>
                                        <li><a href="https://www.twitter.com">
                                                <i class="feather-twitter"></i>
                                            </a>
                                        </li>
                                        <li><a href="https://www.instagram.com/">
                                                <i class="feather-instagram"></i>
                                            </a>
                                        </li>
                                        <li><a href="https://www.linkdin.com/">
                                                <i class="feather-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area  -->
        <!-- Start Copy Right Area  -->
        <div class="copyright-area copyright-style-one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8 col-sm-12 col-12">
                        <div class="copyright-left">
                            <ul class="ft-menu link-hover">
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Terms And Condition</a>
                                </li>
                                <li>
                                    <a href="/en/contact">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-12 col-12">
                        <div class="copyright-right text-center text-lg-end">
                            <p class="copyright-text">© ITFIN 2025</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copy Right Area  -->

    </main>
    <!-- All Scripts  -->
    <!-- Start Top To Bottom Area  -->
    <div class="rainbow-back-top">
        <i class="feather-arrow-up"></i>
    </div>
    <!-- End Top To Bottom Area  -->
    <!-- JS
============================================ -->
    <script src="{{ asset('assets/js/vendor/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoint.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/sal.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/masonry.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/imageloaded.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/magnify.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/lightbox.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/easypie.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/text-type.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.style.swicher.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-one-page-nav.js') }}"></script>
    <!--  Script Tambahan Deteksi Timezone -->
    <script src="{{ asset('assets/js/vendor/detect-timezone.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>