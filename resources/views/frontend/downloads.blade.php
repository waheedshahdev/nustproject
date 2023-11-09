		@extends('layouts.frontend')

@section('title')
Downloads
@endsection
@section('content') 

	<div id="banner-area">
		<img src="{{ asset('frontend/images/banner/banner2.jpg')}}" alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>Downloads</h2>
		        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li><a href="{{ url('/')}}"> Downloads</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->

	<section id="main-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

					<h3 class="title-border">Download Documents</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, natus voluptatibus adipisci porro magni dolore eos eius ducimus corporis quos perspiciatis quis iste, vitae autem libero ullam omnis cupiditate quam.</p>

					<div class="panel-group" id="accordionA">
						@foreach($downloadGroup as $group)
		              	<div class="panel panel-default">
			                <div class="panel-heading">
				                <h4 class="panel-title"> 
				                	<a data-toggle="collapse" data-parent="#accordionA, #accordionB" href="#collapse{{$group->id}}">{{ $group->group_name}}</a> 
				                </h4>
			                </div>
			                <div id="collapseOne" class="panel-collapse collapse in">
			                  <div class="panel-body">
			                    <ul class="unstyled arrow">
			                    	@foreach ($group->documents as $document)
									<li>{{$document->document_name}}  <a href="{{ asset('documents/'.$document->pdf_file.'')}}" target="_blank"><i class="fa fa-download" style="float: right;"></i></a></li>
									@endforeach
								</ul>
			                  </div>
			                </div>
		              	</div><!--/ Panel 1 end-->
		              	@endforeach

		           {{--    	<div class="panel panel-default">
			                <div class="panel-heading">
				                <h4 class="panel-title">
				                	<a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#collapseThree"> What’s in it for you?</a>
				            	</h4>
			                </div>
			                <div id="collapseThree" class="panel-collapse collapse">
			                  <div class="panel-body">
			                    <ul class="unstyled arrow">
									<li>Very Competitive Salary and Long Term Benefits with Excellent Career Opportunity in a Focused &amp; Stable organization.</li>
									<li>Training on new technology.</li>
									<li>Overseas Tour with Opportunity to work with Global Companies.</li>
									<li>Most importantly a friendly work environment with opportunity to learn from a number of highly skilled mentors.</li>
								</ul>
			                  </div>
			                </div>
		              	</div>--}}

		              	<div class="gap-20"></div>

		         </div><!--/ Accordion end -->

		         <!--/ 1st career end -->

		         <div class="gap-40"></div>


				</div><!--/ Content col end -->

	
			</div><!--/ row end -->
		</div><!--/ container end -->
	</section><!--/ Main container end -->

	@endsection