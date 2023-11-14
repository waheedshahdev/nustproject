@extends('layouts.frontend')

@section('title')
Research Group
@endsection
@section('content')   

	<div id="banner-area">
		<img src="{{ asset('frontend/images/banner/banner2.jpg') }}" alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>Research</h2>
		        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li><a href="{{ url('/')}}"> Research Group</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->

	<section id="main-container">
		<div class="container">

			<div class="row">
				<div class="col-md-12 heading text-center">
					<h2 class="title2">Research Group
						<span class="title-desc"></span>
					</h2>
				</div>
			</div><!-- Title row end -->

			<div class="row ">
				<div class="col-md-12 ts-padding about-message">
					<p style="text-align: justify;">The following compilation provides an overview of diverse research groups actively involved in a range of fields and scholarly endeavors.
						<ol>
				    <li>Solar & Bio Energy</li>
				    <li>Advanced Energy Materials</li>
				    <li>Energy Storage and Conversion</li>
				    <li>High Voltage & Power Systems</li>
				    <li>Thermal & Fossil Fuels</li>
				    <li>Smart Grids & Electricity Markets</li>
				    <li>Advanced Power Electronics & Control</li>
				    <li>Energy Policy & Green Buildings</li>
				</ol>
					</p>
				</div><!--/ About message end -->
			</div><!--/ Content row end -->
<div class="gap-60"></div>


			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon classic pull-left"><i class="fa fa-cogs"></i></span>
					<h2 class="title classic">Research Groups</h2>
				</div>
			</div>


			<div class="row">
				@foreach($categories as $cat)
				<div class="col-md-3 col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<div class="service-content">
					<a href="{{ url('/research-area/'.$cat->id.'')}}">
						<span class="service-image"><img class="img-responsive" style="border-radius: 10px;" src="{{ asset('admin/assets/category/'.$cat->image.'') }}" alt="" /></span>
						<h3>{{$cat->name}}</h3>
					</a>
					</div>
				</div><!--/ End first service -->
				@endforeach

			</div><!-- Content Row end -->

		</div><!--/ 1st container end -->

			
		<div class="gap-60"></div>

	</section><!--/ Main container end -->

	@endsection