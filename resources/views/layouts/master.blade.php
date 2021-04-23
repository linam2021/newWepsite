<!doctype html>
<html>
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
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">

	<!-- fonts -->
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900,400italic%7CRoboto+Slab:400,700' rel='stylesheet' type='text/css'>

	<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/loaders.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
	<![endif]-->


</head>
<body class="home home-animated">
    <div class="site-wrapper">
         <!-- PRELOADER -->
		<div id="pre-loader" class="pre-loader">
			<div class="loader-inner square-spin">
				<div></div>
			</div>
		</div> <!-- .pre-loader ends -->


        @yield('content')

        @include('includes.footer')
    </div> <!-- .site-wrapper ends -->



<!-- SCRIPTS -->
<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/jquery.bootstrap-autohidingnavbar.min.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/all.js"></script>


</body>
</html>
