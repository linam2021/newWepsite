@extends('layouts.master')

@section('content')
@if (app()->getlocale()=='en')
    @include('includes.contactheader')
@elseif (app()->getlocale()=='ar')
    @include('includes.arabiccontactheader')
@endif

<div role="tabpanel" class="tab-pane active" id="contact">
	<div class="site-wrapper">
        <section class="contact-options section-block">
			<div class="container">
				<h2 class="sr-only">Contact Us</h2>
				<div class="row section-content text-center">
					<div class="col-md-3 col-md-offset-2 email-block">
                        <div class="icon-block">
							<i class="fa fa-envelope"></i>
						</div> <!-- .icon-block ends -->
						<a href="mailto:email@website.com">email@website.com</a>
                    </div> <!-- .col-md-3 address-block ends -->

					<div class="col-md-3 facebook-block">
						<div class="icon-block">
							<i class="fab fa-facebook"></i>
						</div> <!-- .icon-block ends -->
						<a href="https://www.facebook.com/Thegame.delavida">www.facebook.com/Thegame.delavida </a>
					</div> <!-- .col-md-3 address-block ends -->

                    <div class="col-md-3 instagram-block">
						<div class="icon-block">
							<i class="fab fa-instagram"></i>
						</div> <!-- .icon-block ends -->
						<a href="https://www.instagram.com/thegame.delavida">www.instagram.com/thegame.delavida </a>
					</div> <!-- .col-md-3 address-block ends -->

				</div> <!-- .row contend-block ends -->

                <div class="row section-content text-center">
                    <div class="col-md-3 col-md-offset-2 youtube-block">
                        <div class="icon-block">
							<i class="fab fa-youtube"></i>
						</div> <!-- .icon-block ends -->
						<a href="https://www.youtube.com/c/allo3bah/featured">www.youtube.com/c/allo3bah/featured</a>
                    </div> <!-- .col-md-3 address-block ends -->

					<div class="col-md-3 telegram-block">
						<div class="icon-block">
							<i class="fab fa-telegram"></i>
						</div> <!-- .icon-block ends -->
						<a href="http://t.me/TGserver1">t.me/TGserver1 </a>
					</div> <!-- .col-md-3 address-block ends -->

                    <div class="col-md-3 linkedin-block">
						<div class="icon-block">
							<i class="fab fa-linkedin"></i>
						</div> <!-- .icon-block ends -->
						<a href="https://de.linkedin.com/company/the-game-delavida">de.linkedin.com/company/the-game-delavida </a>
					</div> <!-- .col-md-3 address-block ends -->

				</div> <!-- .row contend-block ends -->

			</div> <!-- .container ends -->
		</section> <!-- .contact-options section-block ends -->

		<section class="form-map section-block">
			<div class="container">
				<h2 class="block-title">Contact Us</h2>
				<div class="row section-content">
					<div class="col-md-12 form-block">

						<div class="form-message">
							<p></p>
						</div>

						<form class="" id="redone-contact" method="POST" action="php/form-handler.php">
							<div class="row">
                                @if (app()->getlocale()=='ar')
                                     <div class="col-md-8">
								    	<label class="sr-only" for="message">Message:</label>
									    <textarea class="form-control" id="message" name="message" placeholder="Your message here"></textarea>
									    <button type="submit" class="btn btn-main pull-left" name="submit">Submit</button>
								    </div> <!-- .col-md-8 ends -->
                                @endif
								<div class="col-md-4">
									<div class="form-group">
										<label class="sr-only" for="name">Name:</label>
										<input type="text" class="form-control" id="name" name="name" placeholder="Your name">
									</div> <!-- .form-group ends -->

									<div class="form-group">
										<label class="sr-only" for="email">Email:</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="Your email">
									</div> <!-- .form-group ends -->
								</div> <!-- .col-md-4 ends -->
                                @if (app()->getlocale()=='en')
								    <div class="col-md-8">
									    <label class="sr-only" for="message">Message:</label>
								    	<textarea class="form-control" id="message" name="message" placeholder="Your message here"></textarea>
									    <button type="submit" class="btn btn-main pull-right" name="submit">Submit</button>
								    </div> <!-- .col-md-8 ends -->
                                @endif
							</div> <!-- .row ends -->
						</form> <!-- .redone-contact ends -->
					</div> <!-- .col-md-12 form-block ends -->


				</div> <!-- .row section-content ends -->
			</div> <!-- .container ends -->
		</section> <!-- .form-map section-block ends -->
@stop
