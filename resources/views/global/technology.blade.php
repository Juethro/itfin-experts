@extends('layouts.app')
@section('content')

<!-- Start Slider Area  -->
<div class="slider-area slider-style-2 variation-2 height-850 bg_image bg_image--10">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xl-6">
                <div class="inner text-left">
                    <h1 class="title display-one">We provide <br> reliable Technology <br> for your business</h1>
                    <h6 class="tag-title">SOLUTION FOR DIGITALIZATION</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slider Area  -->


<!-- Srart About Area  -->
<div class="about-area about-style-4 rainbow-section-gap">
    <div class="container">
        <div class="row row--40 align-items-center">
            <div class="col-lg-6">
                <div class="video-btn">
                    <div class="video-popup icon-center">
                        <div class="overlay-content">
                            <div class="thumbnail">
                                <img class="radius-small" src="{{ asset('assets/images/about/Image-Teknologi-1.png') }}" alt="Corporate Image">
                            </div>
                            {{-- <div class="video-icon">
                                <a class="btn-default rounded-player popup-video" href="https://www.youtube.com/watch?v=tj9-MGHCs38">
                                    <span><i class="feather-play"></i></span>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="video-lightbox-wrapper"></div>
                </div>
            </div>
            <div class="col-lg-6 mt_md--40 mt_sm--40">
                <div class="content">
                    <div class="inner">
                        <h3 class="title">ITFIN Experts in <strong>Technology Development.</strong>
                        </h3>
                        <ul class="feature-list">
                            <li>
                                <div class="icon">
                                    <i class="feather-check"></i>
                                </div>
                                <div class="title-wrapper">
                                    <h4 class="title">Tailored Digital Solutions</h4>
                                    <p class="text">We develop technology-based solutions specifically designed to meet your business needs, ensuring efficiency and scalability.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="feather-check"></i>
                                </div>
                                <div class="title-wrapper">
                                    <h4 class="title">System Security and Reliability</h4>
                                    <p class="text">With high-security standards, we ensure that your system is protected from cyber threats and remains reliable for long-term business operations.</p>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Area  -->


<!-- Start Main Counter up-5 Area  -->
<div class="rainbow-counterup-area rainbow-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700">
                <div class="count-box counter-style-4 text-center">
                    <div>
                        <div class="count-number"><span class="counter">199</span></div>
                    </div>
                    <h5 class="counter-title">Happy Clients.</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                <div class="count-box counter-style-4 text-center">
                    <div>
                        <div class="count-number"><span class="counter">575</span></div>
                    </div>
                    <h5 class="counter-title">Employees</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                <div class="count-box counter-style-4 text-center">
                    <div>
                        <div class="count-number"><span class="counter">69</span></div>
                    </div>
                    <h5 class="counter-title">Useful Programs</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">
                <div class="count-box counter-style-4 text-center">
                    <div>
                        <div class="count-number"><span class="counter">500</span></div>
                    </div>
                    <h5 class="counter-title">Useful Programs</h5>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Main Counter up-5 Area  -->


<!-- Start Seperator Area  -->
<div class="rbt-separator-mid">
    <div class="container">
        <hr class="rbt-separator m-0">
    </div>
</div>
<!-- End Seperator Area  -->


<!-- Start Advance Tab-2  -->
<div class="rainbow-advance-tab-area rainbow-section-gap">
    <div class="container">
        <div class="row mb--40">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h4 class="subtitle "><span class="theme-gradient">Our Service</span></h4>
                    <h2 class="title w-600 mb--20">Our Awesome Tech Service</h2>
                </div>
            </div>
        </div>
        <div class="row row--30">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active advance-tab-content-1" id="home-2" role="tabpanel" aria-labelledby="home-tab-2">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/advance-tab/Image-Web-Dev.png') }}" alt="advance-tab-image">
                        </div>
                    </div>
                    <div class="tab-pane fade advance-tab-content-1" id="profile-2" role="tabpanel" aria-labelledby="profile-tab-2">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/advance-tab/Image-Mobile-App.png') }}" alt="advance-tab-image">
                        </div>
                    </div>
                    <div class="tab-pane fade advance-tab-content-1" id="contact-2" role="tabpanel" aria-labelledby="contact-tab-2">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/advance-tab/Image-Cyber Security.png') }}" alt="advance-tab-image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 mt_md--30 mt_sm--30">
                <div class="advance-tab-button advance-tab-button-1 right-align">
                    <ul class="nav nav-tabs tab-button-list" id="myTab-2" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link tab-button active tabs__tab--selected" id="home-tab-2" data-bs-toggle="tab" data-bs-target="#home-2" role="tab" aria-controls="home-2" aria-selected="true">
                                <div class="tab">
                                    <h4 class="title">Web Development</h4>
                                    <p class="description">We design and develop responsive, high-performance websites tailored to your business needs.</p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link tab-button tabs__tab--selected" id="profile-tab-2" data-bs-toggle="tab" data-bs-target="#profile-2" role="tab" aria-controls="profile-2" aria-selected="false">
                                <div class="tab">
                                    <h4 class="title">Mobile App Development</h4>
                                    <p class="description">We build user-friendly and scalable mobile applications for iOS and Android platforms.</p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link tab-button tabs__tab--selected" id="contact-tab-2" data-bs-toggle="tab" data-bs-target="#contact-2" role="tab" aria-controls="contact-2" aria-selected="false">
                                <div class="tab">
                                    <h4 class="title">Cyber Security</h4>
                                    <p class="description">Protect your business data and systems with advanced cybersecurity solutions, including encryption, threat detection, and protection against cyberattacks.</p>
                                </div>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Advance Tab-2  -->

<!-- Start Seperator Area  -->
<div class="rbt-separator-mid">
    <div class="container">
        <hr class="rbt-separator m-0">
    </div>
</div>
<!-- End Seperator Area  -->

@endsection