@extends('layouts.master')

@section('content')
@include('includes.contactheader')
<div role="tabpanel" class="tab-pane active" id="contact">
	<div class="site-wrapper">

		<section class="page-title-banner service-page">
			<div class="container">
				<h2>Contact</h2>
				<ul class="breadcrumbs">
					<li><a href="{{route('index')}}">Home</a></li>
					<li><a href="{{route('contact')}}">Contact</a></li>
				</ul> <!-- .breadcrumbs ends -->
			</div> <!-- .container ends -->
		</section> <!-- .page-title-banner ends -->

		<section class="contact-options section-block">
			<div class="container">
				<h2 class="sr-only">Contact Us</h2>
				<div class="row section-content text-center">
					<div class="col-md-2 col-md-offset-3 address-block">
						<div class="icon-block">
							<i class="fa fa-map-marker"></i>
						</div> <!-- .icon-block ends -->
						<address>22, Bardeshi, Amin Bazar <br> Savar, Dhaka - 1348</address>
					</div> <!-- .col-md-4 address-block ends -->

					<div class="col-md-2 phone-block">
						<div class="icon-block">
							<i class="fa fa-phone"></i>
						</div> <!-- .icon-block ends -->
						<a href="tel:111-222-123456">+ 111 - 222 - 123456</a>
						<a href="tel:111-222-456789">+ 111 - 222 - 456789</a>
					</div> <!-- .col-md-4 address-block ends -->

					<div class="col-md-2 email-block">
						<div class="icon-block">
							<i class="fa fa-envelope"></i>
						</div> <!-- .icon-block ends -->
						<a href="mailto:email@website.com">email@website.com</a>
						<a href="mailto:email2@website.com">email2@website.com</a>
					</div> <!-- .col-md-4 address-block ends -->

				</div> <!-- .row contend-block ends -->
			</div> <!-- .container ends -->
		</section> <!-- .contact-options section-block ends -->

		<section class="form-map section-block">
			<div class="container">
				<h2 class="block-title">Contact Us</h2>
				<div class="row section-content">
					<div class="col-md-7 form-block">

						<div class="form-message">
							<p></p>
						</div>

						<form class="" id="redone-contact" method="POST" action="php/form-handler.php">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="sr-only" for="name">Name:</label>
										<input type="text" class="form-control" id="name" name="name" placeholder="Your name">
									</div> <!-- .form-group ends -->

									<div class="form-group">
										<label class="sr-only" for="email">Email:</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="Your email">
									</div> <!-- .form-group ends -->

									<div class="form-group">
										<label class="sr-only" for="url">Website:</label>
										<input type="url" class="form-control" id="url" name="url" placeholder="Your website">
									</div> <!-- .form-group ends -->

								</div> <!-- .col-md-6 ends -->

								<div class="col-md-6">
									<label class="sr-only" for="message">Message:</label>
									<textarea class="form-control" id="message" name="message" placeholder="Your message here"></textarea>


									<button type="submit" class="btn btn-main pull-right" name="submit">Submit</button>
								</div> <!-- .col-md-6 ends -->
							</div> <!-- .row ends -->
						</form> <!-- .redone-contact ends -->
					</div> <!-- .col-md-6 form-block ends -->

					<div class="col-md-5 map-block">
						<div class="google-map" id="google-map">

						</div> <!-- .google-map ends -->
					</div> <!-- .col-md-4 map-block ends -->
				</div> <!-- .row section-content ends -->
			</div> <!-- .container ends -->
		</section> <!-- .form-map section-block ends -->
@stop
