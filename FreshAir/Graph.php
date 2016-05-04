<?PHP
/**
 * index page
 * default page for user
 */
include_once 'db_utility.php';
session_start();

?>
<!DOCTYPE html>

<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Fresh air by QUT</title>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Abel|Satisfy' rel='stylesheet' type='text/css' />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="">
		<div id="header" class="container">
			<div id="logo">
				<a href="#"><img src="images/logo.png" /></a>
			</div>
			<div id="menu">
				<ul>
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="statistics.php">Statistics</a></li>
					<li><a href="aboutus.php">About Us</a></li>
					<li class="current_page_item"><a href="Graph.php">Graph</a></li>
					<li><a href="facts.php">facts</a></li>
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
			</div>
		</div>
	</div>	
	<div id="page">
		<div class="post">
			<h1 style="text-align: center;">GRAPH</h1>
			<div class="entry">					
				<h5>jhfjkdshfjkdshfkjdshfjkdshfjkdshfjkdshjkfhd</h5>
				<p>
				<ol>
					<li>
						Air Quality Forecasts Graph
					</li>
					<li>
						Graph fjkdshkfj dsajkhfdsafd
					</li>
					<li>
						jkfhdsjakhfkjdsfkjdshfjdsf
					</li>

				</ol>
				</p>
			</div>
		</div>
	</div>	
	
	<div id="featured-content">

	</div>
</div>

<div id="footer-content-wrapper">
	<div id="footer-content">
		<div id="fbox1">
			<h2>FOLLOW US ON FACEBOOK</h2>
			<ul class="style1">
				<li class="first"><a href="#">CLICK AND FOLLOW US</a></li>
				
			</ul>
		</div>
		<div id="fbox2">
			<h2>FOLLOW US ON TWITTER</h2>
			<ul class="style1">
				<li class="first"><a href="#">CLICK AND FOLLOW US</a></li>
				
			</ul>
		</div>
		<div id="fbox3">
			<h2>FOLLOW US ON YOUTUBE</h2>
			<ul class="style1">
				<li class="first"><a href="#">CLICK AND FOLLOW US</a></li>
				
			</ul>
		</div>
	</div>
</div>
<div id="footer">
	<p>&copy; FRESH AIR. All rights reserved. Fresh air by QUT.</p>
</div>
<!-- end #footer -->
</body>
</html>
