	@extends('layouts.frontend')

@section('title')
Contact Us
@endsection
@section('content') 
	<div id="banner-area">
		<img src="{{ asset('frontend/images/banner/banner2.jpg')}}" alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>Contact Us</h2>
		        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li><a href="{{ url('contact')}}"> Contact</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->
	<section style="padding: 0px !important;">
		<div class="container-fluid">
			<div class="row">
			{{-- 	<div class="col-md-12">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2990.274257380938!2d-70.56068388481569!3d41.45496659976631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e52963ac45bbcb%3A0xf05e8d125e82af10!2sDos%20Mas!5e0!3m2!1sen!2sus!4v1671220374408!5m2!1sen!2sus" width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div> --}}
				<div class="col-md-12 col-lg-12">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.584292163555!2d72.98192177630426!3d33.642019239278895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df9673d4a92f27%3A0xa7e84bd5ef0594d5!2sU.S.%20Pakistan%20Center%20For%20Advanced%20Studies%20In%20Energy!5e0!3m2!1sen!2s!4v1700259873652!5m2!1sen!2s" width="2000" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</section>
	<section id="main-container" >
		
		<div class="container">


			<div class="gap-40"></div>

			<div class="row">
	    		<div class="col-md-7">
	    			<form id="contact-form" action="contact-form.php" method="post" role="form">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>Name</label>
								<input class="form-control" name="name" id="name" placeholder="" type="text" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" name="email" id="email" 
									placeholder="" type="email" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Subject</label>
									<input class="form-control" name="subject" id="subject" 
									placeholder="" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Message</label>
							<textarea class="form-control" name="message" id="message" placeholder="" rows="10" required></textarea>
						</div>
						<div class="text-right"><br>
							<button class="btn btn-primary solid blank" type="submit">Send Message</button> 
						</div>
					</form>
	    		</div>
	    		<div class="col-md-5">
	    			<div class="contact-info">
		    			<h3>Contact Details</h3>
			    		<p>Industry Liaison & Outreach Office</p>
			    		<br>
			    		<p><i class="fa fa-home info"></i>  USPCAS-E Building, National University of Sciences & Technology, H-12, Islamabad </p>
						<p><i class="fa fa-phone info"></i>  +92-51-90855274 </p>
						<p><i class="fa fa-fax info"></i>  +92-51-90851302 </p>
						<p><i class="fa fa-envelope-o info"></i>  ilo@uspcase.nust.edu.pk</p>
						<p><i class="fa fa-globe info"></i>  www.nust.com</p>
    				</div>
	    		</div>
	    	</div>

		</div><!--/ container end -->

	</section><!--/ Main container end -->

	@endsection