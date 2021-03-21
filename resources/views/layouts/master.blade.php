<!doctype html>
<html >
<head>
	<!-- General Head Content -->
	<!-- meta tags -->
	<meta charset="utf-8" />
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' /><![endif]-->

	<meta name="description" content="A beautiful bootstrap template for your small business, company, agency or corporate website" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />


	<!-- title tag-->
	<title>The Game اللعبة</title>


	<!-- favicon -->
	<link rel="shortcut icon" href="{{asset('assets/img/gameIcon.png')}}" type="image/x-icon">
	<link rel="icon" href="{{asset('assets/img/gameIcon.jpg')}}" type="image/x-icon">

	<!-- fonts -->
	<link href='https://fonts.googleapis.com/css?family=Alatsi' rel='stylesheet' type='text/css'>

	<!-- Stylesheet -->


	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/all.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/jquery.bxslider.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/magnific-popup.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/loaders.min.css')}}">


	@if (app()->getlocale()=='en')
       <link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
    @elseif (app()->getlocale()=='ar')
       <link rel="stylesheet" type="text/css" href="{{URL::asset('css/main-rtl.css')}}">
	@endif

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
	<![endif]-->


</head>
<body class="home home-animated">
    <div class="site-wrapper">
         <!-- PRELOADER -->
		<!--<div id="pre-loader" class="pre-loader">
			<div class="loader-inner square-spin">
				<div></div>
			</div>
		</div> <!-- .pre-loader ends -->


        @yield('content')

        @if (app()->getlocale()=='en')
           @include('includes.footer')
        @elseif (app()->getlocale()=='ar')
           @include('includes.arabicfooter')
        @endif
    </div> <!-- .site-wrapper ends -->

<!-- SCRIPTS -->
<script type="text/javascript" src="{{URL::asset('js/jquery-1.12.0.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/SmoothScroll.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery.bootstrap-autohidingnavbar.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery.bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery.countTo.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery.mixitup.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery.waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/main.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/all.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/bootstrap-progressbar.min.js')}}"></script>


</body>
</html>
