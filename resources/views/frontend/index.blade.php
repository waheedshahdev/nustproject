@extends('layouts.frontend')

@section('title')
Welcome to NUST
@endsection
@section('content')   
	@include('layouts.inc.frontendslider')
	<style>
        .pdf-card {
            width: 300px;
            height: 300px;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .pdf-card-iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
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
						<span class="service-image">
							<iframe class="pdf-card-iframe" src="{{ asset('admin/assets/research/'.$result->image.'') }}" title="{{$result->research_name}}"></iframe></span>
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

					@foreach($gallery as $images)
					<div class="col-sm-3 web-design isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="{{ asset('admin/assets/gallery/'.$images->image.'')}}" alt="">
								<figcaption>
									<h3>{{$images->name}}</h3>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="{{ asset('admin/assets/gallery/'.$images->image.'')}}"><i class="fa fa-search"></i></a>            
								</figcaption>			
							</figure>
						</div>
					</div><!-- Isotope item end -->
					@endforeach
					

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
						<h2>Know More About Us</h2>
						<h3>SEMINAR/EVENTS</h3>
						<p>USPCAS-E NUST in collaboration with Pakistan Renewable Energy Coalition hosted a webinar, on February 22nd, 2023, addressing the potential and hurdles of the solar PV industry in Pakistan.
						</p>
				
					</div>

					<div class="gap-30"></div>

					<div class="image-block-content">
						<span class="feature-icon pull-left" ><i class="fa fa-diamond"></i></span>
						<a href="{{url('event-group/1')}}">
						<div class="feature-content">
							<h3>Webinars</h3>
							<p>Solar Energy Potential and Obstacles in the Growth of the PV Industry in Pakistan</p>
						</div>
						</a>
					</div><!--/ End 1st block -->

					<div class="image-block-content">
						<span class="feature-icon pull-left" ><i class="fa fa-diamond"></i></span>
						<a href="{{url('event-group/2')}}">
						<div class="feature-content">
							<h3>Conferences & Dialogues</h3>
							<p>Resolving Energy Sector Crisis through Digitalization & Innovation</p>
						</div>
						</a>
					</div><!--/ End 1st block -->

					<div class="image-block-content">
						<span class="feature-icon pull-left" ><i class="fa fa-diamond"></i></span>
						<a href="{{url('event-group/3')}}">
						<div class="feature-content">
							<h3>Consortium</h3>
							<p>"Consortium on Clean Energy Integration" was organized by USPCAS-E, NUST in tandem with the Pakistan Renewable Energy Coalition on 9th June, 2023.</p>
						</div>
						</a>
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
				
				@foreach($team_pi as $memberpi)
				<div class="col-md-3 col-sm-6">
					<div class="team wow slideInRight">
						<div class="img-hexagon">
							<img src="{{ asset('team/'.$memberpi->image.'')}}" alt="">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>{{$memberpi->team_category}} - {{$memberpi->name}}</h3>
							<p>{{$memberpi->designation}}</p>
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
				@endforeach

				
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