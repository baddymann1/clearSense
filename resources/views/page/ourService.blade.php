@extends('app')

@section('services')
     active
@stop
@section('content')
        <!-- Page Banner -->
<div id="page-banner" class="page-banner">
    <img src="{{ asset('assets/images/page-banner.png')}}" alt="page-banner" />
    <!-- container -->
    <div class="page-detail">
        <div class="container">
            <h3 class="page-title">services</h3>
            <div class="page-breadcrumb pull-right">
                <ol class="breadcrumb">
                    <li><a title="Home" href="index-2.html">Home</a></li>
                    <li>Services</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- container /- -->
</div><!-- Page Banner /- -->

<!-- Service Section -->
<section id="service-section" class="service-section ow-section services-style2">
    <!-- container -->
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <h3><img src="{{ asset('assets/images/icon/sep-icon.png')}}" alt="sep-icon" /> service we offer</h3>
        </div><!-- Section Header /- -->

        <div class="service-box col-md-4 col-sm-6">
            <img src="{{ asset('assets/images/services/services-4.png')}}" alt="services" />
            <div class="service-box-inner">
                <h4>House cleaning </h4>
                <p>Magni dolores eos qui ratione kavo uptatem sequi nescin.</p>
                <a title="View Details" href="">view details</a>
            </div>
        </div>
        <div class="service-box col-md-4 col-sm-6">
            <img src="{{ asset('assets/images/services/services-5.png')}}" alt="services" />
            <div class="service-box-inner">
                <h4> Commercial Cleaning</h4>
                <p>Magni dolores eos qui ratione kavo uptatem sequi nescin.</p>
                <a title="View Details" href="">view details</a>
            </div>
        </div>
        <div class="service-box col-md-4 col-sm-6">
            <img src="{{ asset('assets/images/services/services-6.png')}}" alt="services" />
            <div class="service-box-inner">
                <h4>windows Cleaning</h4>
                <p>Magni dolores eos qui ratione kavo uptatem sequi nescin.</p>
                <a title="View Details" href="services-details.html">view details</a>
            </div>
        </div>
        <div class="service-box col-md-4 col-sm-6">
            <img src="{{ asset('assets/images/services/services-7.png')}}" alt="services" />
            <div class="service-box-inner">
                <h4>green cleaning</h4>
                <p>Magni dolores eos qui ratione kavo uptatem sequi nescin.</p>
                <a title="View Details" href="services-details.html">view details</a>
            </div>
        </div>
        <div class="service-box col-md-4 col-sm-6">
            <img src="{{ asset('assets/images/services/services-8.png')}}" alt="services" />
            <div class="service-box-inner">
                <h4>carpet cleaning</h4>
                <p>Magni dolores eos qui ratione kavo uptatem sequi nescin.</p>
                <a title="View Details" href="services-details.html">view details</a>
            </div>
        </div>
        <div class="service-box col-md-4 col-sm-6">
            <img src="{{ asset('assets/images/services/services-9.png')}}" alt="services" />
            <div class="service-box-inner">
                <h4>Vehicle Cleaning</h4>
                <p>Magni dolores eos qui ratione kavo uptatem sequi nescin.</p>
                <a title="View Details" href="services-details.html">view details</a>
            </div>
        </div>
    </div><!-- container /- -->
</section><!-- Service Section /- -->

<!-- Call Out -->
<div id="call-out-section" class="call-out-section ow-background services-call-out">
    <!-- container -->
    <div class="container">
        <div class="call-out-details">
            <div class="call-out-icon">
                <img src="{{ asset('assets/images/icon/are-we-services.png')}}" alt="are-we-services" />
            </div>
            <h3>Area we Service</h3>
            <p>Our Cleaning Company provides House & commercial cleaning services to the Design Southeast
                <span>City area: Canberra, Brisbane and Alice Springs.</span></p>
        </div>
    </div><!-- container /- -->

</div><!-- Call Out /- -->

<!-- Industry Serve -->
<section id="industry-serve-section" class="industry-serve-section ow-section">
    <!-- container -->
    <div class="container">
        <!-- col-md-6 -->
        <div class="col-md-6">
            <!-- Section Header -->
            <div class="section-header">
                <h3><img src="{{ asset('assets/images/icon/sep-icon.png') }}" alt="sep-icon" /> INDUSTRIES WE SERVE</h3>
            </div><!-- Section Header /- -->
            <!-- industry-serve -->
            <div class="industry-serve">
                <p>Architecto beatae vitae dicta sunt explicabo. Nemo eni sai th ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit dolores eos qui ratione.</p>
                <div class="row">
                    <p class="col-md-6 col-sm-6"><img src="{{ asset('assets/images/icon/airline.png') }}" alt="airline" /> Airports & Airlines</p>
                    <p class="col-md-6 col-sm-6"><img src="{{ asset('assets/images/icon/school.png') }}" alt="school" /> Schools & Universities</p>
                    <p class="col-md-6 col-sm-6"><img src="{{ asset('assets/images/icon/auto-mobile.png') }}" alt="auto-mobile" /> Auto Dealerships</p>
                    <p class="col-md-6 col-sm-6"><img src="{{ asset('assets/images/icon/medical.png') }}" alt="medical" /> Medical Facilities</p>
                    <p class="col-md-6 col-sm-6"><img src="{{ asset('assets/images/icon/fitness.png') }}" alt="fitness" /> Sports & Fitness Centers</p>
                    <p class="col-md-6 col-sm-6"><img src="{{ asset('assets/images/icon/entertainment.png') }}" alt="airline" /> Entertainment Venues</p>
                    <a title="View More" href="#">View More</a>
                </div>
            </div><!-- industry-serve -->
        </div><!-- col-md-6 /- -->


        <!-- col-md-6 -->
        <div class="col-md-6">
            <!-- Section Header -->
            <div class="section-header">
                <h3><img src="{{ asset('assets/images/icon/sep-icon.png') }}" alt="sep-icon" /> WHAT OUR CLIENTS SAY</h3>
            </div><!-- Section Header /- -->
            <!-- industry-serve -->
            <div class="industry-serve">
                <div id="testimonial" class="carousel slide testimonial" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#testimonial" data-slide-to="0" class="active"></li>
                        <li data-target="#testimonial" data-slide-to="1"></li>
                        <li data-target="#testimonial" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="{{ asset('assets/images/testimonial/testimonial-1.png') }}" alt="testimonial" />
                            <div class="carousel-caption">
                                <p>Victa sunt explicabo. Nemo eni sai th ipsam satai voluptatem quia voluptas sit aspernatur aut odit fugit sed quia consequuntur magni dolores volup tas sit aspernatur aut odit aut fugit.</p>
                                <h3>- ANNA LUSIA <span>FOUNDER OF XYZ COMPANY</span></h3>
                            </div>
                        </div>

                        <div class="item">
                            <img src="{{ asset('assets/images/testimonial/testimonial-1.png') }}" alt="testimonial" />
                            <div class="carousel-caption">
                                <p>Victa sunt explicabo. Nemo eni sai th ipsam satai voluptatem quia voluptas sit aspernatur aut odit fugit sed quia consequuntur magni dolores volup tas sit aspernatur aut odit aut fugit.</p>
                                <h3>- ANNA LUSIA <span>FOUNDER OF XYZ COMPANY</span></h3>
                            </div>
                        </div>

                        <div class="item">
                            <img src="{{ asset('assets/images/testimonial/testimonial-1.png') }}" alt="testimonial" />
                            <div class="carousel-caption">
                                <p>Victa sunt explicabo. Nemo eni sai th ipsam satai voluptatem quia voluptas sit aspernatur aut odit fugit sed quia consequuntur magni dolores volup tas sit aspernatur aut odit aut fugit.</p>
                                <h3>- ANNA LUSIA <span>FOUNDER OF XYZ COMPANY</span></h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- industry-serve -->
        </div><!-- col-md-6 /- -->
    </div><!-- container /- -->
</section><!-- Industry Serve /- -->



@stop