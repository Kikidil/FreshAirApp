<!-- this page contains the Dummy data graphs) -->

<!DOCTYPE html>
<html>
<head>

	   <style>
  	
#chartdiv {
	width	: 100%;
	height	: 500px;
}									
				
  </style> 
  <!-- Referencing JavaScript Libraries 4 Amcharts -->
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

<body>
  			<h1>AQI readings  </h1>  
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
<div id="chartdiv"></div>	
</br><br>

<!-- FINISH IQA -->

<h1> Air Pollutants Readings  </h1>
   <!-- add am chart/ Co graph -->
   			<h2> Carbon monoxide </h2> 
   <!-- Container -->
  <div id="chartdiv_co" style="width: 640px; height: 400px;"></div>
  
   <!-- Create using js  -->

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
<br><br>
  
 <!-- add am chart/  NO2 graph -->
 			<h2> Nitrogen Dioxide </h2> 
   <!-- Container //CHANGE ID NUM BY THE ELEMENT  -->
  <div id="chartdiv2" style="width: 640px; height: 400px;"></div> 
  
   <!-- Create using js  -->

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
              <!-- end graph -->
																				
<!-- add am chart/  SO2 graph -->
 			<h2> Sulfur Dioxide  </h2> 
   <!-- Container //CHANGE ID NUM BY THE ELEMENT  -->
  <div id="chartdiv3" style="width: 640px; height: 400px;"></div> 
  
   <!-- Create using js  -->

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
              <!-- end graph -->
              <br>
              <br>
              <br>
  			<!-- <h1>Air pollutants table  </h1>   -->        
              <!-- Add advance table that is downloadable -->
   			
  
</script> 

 </body>
</html>

