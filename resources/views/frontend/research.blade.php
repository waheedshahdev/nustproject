@extends('layouts.frontend')

@section('title')
Research
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
			            <li>Pages </li>
			            <li><a href="{{ url('/')}}"> Research</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->

	<section id="main-container">
		<div class="container">

			<div class="row">
				<div class="col-md-12 heading text-center">
					<h2 class="title2">Research Studies
						<span class="title-desc"></span>
					</h2>
				</div>
			</div><!-- Title row end -->

			<div class="row ">
				<div class="col-md-12 ts-padding about-message">
					<p style="text-align: justify;">Presented below is an extensive compilation of research studies that significantly contribute to our comprehension and progress in these subject areas:
						<ol>
				    <li>Indigenous Manufacturing of Solar Photovoltaic Modules: Identifying Barriers, Policy Gaps and The Way Forward</li>
				    <li>In-Depth Analysis of Previously Implemented National Solar Energy Policies and Recommendations for Future Policy Amendments to Support Solar PV</li>
				    <li>Assessment of Solar Tube Well Potential in Baluchistan</li>
				    <li>Forecasting of Renewable Energy Resources based on Microgrid and Market Access</li>
				    <li>Energy Transition and Position of Intended Nationally Determined Contributions (INDCs) in Pakistan</li>
				    <li>Waste Management in Metropolitan – Challenges and Opportunities</li>
				    <li>Assessment of Biomass-based Boiler Operation Feasibility in the Textile Industry</li>
				    <li>Status of LNG in Pakistan – A Case Study</li>
				    <li>Customer Facilitation in the Adoption of E-Bikes, Towards Decarbonizing the Transport Sector</li>
				    <li>Green Hydrogen as a Fuel in the Energy Transition of Pakistan, Toward a Zero-Carbon, Climate-Resilient Future</li>
				</ol>
					</p>
				</div><!--/ About message end -->
			</div><!--/ Content row end -->
			<br>
			<br>
					





			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon classic pull-left"><i class="fa fa-cogs"></i></span>
					<h2 class="title classic">Research Area</h2>
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

	@endsection