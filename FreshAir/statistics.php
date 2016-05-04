<?PHP
/**
 * index page
 * default page for user
 */
include_once 'db_utility.php';

session_start();
if(!isset($_SESSION['email_address'])){
   header("Location:index.php");
}

if (!isset($_POST['suburb'])) {
	$query = "select * from items order by item_id";
	} else {
		$query = "select * from items where suburb like '%" . $_POST['suburb'] . "%' order by item_id";
	} 
	
$result = $mysqli->query($query);
$row = $result->fetch(PDO::FETCH_ASSOC);
	//$data = array();
   // $data_array = array();
 //while($row = $result->fetch(PDO::FETCH_ASSOC)) {
	// $item = array($row["suburb"], (float) $row["sound_levels"], (float) $row["temperature"], (float) $row["humidity"], (float) $row["co"], (float) $row["no2"]);
    //    array_push($data, $item);
     //   $data_array[] = $row;
 //}

if(isset($_POST['submit'])){
	
	$query = "select * from items where email_address like '%" . $_POST['email'] . "%'";
	 
	 $result = $mysqli->query($query);
	$row = $result->fetch(PDO::FETCH_ASSOC);
	
    $to = $_POST['email']; // this is your Email address
    $from = $row['email_address']; // this is the sender's Email address
    $subject = "Data Shared";
	$message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "http://localhost/FreshAir/signin.php";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="">
	
	<title>Fresh Air - Create Your Own Reality</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
<script>  

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

<?PHP
		//$len = count($data);
	//	for ($x = 0; $x < $len; $x++) {
		//	$row = $data[$x];
	 ?>        
      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
	     ['Month', '<?PHP echo $row['suburb'] ?>',],
         ['Level of Sound', <?PHP echo $row['sound_levels'] ?>,],
         ['Temperature', <?PHP echo $row['temperature'] ?>,],
         ['Humidity', <?PHP echo $row['humidity'] ?>,],
         ['CO2', <?PHP echo $row['co'] ?>,],
         ['NO2', <?PHP echo $row['no2'] ?>,]
      ]);
	<?PHP  
	//  }
	  ?>

    var options = {
      title : 'Daily Statistics per Suburb',
      vAxis: {title: 'Measurement'},
      hAxis: {title: 'Type'},
      seriesType: 'bars',
      series: {7: {type: 'line'}}
    };

    var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
</script>
<script async src="//jsfiddle.net/wjcgLu5e/embed/"></script>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="index.php">Home</a></li>
					<li  class="active"><a href="statistics.php">Statistics</a></li>
					<li><a href="aboutus.php">About Us</a></li>
					<li class="current_page_item"><a href="facts.php">Facts</a></li>
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

	<!-- Header -->
	<header id="head" class="secondary"></header>
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Statistics</li>
		</ol>

		<div class="row">
			
			 <div id="chart_div" style="width: 1200px; height: 600px;"></div>
			 <form method="post" action="statistics.php" >
								<div class="top-margin">
									<h3>Share data with:</h3></br>
									<label>Username/Email <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="email">
								</div>
								<div class="top-margin">
									<label>Temporal Password <span class="text-danger">*</span></label>
									<input type="password" class="form-control" name="password">
								</div>
								
								<label>Message: <span class="text-danger">*</span></label></br><br><textarea rows="5" name="message" cols="30"></textarea><br>

								<hr>
							
									<div class="col-lg-4 ">
										<button class="btn btn-action" type="submit">Share</button>
									</div>
								</div>
							</form>
		
			
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