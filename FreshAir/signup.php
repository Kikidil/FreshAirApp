<?PHP
/**
 * register user
 */
include_once 'db_utility.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['password'] && $_POST['email']) {
        $username = $_POST['email'];
        $password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
        $email = $_POST['email'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $query = "INSERT INTO members(first_name,last_name,password,email_address) "
                . " VALUES ( '" . $firstname . "','" . $lastname . "','" . md5($password) . "','" . $email . "')";

        $mysqli->query($query);
        header('Location: index.php');
    }
}
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="">
	
	<title>Fresh Air - Create Your Own Reality</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	<script type="text/javascript" src="js/myscripts.js"></script>
	
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
					<li><a href="index.php">Home</a></li>
					<li><a href="statistics.php">Statistics</a></li>
					<li><a href="aboutus.php">About Us</a></li>
					<li><a href="facts.php">Facts</a></li>
					<li><a href="awareness.php">Awareness</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
							<?php
						if(@$_SESSION['email_address']){
						?>
						<li><a href="logout.php">Logout</a></li>
						<?php
						}else{
						?>
						<li><a class="btn" href="signin.php">Admin Sign In</a></li>
						<?php
						}
						?>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Registration</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Registration</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Register a new account</h3>
							<p class="text-center text-muted">If you have and account please, <a href="signin.php">Login</a> </p>
							<hr>

							<form method="post" name="form" action="signup.php" onsubmit="return validateForm()">
								<div class="top-margin">
									<label>First Name</label>
									<input type="text" class="form-control" name="firstname">
								</div>
								<div class="top-margin">
									<label>Last Name</label>
									<input type="text" class="form-control" name="lastname">
								</div>
								<div class="top-margin">
									<label>Email Address <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="email">
								</div>

								<div class="top-margin">
										<label>Password <span class="text-danger">*</span></label>
										<input type="password" class="form-control" name="password">
								</div>
								
								<!--<div class="col-sm-6"> -->
								<div class="top-margin">									
										<label>Confirm Password <span class="text-danger">*</span></label>
										<input type="password" class="form-control" name="confirmpassword">
								</div>
						</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										 <button class="btn btn-action" type="submit">Register</button>                     
									</div>
									<div class="col-lg-4 text-right">
										
										<button class="btn btn-action" type="reset">Reset</button>   
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

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