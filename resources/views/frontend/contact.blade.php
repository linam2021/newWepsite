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
					<div class="col-md-12  email-block">
                        <div class="icon-block">
							<i class="fa fa-envelope"></i>
						</div> <!-- .icon-block ends -->
						<a href="mailto:tgame.academy@gmail.com">tgame.academy@gmail.com</a>
                        <div class="content-area">
							<h4>{{__('text.Germany')}}</h4>
                        </div>
                    </div> <!-- .col-md-3 address-block ends -->
				</div> <!-- .row contend-block ends -->


			</div> <!-- .container ends -->
		</section> <!-- .contact-options section-block ends -->
@stop
