@extends('layouts.master')
@section('content')
@if (app()->getlocale()=='en')
    @include('includes.aboutheader')
@elseif (app()->getlocale()=='ar')
    @include('includes.arabicaboutheader')
@endif


		<!-- WHO WE ARE -->
		<section class="who-we-are area-block">

			<div class="container">
				<div class="row area-content">
					<div class="col-md-6 content-area">
						<h3 class="area-title">{{__('text.Who we are')}} <span class="dark">01</span></h3>
						<p>
							{{__('text.Who we are Text')}}
						</p>
					</div> <!-- .col-md-6 content-area ends -->

					<div class="col-md-6 image-area">
						<img class="img-responsive" src="{{asset('assets/img/WHO-WE-ARE.jpg')}}" alt="who we are image">
					</div> <!-- .col-md-6 image-area ends -->
				</div> <!-- .row area-content ends -->
			</div> <!-- .container ends -->
		</section> <!-- .who-we are area-block ends -->

		<!-- OUR VISION  -->
		<section class="our-vision section-block">
			<div class="container">
				<div class="row section-content">
					<div class="col-md-6 image-area">
				 		<img class="img-responsive" src="{{asset('assets/img/Our-Vision.jpg')}}" alt="our vision image">
				    </div> <!-- .col-md-6 image-area ends -->

					<div class="col-md-6 content-area">
						<h3 class="area-title">{{__('text.Our Vision')}} <span class="light">02</span></h3>
						<p>
							{{__('text.Our Vision Text')}}
						</p>
                        <p>
							{{__('text.Our Vision Text1')}}
						</p>
                        <p>
							{{__('text.Our Vision Text2')}}
						</p>
                        <p>
							{{__('text.Our Vision Text3')}}
						</p>
					</div> <!-- .col-md-6 content-area ends -->
				</div> <!-- .row area-content ends -->
			</div> <!-- .container ends -->
		</section> <!-- .our-vision area-block ends -->


		<!-- OUR HISTORY  -->
		<section class="our-history area-block">

			<div class="container">
				<div class="row area-content">
					<div class="col-md-6 content-area">
						<h3 class="area-title">{{__('text.Our History')}} <span class="dark">03</span></h3>
						<p>
							{{__('text.Our History Text1')}}
						</p>
					</div> <!-- .col-md-6 content-area ends -->

					<div class="col-md-6 image-area">
						<img class="img-responsive" src="{{asset('assets/img/OUR-HISTORY.jpg')}}" alt="who we are image">
					</div> <!-- .col-md-6 image-area ends -->
				</div> <!-- .row area-content ends -->
			</div> <!-- .container ends -->
		</section> <!-- .our-history area-block ends -->
@stop
