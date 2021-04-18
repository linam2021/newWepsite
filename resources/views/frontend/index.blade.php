@extends('layouts.master')
@section('content')

@if (app()->getlocale()=='en')
    @include('includes.mainheader')
@elseif (app()->getlocale()=='ar')
    @include('includes.arabicmainheader')
@endif
		<!-- HERO SECTION  -->
        <section class="hero-section main-slider" id="hero-section">
			<div id="redone-carousel" class="carousel slide carousel-fade animated-slider" data-interva="8000">
			    <ol class="carousel-indicators">
			        <li data-target="#redone-carousel" data-slide-to="0" class="active"></li>
			        <li data-target="#redone-carousel" data-slide-to="1"></li>
			    </ol>
			    <!-- Carousel items -->
			    <div class="carousel-inner">
			        <div class="active item">
			        	<img class="carousel-image" src="{{asset('assets/img/Banner.jpg')}}" alt="slider image one">
			        	<div class="carousel-content">
			        		<h1><small data-animation="animated bounceInLeft">{{__('text.The Game')}}</small> <strong data-animation="animated bounceInRight">{{__('text.Let\'s Play it Right')}}</strong></h1>
			        		<p class="lead" data-animation="animated bounceInDown">
			        			{{__('text.The Game is the best way')}}
			        		</p>
			        	</div> <!-- .carousel-content ends -->

			        </div> <!-- .item ends -->

			        <div class="item">
			        	<img class="carousel-image" src="{{asset('assets/img/Banner1.jpg')}}" alt="slider image one">
			        	<div class="carousel-content">
			        		<h1><small data-animation="animated fadeInDownBig">{{__('text.The Game1')}}</small> <strong data-animation="animated fadeInLeftBig">{{__('text.Let\'s Play it Right1')}}</strong></h1>
			        		<p class="lead" data-animation="animated fadeInRightBig">
			        			{{__('text.The Game is the best way1')}}
			        		</p>
			        	</div> <!-- .carousel-content ends -->

			        </div> <!-- .item ends -->

			    </div> <!-- .carousel-inner ends -->

			    <!-- Carousel nav -->
			    <a class="carousel-control left" href="#redone-carousel" data-slide="prev">
			    	<span class="fas fa-angle-left" aria-hidden="false"></span>
    				<span class="sr-only">Previous</span>
			    </a>
			    <a class="carousel-control right" href="#redone-carousel" data-slide="next">
			    	<span class="fas fa-angle-right" aria-hidden="false"></span>
    				<span class="sr-only">Previous</span>
			    </a>
			</div> <!-- #carousel ends -->

		</section> <!-- .hero section main-slider ends -->

		<!-- FEATURED -->
		<section class="featured section-block">
			<div class="section-title">
				<h2>{{__('text.welcome')}} <span class="dark">01</span></h2>
				<p class="lead">
					{{__('text.welcomeText')}}
                    <br>
                    {{__('text.welcomeText2')}}
				</p>
			</div> <!-- .section-title ends -->

			<div class="container">
				<div class="row section-content">
					<div class="col-md-4 clearfix">
						<div class="icon-block"><i class="fa fa-leaf"></i></div>
						<div class="content-block">
							<h3>{{__('text.LifeStyle')}}</h3>
							<p>
								{{__('text.LifeStyleText')}}
							</p>
						</div> <!-- .content-block ends -->

					</div> <!-- .col-md-4 ends -->

					<div class="col-md-4 clearfix">
						<div class="icon-block"><i class="fab fa-codepen"></i></div>
						<div class="content-block">
							<h3>{{__('text.Large Supporting Community')}}</h3>
							<p>
								{{__('text.Large Supporting Community Text')}}
							</p>
						</div> <!-- .content-block ends -->
					</div> <!-- .col-md-4 ends -->

					<div class="col-md-4 clearfix">
						<div class="icon-block"><i class="fa fa-university"></i></div>
						<div class="content-block">
							<h3>{{__('text.Learn a Skill')}}</h3>
							<p>
								{{__('text.Learn a Skill Text')}}
							</p>
						</div> <!-- .content-block ends -->

					</div> <!-- .col-md-4 ends -->

				</div> <!-- .row ends -->
			</div> <!-- .container ends -->
		</section> <!-- .featured ends -->
        <!-- HOW WE WORK -->
		<section class="how-we-work area-block">
			<div class="container-fluid">
				<div class="row section-content">

					<div class="col-md-8 content-area">
						<h3 class="area-title">{{__('text.How WE WORK')}} <span class="light">02</span></h3>
						<ul class="process clearfix">
							<li class="clearfix">
								<div class="icon-block">1</div>
								<div class="content-block">
									<h4>{{__('text.We self improve')}}</h4>
									<p>
										{{__('text.We self improve Text')}}
									</p>
								</div>
							</li>
							<li class="clearfix">
								<div class="icon-block">2</div>
								<div class="content-block">
									<h4>{{__('text.We learn')}}</h4>
									<p>
										{{__('text.We learn Text')}}
									</p>
								</div><!-- .content-block ends -->
							</li><!-- .clearfix ends -->
                            <li class="clearfix">
								<div class="icon-block">3</div>
								<div class="content-block">
									<h4>{{__('text.We challenge')}}</h4>
									<p>
										{{__('text.We challenge Text')}}
									</p>
								</div><!-- .content-block ends -->
							</li> <!-- .clearfix ends -->
							<li class="clearfix">
								<div class="icon-block">4</div>
								<div class="content-block">
									<h4>{{__('text.We execute')}}</h4>
									<p>
										{{__('text.We execute Text')}}
									</p>
								</div> <!-- .content-block ends -->
							</li><!-- .clearfix ends -->
						</ul> <!-- .process ends -->

					</div> <!-- .col-md-8 content-area ends -->

					<div class="col-md-4 image-area">
							<img class="img-responsive" src="{{asset('assets/img/HOW-WE-WORK.jpg')}}" alt="How we work image">
					</div> <!-- .col-md-4 image-area ends -->

				</div> <!-- .row section-content ends -->
			</div> <!-- .container-fluid ends -->
		</section> <!-- .how-we-work ends -->

@stop
