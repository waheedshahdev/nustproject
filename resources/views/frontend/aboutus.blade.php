@extends('layouts.frontend')

@section('title')
About Us
@endsection
@section('content')   

	<div id="banner-area">
		<img src="{{ asset('frontend/images/banner/banner1.jpg')}}" alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>About Us</h2>
		        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li><a href="{{url('about')}}"> About Us</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->

	<section id="main-container">
		<div class="container">

			<!-- Company Profile -->

			<div class="row">
				<div class="col-md-12 heading text-center">
					<h2 class="title2">About Our Company
						<span class="title-desc"></span>
					</h2>
				</div>
			</div><!-- Title row end -->

			<div class="row about-wrapper-top">
				<div class="col-md-6 ts-padding about-message">
					<h3>Who We Are</h3>
					<p style="text-align: justify;">{!!$aboutData[0]->about!!}</p>
				</div><!--/ About message end -->
				<div class="col-md-6 ts-padding about-img" style="height:374px;background:url({{ asset('frontend/images/pages/about-1.jpg')}}) 50% 50% / cover no-repeat;">
				</div><!--/ About image end -->
			</div><!--/ Content row end -->

			<div class="row about-wrapper-bottom">
				<div class="col-md-6 ts-padding about-img" style="height:374px;background:url({{ asset('frontend/images/pages/about-2.jpg')}}) 50% 50% / cover no-repeat;">
				</div><!--/ About image end -->
				<div class="col-md-6 ts-padding about-message">
					<h3>What We Do</h3>
					<p style="text-align: justify;">{!!$aboutData[1]->about!!}</p>
					<ul class="unstyled arrow">
						<li><a href="#">Etiam porta sem malesuada</a></li>
						<li><a href="#">Pellentesque ornare sem lacinia</a></li>
						<li><a href="#">Cras mattis consectetur purus</a></li>
						<li><a href="#">Sed hendrerit quam sed ante</a></li>
					</ul>
				</div><!--/ About message end -->
			</div><!--/ Content row end -->

			<!-- Company Profile -->

		</div><!--/ 1st container end -->

			
		<div class="gap-60"></div>

	</section><!--/ Main container end -->

		<section id="team" class="team">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon pull-left"><i class="fa fa-weixin"></i></span>
					<h2 class="title">Our Principal Investigator & Co-Principal Investigators<span class="title-desc">Meet our Team P.I & Co-P.I's</span></h2>
				</div>
			</div><!-- Title row end -->
			<div class="row text-center">
			<div class="col-md-12 col-sm-6">
					<div class="team wow slideInLeft">
						<div class="img-hexagon">
							<img src="{{ asset('frontend/images/team/team2.jpg')}}" alt="">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>P.I - Dr. Adeel Waqas</h3>
							<p>Principal and Dean, USPCAS-E Professor</p>
							<p style="font-weight: bold; color: black;">adeel@uspcase.nust.edu.pk <span> (+92 51 90855100)</span></p>
						
						</div>
					</div>	
				</div><!--/ Team 1 end -->
			</div>

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
	

	@endsection