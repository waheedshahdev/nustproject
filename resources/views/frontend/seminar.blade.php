		@extends('layouts.frontend')

@section('title')
Seminar
@endsection
@section('content')  
	<div id="banner-area">
		<img src="{{ asset('frontend/images/banner/banner1.jpg') }}" alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>Events</h2>
		        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li><a href="{{ url('/')}}"> Seminar $ Events</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Blog details page start -->
	<section id="main-container">
		<div class="container">
			<div class="row">

				<!-- Blog start -->
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					
					<!-- 1st post start -->
					
					@foreach($seminar as $sem)
					<div class="post">
						<!-- post image start -->
						<div class="post-image-wrapper">
							<img src="{{ asset('seminar/'.$sem->seminar_image.'') }}" class="img-responsive"  alt="" />
							@if(!empty($sem->seminar_date))
							<span class="blog-date"><a href="#">{{ date('M d, Y', strtotime($sem->seminar_date)) }}</a></span>
							@endif
						</div><!-- post image end -->
						<div class="post-header clearfix">
							<h2 class="post-title">
								<a href="blog-item.html">{{$sem->seminar_name}}</a>
							</h2>
						</div><!-- post heading end -->
						<div class="post-body" style="text-align: justify;">
							<p >{!! \Illuminate\Support\Str::limit($sem->seminar_description, 500, '...') !!}</p>
						</div>
						<div class="post-footer">
							<a href="{{url('event-detail/'.$sem->id.'')}}" class="btn btn-primary">Continue Reading <i class="fa fa-angle-double-right">&nbsp;</i></a>
						</div>
					</div><!-- 1st post end -->
					@endforeach

					{{-- <div class="paging">
			            <ul class="pagination">
			              <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
			              <li class="active"><a href="#">1</a></li>
			              <li><a href="#">2</a></li>
			              <li><a href="#">3</a></li>
			              <li><a href="#">4</a></li>
			              <li><a href="#">5</a></li>
			              <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
			            </ul>
		          	</div> --}}



				</div><!--/ Content col end -->


				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="sidebar sidebar-right">
						<!-- category start -->
						<div class="widget widget-categories">
							<h3 class="widget-title">Events</h3>
							<ul class="category-list clearfix">
				              @foreach($seminargroup as $group)
				              <li><a href="{{ url('/event-group/'.$group->id.'')}}">{{$group->seminar_group}}</a></li>
				              @endforeach
				            </ul>
						</div><!-- category end -->


					</div><!--/ Sidebar end -->
				</div><!--/ Sidebar col end -->
				
			
    		</div><!--/ row end -->
		</div><!--/ container end -->
	</section><!-- Blog details page end -->
	@endsection