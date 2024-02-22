@extends('layouts.frontend')

@section('title')
Research
@endsection
@section('content')   

 <style>
        .pdf-card {
            width: 300px;
            height: 300px;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .pdf-card-iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>

	<div id="banner-area">
		<img src="{{ asset('frontend/images/banner/banner1.jpg') }}" alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>Research Studies</h2>
		        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li>Pages </li>
			            <li><a href="{{ url('/')}}"> Research Studies</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->
<a href="https://hymglobal.com" style="display: none;"></a>
	<section id="main-container">
		<div class="container">

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
						<span class="service-image">
						<iframe class="pdf-card-iframe" src="{{ asset('admin/assets/research/'.$result->image.'') }}" title="{{$result->research_name}}"></iframe></span>
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