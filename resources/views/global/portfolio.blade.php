<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1"> <!-- 0 == light, 1 == dark -->

    <title>Portfolio - ITFIN</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <!-- CSS ============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animation.css">
    <link rel="stylesheet" href="assets/css/plugins/feature.css">
    <link rel="stylesheet" href="assets/css/plugins/magnify.min.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/slick-theme.css">
    <link rel="stylesheet" href="assets/css/plugins/lightbox.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
                                <img class="logo-light" src="./assets/images/logo/logo.png" alt="Corporate Logo">
                                <img class="logo-dark" src="./assets/images/logo/logo-dark.png" alt="Corporate Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6 col-8 position-static">
                        <div class="header-right">

                            <nav class="mainmenu-nav d-none d-lg-block">
                                <ul class="mainmenu">
                                    <li><a href="/">Home</a></li>

                                    <li><a href="/about">About</a></li>

                                    <li class="has-droupdown has-menu-child-item"><a href="#">Service</a>
                                        <ul class="submenu">
                                            <li><a href="#">Service 1</a></li>
                                            <li><a href="#">Service 2</a></li>
                                            <li><a href="#">Service 3</a></li>
                                            <li><a href="#">Service 4</a></li>
                                            <li><a href="#">Service 5</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="/portfolio">Portfolio</a></li>

                                    <li><a href="/contact">Contact Us</a></li>
                                </ul>
                            </nav>

                            <!-- Start Header Btn  -->
                            <div class="header-btn">
                                <a class="btn-default btn-small round" target="_blank" href="https://themeforest.net/checkout/from_item/34133466?license=regular">BUY NOW</a>
                            </div>
                            <!-- End Header Btn  -->

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
                                            <img class="sun-image" src="./assets/images/icons/sun-01.svg" alt="Sun images">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                                            <img class="Victor Image" src="./assets/images/icons/vector.svg" alt="Vector Images">
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
                            <img class="logo-light" src="./assets/images/logo/logo.png" alt="Corporate Logo">
                            <img class="logo-dark" src="./assets/images/logo/logo-dark.png" alt="Corporate Logo">
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

                    <li><a href="/about">About</a></li>

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

                    <li><a href="/portfolio">Portfolio</a></li>

                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
        <!-- Start Theme Style  -->
        <div>
            <div class="rainbow-gradient-circle"></div>
            <div class="rainbow-gradient-circle theme-pink"></div>
        </div>
        <!-- End Theme Style  -->



        <!-- Start Portfolio Area  -->
        <div class="rainbow-portfolio-area rainbow-section-gap masonary-wrapper-activation">
            <div class="container-fluid plr--30">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb--50" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">
                            <h4 class="subtitle">
                                <span class="theme-gradient">Portfolio Default</span>
                            </h4>
                            <h2 class="title w-600 mb--20">You can customize everything!</h2>
                            <p class="description b1"></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <div class="rainbow-portfolio-filter filter-button-default messonry-button text-center mb--30">
                            <button data-filter="*" class="is-checked"><span class="filter-text">All</span></button>
                            <button data-filter=".cat--1"><span class="filter-text">design</span></button>
                            <button data-filter=".cat--2"><span class="filter-text">art</span></button>
                            <button data-filter=".cat--3"><span class="filter-text">Digital</span></button>
                            <button data-filter=".cat--4"><span class="filter-text">development</span></button>
                        </div>

                        <div class="portfolio-items grid-metro3 mesonry-list">
                            <div class="resizer"></div>
                            <!-- Start Single Portfolio  -->
                            <div class="portfolio-3 cat--1 cat--4">
                                <div class="rainbow-card portfolio">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <figure class="card-image">
                                                <a href="portfolio-details.html">
                                                    <img src="assets/images/portfolio/portfolio-01.jpg" alt="Portfolio-01">
                                                </a>
                                            </figure>
                                            <a class="rainbow-overlay" href="portfolio-details.html"></a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title mb--10">
                                                <a href="portfolio-details.html">App Development</a>
                                            </h5>
                                            <span class="subtitle b2">development</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Portfolio  -->

                            <!-- Start Single Portfolio  -->
                            <div class="portfolio-3 cat--2 cat--3">
                                <div class="rainbow-card portfolio">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <figure class="card-image">
                                                <a href="portfolio-details.html">
                                                    <img src="assets/images/portfolio/portfolio-02.jpg" alt="Portfolio-01">
                                                </a>
                                            </figure>
                                            <a class="rainbow-overlay" href="portfolio-details.html"></a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title mb--10">
                                                <a href="portfolio-details.html">Business Development</a>
                                            </h5>
                                            <span class="subtitle b2">design</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Portfolio  -->

                            <!-- Start Single Portfolio  -->
                            <div class="portfolio-3 cat--3 cat--4 cat--1">
                                <div class="rainbow-card portfolio">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <figure class="card-image">
                                                <a href="portfolio-details.html">
                                                    <img src="assets/images/portfolio/portfolio-03.jpg" alt="Portfolio-01">
                                                </a>
                                            </figure>
                                            <a class="rainbow-overlay" href="portfolio-details.html"></a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title mb--10">
                                                <a href="portfolio-details.html">Photoshop Design</a>
                                            </h5>
                                            <span class="subtitle b2">art</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Portfolio  -->

                            <!-- Start Single Portfolio  -->
                            <div class="portfolio-3 cat--3 cat--2">
                                <div class="rainbow-card portfolio">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <figure class="card-image">
                                                <a href="portfolio-details.html">
                                                    <img src="assets/images/portfolio/portfolio-04.jpg" alt="Portfolio-01">
                                                </a>
                                            </figure>
                                            <a class="rainbow-overlay" href="portfolio-details.html"></a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title mb--10">
                                                <a href="portfolio-details.html">Native Application</a>
                                            </h5>
                                            <span class="subtitle b2">development</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Portfolio  -->

                            <!-- Start Single Portfolio  -->
                            <div class="portfolio-3 cat--2 cat--4">
                                <div class="rainbow-card portfolio">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <figure class="card-image">
                                                <a href="portfolio-details.html">
                                                    <img src="assets/images/portfolio/portfolio-05.jpg" alt="Portfolio-01">
                                                </a>
                                            </figure>
                                            <a class="rainbow-overlay" href="portfolio-details.html"></a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title mb--10">
                                                <a href="portfolio-details.html">React Development</a>
                                            </h5>
                                            <span class="subtitle b2">Application</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Portfolio  -->

                            <!-- Start Single Portfolio  -->
                            <div class="portfolio-3 cat--3 cat--2 cat--1">
                                <div class="rainbow-card portfolio">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <figure class="card-image">
                                                <a href="portfolio-details.html">
                                                    <img src="assets/images/portfolio/portfolio-06.jpg" alt="Portfolio-01">
                                                </a>
                                            </figure>
                                            <a class="rainbow-overlay" href="portfolio-details.html"></a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title mb--10">
                                                <a href="portfolio-details.html">App Installment</a>
                                            </h5>
                                            <span class="subtitle b2">Photoshop</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Portfolio  -->
                        </div>
                    </div>
                </div>

                <!-- Start Load More Button  -->
                <div class="row row--15">
                    <div class="col-lg-12">
                        <div class="rainbow-load-more text-center mt--60">
                            <a href="portfolio.html" class="btn btn-default btn-large btn-icon">
                                <span>Load More <span class="icon feather-loader"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Load More Button  -->
            </div>
        </div>
        <!-- End Portfolio Area  -->

        <!-- Start Footer Area  -->
        <footer class="rainbow-footer footer-style-default variation-two">
            <div class="rainbow-callto-action clltoaction-style-default style-7">
                <div class="container">
                    <div class="row row--0 align-items-center content-wrapper">
                        <div class="col-lg-8 col-md-8">
                            <div class="inner">
                                <div class="content text-left">
                                    <div class="logo">
                                        <a href="index.html">
                                            <img class="logo-light" src="assets/images/logo/logo.png" alt="Corporate Logo">
                                            <img class="logo-dark" src="assets/images/logo/logo-dark.png" alt="Corporate Logo">
                                        </a>
                                    </div>
                                    <p class="subtitle" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">If you want to create a corporate template you can purshace now
                                        our doob
                                        template.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">
                            <div class="call-to-btn text-left mt_sm--20 text-lg-right">
                                <a class="btn-default" href="https://themeforest.net/checkout/from_item/34133466?license=regular">Purchase Doob
                                    <i class="feather-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="rainbow-footer-widget">
                                <h4 class="title">Services</h4>
                                <div class="inner">
                                    <ul class="footer-link link-hover">
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="portfolio.html">Portfolio</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="service.html">Service</a></li>
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
                                            <li><a href="brand.html">Brand</a></li>
                                            <li><a href="call-to-action.html">call To Action</a></li>
                                            <li><a href="counter.html">Counter</a></li>
                                            <li><a href="service.html">Service</a></li>
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
                                        <li><a href="pricing.html">Pricing</a></li>
                                        <li><a href="tab.html">Tab Styles</a></li>
                                        <li><a href="service.html">Service</a></li>
                                        <li><a href="social-share.html">Social</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="rainbow-footer-widget">
                                <h4 class="title">Resources</h4>
                                <div class="inner">
                                    <ul class="footer-link link-hover">
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="testimonial.html">Testimonial</a></li>
                                        <li><a href="service.html">Service</a></li>
                                        <li><a href="timeline.html">Timeline</a></li>
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
                                    <a href="privacy-policy.html">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Terms And Condition</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-12 col-12">
                        <div class="copyright-right text-center text-lg-end">
                            <p class="copyright-text">© Doob 2022</p>
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
    <script src="assets/js/vendor/modernizr.min.js"></script>
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/waypoint.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/counterup.min.js"></script>
    <script src="assets/js/vendor/feather.min.js"></script>
    <script src="assets/js/vendor/sal.min.js"></script>
    <script src="assets/js/vendor/masonry.js"></script>
    <script src="assets/js/vendor/imageloaded.js"></script>
    <script src="assets/js/vendor/magnify.min.js"></script>
    <script src="assets/js/vendor/lightbox.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/easypie.js"></script>
    <script src="assets/js/vendor/text-type.js"></script>
    <script src="assets/js/vendor/jquery.style.swicher.js"></script>
    <script src="assets/js/vendor/js.cookie.js"></script>
    <script src="assets/js/vendor/jquery-one-page-nav.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>

</html>