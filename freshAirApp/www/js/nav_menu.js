$(document).ready(function () {

	//Not needed for now
	// window.addEventListener('WebComponentsReady', function(e) {
		// //HTML imports are loaded
		// var link = document.querySelector('link[rel=import][id=geolocationData_importLink]');
        // //var content = link.import.querySelector('#sampleContentPage');
        // var content = link.import.querySelector('#geolocationDataPage');
        // //document.body.appendChild(document.importNode(content, true));
		// $('#page-content').html(content);
	// });

    //stick in the fixed 100% height behind the navbar but don't wrap it
    $('#slide-nav.navbar-inverse').after($('<div class="inverse" id="navbar-height-col"></div>'));
  
    $('#slide-nav.navbar-default').after($('<div id="navbar-height-col"></div>'));  

    // Enter your ids or classes
    var toggler = '.navbar-toggle';
    var pagewrapper = '#pageContentWrapper';
    var navigationwrapper = '.navbar-header';
    var menuwidth = '100%'; // the menu inside the slide menu itself
    var slidewidth = '80%';
    var menuneg = '-100%';
    var slideneg = '-80%';


    $("#slide-nav").on('click', toggler, function (e) {

        var selected = $(this).hasClass('slide-active');

        $('#slidemenu').stop().animate({
            left: selected ? menuneg : '0px'
        });

        $('#navbar-height-col').stop().animate({
            left: selected ? slideneg : '0px'
        });

        $(pagewrapper).stop().animate({
            left: selected ? '0px' : slidewidth
        });

        $(navigationwrapper).stop().animate({
            left: selected ? '0px' : slidewidth
        });


        $(this).toggleClass('slide-active', !selected);
        $('#slidemenu').toggleClass('slide-active');


        //$('.pageContent, .navbar, body, .navbar-header').toggleClass('slide-active');
        $('.pageContent, .navbar, .navbar-header').toggleClass('slide-active');
		
		$('#pageContentWrapper').toggleClass('noOverflow'); //Prevent scrolling the page-content div when menu is open


    });


    var selected = '#slidemenu, #page-content, body, .navbar, .navbar-header';


    $(window).on("resize", function () {

        if ($(window).width() > 767 && $('.navbar-toggle').is(':hidden')) {
            $(selected).removeClass('slide-active');
        }


    });
	
	

	
	


});