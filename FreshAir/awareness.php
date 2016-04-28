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
					<h1 class="page-title">User awareness</h1>
				</header>
				<p>
				<ol>
					
						Important cases of air pollution in Brisbane
						One of the major highlighted problems arisen to industrial cities around the world wide is 
						air pollution during past few decades. According to Zivkovic (2013), biggest economic cities 
						are categories in the first raw of air polluted cities as well. In the same way, significant 
						cases around air pollution facts are mentioned over all of this description.
					
						Consequently, 
						(Brisbane city Council & The South East Queensland Air Emissions Inventory, 2004) articulate that,
						“The clean air strategy” implemented by Brisbane city council aim for certain objectives such as to 
						minimize the releasing pollutants to the air and also to minimize the impact from air pollution on 
						public. In addition, city council is building an environmental program to increase the air pollution quality.
						Pursuing this further, “Fresh air app” is recommending how to innovate this idea further in order to reach
						the accepted goals established by relevant authorities. 
						
					In order to develop the user awareness tracking progress, 
						evaluation and monitoring the fresh air app would represent the possibilities with relevant functions on their website,
						app and on air beam. Moreover, the tracking progress of the users were by following their report cards which was 
						available on city council website. Instead of this method,  Green IT solutions are implementing a new source of plan
						to track the progress of the users by establishing sms method linked with air beam.  However, users’ digital identity
						would be essential to download the data through the website. So the users need to sign up with their email verification
						in order to check the air pollution level around their area. 
					
					Additionally, (Queensland Government, 2006) argues that, 
						public users who live in indoors reduce the pollution level by improving such habits as cleaning (using lemon or vanilla 
						air fresheners ) inside the houses, renovating, using wood heaters during winter period, pest control and etc. Brisbane city
						council provides an active transport strategy in cycling and walking around urban areas to reduce the traffic jam and air pollution as well. 
						Continuing this idea , the transportation matter related the air quality level directly so establishing a way to concentrate 
						the percentage of gaseous pollutants such as CO, NO, and SO2. Despite of these findings, collaborating with regional partners 
						is essential before engaging with the users who live in  remote areas of Queensland. Pursing this further, Zivkovic (2013) shows that, 
						as a new step of the Brisbane air quality strategy a significant number of natural gas buses are planning to join the translink service 
						in order to deliver a meaningful message to potential users how the government is taking action against the air pollution. Overall, 
						all these cases are significant to motivate the users  to aware about the current situation and what are the steps they need to follow 
						to make the air Brisbane city clean and fresh. 
					
				</ol>
				</p>
				
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