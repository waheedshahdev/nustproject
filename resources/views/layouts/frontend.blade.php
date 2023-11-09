<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="">	
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Favicons
	================================================== -->
	<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">
	
	<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
	<!-- Template styles-->
	<link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="{{ asset('frontend/css/responsive.css')}}">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css')}}">
	<!-- Animation -->
	<link rel="stylesheet" href="{{ asset('frontend/css/animate.css')}}">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="{{ asset('frontend/css/prettyPhoto.css')}}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.css')}}">
	<!-- Flexslider -->
	<link rel="stylesheet" href="{{ asset('frontend/css/flexslider.css')}}">
	<!-- Flexslider -->
	<link rel="stylesheet" href="{{ asset('frontend/css/cd-hero.css')}}">
	<!-- Style Swicther -->
	<link id="style-switch" href="{{ asset('frontend/css/presets/preset5.css')}}" media="screen" rel="stylesheet" type="text/css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
	
<body>








@include('layouts.inc.frontendheader')


	@yield('content')

    @include('layouts.inc.frontendfooter')






	<!-- Copyright start -->
	<section id="copyright" class="copyright angle">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="footer-social unstyled">
						<li>
							<a title="Twitter" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-twitter"></i></span>
							</a>
							<a title="Facebook" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>
							</a>
							<a title="linkedin" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>
							</a>
							
						</li>
					</ul>
				</div>
			</div><!--/ Row end -->
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="copyright-info">
         			 &copy; Copyright 2023. <span><a href="https://hymglobal.com">Designed by HYM Global</a></span>
        			</div>
				</div>
			</div><!--/ Row end -->
		   <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
				<button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
			</div>
		</div><!--/ Container end -->
	</section><!--/ Copyright end -->

	<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="{{ asset('frontend/js/jquery.js')}}"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
	<!-- Style Switcher -->
	<script type="text/javascript" src="{{ asset('frontend/js/style-switcher.js')}}"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="{{ asset('frontend/js/owl.carousel.js')}}"></script>
	<!-- PrettyPhoto -->
	<script type="text/javascript" src="{{ asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
	<!-- Bxslider -->
	<script type="text/javascript" src="{{ asset('frontend/js/jquery.flexslider.js')}}"></script>
	<!-- CD Hero slider -->
	<script type="text/javascript" src="{{ asset('frontend/js/cd-hero.js')}}"></script>
	<!-- Isotope -->
	<script type="text/javascript" src="{{ asset('frontend/js/isotope.js')}}"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/ini.isotope.js')}}"></script>
	<!-- Wow Animation -->
	<script type="text/javascript" src="{{ asset('frontend/js/wow.min.js')}}"></script>
	<!-- SmoothScroll -->
	<script type="text/javascript" src="{{ asset('frontend/js/smoothscroll.js')}}"></script>
	<!-- Eeasing -->
	<script type="text/javascript" src="{{ asset('frontend/js/jquery.easing.1.3.js')}}"></script>
	<!-- Counter -->
	<script type="text/javascript" src="{{ asset('frontend/js/jquery.counterup.min.js')}}"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="{{ asset('frontend/js/waypoints.min.js')}}"></script>
	<!-- Template custom -->
	<script type="text/javascript" src="{{ asset('frontend/js/custom.js')}}"></script>
	</div><!-- Body inner end -->
</body>
</html>

