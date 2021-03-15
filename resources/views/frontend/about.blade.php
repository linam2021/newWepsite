@extends('layouts.master')
@section('content')
@include('includes.aboutheader')

		<section class="page-title-banner about-page">
			<div class="container">
				<h2>About</h2>
				<ul class="breadcrumbs">
					<li><a href="{{route('index')}}">Home</a></li>
					<li><a href="{{route('about')}}">About</a></li>
				</ul> <!-- .breadcrumbs ends -->
			</div> <!-- .container ends -->
		</section> <!-- .page-title-banner ends -->

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
						<img class="img-responsive" src="http://placehold.it/581x440" alt="who we are image">
					</div> <!-- .col-md-6 image-area ends -->
				</div> <!-- .row area-content ends -->
			</div> <!-- .container ends -->
		</section> <!-- .who-we are area-block ends -->

		<!-- OUR VISION  -->
		<section class="our-vision section-block">

			<div class="container">
				<div class="row section-content">

					<div class="col-md-6 image-area">
						<div class="image-wrapper">
							<img class="img-responsive" src="http://placehold.it/598x402" alt="our vision image">
							<span class="style-border"></span>
						</div> <!-- .image-wrapper ends -->
					</div> <!-- .col-md-6 image-area ends -->

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
						<img class="img-responsive" src="http://placehold.it/585x493" alt="who we are image">
					</div> <!-- .col-md-6 image-area ends -->
				</div> <!-- .row area-content ends -->
			</div> <!-- .container ends -->
		</section> <!-- .our-history area-block ends -->
@stop
