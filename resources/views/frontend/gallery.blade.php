		@extends('layouts.frontend')

@section('title')
Gallery
@endsection
@section('content') 

	<div id="banner-area">
		<img src="{{ asset('frontend/images/banner/banner2.jpg')}}" alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>Gallery</h2>
		        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li><a href="{{url('gallery')}}">Gallery</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	
	<!-- Portfolio start -->
	<section id="main-container" class="portfolio-static">
		<div class="container">
			<div class="row">

				@foreach($gallery as  $pic)
				<div class="col-sm-3 portfolio-static-item">
					<div class="grid">
						<figure class="effect-oscar">
							<img src="{{ asset('admin/assets/gallery/'.$pic->image.'')}}" alt="">
							<figcaption>
								<a class="link icon-pentagon" href="#"><i class="fa fa-link"></i></a>
								<a class="view icon-pentagon" data-rel="prettyPhoto" href="{{ asset('admin/assets/gallery/'.$pic->image.'')}}"><i class="fa fa-search"></i></a>            
							</figcaption>			
						</figure>
						<div class="portfolio-static-desc">
							<h3>{{$pic->name}}</h3>
							{{-- <span><a href="#">Illustrations</a></span> --}}
						</div>					
					</div><!--/ grid end -->
				</div><!--/ item 1 end -->
				@endforeach
					
			</div><!-- Content row end -->
		</div><!-- Container end -->
	</section><!-- Portfolio end -->

	@endsection