<?PHP
/**
 * index page
 * default page for user
 */
include_once 'db_utility.php';
session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="">
	
	<title>Fresh Air - Create Your Own Reality</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="statistics.php">Statistics</a></li>
					<li><a href="aboutus.php">About Us</a></li>
					<li><a href="awareness.php">Awareness</a></li>
					<li><a href="contactus.php">Contact Us</a></li>	
						<?php
						if(@$_SESSION['email_address']){
						?>
						<li><a href="logout.php">Logout</a></li>
						<?php
						}else{
						?>
						<li><a class="btn" href="signin.php">SIGN IN / SIGN UP</a></li>
						<?php
						}
						?>
				
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head" class="secondary"></header>
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">About</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">About QUT FreshAir</h1>
				</header>
				<h3>QUT FreshAir offers daily AQI conditions for all suburbs and cities of Queensland:</h3>
				<p>
				<ol>
					<li>
						Air Quality Forecasts - Queensland Nationwide daily forecasts.
					</li>
					<li>
						Current Air Quality Conditions - Nationwide and regional real-time ozone and particle pollution air quality maps covering all Queensland states. The maps are updated hourly.
					</li>
					<li>
						Flag Program: Schools, organizations, and the community know the daily air quality conditions by using colored flags.
					</li>

				</ol>
				</p>

				<h3>About the Data</h3>
				<p>Map and forecast data are collected using federal reference or equivalent monitoring techniques or techniques approved by the state, local or tribal monitoring agencies. To maintain "real-time" maps, the data are displayed after the end of each hour. Although preliminary data quality assessments are performed, the data in QUT FreshAir are not fully verified and validated through the quality assurance procedures monitoring organizations used to officially submit and certify data on the EPA Air Quality System (AQS).
				<br>
				This data sharing and centralization creates a one-stop source for real-time and forecast air quality data. The benefits include quality control, national reporting consistency, access to automated mapping methods, and data distribution to the public and other data systems.
				

				
			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-4 sidebar sidebar-right">

				<div class="widget">
					<h4>Know more about us</h4>
					<ul class="list-unstyled list-spaces">
						<li><a href="index.php">How QUT FreshAir Works: </a><br><span class="small text-muted">Want to know hoe QUT FreshAir Works</span></li>
						<li><a href="index.php">Information on Indoor Air Quality</a><br><span class="small text-muted">What is Indoor Air Quality</span></li>
						
					</ul>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
	



	
	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact Us</h3>
						<div class="widget-body">
								<p>0421415067
								<br>
								<br>
								<a href="mailto:lzcangmah@gmail.com">lzcangmah@gmail.com</a>
								<br>
								<br>
								2 george st, brisbane QLD 4000
								</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow Us</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								
								<a href=""><i class="fa fa-youtube fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">QUT FreshAir</h3>
						<div class="widget-body">
							<p>Every day the QUT FreshAir tells you how clean or polluted your outdoor air is, along with associated health effects that may be of concern. The QUT FreshAir translates air quality data into numbers and colors that help people understand when to take action to protect their health.</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

				<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="index.php">Home</a> | 
								<a href="aboutus.php">About</a> |
								<a href="index.php">Map</a> |
								<a href="contactus.php">Contact</a> |
								<b><a href="signup.php">Sign up</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2016,  Designed by QUT FreshAir</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>