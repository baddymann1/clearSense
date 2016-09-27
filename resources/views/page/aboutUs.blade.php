@extends('app')

@section('about')
    active
@stop
@section('content')
        <!-- Page Banner -->
<div id="page-banner" class="page-banner">
    <img src="{{ asset('assets/images/page-banner.png')}}" alt="page-banner" />
    <!-- container -->
    <div class="page-detail">
        <div class="container">
            <h3 class="page-title">About Us</h3>
            <div class="page-breadcrumb pull-right">
                <ol class="breadcrumb">
                    <li><a title="Home" href="index-2.html">Home</a></li>
                    <li>About</li>
                </ol>
            </div>
        </div>
    </div><!-- container /- -->
</div><!-- Page Banner /- -->

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
            <a href="#">About More</a>
            <a href="#">workers</a>
            <div class="welcome-content-box row">
                <div class="col-md-4 col-sm-6 welcome-box">
                    <img src="{{ asset('assets/images/welcome/high-trained-staff.png') }}" alt="high trained staff" />
                    <h4>HIGHLY-TRAINED STAFF</h4>
                    <p>Beatae vitae dicta sunt explicabonie seni sai th ipsam voluptatem.</p>
                </div>
                <div class="col-md-4 col-sm-6 welcome-box">
                    <img src="{{ asset('assets/images/welcome/quality-cleaning-staff.png')}}" alt="quality-cleaning-staff" />
                    <h4>QULAITY CLEANING TOOLS</h4>
                    <p>Beatae vitae dicta sunt explicabonie seni sai th ipsam voluptatem.</p>
                </div>
                <div class="col-md-4 col-sm-6 welcome-box">
                    <img src="{{ asset('assets/images/welcome/fast-service.png')}}" alt="fast-service" />
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
                <h3><img src="{{ asset('assets/images/icon/sep-icon.png')}}" alt="sep-icon" /> clever staffs</h3>
            </div><!-- Section Header /- -->
            <p>Totam rem aperiam, eaque ipsa quae inventore veritatis et quasi architect beatae vitae dicta sunt expleo. nemo enim ipsam voluptatem quia.</p>
        </div><!-- col-md-3 /- -->

        <!-- col-md-9 -->
        <div class="col-md-9 col-sm-8">
            <div id="make-clean-team" class="owl-carousel owl-theme team-style1">
                <div class="item">
                    <div class="team-box">
                        <img src="{{ asset('assets/images/team/team-1.png')}}" alt="team" />
                        <div class="team-box-inner">
                            <img src="{{ asset('assets/images/team/team-icon.png')}}" alt="team icon" />
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
                            <img src="{{ asset('assets/images/team/team-icon.png')}}" alt="team icon" />
                            <h4>BENJAMIN THOMAS</h4>
                            <hr>
                            <p>Office Clenaer</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-box">
                        <img src="{{ asset('assets/images/team/team-3.png')}}" alt="team" />
                        <div class="team-box-inner">
                            <img src="{{ asset('assets/images/team/team-icon.png')}}" alt="team icon" />
                            <h4>BENJAMIN THOMAS</h4>
                            <hr>
                            <p>Office Clenaer</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-box">
                        <img src="{{ asset('assets/images/team/team-1.png')}}" alt="team" />
                        <div class="team-box-inner">
                            <img src="{{ asset('assets/images/team/team-icon.png')}}" alt="team icon" />
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
                            <img src="{{ asset('assets/images/team/team-icon.png')}}" alt="team icon" />
                            <h4>BENJAMIN THOMAS</h4>
                            <hr>
                            <p>Office Clenaer</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-box">
                        <img src="{{ asset('assets/images/team/team-3.png')}}" alt="team" />
                        <div class="team-box-inner">
                            <img src="{{ asset('assets/images/team/team-icon.png')}}" alt="team icon" />
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

<!-- Testimonial -->
<div id="testimonial-section" class="testimonial-section ow-section">
    <!-- container -->
    <div class="container">
        <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="testimonial-box">
                        <img src="{{ asset('assets/images/icon/comment.png')}}" alt="comment" />
                        <h3>clients say About us</h3>
                        <hr>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium
                            veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <img src="{{ asset('assets/images/testimonial/testi-1.png')}}" alt="testi" class="author-testi" />
                        <h4>Jhon Doe, Company inc.</h4>
                    </div>
                </div>

                <div class="item">
                    <div class="testimonial-box">
                        <img src="{{ asset('assets/images/icon/comment.png')}}" alt="comment" />
                        <h3>clients say About us</h3>
                        <hr>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium
                            veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <img src="{{ asset('assets/images/testimonial/testi-1.png')}}" alt="testi" class="author-testi" />
                        <h4>Jhon Doe, Company inc.</h4>
                    </div>
                </div>

                <div class="item">
                    <div class="testimonial-box">
                        <img src="{{ asset('assets/images/icon/comment.png')}}" alt="comment" />
                        <h3>clients say About us</h3>
                        <hr>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium
                            veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <img src="{{ asset('assets/images/testimonial/testi-1.png')}}" alt="testi" class="author-testi" />
                        <h4>Jhon Doe, Company inc.</h4>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#testimonial-carousel" role="button" data-slide="prev">
                <span class="fa fa-long-arrow-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#testimonial-carousel" role="button" data-slide="next">
                <span class="fa fa-long-arrow-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div><!-- container /- -->
</div><!-- Testimonial -->

<!-- Partners Section -->
<div id="partner-section" class="partner-section ow-section partners-background">
    <!-- container -->
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <h3><img src="{{ asset('assets/images/icon/sep-icon.png')}}" alt="sep-icon" />clients & partners</h3>
        </div><!-- Section Header /- -->
        <div id="make-clean-partner" class="owl-carousel owl-theme">
            <div class="item">
                <a title="Partner-Logo" class="partner-logo" href="#"><img src="{{ asset('assets/images/partners/partners-1.png')}}" alt="partners" /></a>
            </div>
            <div class="item">
                <a title="Partner-Logo" class="partner-logo" href="#"><img src="{{ asset('assets/images/partners/partners-2.png')}}" alt="partners" /></a>
            </div>
            <div class="item">
                <a title="Partner-Logo" class="partner-logo" href="#"><img src="{{ asset('assets/images/partners/partners-3.png')}}" alt="partners" /></a>
            </div>
            <div class="item">
                <a title="Partner-Logo" class="partner-logo" href="#"><img src="{{ asset('assets/images/partners/partners-4.png')}}" alt="partners" /></a>
            </div>
            <div class="item">
                <a title="Partner-Logo" class="partner-logo" href="#"><img src="{{ asset('assets/images/partners/partners-5.png')}}" alt="partners" /></a>
            </div>
            <div class="item">
                <a title="Partner-Logo" class="partner-logo" href="#"><img src="{{ asset('assets/images/partners/partners-6.png')}}" alt="partners" /></a>
            </div>
            <div class="item">
                <a title="Partner-Logo" class="partner-logo" href="#"><img src="{{ asset('assets/images/partners/partners-1.png')}}" alt="partners" /></a>
            </div>
            <div class="item">
                <a title="Partner-Logo" class="partner-logo" href="#"><img src="{{ asset('assets/images/partners/partners-2.png')}}" alt="partners" /></a>
            </div>
        </div>
    </div><!-- container /- -->
</div><!-- Partners Section /- -->

@stop