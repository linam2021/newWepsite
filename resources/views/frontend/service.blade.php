@extends('layouts.master')

@section('content')
@include('includes.serviceheader')

		<section class="page-title-banner service-page">
			<div class="container">
				<h2>Service</h2>
				<ul class="breadcrumbs">
					<li><a href="{{route('index')}}">Home</a></li>
					<li><a href="{{route('service')}}">Service</a></li>
				</ul> <!-- .breadcrumbs ends -->
			</div> <!-- .container ends -->
		</section> <!-- .page-title-banner ends -->

		<!-- SERVICE  -->
		<section class="service section-block">
			<div class="section-title">
				<h2>What We Do <span class="dark">03</span></h2>
				<p class="lead">
					Pais tang from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power
				</p>
			</div> <!-- .section-title ends -->

			<div class="container">
				<div class="row section-content">
					<div class="col-md-4 col-sm-6">
						<div class="icon-block"><i class="fa fa-image"></i></div>
						<h3>Web Design</h3>
						<p>
							Seto amar pashe bose ase saradin sararat ar nishidin proti din ase amar pashe ar tobe keno se ajo amar kase elona keno se amar kasthe dure thake bolon.
						</p>
					</div> <!-- .col-md-4 col-sm-6 ends -->

					<div class="col-md-4 col-sm-6">
						<div class="icon-block"><i class="fa fa-cogs"></i></div>
						<h3>Web Development</h3>
						<p>
							Ohose keno bosena tomader kotha eta golpo holeo parto pata lukie tobe portam ebng evabei amader sob kisu nai hote chae kivabe seto chole geleo.
						</p>
					</div> <!-- .col-md-4 col-sm-6 ends -->

					<div class="col-md-4 col-sm-6">
						<div class="icon-block"><i class="fab fa-android"></i></div>
						<h3>Mobile Application</h3>
						<p>
							Akashei tiume meghe dhaka shaon dhara jore jedin pas tumi sedin more pore. Ekhoni ami seieoe dinere opekshay bose asise pothe chee tomar pothe.
						</p>
					</div> <!-- .col-md-4 col-sm-6 ends -->

					<div class="col-md-4 col-sm-6">
						<div class="icon-block"><i class="fab fa-shield"></i></div>
						<h3>Online Security</h3>
						<p>
							Mnaoare kese hai tu bata more manoorate tomader kase omon bosease dekho na tomader kase jabo to chole kivabe jete hbe bolona bondhu.
						</p>
					</div> <!-- .col-md-4 col-sm-6 ends -->

					<div class="col-md-4 col-sm-6">
						<div class="icon-block"><i class="fa fa-cloud"></i></div>
						<h3>Cloud Hosting</h3>
						<p>
							Takale tumi ami hotath onno deshe chole ase mon hariye bolse asi kivabe to janina make niye tomar majhe kiemn chle je tumi ta bolona ar koto kivabe.
						</p>
					</div> <!-- .col-md-4 col-sm-6 ends -->

					<div class="col-md-4 col-sm-6">
						<div class="icon-block"><i class="fa fa-shopping-cart"></i></div>
						<h3>Ecommerce</h3>
						<p>
							Chupe tomake dekhte jabo sei bikele tomar pashe bose asi ami tumi nei keno amar pashe. Kothay je chile geso evabe amake eka fele ore manoare.
						</p>
					</div> <!-- .col-md-4 col-sm-6 ends -->
				</div> <!-- .row section-content ends -->
			</div><!-- .container ends -->
		</section> <!-- .service ends -->

		<!-- OUR SKILL -->
		<section class="our-skill area-block">
			<div class="container">
				<div class="row section-content">
					<div class="col-md-6 col-md-offset-6">
						<h3 class="area-title">Our Skills <span class="light">02</span></h3>
						<p class="summery">
							Monie et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<div class="progress-wrapper">
							<div class="progress">
							  <div class="progress-bar" role="progressbar" aria-valuenow="70"
							  aria-valuemin="0" aria-valuemax="100" data-transitiongoal="70">
							    Photoshop
							  </div>
							</div> <!-- .progress ends -->
							<span class="progress-marker">70%</span>
						</div> <!-- .progress-wrapper ends -->

						<div class="progress-wrapper">
							<div class="progress">
							  <div class="progress-bar" role="progressbar" aria-valuenow="90"
							  aria-valuemin="0" aria-valuemax="100" data-transitiongoal="90">
							    Wordpress
							  </div>
							</div> <!-- .progress ends -->
							<span class="progress-marker">90%</span>
						</div> <!-- .progress-wrapper ends -->

						<div class="progress-wrapper">
							<div class="progress">
							  <div class="progress-bar" role="progressbar" aria-valuenow="60"
							  aria-valuemin="0" aria-valuemax="100" data-transitiongoal="60">
							    NodeJs
							  </div>
							</div> <!-- .progress ends -->
							<span class="progress-marker">60%</span>
						</div> <!-- .progress-wrapper ends -->

						<div class="progress-wrapper">
							<div class="progress">
							  <div class="progress-bar" role="progressbar" aria-valuenow="80"
							  aria-valuemin="0" aria-valuemax="100" data-transitiongoal="80">
							    Python
							  </div>
							</div> <!-- .progress ends -->
							<span class="progress-marker">80%</span>
						</div> <!-- .progress-wrapper ends -->

					</div> <!-- .col-md-6 ends -->
				</div> <!-- .row ends -->
			</div><!-- .container ends -->
		</section> <!-- .our-skill ends -->


		<!-- BEST FEATURES -->
		<section class="best-features area-block">
			<div class="container">
				<div class="row section-content">
					<div class="col-md-6">
						<h3 class="area-title">Best Features <span class="dark">03</span></h3>


							<div class="panel-group redone-accordion" id="accordion" role="tablist" aria-multiselectable="true">
							  <div class="panel panel-default active">
							    <div class="panel-heading" role="tab" id="headingOne">
							      <h4 class="panel-title">
							        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							          Unique and awesome design
							        </a>
							      </h4> <!-- .panel-title ends -->
							    </div> <!-- .panel-heading ends -->
							    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							      <div class="panel-body">
							        <p>
							        	squid single-origin coffee nulla ass es anderson cred nes umenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
							        </p>
							      </div> <!-- .panel-body ends -->
							    </div><!-- #collapseOne ends -->
							  </div><!-- .panel .panel-default ends -->
							  <div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="headingTwo">
							      <h4 class="panel-title">
							        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							           Full Responsive and adaptive layout
							        </a>
							      </h4><!-- .panel-title ends -->
							    </div><!-- .panel-heading ends -->
							    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							      <div class="panel-body">
							        <p>
							        	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
							        </p>
							      </div><!-- .panel-body ends -->
							    </div><!-- #collapseTwo ends -->
							  </div><!-- .panel .panel-default ends -->
							  <div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="headingThree">
							      <h4 class="panel-title">
							        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							          Unlimited Possibilities
							        </a>
							      </h4><!-- .panel-title ends -->
							    </div><!-- .panel-heading ends -->
							    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							      <div class="panel-body">
							        <p>
							        	oon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excer vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synt.
							        </p>
							      </div><!-- .panel-body ends -->
							    </div><!-- #collapseThree ends -->
							  </div><!-- .panel .panel-default ends -->
							  <div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="headingFour">
							      <h4 class="panel-title">
							        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							          Created with love &amp; care
							        </a>
							      </h4><!-- .panel-title ends -->
							    </div><!-- .panel-heading ends -->
							    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
							      <div class="panel-body">
							        <p>
							        	Tina assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them.
							        </p>

							      </div><!-- .panel-body ends -->
							    </div><!-- #collapseThree ends -->
							  </div><!-- .panel .panel-default ends -->
							</div> <!-- #accordiaon ends -->


					</div> <!-- .col-md-6 ends -->

					<div class="col-md-6 image-block">
						<div class="img-wrapper">
							<img class="img-responsive" src="http://placehold.it/853x505" alt="macbook pro image">
						</div>
					</div> <!-- .col-md-6 ends -->
				</div> <!-- .row section-content ends -->
			</div> <!-- .container ends -->
		</section> <!-- .best-features ends -->



		<!-- TESTIMONIAL -->
		<section class="testimonial area-block">
			<div class="container">
				<h3 class="area-title">What People Say <span class="dark">08</span></h3>

				<div class="row">
					<div class="col-md-7 col-md-offset-2 clearfix">
						<blockquote>
							<p>
								Etiam venenatis magna velit, quis ultrices quam consequat senusc ipit. Proin convallis ligula ut turpis ultrices, vitae eleifend odoifend Mauris eu frin gillian mauris, id ultricies mi. Aenean id justo queonis felis sodales pretium vitae sit amet eisara rat tomar.
							</p>
						</blockquote>
						<div class="testimonial-author">
							<h4>Dona Jossefine</h4>
							<p>Abc Corporation</p>
						</div> <!-- .testimonial-author ends -->
					</div> <!-- .col-md-10 col-md-offset-2 ends -->
					<div class="col-md-3 hidden-xs">
						<div class="image-block">
							<img class="img-responsive" src="http://placehold.it/253x419" alt="testimonial author">
						</div> <!-- .image-block ends -->
					</div> <!-- .col-md-2 ends -->
				</div> <!-- .row ends -->
			</div> <!-- .container ends -->
		</section><!-- .testimonial ends -->
@stop
