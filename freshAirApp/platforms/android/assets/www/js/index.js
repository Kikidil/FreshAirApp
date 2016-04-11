
var app = {
    // Application Constructor
    initialize: function() {
        this.bindEvents();
    },
    // Bind Event Listeners
    //
    // Bind any events that are required on startup. Common events are:
    // 'load', 'deviceready', 'offline', and 'online'.
    bindEvents: function() {
        document.addEventListener('deviceready', this.onDeviceReady, false);
    },
    // deviceready Event Handler
    //
    // The scope of 'this' is the event. In order to call the 'receivedEvent'
    // function, we must explicitly call 'app.receivedEvent(...);'
    onDeviceReady: function() {
        app.receivedEvent('deviceready');
    },
    // Update DOM on a Received Event
    receivedEvent: function(id) {
        // var parentElement = document.getElementById(id);
        // var listeningElement = parentElement.querySelector('.listening');
        // var receivedElement = parentElement.querySelector('.received');

        // listeningElement.setAttribute('style', 'display:none;');
        // receivedElement.setAttribute('style', 'display:block;');

        console.log('Received Event: ' + id);
    }
};

app.initialize();

var navHistory = [];

$('a').on('click', function (e) {
	if ($(this).hasClass('appLink')) {
		e.preventDefault(); //Prevent following the link
		var newPage = $(this).attr('href');
		
		$('#pageContentWrapper .pageContent').hide(0); //Hide all other pageContent divs
		$('#pageContentWrapper .pageContent'+newPage).show(0); //Display/unhide the new page		
	}
	else {
		//e.preventDefault();
		//alert('Unhandeled link....');
	}
	
})

$('#btnGeo.btn').on('click', function (e) {
	getLocation();
});

function getLocation() {

	// onSuccess Callback
	// This method accepts a Position object, which contains the
	// current GPS coordinates
	//
	var onSuccess = function(position) {
		// alert('Latitude: '          + position.coords.latitude          + '\n' +
			  // 'Longitude: '         + position.coords.longitude         + '\n' +
			  // 'Altitude: '          + position.coords.altitude          + '\n' +
			  // 'Accuracy: '          + position.coords.accuracy          + '\n' +
			  // 'Altitude Accuracy: ' + position.coords.altitudeAccuracy  + '\n' +
			  // 'Heading: '           + position.coords.heading           + '\n' +
			  // 'Speed: '             + position.coords.speed             + '\n' +
			  // 'Timestamp: '         + position.timestamp                + '\n');
			  
		$('#geolocationData').html('<p><strong>Latitude</strong>: '+position.coords.latitude+'</p>\
									<p><strong>Longitude</strong>: '+position.coords.longitude+'</p>\
									<p><strong>Altitude</strong>: '+position.coords.altitude+'</p>\
									<p><strong>Accuracy</strong>: '+position.coords.accuracy+'</p>\
									<p><strong>Altitude Accuracy</strong>: '+position.coords.altitudeAccuracy+'</p>\
									<p><strong>Heading</strong>: '+position.coords.heading+'</p>\
									<p><strong>Speed</strong>: '+position.coords.speed+'</p>\
									<p><strong>Timestamp</strong>: '+position.timestamp+'</p>'
		);
		
		//var currentPosition = {"position":}
		var currentPosition = {latitude: position.coords.latitude, 
						longitude: position.coords.longitude,
						altitude: position.coords.altitude,
						accuracy: position.coords.accuracy,
						altitudeAccuracy: position.coords.altitudeAccuracy,
						heading: position.coords.heading,
						speed: position.coords.speed,
						timestamp: position.timestamp
						}
		//alert(JSON.stringify(currentPosition));	
		$('#geolocationData').append('<p>'+JSON.stringify(currentPosition)+'</p>');
	 };

	// onError Callback receives a PositionError object
	//
	function onError(error) {
		alert('code: '    + error.code    + '\n' +
			  'message: ' + error.message + '\n');
	}

	navigator.geolocation.getCurrentPosition(onSuccess, onError, {maximumAge:3000, timeout:5000, enableHighAccuracy:true});

}