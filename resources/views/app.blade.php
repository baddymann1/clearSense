<!doctype html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">	
	<title>Clear Sense Ltd</title>
		
	<link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
    <link href="{{ asset('assets/libraries/bootstrap/bootstrap.min.css') }}" rel="stylesheet"/>
	<link rel="stylesheet" href="{{ asset('assets/libraries/fuelux/jquery-ui.min.css') }}">
    <linK href="{{ asset('assets/libraries/owl-carousel/owl.carousel.css') }}" rel="stylesheet"/>
    <linK href="{{ asset('assets/libraries/owl-carousel/owl.theme.css') }}" rel="stylesheet"/>
	<link href="{{ asset('assets/libraries/fonts/font-awesome.min.css') }}" rel="stylesheet"/>
	<link href="{{ asset('assets/libraries/animate/animate.min.css') }}" rel="stylesheet"/>
	<link href="{{ asset('assets/libraries/flexslider/flexslider.css') }}" rel="stylesheet" /> <!-- flexslider -->
	<link href="{{ asset('assets/libraries/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/components.css') }}" rel="stylesheet"/>
	<link href="{{ asset('assets/style.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/media.css') }}" rel="stylesheet"/>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{ asset('js/html5/html5shiv.min.js') }}"></script>
      <script src="{{ asset('js/html5/respond.min.js') }}"></script>
    <![endif]-->

	<link href='http://fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    
</head>
<body data-offset="200" data-spy="scroll" data-target=".primary-navigation">
	<a id="top"></a>
	
	<!-- Header Section -->
	<header id="header-section" class="header-section">

		<!-- Top Header -->
		<div class="top-header">
			<!-- container -->
			<div class="container">
				<div class="row">
					<!-- col-md-6 -->
					<div class="col-md-6 col-sm-6">
						<p><img src="{{ asset('assets/images/icon/thumbs-icon.png') }}" alt="thumbs-icon"/>PREMIUM CLEANING ALWAYS </p>
					</div><!-- col-md-6 /- -->
					<!-- col-md-6 -->
					<div class="col-md-6 col-sm-6 text-right">
						<p><img src="{{ asset('assets/images/icon/clock-icon.png') }}" alt="clock-icon"/>working hours : Mon-sat (8.00am - 6.00PM)</p>
					</div><!-- col-md-6 /- -->
				</div>
			</div><!-- container /- -->
		</div><!-- Top Header /- -->
		
		<!-- Logo Block -->
		<div class="logo-block">
			<!-- container -->
			<div class="container">
				<div class="row">
					<!-- col-md-2 -->
					<div class="col-md-3 col-sm-4">
						<a title="Logo" href="index-2.html"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" /></a>
					</div><!-- col-md-2 /- -->
					<!-- col-md-4 -->
					<div class="col-md-6 col-sm-8 pull-right row">
						<!-- col-md-7 -->
						<div class="col-md-6 col-sm-6 col-sm-offset-2 col-md-offset-2 call-us">
							<img src="{{ asset('assets/images/icon/mobile-icon.png') }}" alt="mobile-icon" />
							<p>Call to schedule your FEE !<span>+(234) 8180740881</span></p>
						</div><!-- col-md-7 /- -->
						<!-- col-md-5 -->
						<div class="cart col-md-4 col-sm-4 text-right ow-padding-left">
							<p>
								<i class="cart-icon">2</i>
								cart - $ 25.00
							</p>
							
						</div><!-- col-md-5 /- -->
					</div><!-- col-md-4 /- -->
				</div>
			</div>
		</div><!-- Logo Block /- -->
		
		<!-- Menu Block -->
		<div class="menu-block">
			<div class="container">
				<div class="row">
					<!-- col-md-8 -->
					<nav class="navbar navbar-default col-md-8">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a title="Logo" href="index-2.html"><img alt="logo" src="{{ asset('assets/images/responsive-logo.png') }}"></a>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="@yield('home')">
									<a title="Home" href="{{url('/')}}" >Home</a>
								</li>
								<li class="@yield('about')">
									<a title="About Us" href="{{url('/about')}}" >About</a>
								</li>
								<li class="@yield('services')">
									<a  title="Services" href="{{url('/services')}}">Service</a>
								</li>
								<li class="@yield('portfolio')">
									<a title="Portfolio" href="{{url('/portfolios')}}">Portfolio</a>
								</li>
								
								<li class="@yield('contact')">
									<a title="Contact Us" href="{{url('/contact')}}">Contact</a>
								</li>
						
							</ul>
						</div><!-- /.navbar-collapse -->
					</nav><!-- col-md-8 /- -->
					<div class="col-md-4 quote">
						<a  title="Free Quote" href="{{url('/')}}"> CLEAR SENSE LTD</a>
					</div>
				</div>
			</div><!-- /.container -->
		</div><!-- Menu Block /- -->
	</header><!-- Header Section /- -->

@yield('content')
	<!-- Footer Section -->
	<footer id="footer-section" class="footer-section ow-background">
		<!-- container -->
		<div class="container">
			<div class="footer-heading">
				<h5>Have any questions or want a free estimate?</h5>
				<h3>Call Now: +(01) 800 527 4800</h3>
			</div>
			<aside class="col-md-3 col-sm-3 widget widget-link">
				<h3>Clenaing services</h3>
				<ul>
					<li><a title="Home Cleaning" href="#"><i class="fa fa-tint"></i> Home Cleaning</a></li>
					<li><a title="Building Cleaning" href="#"><i class="fa fa-tint"></i> Building Cleaning</a></li>
					<li><a title="Commercial Cleaning" href="#"><i class="fa fa-tint"></i> Commercial Cleaning</a></li>
					<li><a title="Vehicle Cleaning" href="#"><i class="fa fa-tint"></i> Vehicle Cleaning</a></li>
					<li><a title="Maintenance Service" href="#"><i class="fa fa-tint"></i> Maintenance Service</a></li>
					<li><a title="Pest Controls" href="#"><i class="fa fa-tint"></i> Pest Control</a></li>
				</ul>
			</aside>
			
			<aside class="col-md-3 col-sm-3 widget widget-link">
				<h3>help</h3>
				<ul>
					<li><a title="Contact Us" href="#"><i class="fa fa-tint"></i> Contact Us</a></li>
					<li><a title="Special Services" href="#"><i class="fa fa-tint"></i> Special Services</a></li>
					<li><a title="Advice Tips" href="#"><i class="fa fa-tint"></i> Advice & Tips</a></li>
					<li><a title="News Video" href="#"><i class="fa fa-tint"></i> News & Video</a></li>
					<li><a title="Terms Condition" href="#"><i class="fa fa-tint"></i> Terms & Condition</a></li>
					<li><a title="Site Map" href="#"><i class="fa fa-tint"></i> Site Map</a></li>
				</ul>
			</aside>
			
			<aside class="col-md-2 col-sm-2 widget widget-link">
				<h3>page links</h3>
				<ul>
					<li><a title="Home" href="#"><i class="fa fa-tint"></i> Home</a></li>
					<li><a title="About Us" href="#"><i class="fa fa-tint"></i> About Us</a></li>
					<li><a title="Shop" href="#"><i class="fa fa-tint"></i> Shop</a></li>
					<li><a title="Our Staffs" href="#"><i class="fa fa-tint"></i> Our Staffs</a></li>
					<li><a title="Services" href="#"><i class="fa fa-tint"></i> Services</a></li>
					<li><a title="Latest News" href="#"><i class="fa fa-tint"></i> Latest News</a></li>
				</ul>
			</aside>
			
			<aside class="col-md-4 col-sm-4 widget widget-calculator">
				<h3>Price Calculator</h3>
				<form>
				
				</form> 
			</aside>
			
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<p>Copyright � 2016 Clear Sense Ltd All Rights Reserved.</p>
			</div>
			<!-- Footer Bottom /- -->
			
		</div>
		<!-- container /- -->
	</footer><!-- Footer Section /- -->

	<!-- jQuery Include -->
	<script src="{{ asset('assets/libraries/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/libraries/jquery.easing.min.js') }}"></script><!-- Easing Animation Effect -->
	<script src="{{ asset('assets/libraries/bootstrap/bootstrap.min.js') }}"></script> <!-- Core Bootstrap v3.3.4 -->
	<script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false'></script>
	<script src="{{ asset('assets/libraries/gmap/jquery.gmap.min.js') }}"></script> <!-- Light Box -->
	<script src="{{ asset('assets/libraries/fuelux/jquery-ui.min.js') }}"></script> <!-- Price Filter -->
	<script src="{{ asset('assets/libraries/jquery.animateNumber.min.js') }}"></script> <!-- Used for Animated Numbers -->
	<script src="{{ asset('assets/libraries/jquery.appear.js') }}"></script> <!-- It Loads jQuery when element is appears -->
	<script src="{{ asset('assets/libraries/jquery.knob.js') }}"></script> <!-- Used for Loading Circle -->
	<script src="{{ asset('assets/libraries/wow.min.js') }}"></script> <!-- Use For Animation -->
	<script src="{{ asset('assets/libraries/owl-carousel/owl.carousel.min.js') }}"></script> <!-- Core Owl Carousel CSS File  *	v1.3.3 -->
	<script src="{{ asset('assets/libraries/portfolio-filter/jquery.quicksand.js') }}"></script> <!-- Portfolio Filter -->
	<script src="{{ asset('assets/libraries/expanding-search/modernizr.custom.js') }}"></script> <!-- Core Owl Carousel CSS File  *	v1.3.3 -->
	<script src="{{ asset('assets/libraries/flexslider/jquery.flexslider-min.js') }}"></script> <!-- flexslider -->
	<script src="{{ asset('assets/libraries/jquery.magnific-popup.min.js') }}"></script> <!-- Light Box -->
	<script src="{{ asset('assets/libraries/expanding-search/modernizr.custom.js') }}"></script> <!-- Core Owl Carousel CSS File  *	v1.3.3 -->
	<script src="{{ asset('assets/libraries/expanding-search/classie.js') }}"></script>
	<script src="{{ asset('assets/libraries/expanding-search/uisearch.js')}}"></script>
	<script>
		new UISearch( document.getElementById( 'sb-search' ) );
	</script>
	<!-- Customized Scripts -->
	<script src="{{ asset('assets/js/functions.js') }}"></script>
	
</body>


</html>