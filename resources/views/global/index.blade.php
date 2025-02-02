@extends('layouts.app')
@section('content')
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



<!-- Start Slider Area  -->
<div class="slider-area slider-style-1 variation-default height-850 bg_image bg_image--3" data-black-overlay="7">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner text-center"><span class="subtitle">DIGITAL CONSULTING AGENCY</span>
                    <h1 class="title display-one">Unique Business <span>Consulting</span>.</h1>
                    <p class="description">We help our clients succeed by creating brand identities, digital
                        experiences, and print materials.</p>
                    <div class="button-group"><a class="btn-default btn-medium round btn-icon" href="#">Purchase
                            Now <i class="icon feather-arrow-right"></i></a><a class="btn-default btn-medium btn-border round btn-icon" href="contact.html">Contact
                            Us <i class="icon feather-arrow-right">
                            </i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slider Area  -->

<!-- Start Service-5 Area  -->
<div class="rainbow-service-area rainbow-section-gap">
    <div class="container">
        <div class="row row--15 service-wrapper">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="800">
                <div class="service service__style--1 icon-circle-style text-center">
                    <div class="icon">
                        <i class="feather-activity"></i>
                    </div>
                    <div class="content">
                        <h4 class="title w-600"><a href="#">Awarded Design</a></h4>
                        <p class="description b1 color-gray mb--0">There are many variations variations
                            of passages of Lorem Ipsum available, but the majority have suffered.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800">
                <div class="service service__style--1 icon-circle-style text-center">
                    <div class="icon">
                        <i class="feather-map"></i>
                    </div>
                    <div class="content">
                        <h4 class="title w-600"><a href="#">Design & Creative</a></h4>
                        <p class="description b1 color-gray mb--0">Passages there are many variations variations
                            of of Lorem Ipsum available, but the majority have suffered.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">
                <div class="service service__style--1 icon-circle-style text-center">
                    <div class="icon">
                        <i class="feather-cast"></i>
                    </div>
                    <div class="content">
                        <h4 class="title w-600"><a href="#">App Development</a></h4>
                        <p class="description b1 color-gray mb--0">Variations There are many variations of
                            passages of Lorem Ipsum available, but the majority have suffered.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Service-5 Area  -->

<!-- Start Seperator Area  -->
<div class="rbt-separator-mid">
    <div class="container">
        <hr class="rbt-separator m-0">
    </div>
</div>
<!-- End Seperator Area  -->

<!-- Start Portfolio Area  -->
<div class="rainbow-portfolio-area rainbow-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h4 class="subtitle "><span class="theme-gradient">Business Projects</span></h4>
                    <h2 class="title w-600 mb--20">Business Case Studies.!</h2>
                    <p class="description b1">We provide company and finance service for <br> startups and
                        company business.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="rainbow-portfolio-filter filter-button-default messonry-button text-center mb--30">
                    <button data-filter="*" class="is-checked"><span class="filter-text">All</span></button>
                    <button data-filter=".cat--1"><span class="filter-text">design</span></button>
                    <button data-filter=".cat--2"><span class="filter-text">art</span></button>
                    <button data-filter=".cat--3"><span class="filter-text">development</span></button>
                </div>

                <div class="portfolio-items grid-metro3 mesonry-list">
                    <div class="resizer"></div>
                    <!-- Start Single Portfolio  -->
                    <div class="portfolio-3 cat--1 cat--3">
                        <div class="rainbow-card portfolio">
                            <div class="inner">
                                <div class="thumbnail">
                                    <figure class="card-image">
                                        <a href="portfolio-details.html">
                                            <img src="./assets/images/portfolio/portfolio-01.jpg" alt="Portfolio-01">
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
                    <div class="portfolio-3 cat--2 cat--1" style="position: absolute; left: 33.2574%; top: 0px;">
                        <div class="rainbow-card portfolio">
                            <div class="inner">
                                <div class="thumbnail">
                                    <figure class="card-image">
                                        <a href="portfolio-details.html">
                                            <img src="./assets/images/portfolio/portfolio-02.jpg" alt="Portfolio-01">
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
                    <div class="portfolio-3 cat--3 cat--2 cat--1" style="position: absolute; left: 66.5907%; top: 0px;">
                        <div class="rainbow-card portfolio">
                            <div class="inner">
                                <div class="thumbnail">
                                    <figure class="card-image">
                                        <a href="portfolio-details.html">
                                            <img src="./assets/images/portfolio/portfolio-03.jpg" alt="Portfolio-01">
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
                    <div class="portfolio-3 cat--3 cat--2" style="position: absolute; left: 0%; top: 415px;">
                        <div class="rainbow-card portfolio">
                            <div class="inner">
                                <div class="thumbnail">
                                    <figure class="card-image">
                                        <a href="portfolio-details.html">
                                            <img src="./assets/images/portfolio/portfolio-04.jpg" alt="Portfolio-01">
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
                    <div class="portfolio-3 cat--2 cat--1" style="position: absolute; left: 33.2574%; top: 415px;">
                        <div class="rainbow-card portfolio">
                            <div class="inner">
                                <div class="thumbnail">
                                    <figure class="card-image">
                                        <a href="portfolio-details.html">
                                            <img src="./assets/images/portfolio/portfolio-05.jpg" alt="Portfolio-01">
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
                    <div class="portfolio-3 cat--3 cat--2 cat--1" style="position: absolute; left: 66.5907%; top: 415px;">
                        <div class="rainbow-card portfolio">
                            <div class="inner">
                                <div class="thumbnail">
                                    <figure class="card-image">
                                        <a href="portfolio-details.html">
                                            <img src="./assets/images/portfolio/portfolio-06.jpg" alt="Portfolio-01">
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
<!-- Start Seperator Area  -->
<div class="rbt-separator-mid">
    <div class="container">
        <hr class="rbt-separator m-0">
    </div>
</div>
<!-- End Seperator Area  -->

<!-- Start Timeline-Style-One  -->
<div class="rainbow-timeline-area rainbow-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h4 class="subtitle "><span class="theme-gradient">Working Process
                        </span></h4>
                    <h2 class="title w-600 mb--20">Business Working Process.</h2>
                    <p class="description b1">We provide company and finance service for <br> startups and
                        company business.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="rainbow-timeline-wrapper timeline-style-one position-relative">
                    <div class="timeline-line"></div>
                    <div class="single-timeline mt--50">
                        <div class="timeline-dot">
                            <div class="time-line-circle"></div>
                        </div>
                        <div class="single-content">
                            <div class="inner">
                                <div class="row row--30 align-items-center">
                                    <div class="col-lg-6 mt_md--40 mt_sm--40 order-2 order-lg-1">
                                        <div class="content">
                                            <span class="date-of-timeline">Step-1</span>
                                            <h2 class="title" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">Your working process you can present.</h2>
                                            <p class="description" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">Lorem ipsum dolor sit amet at —
                                                consectetur adipisicing elit. Hic, expedita. Incidunt
                                                laboriosam.</p>
                                            <div class="row row--30">
                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <div class="working-list">
                                                        <h5 class="working-title" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">Gain
                                                            your works</h5>
                                                        <p data-sal="slide-up" data-sal-duration="700" data-sal-delay="400">Lorem ipsum dolor sit amet at
                                                            consectetur
                                                            adipisicing</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <div class="working-list">
                                                        <h5 class="working-title" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">Working
                                                            process</h5>
                                                        <p data-sal="slide-up" data-sal-duration="700" data-sal-delay="400">Lorem ipsum dolor sit amet at
                                                            consectetur
                                                            adipisicing</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="read-morebtn" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">
                                                <a class="btn-default btn-large round" href="contact.html"><span>Get Started Now</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 order-1 order-lg-2">
                                        <div class="thumbnail">
                                            <img class="w-100" src="assets/images/timeline/timeline-01.jpg" alt="Corporate Html Template">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-timeline mt--50">
                        <div class="timeline-dot">
                            <div class="time-line-circle"></div>
                        </div>
                        <div class="single-content">
                            <div class="inner">
                                <div class="row row--30 align-items-center">
                                    <div class="col-lg-6 mt_md--40 mt_sm--40 order-2 order-lg-1">
                                        <div class="content">
                                            <span class="date-of-timeline">Step-2</span>
                                            <h2 class="title" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">Our compnay working process to present.
                                            </h2>
                                            <p class="description" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">Lorem ipsum dolor sit amet at —
                                                consectetur adipisicing elit. Hic, expedita. Incidunt
                                                laboriosam.</p>
                                            <div class="row row--30">
                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <div class="working-list">
                                                        <h5 class="working-title" data-sal="slide-up" data-sal-duration="700" data-sal-delay="350">Follow
                                                            this process</h5>
                                                        <p data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">Lorem ipsum dolor sit amet at
                                                            consectetur
                                                            adipisicing</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <div class="working-list">
                                                        <h5 class="working-title" data-sal="slide-up" data-sal-duration="700" data-sal-delay="350">Working
                                                            experience</h5>
                                                        <p data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">Lorem ipsum dolor sit amet at
                                                            consectetur
                                                            adipisicing</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="read-morebtn" data-sal="slide-up" data-sal-duration="700" data-sal-delay="400">
                                                <a class="btn-default btn-large round" href="contact.html">
                                                    <span>Get Started Now</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 order-1 order-lg-2">
                                        <div class="thumbnail">
                                            <img class="w-100" src="assets/images/timeline/timeline-02.jpg" alt="Corporate Html Template">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Timeline-Style-One  -->

<!-- Start Seperator Area  -->
<div class="rbt-separator-mid">
    <div class="container">
        <hr class="rbt-separator m-0">
    </div>
</div>
<!-- End Seperator Area  -->

<div class="rainbow-video-area rainbow-section-gapBottom ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rainbow-gallery icon-center video-gallery-content slider-bg-image bg-image4" data-black-overlay="7">
                    <div class="overlay-content"><a class="btn-default rounded-player sm-size popup-video" href="https://www.youtube.com/watch?v=tj9-MGHCs38"><span>
                                <i class="feather-play"></i>
                            </span></a>
                        <h3 class="title">Watch the creative process behind <br> the digital marketing.</h3>
                    </div>
                    <div class="video-lightbox-wrapper"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Seperator Area  -->
<div class="rbt-separator-mid">
    <div class="container">
        <hr class="rbt-separator m-0">
    </div>
</div>
<!-- End Seperator Area  -->


<!-- Start final testimonial  -->
<div class="rainbow-testimonial-area rainbow-section-gap">
    <div class="container">
        <div class="row mb--20">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h4 class="subtitle "><span class="theme-gradient">Client Feedback</span></h4>
                    <h2 class="title w-600 mb--20">Our Clients Feedback.</h2>
                    <p class="description b1">We provide company and finance service for <br> startups and
                        company business.</p>
                </div>
            </div>
        </div>
        <div class="row rainbow-slick-dot rainbow-slick-arrow testimonial-activation row">

            <div class="col-lg-12">
                <!-- Start single Testimonial -->
                <div class="testimonial-style-two " tabindex="-1" style="width: 100%; display: inline-block;">
                    <div class="row align-items-center row--20">
                        <div class="order-2 order-md-1 col-lg-6 col-md-8 offset-lg-1">
                            <div class="content mt_sm--40"><span class="form">POLAND</span>
                                <p class="description">What I am primarily looking for with new projects is a
                                    fit on both a visual and aesthetic level as well as on a personal level with
                                    the client.
                                </p>
                                <div class="client-info">
                                    <h4 class="title">Janen</h4>
                                    <h6 class="subtitle">App Developer</h6>
                                </div>
                            </div>
                        </div>
                        <div class="order-1 order-md-2 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img class="w-100" src="assets/images/testimonial/testimonial-dark-01.jpg" alt="Corporate Template">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single Testimonial -->
            </div>


            <div class="call-lg-12">
                <!-- Start single Testimonial -->
                <div class="testimonial-style-two " tabindex="-1" style="width: 100%; display: inline-block;">
                    <div class="row align-items-center row--20">
                        <div class="order-2 order-md-1 col-lg-6 col-md-8 offset-lg-1">
                            <div class="content mt_sm--40"><span class="form">GERMANY</span>
                                <p class="description">What I am primarily looking for with
                                    new projects is a fit on both a visual and aesthetic
                                    level as well as on a personal level with the client.
                                </p>
                                <div class="client-info">
                                    <h4 class="title">Kohn Hue</h4>
                                    <h6 class="subtitle">App Developer</h6>
                                </div>
                            </div>
                        </div>
                        <div class="order-1 order-md-2 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img class="w-100" src="assets/images/testimonial/testimonial-dark-02.jpg" alt="Corporate Template">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single Testimonial -->
            </div>

            <div class="coll-lg-12">
                <!-- Start single Testimonial -->
                <div class="testimonial-style-two " tabindex="-1" style="width: 100%; display: inline-block;">
                    <div class="row align-items-center row--20">
                        <div class="order-2 order-md-1 col-lg-6 col-md-8 offset-lg-1">
                            <div class="content mt_sm--40"><span class="form">USA</span>
                                <p class="description">What I am primarily looking for with
                                    new projects is a fit on both a visual and aesthetic
                                    level as well as on a personal level with the client.
                                </p>
                                <div class="client-info">
                                    <h4 class="title">John Due</h4>
                                    <h6 class="subtitle">App Developer</h6>
                                </div>
                            </div>
                        </div>
                        <div class="order-1 order-md-2 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img class="w-100" src="assets/images/testimonial/testimonial-dark-03.jpg" alt="Corporate Template">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single Testimonial -->
            </div>

        </div>
    </div>
</div>
<!-- End final testimonial  -->

<!-- Start Seperator Area  -->
<div class="rbt-separator-mid">
    <div class="container">
        <hr class="rbt-separator m-0">
    </div>
</div>
<!-- End Seperator Area  -->

<!-- Start Blog Area  -->
<div class="rainbow-blog-area rainbow-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h4 class="subtitle "><span class="theme-gradient">Latests News</span></h4>
                    <h2 class="title w-600 mb--20">Our Latest News.</h2>
                    <p class="description b1">We provide company and finance service for <br> startups and
                        company business.</p>
                </div>
            </div>
        </div>
        <div class="row row--15">
            <div class="col-lg-4 col-md-6 col-12 mt--30" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                <div class="rainbow-card box-card-style-default">
                    <div class="inner">
                        <div class="thumbnail">
                            <a class="image" href="blog-details.html">
                                <img class="w-100" src="assets/images/blog-grid/blog-01.jpg" alt="Blog Image">
                            </a>
                        </div>
                        <div class="content">
                            <ul class="rainbow-meta-list">
                                <li><a href="#">Irin Pervin</a></li>
                                <li class="separator">/</li>
                                <li>10 Dec 2021</li>
                            </ul>
                            <h4 class="title"><a href="blog-details.html">Best Corporate Tips You
                                    Will
                                    Read This Year.</a></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mt--30" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                <div class="rainbow-card box-card-style-default">
                    <div class="inner">
                        <div class="thumbnail">
                            <a class="image" href="blog-details.html">
                                <img class="w-100" src="assets/images/blog-grid/blog-02.jpg" alt="Blog Image">
                            </a>
                        </div>
                        <div class="content">
                            <ul class="rainbow-meta-list">
                                <li><a href="#">Fatima Asrafy</a></li>
                                <li class="separator">/</li>
                                <li>30 Nov 2021</li>
                            </ul>
                            <h4 class="title"><a href="blog-details.html">Should Fixing Corporate
                                    Take
                                    100 Steps.</a></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mt--30" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">
                <div class="rainbow-card box-card-style-default">
                    <div class="inner">
                        <div class="thumbnail">
                            <a class="image" href="blog-details.html">
                                <img class="w-100" src="assets/images/blog-grid/blog-03.jpg" alt="Blog Image">
                            </a>
                        </div>
                        <div class="content">
                            <ul class="rainbow-meta-list">
                                <li><a href="#">John Dou</a></li>
                                <li class="separator">/</li>
                                <li>12 Oct 2021</li>
                            </ul>
                            <h4 class="title"><a href="blog-details.html">The Next 100 Things To
                                    Immediately Do About.</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog Area  -->

<!-- Start Call To Action Area  -->
<div class="rainbow-callto-action-area rainbow-section-gapBottom">
    <div class="wrapper">
        <div class="rainbow-callto-action clltoaction-style-default style-5">
            <div class="container">
                <div class="row row--0 align-items-center content-wrapper theme-shape">
                    <div class="col-lg-12">
                        <div class="inner">
                            <div class="content text-center">
                                <h2 class="title">Ready to start creating a standard website?</h2>
                                <h6 class="subtitle">Finest choice for your home &amp; office</h6>
                                <div class="call-to-btn">
                                    <a class="btn-default btn-icon" href="#">Purchase Doob
                                        <i class="feather-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Call To Action Area  -->

<!-- Start Footer Area  -->
<footer class="rainbow-footer footer-style-default footer-style-1">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="rainbow-footer-widget">
                        <div class="logo">
                            <a href="index.html">
                                <img class="logo-light" src="assets/images/logo/logo.png" alt="Corporate Logo">
                                <img class="logo-dark" src="assets/images/logo/logo-dark.png" alt="Corporate Logo">
                            </a>
                        </div>
                        <h3 class="text-big">Elevate Your Business with ITFIN Expert.</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="rainbow-footer-widget">
                        <div class="widget-menu-top">
                            <h4 class="title">Services</h4>
                            <div class="inner">
                                <ul class="footer-link link-hover">
                                    <li><a href="wa.me/6285704945420">Sales</a></li>
                                    <li><a href="wa.me/6285704945420">Technical Support</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget-menu-bottom">
                            <h4 class="title">Products</h4>
                            <div class="inner">
                                <ul class="footer-link link-hover">
                                    <li><a href="/portfolio">Portfolio</a></li>
                                    <li><a href="/contact">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="rainbow-footer-widget">
                        <div class="widget-menu-top">
                            <h4 class="title">Company</h4>
                            <div class="inner">
                                <ul class="footer-link link-hover">
                                    <li><a href="/about">About</a></li>
                                    <li><a href="maps.google">Maps</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget-menu-bottom">
                            <h4 class="title">Solutions</h4>
                            <div class="inner">
                                <ul class="footer-link link-hover">
                                    <li><a href="instagram.com/itfin">Gallery</a></li>
                                    <li><a href="/testimonial">Testimonial</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="rainbow-footer-widget">
                        <h4 class="title">Newsletter</h4>
                        <div class="inner">
                            <h6 class="subtitle">Our clients are satisfied with our work</h6>
                            <form class="newsletter-form" action="#">
                                <div class="form-group">
                                    <input type="email" placeholder="Enter Your Email Here">
                                </div>
                                <div class="form-group">
                                    <button class="btn-default" type="submit">Reach Us Now</button>
                                </div>
                            </form>
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
                    <p class="copyright-text">© ITFIN Expert 2025</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Copy Right Area  -->
@endsection