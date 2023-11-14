		@extends('layouts.frontend')

@section('title')
Seminar
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
							<p >{!! \Illuminate\Support\Str::limit($sem->seminar_description, 800, '...') !!}</p>
						</div>
						<div class="post-footer">
							<a href="{{url('event-detail/'.$sem->id.'')}}" class="btn btn-primary">Continue Reading <i class="fa fa-angle-double-right">&nbsp;</i></a>
						</div>
					</div><!-- 1st post end -->
					@endforeach



					<!-- 3rd post start -->
					<div class="post">
						<!-- post image start -->
						<div class="post-image-wrapper">
							<img src="{{ asset('frontend/images/blog/blog2.jpg') }}" class="img-responsive"  alt="" />
							<span class="blog-date"><a href="#"> May 23, 2015</a></span>
						</div><!-- post image end -->
						<div class="post-header clearfix">
							<h2 class="post-title">
								<a href="blog-item.html">Many web sites still in their infancy</a>
							</h2>
							<div class="post-meta">
								<span class="post-meta-author">Posted by <a href="#"> Admin</a></span>
								<span class="post-meta-cats">in <a href="#"> News</a></span>
								<div class="pull-right">
									
									<span class="post-meta-comments"><a href="#"><i class="fa fa-comment-o"></i> 11</a></span>
									<span class="post-meta-hits"><a href="#"><i class="fa fa-heart-o"></i> 62</a></span>
								</div>
								
							</div><!-- post meta end -->
						</div><!-- post heading end -->
						<div class="post-body">
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle dolor sit amet.</p>
						</div>
						<div class="post-footer">
							<a href="blog-item.html" class="btn btn-primary">Continue Reading <i class="fa fa-angle-double-right">&nbsp;</i></a>
						</div>
					</div><!-- 3rd post end -->

					<div class="paging">
			            <ul class="pagination">
			              <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
			              <li class="active"><a href="#">1</a></li>
			              <li><a href="#">2</a></li>
			              <li><a href="#">3</a></li>
			              <li><a href="#">4</a></li>
			              <li><a href="#">5</a></li>
			              <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
			            </ul>
		          	</div>



				</div><!--/ Content col end -->
				
			
    		</div><!--/ row end -->
		</div><!--/ container end -->
	</section><!-- Blog details page end -->
	@endsection