@extends('app')

@section('home')
   active
@stop
@section('content')
        <!-- Slider Section -->
<div id="slider-section" class="slider-section">
    <div id="make-clean-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#make-clean-slider" data-slide-to="0" class="active"></li>
            <li data-target="#make-clean-slider" data-slide-to="1"></li>
            <li data-target="#make-clean-slider" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{ asset('assets/images/slider/slide-1.jpg') }}" alt="slide">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="col-md-6">
                            <h3>Make your world as Clean As Mine</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('assets/images/slider/slide-1.jpg') }}" alt="slide">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="col-md-6">
                            <h3>Make your world as Clean As Mine</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('assets/images/slider/slide-1.jpg') }}" alt="slide">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="col-md-6">
                            <h3>Make your world as Clean As Mine</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a title="Slider Control" class="left carousel-control" href="#make-clean-slider" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a title="Slider Control" class="right carousel-control" href="#make-clean-slider" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
        <form id="quick-contact" class="contact-form col-md-4" method="post">
            <h3>quick contact form <span>call us anytime !</span></h3>
            <div class="form-control">
                <input type="text" id="quick_name" name="quick-name" placeholder="NAME" required />
                <input type="text" id="quick_phone" name="quick-phone" placeholder="PHONE" />
                <input type="text" id="quick_email" name="quick-email" placeholder="EMAIL" required />
                <textarea id="quick_message" name="quick-message" placeholder="Description of services needed"></textarea>
                <input type="submit" id="btn_submit" name="submit" value="Send Message" />
            </div>
            <div id="alert-msg" class="alert-msg"></div>
        </form>
    </div>
</div><!-- Slider Section /- -->

<!-- Service Section -->
<section id="service-section" class="service-section ow-section">
    <!-- container -->
    <div class="container">

        <!-- Section Header -->
        <div class="section-header">
            <h3><img src="{{ asset('assets/images/icon/sep-icon.png') }}" alt="sep-icon" /> service we offer</h3>
        </div><!-- Section Header /- -->

        <div id="make-clean-service" class="owl-carousel owl-theme services-style1">
            <div class="item">
                <div class="service-box">
                    <img src="{{ asset('assets/images/services/services-1.png') }}" alt="services"/>
                    <div class="service-box-inner">
                        <h4> Office & Commercial Cleaning </h4>
                        <a title="View Details" href="#">view details</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="service-box">
                    <img src="{{ asset('assets/images/services/services-2.png') }}" alt="services"/>
                    <div class="service-box-inner">
                        <h4> Windows & Upholstery Cleaning</h4>
                        <a title="View Details" href="#">view details</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="service-box">
                    <img src="{{ asset('assets/images/services/services-3.png')}}" alt="services"/>
                    <div class="service-box-inner">
                        <h4>House cleaning &amp; Maid Service</h4>
                        <a title="View Details" href="#">view details</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="service-box">
                    <img src="{{ asset('assets/images/services/services-1.png') }}" alt="services"/>
                    <div class="service-box-inner">
                        <h4> Office & Commercial Cleaning </h4>
                        <a title="View Details" href="#">view details</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="service-box">
                    <img src="{{ asset('assets/images/services/services-2.png') }}" alt="services"/>
                    <div class="service-box-inner">
                        <h4> Windows & Upholstery Cleaning</h4>
                        <a title="View Details" href="#">view details</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="service-box">
                    <img src="{{ asset('assets/images/services/services-3.png') }}" alt="services"/>
                    <div class="service-box-inner">
                        <h4>House cleaning &amp; Maid Service</h4>
                        <a title="View Details" href="#">view details</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- container /- -->
</section><!-- Service Section /- -->

<!-- Welcome Section -->
<Section id="welcome-section" class="welcome-section ow-section">
    <!-- container -->
    <div class="container">
        <div class="col-md-4 col-sm-5">
            <img src="{{ asset('assets/images/welcome/welcome-img.png') }}" alt="welcome" />
        </div>
        <div class="col-md-8 col-sm-7 welcome-content">
            <!-- Section Header -->
            <div class="section-header">
                <h3>welcome to our make clean</h3>
            </div><!-- Section Header /- -->
            <p>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo eni sai th ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione kavosvo uptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore</p>
            <a title="Button" href="#">About More</a>
            <a title="Button" href="#">workers</a>
            <div class="welcome-content-box row">
                <div class="col-md-4 col-sm-6 welcome-box">
                    <img src="{{ asset('assets/images/welcome/high-trained-staff.png')}}" alt="high trained staff" />
                    <h4>HIGHLY-TRAINED STAFF</h4>
                    <p>Beatae vitae dicta sunt explicabonie seni sai th ipsam voluptatem.</p>
                </div>
                <div class="col-md-4 col-sm-6 welcome-box">
                    <img src="{{ asset('assets/images/welcome/quality-cleaning-staff.png') }}" alt="quality-cleaning-staff" />
                    <h4>QULAITY CLEANING TOOLS</h4>
                    <p>Beatae vitae dicta sunt explicabonie seni sai th ipsam voluptatem.</p>
                </div>
                <div class="col-md-4 col-sm-6 welcome-box">
                    <img src="{{ asset('assets/images/welcome/fast-service.png') }}" alt="fast-service" />
                    <h4>Fast & Effective SERVICE</h4>
                    <p>Beatae vitae dicta sunt explicabonie seni sai th ipsam voluptatem.</p>
                </div>
            </div>
        </div>
    </div><!-- container /- -->
</section><!-- Welcome Section /- -->

<!-- Team Section -->
<section id="team-section" class="team-section ow-section">
    <!-- container -->
    <div class="container">
        <!-- col-md-3 -->
        <div class="col-md-3 col-sm-4">
            <!-- Section Header -->
            <div class="section-header">
                <h3><img src="{{ asset('assets/images/icon/sep-icon.png') }}" alt="sep-icon" /> clever staffs</h3>
            </div><!-- Section Header /- -->
            <p>Totam rem aperiam, eaque ipsa quae inventore veritatis et quasi architect beatae vitae dicta sunt expleo. nemo enim ipsam voluptatem quia.</p>
        </div><!-- col-md-3 /- -->

        <!-- col-md-9 -->
        <div class="col-md-9 col-sm-8">
            <div id="make-clean-team" class="owl-carousel owl-theme team-style1">
                <div class="item">
                    <div class="team-box">
                        <img src="{{ asset('assets/images/team/team-1.png') }}" alt="team" />
                        <div class="team-box-inner">
                            <img src="{{ asset('assets/images/team/team-icon.png') }}" alt="team icon" />
                            <h4>BENJAMIN THOMAS</h4>
                            <hr>
                            <p>Office Clenaer</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-box">
                        <img src="{{ asset('assets/images/team/team-2.png')}}" alt="team" />
                        <div class="team-box-inner">
                            <img src="{{ asset('assets/images/team/team-icon.png') }}" alt="team icon" />
                            <h4>BENJAMIN THOMAS</h4>
                            <hr>
                            <p>Office Clenaer</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-box">
                        <img src="{{ asset('assets/images/team/team-3.png') }}" alt="team" />
                        <div class="team-box-inner">
                            <img src="{{ asset('assets/images/team/team-icon.png') }}" alt="team icon" />
                            <h4>BENJAMIN THOMAS</h4>
                            <hr>
                            <p>Office Clenaer</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-box">
                        <img src="{{ asset('assets/images/team/team-1.png') }}" alt="team" />
                        <div class="team-box-inner">
                            <img src="{{ asset('assets/images/team/team-icon.png') }}" alt="team icon" />
                            <h4>BENJAMIN THOMAS</h4>
                            <hr>
                            <p>Office Clenaer</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-box">
                        <img src="{{ asset('assets/images/team/team-2.png') }}" alt="team" />
                        <div class="team-box-inner">
                            <img src="{{ asset('assets/images/team/team-icon.png') }}" alt="team icon" />
                            <h4>BENJAMIN THOMAS</h4>
                            <hr>
                            <p>Office Clenaer</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-box">
                        <img src="{{ asset('assets/images/team/team-3.png') }}" alt="team" />
                        <div class="team-box-inner">
                            <img src="{{ asset('assets/images/team/team-icon.png') }}" alt="team icon" />
                            <h4>BENJAMIN THOMAS</h4>
                            <hr>
                            <p>Office Clenaer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- col-md-9 /- -->
    </div><!-- container /- -->
</section><!-- Team Section /- -->

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