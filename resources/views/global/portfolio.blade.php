@extends('layouts.app')
@section('content')
<!-- Start Portfolio Area  -->
<div class="rainbow-portfolio-area rainbow-section-gap masonary-wrapper-activation">
    <div class="container-fluid plr--30">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb--50" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">
                    <h4 class="subtitle">
                        <span class="theme-gradient">Always Great Project</span>
                    </h4>
                    <h2 class="title w-600 mb--20">Our Experience in Digital Transformation!</h2>
                    <p class="description b1"></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="rainbow-portfolio-filter filter-button-default messonry-button text-center mb--30">
                    <button data-filter="*" class="is-checked"><span class="filter-text">All</span></button>
                    <button data-filter=".cat--1"><span class="filter-text">Technology</span></button>
                    <button data-filter=".cat--2"><span class="filter-text">Finance</span></button>
                </div>

                <div class="portfolio-items grid-metro3 mesonry-list">
                    <div class="resizer"></div>
                    <!-- Start Single Portfolio  -->
                    <div class="portfolio-3 cat--1">
                        <div class="rainbow-card portfolio">
                            <div class="inner">
                                <div class="thumbnail">
                                    <figure class="card-image">
                                        <a href="portfolio-details.html">
                                            <img src="{{ asset('assets/images/portfolio/portfolio-01.jpg') }}" alt="Portfolio-01">
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
                    <div class="portfolio-3 cat--2">
                        <div class="rainbow-card portfolio">
                            <div class="inner">
                                <div class="thumbnail">
                                    <figure class="card-image">
                                        <a href="portfolio-details.html">
                                            <img src="{{ asset('assets/images/portfolio/portfolio-01.jpg') }}" alt="Portfolio-01">
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
                    <div class="portfolio-3 cat--1">
                        <div class="rainbow-card portfolio">
                            <div class="inner">
                                <div class="thumbnail">
                                    <figure class="card-image">
                                        <a href="portfolio-details.html">
                                            <img src="{{ asset('assets/images/portfolio/portfolio-01.jpg') }}" alt="Portfolio-01">
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
                    <div class="portfolio-3 cat--2">
                        <div class="rainbow-card portfolio">
                            <div class="inner">
                                <div class="thumbnail">
                                    <figure class="card-image">
                                        <a href="portfolio-details.html">
                                            <img src="{{ asset('assets/images/portfolio/portfolio-01.jpg') }}" alt="Portfolio-01">
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
                    <div class="portfolio-3 cat--2">
                        <div class="rainbow-card portfolio">
                            <div class="inner">
                                <div class="thumbnail">
                                    <figure class="card-image">
                                        <a href="portfolio-details.html">
                                            <img src="{{ asset('assets/images/portfolio/portfolio-01.jpg') }}" alt="Portfolio-01">
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
                    <div class="portfolio-3 cat--1">
                        <div class="rainbow-card portfolio">
                            <div class="inner">
                                <div class="thumbnail">
                                    <figure class="card-image">
                                        <a href="portfolio-details.html">
                                            <img src="{{ asset('assets/images/portfolio/portfolio-01.jpg') }}" alt="Portfolio-01">
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
@endsection