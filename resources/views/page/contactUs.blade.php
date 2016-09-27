@extends('app')

@section('contact')
    active
@stop

@section('content')
        <!-- Page Banner -->
    <div id="page-banner" class="page-banner">
        <img src="{{ asset('assets/images/page-banner.png')}}" alt="page-banner" />
        <!-- container -->
        <div class="page-detail">
            <div class="container">
                <h3 class="page-title">Our Contact</h3>
                <div class="page-breadcrumb pull-right">
                    <ol class="breadcrumb">
                        <li><a title="Home" href="index-2.html">Home</a></li>
                        <li><a title="Pages" href="#">Pages</a></li>
                        <li>Contact</li>
                    </ol>
                </div>
            </div>
        </div><!-- container /- -->
    </div><!-- Page Banner /- -->

    <!-- contact Details -->
    <div id="contact-detail" class="contact-detail">
        <!-- container -->
        <div class="container">
            <div class="col-md-4 col-sm-4 col-xs-4 contact-detail-box">
                <img src="{{ asset('assets/images/icon/address-icon.png')}}" alt="Address" />
                <h3>contact Address</h3>
                <p>123 Cleaning Company,</p>
                <p>New Street CA 7854, Park Avenue</p>
                <p>Sydney 25.</p>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-4 contact-detail-box">
                <img src="{{ asset('assets/images/icon/customer-service-icon.png')}}" alt="Address" />
                <h3>24/7 customer service</h3>
                <p>+(01) 800 527 4800</p>
                <p><a title="Mail Title" href="mailto:Makeclean@Example.com">Makeclean@Example.com</a></p>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-4 contact-detail-box">
                <img src="{{ asset('assets/images/icon/area-icon.png')}}" alt="Address" />
                <h3>area we serve</h3>
                <p>Canberra, Brisbane, Sydney, Alice Springs.</p>
                <p>Perth and Cairns.</p>
            </div>
        </div>
        <!-- container /- -->
    </div><!-- contact Details -->

    <!-- Contact Form -->
    <div id="contact" class="contact-form-section ow-section">
        <!-- container -->
        <div class="container">
            <div class="row">
                <h3>Request Service or Estimate </h3>
                <p>Feel free to call us directly or simply complete our form below and we will follow up with you.</p>
                <form class="main-contact-form" method="post">
                    <div class="col-md-6 col-sm-6">
                        <label>Name <span>*</span></label>
                        <input type="text" id="input_name" name="contact-name" required />
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Email <span>*</span></label>
                        <input type="text" id="input_email" name="contact-email" required />
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Phone <span>*</span></label>
                        <input type="text" id="input_phone" name="contact-phone" required />
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Street</label>
                        <input type="text" id="input_street" name="contact-street" />
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Suite, Unit, Apt</label>
                        <input type="text" id="input_category" name="contact-category" />
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>City</label>
                        <input type="text" id="input_city" name="contact-city" />
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>State</label>
                        <input type="text" id="input_state" name="contact-state" />
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Zip Code</label>
                        <input type="text" id="input_zipcode" name="contact-zipcode" />
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>Description of work or services needed</label>
                        <textarea id="textarea_message" name="contact-message"></textarea>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <input type="submit" class="btn" id="btn_smt" value="send Request" />
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div id="alert-msg" class="alert-msg"></div>
                    </div>
                </form>
            </div>
        </div><!-- container /- -->
    </div><!-- Contact Form /- -->

    <!-- Map Section -->
    <div class="map-section">
        <div id="gmap" class="mapping"></div>
    </div>
    <!-- Map Section /- -->

@stop