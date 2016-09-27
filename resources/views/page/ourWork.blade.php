@extends('app')

@section('portfolio')
    active
@stop

@section('content')
        <!-- Page Banner -->
    <div id="page-banner" class="page-banner">
        <img src="{{ asset('assets/images/page-banner.png')}}" alt="page-banner" />
        <!-- container -->
        <div class="page-detail">
            <div class="container">
                <h3 class="page-title">Portfolios</h3>
                <div class="page-breadcrumb pull-right">
                    <ol class="breadcrumb">
                        <li><a title="Home" href="{{url('/')}}">Home</a></li>
                        <li>portfolio</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- container /- -->
    </div><!-- Page Banner /- -->

    <!-- Portfolio Section -->
    <div id="portfolio-section" class="portfolio-section ow-section">
        <!-- Section Header -->
        <div class="section-header">
            <h3>See our Latest Projects</h3>
            <img src="{{ asset('assets/images/portfolio/portfolio-heading-bg.png')}}" alt="heading bg" />
        </div><!-- Section Header /- -->
        <!-- Portfolio Content -->
        <div class="portfolio-content">
            <!-- portfolio-categories -->
            <ul class="portfolio-categories sorting-menu">
                <li data-value="all"><a title="Portfolio Filter All" class="active" href="#">ALL</a></li>
                <li data-value="house"><a title="Portfolio Filter House Cleaning" href="#">house cleaning</a></li>
                <li data-value="commercial"><a title="Portfolio Filter Commercial Cleaning" href="#">Commercial cleaning</a></li>
                <li data-value="green"><a title="Portfolio Filter Green Cleaning" href="#">green cleaning</a></li>
                <li data-value="carpet"><a title="Portfolio Filter Carpet Cleaning" href="#">carpet cleaning</a></li>
                <li data-value="others"><a title="Portfolio Filter ALl" href="#">others</a></li>
            </ul><!-- portfolio-categories /- -->
            <!-- Portfolio List -->
            <ul class="portfolio-list no-space">
                <!-- col-md-3 -->
                <li class="col-md-3 col-sm-4 col-xs-6" data-type="house" data-id="house-1">
                    <div class="portfolio-image-block">
                        <a title="Portfolio image" href="#"><img src="{{ asset('assets/images/portfolio/portfolio-1.jpg')}}" alt="portfolio image 1"></a>
                        <div class="portfolio-block-hover">
                            <a title="Visha Office Cleaning" href="#" class="portfolio-title">visha office cleaning</a>
                            <p>Commercial, Window</p>
                            <hr>
                            <div class="zoom-link">
                                <a title="Search Icon" href="{{ asset('assets/images/portfolio/portfolio-1.jpg')}}"><i class="fa fa-search"></i></a>
                                <a title="Link" href="portfolio-details.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </li><!-- col-md-3 /- -->

                <!-- col-md-3 -->
                <li class="col-md-3 col-sm-4 col-xs-6" data-type="commercial" data-id="commercial-1">
                    <div class="portfolio-image-block">
                        <a title="Portfolio image" href=".html#"><img src="{{ asset('assets/images/portfolio/portfolio-2.jpg')}}" alt="portfolio image 1"></a>
                        <div class="portfolio-block-hover">
                            <a title="Visha Office Cleaning" href="#" class="portfolio-title">visha office cleaning</a>
                            <p>Commercial, Window</p>
                            <hr>
                            <div class="zoom-link">
                                <a title="Search Icon" href="{{ asset('assets/images/portfolio/portfolio-2.jpg')}}"><i class="fa fa-search"></i></a>
                                <a title="Link" href="portfolio-details.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </li><!-- col-md-3 /- -->

                <!-- col-md-3 -->
                <li class="col-md-3 col-sm-4 col-xs-6" data-type="green" data-id="green-1">
                    <div class="portfolio-image-block">
                        <a title="Portfolio image" href=".html#"><img src="{{ asset('assets/images/portfolio/portfolio-3.jpg')}}" alt="portfolio image 1"></a>
                        <div class="portfolio-block-hover">
                            <a title="Visha Office Cleaning" href="#" class="portfolio-title">visha office cleaning</a>
                            <p>Commercial, Window</p>
                            <hr>
                            <div class="zoom-link">
                                <a title="Search Icon" href="{{ asset('assets/images/portfolio/portfolio-3.jpg')}}"><i class="fa fa-search"></i></a>
                                <a title="Link" href="portfolio-details.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </li><!-- col-md-3 /- -->

                <!-- col-md-3 -->
                <li class="col-md-3 col-sm-4 col-xs-6" data-type="carpet" data-id="carpet-1">
                    <div class="portfolio-image-block">
                        <a title="Portfolio image" href=".html#"><img src="{{ asset('assets/images/portfolio/portfolio-4.jpg')}}" alt="portfolio image 1"></a>
                        <div class="portfolio-block-hover">
                            <a title="Visha Office Cleaning" href="#" class="portfolio-title">visha office cleaning</a>
                            <p>Commercial, Window</p>
                            <hr>
                            <div class="zoom-link">
                                <a title="Search Icon" href="{{ asset('assets/images/portfolio/portfolio-4.jpg')}}"><i class="fa fa-search"></i></a>
                                <a title="Link" href="portfolio-details.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </li><!-- col-md-3 /- -->

                <!-- col-md-3 -->
                <li class="col-md-3 col-sm-4 col-xs-6" data-type="others" data-id="others-1">
                    <div class="portfolio-image-block">
                        <a title="Portfolio image" href=".html#"><img src="{{ asset('assets/images/portfolio/portfolio-5.jpg')}}" alt="portfolio image 1"></a>
                        <div class="portfolio-block-hover">
                            <a title="Visha Office Cleaning" href="#" class="portfolio-title">visha office cleaning</a>
                            <p>Commercial, Window</p>
                            <hr>
                            <div class="zoom-link">
                                <a title="Search Icon" href="{{ asset('assets/images/portfolio/portfolio-5.jpg')}}"><i class="fa fa-search"></i></a>
                                <a title="Link" href="portfolio-details.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </li><!-- col-md-3 /- -->

                <!-- col-md-3 -->
                <li class="col-md-3 col-sm-4 col-xs-6" data-type="carpet" data-id="carpet-2">
                    <div class="portfolio-image-block">
                        <a title="Portfolio image" href=".html#"><img src="{{ asset('assets/images/portfolio/portfolio-6.jpg')}}" alt="portfolio image 1"></a>
                        <div class="portfolio-block-hover">
                            <a title="Visha Office Cleaning" href="#" class="portfolio-title">visha office cleaning</a>
                            <p>Commercial, Window</p>
                            <hr>
                            <div class="zoom-link">
                                <a title="Search Icon" href="{{ asset('assets/images/portfolio/portfolio-6.jpg')}}"><i class="fa fa-search"></i></a>
                                <a title="Link" href="portfolio-details.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </li><!-- col-md-3 /- -->

                <!-- col-md-3 -->
                <li class="col-md-3 col-sm-4 col-xs-6" data-type="green" data-id="green-2">
                    <div class="portfolio-image-block">
                        <a title="Portfolio image" href=".html#"><img src="{{ asset('assets/images/portfolio/portfolio-7.jpg')}}" alt="portfolio image 1"></a>
                        <div class="portfolio-block-hover">
                            <a title="Visha Office Cleaning" href="#" class="portfolio-title">visha office cleaning</a>
                            <p>Commercial, Window</p>
                            <hr>
                            <div class="zoom-link">
                                <a title="Search Icon" href="{{ asset('assets/images/portfolio/portfolio-7.jpg')}}"><i class="fa fa-search"></i></a>
                                <a title="Link" href="portfolio-details.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </li><!-- col-md-3 /- -->

                <!-- col-md-3 -->
                <li class="col-md-3 col-sm-4 col-xs-6" data-type="others" data-id="others-2">
                    <div class="portfolio-image-block">
                        <a title="Portfolio image" href=".html#"><img src="{{ asset('assets/images/portfolio/portfolio-8.jpg')}}" alt="portfolio image 1"></a>
                        <div class="portfolio-block-hover">
                            <a title="Visha Office Cleaning" href="#" class="portfolio-title">visha office cleaning</a>
                            <p>Commercial, Window</p>
                            <hr>
                            <div class="zoom-link">
                                <a title="Search Icon" href="{{ asset('assets/images/portfolio/portfolio-8.jpg')}}"><i class="fa fa-search"></i></a>
                                <a title="Link" href="portfolio-details.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </li><!-- col-md-3 /- -->
            </ul><!-- Portfolio List -->
        </div><!-- Portfolio Content /- -->
        <a  title="Load More" href="#" class="btn">Load More</a>
    </div><!-- Portfolio Section /- -->


@stop