<?PHP
session_start();
/**
* index page
* default page for user
*/
include_once 'db_utility.php';
if(!isset($_SESSION['Yes'])){
header('Location: index.php');
}
if (!isset($_POST['suburb'])){
$query = "select * from items order by item_id";
} else {
$query = "select * from items where suburb like '%" . $_POST['suburb'] . "%' order by item_id";
}
$result = $mysqli->query($query);
$row = $result->fetch(PDO::FETCH_ASSOC);

/**
 *  following is to generate a markers from php code     
 */
//$data = array();
//$data_array = array();
//while ($row = $result->fetch(PDO::FETCH_ASSOC)){
//	$item = array($row["suburb"], (float) $row["sound_levels"], (float) $row["temperature"], (float) $row["humidity"], (float) $row["co"], (float) $row["no2"]);
	//array_push($data, $item);
	//$data_array[] = $row;
	//}
	
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if ($_POST['password'] && $_POST['email']) {
	$username = $_POST['email'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];
	$email = $_POST['email'];
	$firstname = $_POST['firstname'];
	$query = "INSERT INTO tempmembers (first_name,password,email_address) "
			. " VALUES ('" . $firstname . "','" . md5($password) . "','" . $email . "')";
	$mysqli->query($query);
	header('Location: statistics.php');
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport"    content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author"      content="">

	   <style>
  	
#chartdiv {
	width	: 100%;
	height	: 500px;
}									
				
  </style> 
  
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
//<?PHP
//$len = count($data_array);
//for ($x = 0; $x < $len; $x++) {
	//$row = $data_array[$x];

	//?>    

	
function drawVisualization() {
// Some raw data (not necessarily accurate)
var data = google.visualization.arrayToDataTable([
['Month', '<?PHP echo $row['suburb']?>'],
['Level of Sound', <?PHP echo $row['sound_levels']?>,],
['Temperature', <?PHP echo $row['temperature']?>,],
['Humidity', <?PHP echo $row['humidity']?>,],
['CO2', <?PHP echo $row['co']?>,],
['NO2', <?PHP echo $row['no2']?>,]
]);

//<?PHP
//}
//?>    

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

<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

  <script type="text/javascript">
  //because for now the js is not working so I need to copy this here 
    //co DB Jason code  
	var chartData_CO =   //change _co with element name 
[ { "Date": "2016-04-22", "CO": 125.00 },
 { "Date": "2016-04-23", "CO": 100.00 },
  { "Date": "2016-04-24", "CO": 110.00 },
   { "Date": "2016-04-25", "CO": 115.00 },
    { "Date": "2016-04-26", "CO": 95.00 },
     { "Date": "2016-04-27", "CO": 90.00 },
      { "Date": "2016-04-28", "CO": 80.00 },
       { "Date": "2016-04-29", "CO": 87.00 },
        { "Date": "2016-04-30", "CO": 125.00 },
         { "Date": "2016-05-01", "CO": 125.00 } ]

    // NO2  DB Jason code //
     var chartData_NO2 = 
  [ { "Date": "2016-04-22", "NO2": 4.00 },
 { "Date": "2016-04-23", "NO2": 5.0},
  { "Date": "2016-04-24", "NO2": 4.00 },
   { "Date": "2016-04-25", "NO2": 5.00 },
    { "Date": "2016-04-26", "NO2": 6.00 },
     { "Date": "2016-04-27", "NO2": 6.00 },
      { "Date": "2016-04-28", "NO2": 6.00 },
       { "Date": "2016-04-29", "NO2": 6.00 },
        { "Date": "2016-04-30", "NO2": 7.00 },
         { "Date": "2016-05-01", "NO2": 7.00 } ]  

	//SO2 sulfur dioxide DB Jason code //
	     var chartData_SO2 = 
[ { "Date": "2016-04-22", "SO2": 200.0 },
 { "Date": "2016-04-23", "SO2": 115.0},
  { "Date": "2016-04-24", "SO2": 140.00 },
   { "Date": "2016-04-25", "SO2": 150.00 },
    { "Date": "2016-04-26", "SO2": 160.00 },
     { "Date": "2016-04-27", "SO2": 96.00 },
      { "Date": "2016-04-28", "SO2": 96.00 },
       { "Date": "2016-04-29", "SO2": 86.00 },
        { "Date": "2016-04-30", "SO2": 117.00 },
         { "Date": "2016-05-01", "SO2": 107.00 } ]  
         
</script>

<script>
var chart = AmCharts.makeChart("chartdiv", {
  "type": "serial",
  "theme": "light",
  "marginRight": 40,
  "marginLeft": 40,
  "autoMarginOffset": 20,
  "mouseWheelZoomEnabled": true,
  "dataDateFormat": "YYYY-MM-DD",
  "valueAxes": [{
    "id": "v1",
    "axisAlpha": 0,
    "position": "left",
    "ignoreAxisWidth": true
  }],
  "balloon": {
    "borderThickness": 1,
    "shadowAlpha": 0
  },
  "graphs": [{
    "id": "g1",
    "balloon": {
      "drop": true,
      "adjustBorderColor": false,
      "color": "#ffffff"
    },
    "bullet": "round",
    "bulletBorderAlpha": 1,
    "bulletColor": "#FFFFFF",
    "bulletSize": 5,
    "hideBulletsCount": 50,
    "lineThickness": 2,
    "title": "red line",
    "useLineColorForBulletBorder": true,
    "valueField": "value",
    "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
  }],
  "chartScrollbar": {
    "graph": "g1",
    "oppositeAxis": false,
    "offset": 30,
    "scrollbarHeight": 80,
    "backgroundAlpha": 0,
    "selectedBackgroundAlpha": 0.1,
    "selectedBackgroundColor": "#888888",
    "graphFillAlpha": 0,
    "graphLineAlpha": 0.5,
    "selectedGraphFillAlpha": 0,
    "selectedGraphLineAlpha": 1,
    "autoGridCount": true,
    "color": "#AAAAAA"
  },
  "chartCursor": {
    "pan": true,
    "valueLineEnabled": true,
    "valueLineBalloonEnabled": true,
    "cursorAlpha": 1,
    "cursorColor": "#258cbb",
    "limitToGraph": "g1",
    "valueLineAlpha": 0.2,
    "valueZoomable": true
  },
  "valueScrollbar": {
    "oppositeAxis": false,
    "offset": 50,
    "scrollbarHeight": 10
  },
  "categoryField": "date",
  "categoryAxis": {
    "parseDates": true,
    "dashLength": 1,
    "minorGridEnabled": true
  },
  "export": {
    "enabled": true
  },
  "dataProvider": [{
     
    "date": "2016-04-22",
    "value": 50
  }, {
    "date": "2016-04-23",
    "value": 46
  }, {
    "date": "2016-04-24",
    "value": 46
  }, {
    "date": "2016-04-25",
    "value": 45
  }, {
    "date": "2016-04-26",
    "value": 43
  }, {
    "date": "2016-04-27",
    "value": 59
  }, {
    "date": "2016-04-28",
    "value": 63
  }, {
    "date": "2016-04-29",
    "value": 49
  }, {
    "date": "2016-04-30",
    "value": 30
  }, {
    "date": "2016-05-01",
    "value": 37
  }, {
    "date": "2016-05-02",
    "value": 45
  }]
});

chart.addListener("rendered", zoomChart);

zoomChart();

function zoomChart() {
  chart.zoomToIndexes(chart.dataProvider.length - 40, chart.dataProvider.length - 1);
}
</script> 

<script> AmCharts.ready(function() {
	   	// code CO
//dataProvider is used to specify a data source for the chart and categoryField denotes 
//a field in data objects holding values for the category axis (usually X-axis).
var chart = new AmCharts.AmSerialChart();
chart.dataProvider = chartData_CO; //change _co with element name 
chart.categoryField = "Date";

//Graphs are represented by AmCharts.AmGraph class
var graph = new AmCharts.AmGraph();
graph.valueField = "CO";
graph.type = "column";
chart.addGraph(graph);



// catg x 
var categoryAxis = chart.categoryAxis;
categoryAxis.autoGridCount  = false;
categoryAxis.gridCount = chartData_CO.length; //change _co with element name 
categoryAxis.gridPosition = "start";

//to avoid over overlapping make them vertically 
categoryAxis.labelRotation = 90;


//fill
graph.fillAlphas = 0.8;

//3d 
chart.angle = 30;
chart.depth3D = 15;

//ask our chart to render itself into our chartdiv 
chart.write('chartdiv_co');
// chart is drown 
}); 

// CO Chart is finished 
</script>


<script> AmCharts.ready(function() {
	   	// code NO2
//dataProvider is used to specify a data source for the chart and categoryField denotes 
//a field in data objects holding values for the category axis (usually X-axis).
var chart = new AmCharts.AmSerialChart();
chart.dataProvider = chartData_NO2; //change _co with element name 
chart.categoryField = "Date";

//Graphs are represented by AmCharts.AmGraph class
var graph = new AmCharts.AmGraph();
graph.valueField = "NO2";
graph.type = "column";
chart.addGraph(graph);



// catg x 
var categoryAxis = chart.categoryAxis;
categoryAxis.autoGridCount  = false;
categoryAxis.gridCount = chartData_NO2.length; //change _co with element name 
categoryAxis.gridPosition = "start";

//to avoid over overlapping make them vertically 
categoryAxis.labelRotation = 90;


//fill
graph.fillAlphas = 0.8;

//3d 
chart.angle = 30;
chart.depth3D = 15;

//ask our chart to render itself into our chartdiv 
chart.write('chartdiv2'); //CHANGE NUM BY THE ELEMENT 
// chart is drown 
}); 

//Grap NO2 FINISHED 
</script> 


<script> AmCharts.ready(function() {
	   	// code SO2
//dataProvider is used to specify a data source for the chart and categoryField denotes 
//a field in data objects holding values for the category axis (usually X-axis).
var chart = new AmCharts.AmSerialChart();
chart.dataProvider = chartData_SO2; //change _co with element name 
chart.categoryField = "Date";

//Graphs are represented by AmCharts.AmGraph class
var graph = new AmCharts.AmGraph();
graph.valueField = "SO2";
graph.type = "column";
chart.addGraph(graph);



// catg x 
var categoryAxis = chart.categoryAxis;
categoryAxis.autoGridCount  = false;
categoryAxis.gridCount = chartData_SO2.length; //change _co with element name 
categoryAxis.gridPosition = "start";

//to avoid over overlapping make them vertically 
categoryAxis.labelRotation = 90;


//fill
graph.fillAlphas = 0.8;

//3d 
chart.angle = 30;
chart.depth3D = 15;

//ask our chart to render itself into our chartdiv 
chart.write('chartdiv3'); //CHANGE NUM BY THE ELEMENT 
// chart is drown 
}); 

//Grap sO2 FINISHED 
</script> 

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
if(@$_SESSION['Yes']){
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

	<h1>AQI readings  </h1>  

<div id="chart_div" style="width: 1200px; height: 600px;"></div>

<div id="chartdiv"></div>	
</br><br>

<!-- FINISH IQA -->

<h1> Air Pollutants Readings  </h1>
   <!-- add am chart/ Co graph -->
   			<h2> Carbon monoxide </h2> 
   <!-- Container -->
  <div id="chartdiv_co" style="width: 640px; height: 400px;"></div>
  
   <!-- Create using js  --> 
   
   
   <br><br>
   
                <!-- end graph -->
				
				   <!-- Create using js  -->
  
 <!-- add am chart/  NO2 graph -->
 			<h2> Nitrogen Dioxide </h2> 
   <!-- Container //CHANGE ID NUM BY THE ELEMENT  -->
  <div id="chartdiv2" style="width: 640px; height: 400px;"></div> 
  
   <!-- Create using js  -->
																				
<!-- add am chart/  SO2 graph -->
 			<h2> Sulfur Dioxide  </h2> 
   <!-- Container //CHANGE ID NUM BY THE ELEMENT  -->
  <div id="chartdiv3" style="width: 640px; height: 400px;"></div> 
  
 <br><br>


<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Invite Someone to see Data</h3>
							<hr>

							<form method="post" name="form" action="statistics.php" onsubmit="return validateForm()">
								<div class="top-margin">
									<label>First Name</label>
									<input type="text" class="form-control" name="firstname">
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
						
						<label>Message: <span class="text-danger">*</span></label></br><br><textarea rows="5" name="message" cols="30"></textarea><br>

								<hr>

								<div class="row">
									<div class="col-sm-6 text-right">
										 <button class="btn btn-action" type="submit">Invite</button>                     
									</div>
								</div>
							</form>
						</div>
					</div>



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