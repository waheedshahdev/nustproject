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


			@foreach($team_pi as $memberpi)
			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon pull-left"><i class="fa fa-weixin"></i></span>
					<h2 class="title">Our Principal Investigator & Co-Principal Investigators<span class="title-desc">Meet our Team P.I & Co-P.I's</span></h2>
				</div>
			</div><!-- Title row end -->

			@if($memberpi->team_category == 'P.I')
			<div class="row text-center">
			<div class="col-md-12 col-sm-6">
					<div class="team wow slideInLeft">
						<div class="img-hexagon">
							<img src="{{ asset('team/'.$memberpi->image.'')}}" alt="">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>{{$memberpi->team_category}} - {{$memberpi->name}}</h3>
							<p>{{$memberpi->designation}}</p>
							<p style="font-weight: bold; color: black;">{{$memberpi->email}} <span> ({{$memberpi->phone}})</span></p>
						
						</div>
					</div>	
				</div><!--/ Team 1 end -->
			</div>
			@endif
			@endforeach





			
			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon pull-left"><i class="fa fa-weixin"></i></span>
					<h2 class="title">Our {{$team_copi[0]->team_category}}<span class="title-desc">Meet our Team {{$team_copi[0]->team_category}}</span></h2>
				</div>
			</div><!-- Title row end -->
			<div class="row text-center">
			@foreach($team_copi as $membercopi)
			<div class="col-md-3 col-sm-6">
					<div class="team wow slideInLeft">
						<div class="img-hexagon">
							<img src="{{ asset('team/'.$membercopi->image.'')}}" alt="">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>{{$membercopi->team_category}} - {{$membercopi->name}}</h3>
							<p>{{$membercopi->designation}}</p>
							<p style="font-weight: bold; color: black;">{{$membercopi->email}} <span> ({{$membercopi->phone}})</span></p>
						
						</div>
					</div>	
				</div><!--/ Team 1 end -->
			@endforeach
			</div>


			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon pull-left"><i class="fa fa-weixin"></i></span>
					<h2 class="title">Our {{$team_sub[0]->team_category}}<span class="title-desc">Meet our Team {{$team_sub[0]->team_category}}</span></h2>
				</div>
			</div><!-- Title row end -->
			<div class="row text-center">
			@foreach($team_sub as $membersub)
			<div class="col-md-3 col-sm-6">
					<div class="team wow slideInLeft">
						<div class="img-hexagon">
							<img src="{{ asset('team/'.$membersub->image.'')}}" alt="">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>{{$membersub->team_category}} - {{$membersub->name}}</h3>
							<p>{{$membersub->designation}}</p>
							<p style="font-weight: bold; color: black;">{{$membersub->email}} <span> ({{$membersub->phone}})</span></p>
						
						</div>
					</div>	
				</div><!--/ Team 1 end -->
			@endforeach
			</div>


			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon pull-left"><i class="fa fa-weixin"></i></span>
					<h2 class="title">Our {{$team_assistant[0]->team_category}}<span class="title-desc">Meet our Team {{$team_assistant[0]->team_category}}</span></h2>
				</div>
			</div><!-- Title row end -->
			<div class="row text-center">
			@foreach($team_assistant as $memberassit)
			<div class="col-md-3 col-sm-6">
					<div class="team wow slideInLeft">
						<div class="img-hexagon">
							<img src="{{ asset('team/'.$memberassit->image.'')}}" alt="">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>{{$memberassit->team_category}} - {{$memberassit->name}}</h3>
							<p>{{$memberassit->designation}}</p>
							<p style="font-weight: bold; color: black;">{{$memberassit->email}} <span> ({{$memberassit->phone}})</span></p>
						
						</div>
					</div>	
				</div><!--/ Team 1 end -->
			@endforeach
			</div>
		
		</div><!--/ Container end -->
    </section><!--/ Team end -->
	

	@endsection