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
			        		<h1><small data-animation="animated bounceInLeft">The Game</small> <strong data-animation="animated bounceInRight">Lets change the world</strong></h1>
			        		<p class="lead" data-animation="animated bounceInDown">
			        			The game is your best &amp; smart choice to make your website awesome to take your buesiness to the next level
			        		</p>
			        	</div> <!-- .carousel-content ends -->

			        </div> <!-- .item ends -->

			        <div class="item">
			        	<img class="carousel-image" src="{{asset('assets/img/thegame.jpg')}}" alt="slider image one">
			        	<div class="carousel-content">
			        		<h1><small data-animation="animated fadeInDownBig">Love The Game</small> <strong data-animation="animated fadeInLeftBig">Visitors will love your website</strong></h1>
			        		<p class="lead" data-animation="animated fadeInRightBig">
			        			The beautiful Game is your best &amp; smart choice to make your website awesome to take your buesiness to the next level
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
				<h2>Welcome to The Game <span class="dark">01</span></h2>
				<p class="lead">
					Aenean id juis sodales pretium vitae sit amet erat. Quisque sodales interdum quam, ut aliquam nulla
				</p>
			</div> <!-- .section-title ends -->

			<div class="container">
				<div class="row section-content">
					<div class="col-md-4 clearfix">
						<div class="icon-block"><i class="fa fa-leaf"></i></div>
						<div class="content-block">
							<h3>Awesome Design</h3>
							<p>
								Tomara keu ki dite paro Praesent nec nisl a purus blandit viverra. Pellentesque auctor neque Nullam nulla eros, ultricies sit amet, nonummy.
							</p>
						</div> <!-- .content-block ends -->

					</div> <!-- .col-md-4 ends -->

					<div class="col-md-4 clearfix">
						<div class="icon-block"><i class="fab fa-codepen"></i></div>
						<div class="content-block">
							<h3>Standard Coding</h3>
							<p>
								Praesent nec nisl a purus blandit viverra. Pellent esque auctor neque Nullam nulla eros, ultr icies sit amet, nonummy imperdiet feugiat, pede.
							</p>
						</div> <!-- .content-block ends -->
					</div> <!-- .col-md-4 ends -->

					<div class="col-md-4 clearfix">
						<div class="icon-block"><i class="fa fa-life-buoy"></i></div>
						<div class="content-block">
							<h3>Super Support</h3>
							<p>
								Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Praesent nec nisl a purus blandit viverra. Pellentesque auctor neque.
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

					<div class="col-md-6 content-area">
						<h3 class="area-title">How We Work <span class="light">02</span></h3>
						<p>
							Lenosed upers piciatis unde omnis iste natus error sit voluptatem accusa ntieum  ketumod oloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritat iuase architecto beatae vitae dicta sunt explicabo boseto deisei tomar amar kotha.
						</p>
						<ul class="process clearfix">
							<li class="clearfix">
								<div class="icon-block">1</div>
								<div class="content-block">
									<h4>We Discuss</h4>
									<p>
										Toke dekhe caise mon rimixo tai hae ono nirob.
									</p>
								</div>
							</li>
							<li class="clearfix">
								<div class="icon-block">2</div>
								<div class="content-block">
									<h4>We Plan</h4>
									<p>
										Bofficia deserunt mateo animi, id est laborum.
									</p>
								</div><!-- .content-block ends -->
							</li> <!-- .clearfix ends -->
							<li class="clearfix">
								<div class="icon-block">3</div>
								<div class="content-block">
									<h4>We Develop</h4>
									<p>
										Ekta premer gan likese arete tornam kiole mon.
									</p>
								</div><!-- .content-block ends -->
							</li><!-- .clearfix ends -->
							<li class="clearfix">
								<div class="icon-block">4</div>
								<div class="content-block">
									<h4>We Deliver</h4>
									<p>
										Din besamal toke dekhe jhor utheshe mon caite.
									</p>
								</div> <!-- .content-block ends -->
							</li><!-- .clearfix ends -->
						</ul> <!-- .process ends -->

					</div> <!-- .col-md-6 content-area ends -->

					<div class="col-md-6 image-area">
							<img class="img-responsive" src="{{asset('assets/img/HOW-WE-WORK.jpg')}}" alt="How we work image">
					</div> <!-- .col-md-6 image-area ends -->

				</div> <!-- .row section-content ends -->
			</div> <!-- .container-fluid ends -->
		</section> <!-- .how-we-work ends -->

@stop
