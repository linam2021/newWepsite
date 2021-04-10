@extends('layouts.master')

@section('content')
@if (app()->getlocale()=='en')
    @include('includes.serviceheader')
@elseif (app()->getlocale()=='ar')
    @include('includes.arabicserviceheader')
@endif
		<!-- SERVICE  -->
		<section class="service section-block">
			<div class="section-title">
				<h2>{{__('text.What we do')}} <span class="dark">01</span></h2>
				<p class="lead">
					{{__('text.What we do Text')}}
				</p>
			</div> <!-- .section-title ends -->

			<div class="container">
				<div class="row section-content">

                    <div class="col-md-4 col-sm-6">
						<div class="icon-block"><i class="fa fa-image"></i></div>
						<h3>{{__('text.Graphic Design')}}</h3>
						<p>
							{{__('text.Graphic Design Text')}}
						</p>
					</div> <!-- .col-md-4 col-sm-6 ends -->

					<div class="col-md-4 col-sm-6">
						<div class="icon-block"><i class="fa fa-laptop-code"></i></div>
						<h3>{{__('text.App Development')}}</h3>
						<p>
							{{__('text.App Development Text')}}
                        <br>
						</p>

					</div> <!-- .col-md-4 col-sm-6 ends -->

					<div class="col-md-4 col-sm-6">
						<div class="icon-block"><i class="fa fa-gamepad"></i></div>
						<h3>{{__('text.Game Development')}}</h3>
						<p>
							{{__('text.Game Developmemt Text')}}
						</p>
					</div> <!-- .col-md-4 col-sm-6 ends -->


                    <div class="col-md-4 col-sm-6">
						<div class="icon-block"><i class="fa fa-cogs"></i></div>
						<h3>{{__('text.Web development')}}</h3>
						<p>
							{{__('text.Web development Text')}}
						</p>
					</div> <!-- .col-md-4 col-sm-6 ends -->

					<div class="col-md-4 col-sm-6">
						<div class="icon-block"><i class="fa fa-video"></i></div>
						<h3>{{__('text.Post Production')}}</h3>
						<p>
							{{__('text.Post Production Text')}}
						</p>
					</div> <!-- .col-md-4 col-sm-6 ends -->

					<div class="col-md-4 col-sm-6">
						<div class="icon-block"><i class="fa fa-shopping-cart"></i></div>
						<h3>{{__('text.Marketing')}}</h3>
						<p>
							{{__('text.Marketing Text')}}
						</p>
					</div> <!-- .col-md-4 col-sm-6 ends -->
				</div> <!-- .row section-content ends -->
			</div><!-- .container ends -->
		</section> <!-- .service ends -->
@stop
