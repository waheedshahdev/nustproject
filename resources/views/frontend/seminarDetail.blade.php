		@extends('layouts.frontend')

@section('title')
Seminar Detail
@endsection
@section('content')  
	<div id="banner-area">
		<img src="{{ asset('frontend/images/banner/banner2.jpg') }}" alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>Seminar & Events</h2>
		        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li>Events</li>
			            <li><a href="{{ url('/')}}"> {{$seminarDetail->seminar_name}}</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Blog details page start -->
	<section id="main-container">
		<div class="container">
			<div class="row">

				<!-- Blog start -->
				<div class="col-lg-12 col-md-12 offset-md-1 col-sm-12 col-xs-12">
					
					<!-- 1st post start -->

					<div class="post">
						<!-- post image start -->
						<div class="post-image-wrapper">
							<img src="{{ asset('seminar/'.$seminarDetail->seminar_image.'') }}" class="img-responsive"  alt="" />
							@if(!empty($sem->seminar_date))
							<span class="blog-date"><a href="#">{{ date('M d, Y', strtotime($seminarDetail->seminar_date)) }}</a></span>
							@endif
						</div><!-- post image end -->
						<div class="post-header clearfix">
							<h2 class="post-title">
								<a href="blog-item.html">{{$seminarDetail->seminar_name}}</a>
							</h2>
						</div><!-- post heading end -->
						<div class="post-body" style="text-align: justify;">
							<p >{!! $seminarDetail->seminar_description !!}</p>
						</div>
						
					</div><!-- 1st post end -->

					<div class="post-footer">
							<a href="{{url('events')}}" class="btn btn-primary">Back <i class="fa fa-angle-double-left">&nbsp;</i></a>
						</div>

				</div><!--/ Content col end -->

    		</div><!--/ row end -->
		</div><!--/ container end -->
	</section><!-- Blog details page end -->
	@endsection