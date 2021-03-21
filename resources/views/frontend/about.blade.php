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
						<h3 class="area-title">Who we are <span class="dark">01</span></h3>
						<p>
							Bire et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>

						<p>
							Nicco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
                    @if (app()->getlocale()=='en')
					    <div class="col-md-6 image-area">
				 			<img class="img-responsive" src="{{asset('assets/img/Our-Vision.jpg')}}" alt="our vision image">
				    	</div> <!-- .col-md-6 image-area ends -->
                    @endif
					<div class="col-md-6 content-area">
						<h3 class="area-title">Our Vision <span class="light">02</span></h3>
						<p>
							Rerehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia de diet a, venenatis vitae, ju serunt mollit anim id est laborum.
						</p>

						<ul class="lined-list">
							<li>Donec posuere vulputate arcu. Phasellus gravida semper nisi. Praesent turpis. Etiam rhoncus. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</li>
							<li>Sed aliquam ultrices mauris. Nullam cursus lacinia erat. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. </li>
							<li>Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Duis leo.t nulla pariatur. Excepteur sint occaecat cupida</li>

						</ul>
					</div> <!-- .col-md-6 content-area ends -->
                    @if (app()->getlocale()=='ar')
					    <div class="col-md-6 image-area">
							<img class="img-responsive" src="{{asset('assets/img/Our-Vision.jpg')}}" alt="our vision image">
					    </div> <!-- .col-md-6 image-area ends -->
                    @endif


				</div> <!-- .row area-content ends -->
			</div> <!-- .container ends -->
		</section> <!-- .our-vision area-block ends -->


		<!-- OUR HISTORY  -->
		<section class="our-history area-block">

			<div class="container">
				<div class="row area-content">
					<div class="col-md-6 content-area">
						<h3 class="area-title">Our History <span class="dark">03</span></h3>
						<p>
							Bire et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>

						<p>
							Nicco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div> <!-- .col-md-6 content-area ends -->

					<div class="col-md-6 image-area">
						<img class="img-responsive" src="{{asset('assets/img/OUR-HISTORY.jpg')}}" alt="who we are image">
					</div> <!-- .col-md-6 image-area ends -->
				</div> <!-- .row area-content ends -->
			</div> <!-- .container ends -->
		</section> <!-- .our-history area-block ends -->

        <!-- FUN FACTS -->
		<section class="fun-facts section-block">
			<div class="container">
				<div class="row section-content">
					<div class="col-md-3 col-sm-6">
						<div class="content-wrapper">
							<h3 class="clients-number" data-from="0" data-to="222" data-speed="3000">222</h3>
							<p>Happy Clients</p>
						</div> <!-- .content-wrapper ends -->
					</div> <!-- .col-md-3 col-sm-6 ends -->

					<div class="col-md-3 col-sm-6">
						<div class="content-wrapper">
							<h3 class="templates-number" data-from="0" data-to="30" data-speed="3000">30</h3>
							<p>Templates</p>
						</div> <!-- .content-wrapper ends -->
					</div> <!-- .col-md-3 col-sm-6 ends -->

					<div class="col-md-3 col-sm-6">
						<div class="content-wrapper">
							<h3 class="projects-number" data-from="2000" data-to="8458" data-speed="3000">8458</h3>
							<p>Projects Completed</p>
						</div> <!-- .content-wrapper ends -->
					</div> <!-- .col-md-3 col-sm-6 ends -->

					<div class="col-md-3 col-sm-6">
						<div class="content-wrapper">
							<h3 class="awards-number" data-from="0" data-to="932" data-speed="3000">932</h3>
							<p>Awards Achived</p>
						</div> <!-- .content-wrapper ends -->
					</div> <!-- .col-md-3 col-sm-6 ends -->
				</div> <!-- .row section-content ends -->
			</div> <!-- .container ends -->
		</section> <!-- .fun-facts ends -->
@stop
