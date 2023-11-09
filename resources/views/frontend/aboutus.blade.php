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
	

	@endsection