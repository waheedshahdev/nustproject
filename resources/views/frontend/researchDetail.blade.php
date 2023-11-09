	@extends('layouts.frontend')

@section('title')
Research Detail
@endsection
@section('content')  

	<div id="banner-area">
		<img src="{{ asset('frontend/images/banner/banner2.jpg')}}" alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>{{$researchDetail->research_name}}</h2>
		        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li>Pages</li>
			            <li><a href="{{ url('/')}}"> Research Detail</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->

	<section id="main-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="post-content">
						<div class="post-image-wrapper">
							<img src="{{ asset('admin/assets/research/'.$researchDetail->image.'')}}" class="img-responsive"  alt="" />
						</div><!-- post image end -->
						<div class="text-justify" style="text-align: justify ;">
							
						{!! $researchDetail->research_text!!}
						</div>

						<div class="gap-20"></div>

						<div class="row">
							<div class="feature-box col-sm-6 wow fadeInDown" data-wow-delay=".5s">
								<span class="feature-icon pull-left" ><i class="fa fa-heart-o"></i></span>
								<div class="feature-content">
									<h3>Clean &amp; Modern Design</h3>
									<p>Bras urna felis accumsan at ultrde cesid posuere masa socis nautoque penat</p>
								</div>
							</div><!--/ End first featurebox -->

							<div class="feature-box col-sm-6 wow fadeInDown" data-wow-delay=".5s">
								<span class="feature-icon pull-left" ><i class="fa fa-codepen"></i></span>
								<div class="feature-content">
									<h3>Useful Shortcodes</h3>
									<p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua</p>
								</div>
							</div><!--/ End 2nd featurebox -->
						</div>

						<div class="gap-20"></div>

						<div class="row">

							<div class="feature-box col-sm-6 wow fadeInDown" data-wow-delay=".5s">
								<span class="feature-icon pull-left" ><i class="fa fa-newspaper-o"></i></span>
								<div class="feature-content">
									<h3>Multipurpose Concept</h3>
									<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
								</div>
							</div><!--/ End 1st featurebox -->

							<div class="feature-box col-sm-6 wow fadeInDown" data-wow-delay=".5s">
								<span class="feature-icon pull-left" ><i class="fa fa-desktop"></i></span>
								<div class="feature-content">
									<h3>Responsive Layout</h3>
									<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
								</div>
							</div><!--/ End 2nd featurebox -->
						</div>


					</div><!--/ post content end -->

				</div><!--/ Content col end -->

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="sidebar sidebar-right">
						<!-- category start -->
						<div class="widget widget-categories">
							<h3 class="widget-title">Categories</h3>
							<ul class="category-list clearfix">
				              @foreach($categories as $cat)
				              <li><a href="{{ url('/research-area/'.$cat->id.'')}}">{{$cat->name}}</a></li>
				              @endforeach
				            </ul>
						</div><!-- category end -->

						<!-- tags start -->
						<div class="widget widget-tags">
							<h3 class="widget-title">Research Info</h3>
							<ul class="unstyled clearfix">
				              	<li><a href="#">Research Date: {{$researchDetail->research_date}}</a></li>
				              	<li><a href="#">Research Category: {{$researchDetail->category->name}}</a></li>
				              	<li><a href="#">Description: {{$researchDetail->small_description}}</a></li>
				              	<li><a href="#">Momentum</a></li>
				            </ul>
						</div><!-- tags end -->


					</div><!--/ Sidebar end -->
				</div><!--/ Sidebar col end -->
			</div><!--/ row end -->
		</div><!--/ container end -->
	</section><!--/ Main container end -->

	@endsection