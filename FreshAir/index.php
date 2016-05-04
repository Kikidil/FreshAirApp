<?PHP
/**
 * index page
 * default page for user
 */
include_once 'db_utility.php';
session_start();

if (!isset($_POST['suburb'])) {
	$query = "select * from items order by item_id";
	} else {
		$query = "select * from items where suburb like '%" . $_POST['suburb'] . "%' order by item_id";
	} 
	
$result = $mysqli->query($query);

?>
<!DOCTYPE html>

<html>
    <head>
            <link rel="stylesheet" href="mystyle.css">
			<link rel="shortcut icon" href="assets/images/gt_favicon.png">
			
			<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
			<link rel="stylesheet" href="assets/css/bootstrap.min.css">
			<link rel="stylesheet" href="assets/css/font-awesome.min.css">

			<!-- Custom styles for our template -->
			<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
			<link rel="stylesheet" href="assets/css/main.css">			
            <title>Fresh Air - Create Your Own Reality</title> 	    
			<meta name="keywords" content="HTML,CSS,XML,JavaScript">
			<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
			<meta charset="UTF-8">	 
			<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true"></script>
			
		          		
</head>
<body onload="getLocation()" class="home">   
	
 <script>
                function initialize() {
    <?php
    /**
     *  following is to generate a markers from php code     
     */
    $data = array();
    $data_array = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $item = array($row["item_id"], (float) $row["latitude"], (float) $row["longitude"]);
        array_push($data, $item);
        $data_array[] = $row;
    }
    echo "var markers = " . json_encode($data) . ";\n";
    ?>

		/*/if(navigator.geolocation) {
					navigator.geolocation.getCurrentPosition(function(position) {
					  var pos = new google.maps.LatLng(position.coords.latitude,
													   position.coords.longitude);

					  var infowindow = new google.maps.InfoWindow({
						map: map,
						position: pos,
						content: 'Location found using HTML5.'
					  });

					  map.setCenter(pos);
					}, function() {
					  handleNoGeolocation(true);
					});
				  } else {
					// Browser doesn't support Geolocation
					handleNoGeolocation(false);
				  }

				function handleNoGeolocation(errorFlag) {
				  if (errorFlag) {
					var content = 'Error: The Geolocation service failed.';
				  } else {
					var content = 'Error: Your browser doesn\'t support geolocation.';
				  }

				  var options = {
					map: map,
					position: new google.maps.LatLng(-27.615549,153.030034),
					content: content
				  };

				  var infowindow = new google.maps.InfoWindow(options);
				  map.setCenter(options.position);
				} /*/
                    var myLatlng = new google.maps.LatLng(-27.470125,153.021072);
                    var mapOptions = {
                        zoom: 13,
                        center: myLatlng
                    };

                    var bounds = new google.maps.LatLngBounds();
                    var element = document.getElementById('map-canvas');
                    var map = new google.maps.Map(element, mapOptions);
                    map.setTilt(45);
                    for (i = 0; i < markers.length; i++) {
                        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                        bounds.extend(position);
                        var letter = String.fromCharCode("A".charCodeAt(0) + i);
                        marker = new google.maps.Marker({
                            position: position,
                            map: map,
                            icon: "http://maps.google.com/mapfiles/marker" + letter + ".png",
                            title: markers[i][0]
                        });
                    }
                }
                google.maps.event.addDomListener(window, 'load', initialize);

            </script>
 <script>
 
       

<?PHP
/**
 * get all the suburb,latitude and longitude
 */
$data = array();
while ($row = $result->fetch()) {
    $item = array($row["item_id"], (float) $row["latitude"], (float) $row["longitude"]);
    array_push($data, $item);
}
echo "var item_id = " . json_encode($data) . ";\n";
?>

        /**
         * get current location
         * @param {type} needle
         * @param {type} haystack
         * @returns {Boolean.optionExists}
         */

        /**
         * set the postition based on user's location
         * @param {type} position
         * @returns {undefined}
         */
		function setSuburbFromPosition(position) {
            latitude = position.coords.latitude;
            longitude = position.coords.longitude;
            var select = document.getElementById('item_id');
            for (var i = 0; i < item_id.length; i++) {
                console.log(getDistanceFromLatLonInKm(latitude, longitude, item_id[i][1], item_id[i][2]));
                if (getDistanceFromLatLonInKm(latitude, longitude, item_id[i][1], item_id[i][2]) < 50) {

                    if (!optionExists(item_id[i][0], select)) {
                        select.options[select.options.length] = new Option(item_id[i][0], item_id[i][0]);
                    }
                }
            }
        }


        /**
         * get distance for two location
         * @param {type} lat1
         * @param {type} lon1
         * @param {type} lat2
         * @param {type} lon2
         * @returns {Number}
         */
        function getDistanceFromLatLonInKm(lat1, lon1, lat2, lon2) {
            var R = 6371; // Radius of the earth in km
            var dLat = deg2rad(lat2 - lat1);  // deg2rad below
            var dLon = deg2rad(lon2 - lon1);
            var a =
                    Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                    Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) *
                    Math.sin(dLon / 2) * Math.sin(dLon / 2)
                    ;
            var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
            var d = R * c; // Distance in km
            return d;
        }

        function optionExists(needle, haystack)
        {
            var optionExists = false,
                    optionsLength = haystack.length;

            while (optionsLength--)
            {
                if (haystack.options[ optionsLength ].value === needle)
                {
                    optionExists = true;
                    break;
                }
            }
            return optionExists;
        }

        function deg2rad(deg) {
            return deg * (Math.PI / 180)
        }      
    </script>

    <br/>
    <br/>
   
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
			
			<div id="location">
                <form class="form" method="post" action="index.php">
                    <div  style="display:inline">		
                        <label for="web"></label>
                        <input type="text" name="suburb"  placeholder="Search Bar" />			
                    </div>		
                    <div  style="display:inline">		
                        <input type="submit" value="Search" />
                    </div>		
                </form>
            </div>
		 
			<div>
				<div>
					 <div id="map-canvas" ></div>
				</div>
				
		<div>
          <br/>
            <table align='center' style="width:100%">
                <tr>
                    <th>Suburb</th>
                    <th>Sound Level</th>
                    <th>Temperature</th>
                    <th>Humidity</th>
					<th>CO</th>
                    <th>NO2</th>
					<th>Heart Rate</th>
				    <tr/>
                <?PHP
                $len = count($data_array);
                for ($x = 0; $x < $len; $x++) {
                    $row = $data_array[$x];
                    ?>
                    <tr>   
                        <td><?PHP echo $row['suburb'] ?></td>
                        <td><?PHP echo $row['sound_levels'] ?></td>   
                        <td><?PHP echo $row['temperature'] ?></td>       
						<td><?PHP echo $row['humidity'] ?></td>   
                        <td><?PHP echo $row['co'] ?></td> 
						<td><?PHP echo $row['no2'] ?></td> 		
						<td><?PHP echo $row['heartrate'] ?></td> 							
                    </tr>  
                    <?PHP
                }
                ?>                                
            </table>
        </div>        
				<div class="container">
				
				<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
				
					<div class="row">
						<h1 class="lead">Air Quality Directly Affects Our Quality of Life.</h1>
						<p class="tagline">&nbsp;</p>
						<p><a class="btn btn-default btn-lg" href="statistics.php" role="button">View Statistics</a> </p>
					</div>
				</div>
				
			<!-- Intro -->
			<div class="container text-center">
				<br> <br>
				<h2 class="thin">The best place to tell people why they are here</h2>
				<p class="text-muted">
					The quality of our air directly impacts our health and the natural environment<br> so we want our air to be as clean as possible.
				</p>
			</div>
			<!-- /Intro-->
				
			<!-- Highlights - jumbotron -->
			<div class="jumbotron top-space">
				<div class="container">
					
					<h3 class="text-center thin">Reasons to know Fresh Air</h3>
					
					<div class="row">
						<div class="col-md-3 col-sm-6 highlight">
							<div class="h-caption"><h4><i class="fa fa-truck fa-5"></i> Air Pollution</h4></div>
							<div class="h-body text-center">
								<p>There are many different types of air pollutants from a wide range of sources. The pollutants that most affect health are the gases and particles that contribute to cardiovascular and respiratory disease. These pollutants are often lumped together under the term “smog”.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 highlight">
							<div class="h-caption"><h4><i class="fa fa-users fa-5"></i>Do I know if I am at risk?</h4></div>
							<div class="h-body text-center">
								<p>People with diabetes, lung disease (such as chronic bronchitis, asthma, emphysema, lung cancer) or heart disease (such as angina, a history of heart attacks, congestive heart failure, arrhythmia or irregular heartbeat) are more sensitive to air pollution. </p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 highlight">
							<div class="h-caption"><h4><i class="fa fa-heart fa-5"></i> Air Quality Health Index</h4></div>
							<div class="h-body text-center">
								<p>The Air Quality Health Index is a scale designed to help you understand what the quality of the air around you means to your health. It is a tool developed by health and environmental professionals to communicate the health risk posed by air pollution.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 highlight">
							<div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i>Find out about the Health Risks</h4></div>
							<div class="h-body text-center">
								<p>You can better protect yourself and those in your care by understanding how air pollution affects your health, and by checking the Air Quality Health Index on a regular basis to find out what the health risks from air pollution are in your community.</p>
							</div>
						</div>
					</div> <!-- /row  -->
				
				</div>
			</div>
			<!-- /Highlights -->

			<!-- container -->
			<div class="container">

				<h2 class="text-center top-space">What is FreshAir</h2>
				<br>

				<div class="row">
					<div class="col-sm-12">
						Air pollution is a rapidly rising environmental problem that threatens our future. A study shown that air pollution causes the death of more people than malaria and HIV combined (Lelieveld, 2014). Researchers predicts that the number of deaths caused by air pollution will reach to 5.5 million per year by 2050 (EPA, 2016). Nonetheless, the effects of polluted air is not limited to humans health but it also extends to animals, agriculture and constructions.</div> 
						&nbsp;
						<div class="col-sm-12">
						Brisbane air quality matters because, its air quality can impact the air quality in all QLD. This is because it is the center of south QLD airshed, where air pollution can be trapped and only cleared by rain or wind. Beside geography factors, urban growth is also a major element that impact the air quality. In 2016 brisbane population reached 2.46 millions, making it the third most crowded city (Population Of Brisbane In 2016, 2016). Therefore, raising awareness and providing open data portal to users are necessary to keep the city clean.
						</div>
						&nbsp;
						<div class="col-sm-12"> Currently, there are not many technologies that involves reviewing live pollution data or facilitating fast daily data reporting. Many websites represent data collected annually from government owned sensors. Therefore less people are involved in the process. As a result, not many people are aware of the problem size and impacts. We hope on this project we can make air pollution a more talked about topic. And enable Brisbane air quality to be held in user's hand.
					</div>
					
				</div> <!-- /row -->


				<div class="row">
					<div class="col-sm-6">
						<h3>What is the Air Quality Health Index (AQHI)</h3>
						<p>
							The Air Quality Health Index or "AQHI" is a scale designed to help you understand what the air quality around you means to your health.It is a health protection tool that is designed to help you make decisions to protect your health by limiting short-term exposure to air pollution and adjusting your activity levels during increased levels of air pollution. It also provides advice on how you can improve the quality of the air you breathe.
						</p>
					</div>
					<div class="col-sm-6">
						<h3>How the Air Quality Index is calculated?</h3>
						<p>ACT Health collects the data from remote monitoring stations in various scientific units, such as parts per million (ppm) and micrograms per cubic meter (µg/m3). As the units, time frames and exposure standards are different for different pollutants this can make it hard to compare numbers in a meaningful way. Where the standards are reported as more than an hourly average, a rolling average is calculated.</p>
					</div>
				</div> <!-- /row -->

				<div class="jumbotron top-space">
				<h2 class="text-center top-space">How is Air Quality Measured?</h2>
				<br>
					<p>ACT Health operates the Territory's air quality monitoring network, which comprises two NEPM Performance Monitoring Stations (PMS) in Monash and Florey, and a smaller station in Civic. The Monash PMS is approximately 300 metres west of Cockcroft Avenue and the Florey PMS is in Neumann Place.<br>ACT Health monitors carbon monoxide (CO), nitrogen dioxide (NO2), photochemical oxidants as ozone (O3), particulate matter less than 10 micrometres (PM10) and particulate matter less than 2.5 micrometres (PM2.5).<br>PM10 and PM2.5 are the pollutants of most concern in the ACT. Elevated levels of particulate matter can arise, for example, in colder months due to wood smoke emitted from the use of wood heaters. They may also occur from bushfire and burn-off events in and around the ACT.<br>Photochemical oxidants, such as ozone, are generally not directly emitted. They are formed by the reaction of pollutants in the atmosphere. Ozone is formed when nitrogen oxides react with a group of air pollutants known as Reactive Organic Compounds (ROC) in the presence of sunlight.<br>Emissions from motor vehicles are the primary source of carbon monoxide and oxides of nitrogen pollution in the ACT.<br>Due to a lack of heavy industry the ACT does not monitor sulfur dioxide for the NEPM. following the phase out of leaded fuel on 1 January 2002, the ACT ceased monitoring lead in July 2002.</p>
					<p class="text-right"><a class="btn btn-primary btn-large">Learn more »</a></p>
				</div>

			</div>	<!-- /container -->     
		</div>		
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
	
 </html>
