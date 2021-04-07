@extends('layouts.master')

@section('content')
@if (app()->getlocale()=='en')
    @include('includes.contactheader')
@elseif (app()->getlocale()=='ar')
    @include('includes.arabiccontactheader')
@endif
		<section class="form-map section-block">
			<div class="container">
				<h2 class="block-title">{{__('text.Contact Us')}}</h2>
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
									    <textarea class="form-control" id="message" name="message" placeholder="{{__('text.Your message here')}}"></textarea>
									    <button type="submit" class="btn btn-main pull-left" name="submit">{{__('text.Submit')}}</button>
								    </div> <!-- .col-md-8 ends -->
                                @endif
								<div class="col-md-4">
									<div class="form-group">
										<label class="sr-only" for="name">Name:</label>
										<input type="text" class="form-control" id="name" name="name" placeholder="{{__('text.Your name')}}">
									</div> <!-- .form-group ends -->

									<div class="form-group">
										<label class="sr-only" for="email">Email:</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="{{__('text.Your email')}}">
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
