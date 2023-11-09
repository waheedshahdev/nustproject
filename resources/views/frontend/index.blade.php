@extends('layouts.frontend')

@section('title')
Welcome to NUST
@endsection
@section('content')   
	@include('layouts.inc.frontendslider')
    <!-- Service box start -->
	<section id="service" class="service angle">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon pull-left"><i class="fa fa-cogs"></i></span>
					<h2 class="title">Research Group <span class="title-desc">A Quality Experience Team with 4 years experience</span></h2>
				</div>
			</div><!-- Title row end -->

			<div class="row">
				<div class="col-md-12">
					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".5s">
						<div class="service-content text-center">
							<span class="service-icon icon-pentagon"><i class="fa fa-tachometer"></i></span>
							<h3>Research Group 1</h3>
							<p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua polaroid befor</p>
						</div>
					</div><!--/ End first service -->

					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".8s" >
						<div class="service-content text-center">
							<span class="service-icon icon-pentagon"><i class="fa fa-android"></i></span>
							<h3>Research Group 2</h3>
							<p>Food truck master cleanse mixtape minim Portland, cardigan stumptown chambray swag</p>
						</div>
						
					</div><!--/ End Second service -->

					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.1s">
						<div class="service-content text-center">
							<span class="service-icon icon-pentagon"><i class="fa fa-shopping-cart"></i></span>
							<h3>Research Group 3</h3>
							<p>Neutra Thundercats craft beer, listicle meggings bicycle rights 90's XOXO beard cardiga</p>
						</div>
					</div><!--/ End Third service -->

					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.4s">
						<div class="service-content text-center">
							<span class="service-icon icon-pentagon"><i class="fa fa-lightbulb-o"></i></span>
							<h3>Research Group 4</h3>
							<p>We design beautiful modern engaging websites that always latest responsive technologies.</p>
						</div>
					</div><!--/ End 4th service -->
				</div>
			</div><!-- Content row end -->
		</div><!--/ Container end -->
	</section><!--/ Service box end -->
   
	<!-- Portfolio start -->

		<section id="main-container">
		<div class="container">

			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon classic pull-left"><i class="fa fa-cogs"></i></span>
					<h2 class="title classic">Research Studies</h2>
				</div>
			</div>

			<div class="row">
				@foreach($research as $result)
				<div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<div class="service-content">
					<a href="{{ url('/research-detail/'.$result->id.'')}}">
						<span class="service-image"><img class="img-responsive" src="{{ asset('admin/assets/research/'.$result->image.'') }}" alt="" /></span>
						<p style="float:right;">{{$result->category->name}}</p>
						<h3>{{$result->research_name}}</h3>
					</a>
						<p>{{ $result->small_description }}</p>
					</div>
				</div><!--/ End first service -->
				@endforeach

			</div><!-- Content Row end -->



		</div><!--/ 1st container end -->

			
		<div class="gap-60"></div>

	</section><!--/ Main container end -->




	<section id="portfolio" class="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon classic pull-left"><i class="fa fa-suitcase"></i></span>
					<h2 class="title classic">Gallery</h2>
				</div>
			</div> <!-- Title row end -->

		</div>
		
		<div class="container-fluid">
			<div class="row">
				<div id="isotope" class="isotope">
					<div class="col-sm-3 web-design isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="{{ asset('frontend/images/portfolio/portfolio1.jpg')}}" alt="">
								<figcaption>
									<h3>Startup Business</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="{{ asset('frontend/images/portfolio/portfolio-bg1.jpg')}}"><i class="fa fa-search"></i></a>            
								</figcaption>			
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="{{ asset('frontend/images/portfolio/portfolio2.jpg')}}" alt="">
								<figcaption>
									<h3>Easy to Lanunch</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="{{ asset('frontend/images/portfolio/portfolio-bg2.jpg')}}"><i class="fa fa-search"></i></a>            
								</figcaption>				
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 joomla isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="{{ asset('frontend/images/portfolio/portfolio3.jpg')}}" alt="">
								<figcaption>
									<h3>Your Business</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="{{ asset('frontend/images/portfolio/portfolio-bg3.jpg')}}"><i class="fa fa-search"></i></a>            
								</figcaption>				
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 wordpress isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="{{ asset('frontend/images/portfolio/portfolio4.jpg')}}" alt="">
								<figcaption>
									<h3>Prego Match</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="{{ asset('frontend/images/portfolio/portfolio-bg4.jpg')}}"><i class="fa fa-search"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 joomla isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="{{ asset('frontend/images/portfolio/portfolio5.jpg')}}" alt="">
								<figcaption>
									<h3>Fashion Brand</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="{{ asset('frontend/images/portfolio/portfolio-bg5.jpg')}}"><i class="fa fa-search"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="{{ asset('frontend/images/portfolio/portfolio6.jpg')}}" alt="">
								<figcaption>
									<h3>The Insidage</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="{{ asset('frontend/images/portfolio/portfolio-bg1.jpg')}}"><i class="fa fa-search"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="{{ asset('frontend/images/portfolio/portfolio7.jpg')}}" alt="">
								<figcaption>
									<h3>Light Carpet</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="{{ asset('frontend/images/portfolio/portfolio-bg2.jpg')}}"><i class="fa fa-search"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="{{ asset('frontend/images/portfolio/portfolio8.jpg')}}" alt="">
								<figcaption>
									<h3>Amazing Keyboard</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="{{ asset('frontend/images/portfolio/portfolio-bg3.jpg')}}"><i class="fa fa-search"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->
				</div><!-- Isotope content end -->
			</div><!-- Content row end -->
		</div><!-- Container end -->
	</section><!-- Portfolio end -->

	<!-- Counter Strat -->
	<section class="ts_counter no-padding">
		<div class="container-fluid">
			<div class="row facts-wrapper wow fadeInLeft text-center">
				<div class="facts one col-md-4 col-sm-6">
					<span class="facts-icon"><i class="fa fa-user"></i></span>
					<div class="facts-num">
						<span class="counter">1200</span>
					</div>
					<h3>Research Publications</h3> 
				</div>

				<div class="facts two col-md-4 col-sm-6">
					<span class="facts-icon"><i class="fa fa-institution"></i></span>
					<div class="facts-num">
						<span class="counter">1277</span>
					</div>
					<h3>Seminars</h3> 
				</div>

				<div class="facts three col-md-4 col-sm-6">
					<span class="facts-icon"><i class="fa fa-suitcase"></i></span>
					<div class="facts-num">
						<span class="counter">869</span>
					</div>
					<h3>Partners</h3> 
				</div>


			</div>
		</div><!--/ Container end -->
    </section><!--/ Counter end -->

	<section id="image-block" class="image-block no-padding">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 ts-padding" style="height:650px;background:url({{asset('frontend/images/image-block-bg.jpg')}}) 50% 50% / cover no-repeat;">
				</div>
				<div class="col-md-6 ts-padding img-block-right">
					<div class="img-block-head text-center">
						<h2>Know More About Our Company</h2>
						<h3>Why Choose Us</h3>
						<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor Aenean sollicitudin, adipisicing elit sed lorem quis bibendum auctor.
						</p>
				
					</div>

					<div class="gap-30"></div>

					<div class="image-block-content">
						<span class="feature-icon pull-left" ><i class="fa fa-bicycle"></i></span>
						<div class="feature-content">
							<h3>Tons of Features</h3>
							<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
						</div>
					</div><!--/ End 1st block -->

					<div class="image-block-content">
						<span class="feature-icon pull-left" ><i class="fa fa-diamond"></i></span>
						<div class="feature-content">
							<h3>PowerPack Theme</h3>
							<p>Proin gravida nibh vel velit auctor Aenean sollicitudin adipisicing</p>
						</div>
					</div><!--/ End 1st block -->

					<div class="image-block-content">
						<span class="feature-icon pull-left" ><i class="fa fa-street-view"></i></span>
						<div class="feature-content">
							<h3>Day Night Support</h3>
							<p>Simply dummy text and typesettings industry has been the industry</p>
						</div>
					</div><!--/ End 1st block -->

				</div>
			</div>
		</div>
	</section><!--/ Image block end -->


	<!-- Team start -->
	<section id="team" class="team">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon pull-left"><i class="fa fa-weixin"></i></span>
					<h2 class="title">Meet with our Team <span class="title-desc">A Quality Experience Team with 4 years experience</span></h2>
				</div>
			</div><!-- Title row end -->

			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="team wow slideInLeft">
						<div class="img-hexagon">
							<img src="{{ asset('frontend/images/team/team1.jpg')}}" alt="">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>Vosgi Varduhi</h3>
							<p>Web Designer</p>
							<div class="team-social">
								<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
								<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
								<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
								<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
							</div>
						</div>
					</div>	
				</div><!--/ Team 1 end -->
				<div class="col-md-3 col-sm-6">
					<div class="team wow slideInLeft">
						<div class="img-hexagon">
							<img src="{{ asset('frontend/images/team/team2.jpg')}}" alt="">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>Robert Aleska</h3>
							<p>Web Designer</p>
							<div class="team-social">
								<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
								<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
								<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
								<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
							</div>
						</div>
					</div>
				</div><!--/ Team 2 end -->
				<div class="col-md-3 col-sm-6">
					<div class="team wow slideInRight">
						<div class="img-hexagon">
							<img src="{{ asset('frontend/images/team/team3.jpg')}}" alt="">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>Taline Voski</h3>
							<p>Web Designer</p>
							<div class="team-social">
								<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
								<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
								<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
								<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
							</div>
						</div>
					</div>
				</div><!--/ Team 3 end -->
				<div class="col-md-3 col-sm-6">
					<div class="team animate wow slideInRight">
						<div class="img-hexagon">
							<img src="{{ asset('frontend/images/team/team4.jpg')}}" alt="">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>Alban Spencer</h3>
							<p>Web Designer</p>
							<div class="team-social">
								<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
								<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
								<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
								<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
							</div>
						</div>
					</div>
				</div><!--/ Team 4 end -->
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
    </section><!--/ Team end -->

    <!-- Parallax 1 start -->
	<section class="parallax parallax1">
		<div class="parallax-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>Explore The Environmental Solutions at Energy & Climate Panorama</h2>
					<p>
						<a href="{{ url('contact')}}" class="btn btn-primary solid">Get In Touch</a>
					</p>
				</div>
			</div>
		</div><!-- Container end -->
    </section><!-- Parallax 1 end -->


	<!-- Clients start -->
	<section id="clients" class="clients">
		<div class="container">
			<div class="row wow fadeInLeft">
		      <div id="client-carousel" class="col-sm-12 owl-carousel owl-theme text-center client-carousel">
		        <figure class="item client_logo">
		          <a href="#">
		            <img src="{{ asset('frontend/images/clients/client1.png')}}" alt="client">
		          </a>
		        </figure>
		        <figure class="item client_logo">
		          <a href="#">
		            <img src="{{ asset('frontend/images/clients/client2.png')}}" alt="client">
		          </a>
		        </figure>
		        <figure class="item client_logo">
		          <a href="#">
		            <img src="{{ asset('frontend/images/clients/client3.png')}}" alt="client">
		          </a>
		        </figure>
		        <figure class="item client_logo">
		          <a href="#">
		            <img src="{{ asset('frontend/images/clients/client4.png')}}" alt="client">
		          </a>
		        </figure>
		        <figure class="item client_logo">
		          <a href="#">
		            <img src="{{ asset('frontend/images/clients/client5.png')}}" alt="client">
		          </a>
		        </figure>
		        <figure class="item client_logo">
		          <a href="#">
		            <img src="{{ asset('frontend/images/clients/client6.png')}}" alt="client">
		          </a>
		        </figure>
		        <figure class="item client_logo">
		          <a href="#">
		            <img src="{{ asset('frontend/images/clients/client7.png')}}" alt="client">
		          </a>
		        </figure>
		        <figure class="item client_logo">
		          <a href="#">
		            <img src="{{ asset('frontend/images/clients/client8.png')}}" alt="client">
		          </a>
		        </figure>
		      </div><!-- Owl carousel end -->
	    	</div><!-- Main row end -->
		</div><!--/ Container end -->
	</section><!--/ Clients end -->

	@endsection