

	<!-- Style switcher start -->
	<div class="style-switch-wrapper">
		<div class="style-switch-button">
			<i class="fa fa-sliders"></i>
		</div>
		<h3>Style Options</h3>
		<button id="preset1" class="btn btn-sm btn-primary"></button>
		<button id="preset2" class="btn btn-sm btn-primary"></button>
		<button id="preset3" class="btn btn-sm btn-primary"></button>
		<button id="preset4" class="btn btn-sm btn-primary"></button>
		<button id="preset5" class="btn btn-sm btn-primary"></button>
		<button id="preset6" class="btn btn-sm btn-primary"></button>
		<br/><br/>
		<a class="btn btn-sm btn-primary close-styler pull-right">Close X</a>
	</div>
	<!-- Style switcher end -->

	<div class="body-inner">

	<!-- Header start -->
	<header id="header" class="navbar-fixed-top header" role="banner">
		<div class="container">
			<div class="row">
				<!-- Logo start -->
				<div class="navbar-header">
				   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>
				    <div class="navbar-brand navbar-bg">
					    <a href="{{ url('/')}}">
					    	<img class="img-responsive" src="{{ asset('frontend/images/logo.png')}}" alt="logo">
					    </a> 
				    </div>                   
				</div><!--/ Logo end -->
				<nav class="collapse navbar-collapse clearfix" role="navigation">
					<ul class="nav navbar-nav navbar-right">
						
	                    <li class="{{Request::is('/') ? 'active' : '';}}" ><a href="{{ url('/')}}">Home</a></li>
	                    <li class="{{Request::is('about') ? 'active' : '';}}"><a href="{{ url('about')}}">About</a></li>
	                    <li class="{{Request::is('research') ? 'active' : '';}}"><a href="{{ url('research')}}">Research Studies</a></li>
	                    <li class="{{Request::is('seminar') ? 'active' : '';}}"><a href="{{ url('seminar')}}">Seminar</a></li>
	                    <li class="{{Request::is('infographics') ? 'active' : '';}}"><a href="{{ url('infographics')}}">Infographics</a></li>
	                    <li class="{{Request::is('research-groups') ? 'active' : '';}}"><a href="{{ url('research-groups')}}">Research Groups</a></li>
	                    <li class="{{Request::is('gallery') ? 'active' : '';}}"><a href="{{ url('gallery')}}">Gallery</a></li>
	                    <li class="{{Request::is('downloads') ? 'active' : '';}}"><a href="{{ url('downloads')}}">Downloads</a></li>
	                    <li class="{{Request::is('contact') ? 'active' : '';}}"><a href="{{ url('contact')}}">Contact</a></li>
	              

                                    
						{{-- <li class="dropdown">
                       		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                       		<div class="dropdown-menu">
								<ul>
		                            <li><a href="about.html">About Us</a></li>
		                            <li><a href="service.html">Services</a></li>
		                            <li><a href="career.html">Career</a></li>
		                            <li><a href="testimonial.html">Testimonials</a></li>
		                            <li><a href="faq.html">Faq</a></li>
		                        </ul>
	                    	</div>
	                    </li> --}}
						
                    </ul>
				</nav><!--/ Navigation end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</header><!--/ Header end -->