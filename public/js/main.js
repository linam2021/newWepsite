// strict mode
"use strict";


/**
 * Removing pre Loader
 */

$(window).on('load', function(){
	$('#pre-loader').fadeOut('slow').remove();
});


/**
 * Initializing bootstrap carousel
 */

$('.carousel').carousel();


/* animated carousel */
//Function to animate slider captions 
function doAnimations( elems ) {
    //Cache the animationend event in a variable
    var animEndEv = 'webkitAnimationEnd animationend';
    
    elems.each(function () {
        var $this = $(this),
            $animationType = $this.data('animation');
        $this.addClass($animationType).one(animEndEv, function () {
            $this.removeClass($animationType);
        });
    });
}

//Variables on page load 
var $redoneCarousel = $('#redone-carousel'),
    $firstAnimatingElems = $redoneCarousel.find('.item:first').find("[data-animation ^= 'animated']");
    
//Initialize carousel 
$redoneCarousel.carousel();

//Animate captions in first slide on page load 
doAnimations($firstAnimatingElems);

//Pause carousel  
//$redoneCarousel.carousel('pause');


//Other slides to be animated on carousel slide event 
$redoneCarousel.on('slide.bs.carousel', function (e) {
    var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
    doAnimations($animatingElems);
});


/**
 * Text Rotator for home-image
 */
if($('body').hasClass('home-image')){
	$(".rotate").textrotator({
	  animation: "flipCube", // Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
	  separator: ",", 
	  speed: 4000
	});
}


/**
 * Text Rotator for home-gradient
 */
if($('body').hasClass('home-gradient')){
	$(".rotate").textrotator({
	  animation: "flipUp", //Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
	  separator: ",",
	  speed: 4000 
	});
}


/**
 * Parallax Bg Initializing
 */
if($('body').hasClass('home-parallax')){

	$('#scene').parallax();
}



/**
 * Initializing portfolio filtering
 */
$(function(){
  $('#redone-portfolio').mixItUp({
   
  });
});


/**
 * Initializing the Magnific Popup js
 */
$('.magnific-popup').magnificPopup({
  type: 'image'
  // other options
});

/**
 * Initializing testimonial carousel (bx slider)
 */
$('.testimonial-carousel').bxSlider({
	controls: false
});


/**
 * Initializing counter for fun facts
 */
	
	$('.fun-facts').waypoint(function(){

		$('.clients-number').countTo();

		$('.templates-number').countTo();

		$('.projects-number').countTo();
		$('.awards-number').countTo();

		// this is for pilitical demo
		
		$('.fun-facts .content-block h2').countTo();

	}, { offset:500});


/**
 * Progress-bar Initialization
 */


$('.our-skill').waypoint(function(){
	$('.progress .progress-bar').progressbar({
    	transition_delay: 0
    });
}, { offset: 0});


/**
 * Carousel image to background image
 */

$('#redone-carousel .item .carousel-image').each(function(){
	var imgSrc = $(this).attr('src');

	$(this).parent().css('background-image', 'url(' + imgSrc + ')');

	$(this).remove();
});


/**
 * Controlling the collapse icon and active collapse header color
 */

$('.redone-accordion .panel-default').on('show.bs.collapse', function () {
     $(this).addClass('active');
});

$('.redone-accordion .panel-default').on('hide.bs.collapse', function () {
     $(this).removeClass('active');
});


/**
 * navbar search
 */
$(function() { 

    $('a[href="#toggle-search"], .redone-navbar .redone-search .input-group-btn > .btn[type="reset"]').on('click', function(event) {
		event.preventDefault();
		$('.redone-navbar .redone-search .input-group > input').val('');
		$('.redone-navbar .redone-search').toggleClass('open');
		$('a[href="#toggle-search"]').closest('li').toggleClass('active');

		if ($('.redone-navbar .redone-search').hasClass('open')) {
			/* I think .focus dosen't like css animations, set timeout to make sure input gets focus */
			setTimeout(function() { 
				$('.redone-navbar .redone-search .form-control').focus();
			}, 100);
		}			
	});

	$(document).on('keyup', function(event) {
		if (event.which == 27 && $('.redone-navbar .redone-search').hasClass('open')) {
			$('a[href="#toggle-search"]').trigger('click');
		}
	});
    
});


/**
 * navbar fixed top
 */
var navbar = $('.redone-navbar');
var heroSection = $('.hero-section');
var pageBanner = $('.page-title-banner');
//var origOffsetY = heroSection.offset().top;
var targetHeight;

if($('body').hasClass('home')){
	targetHeight = heroSection.offset().top + heroSection.height();
}else{
	targetHeight = pageBanner.offset().top + pageBanner.height();
}

function scroll() {


    if ($(window).scrollTop() >= targetHeight) {
        navbar.addClass('navbar-fixed-top');
        $('body').addClass('navbar-padding');
    } else {
        navbar.removeClass('navbar-fixed-top');
        $('body').removeClass('navbar-padding');
    }

    /**
	 * navbar auto hide
	 */

    $(".navbar-fixed-top").autoHidingNavbar({
	  // see next for specifications
	  
	});


}

document.onscroll = scroll;



/**
 * controlling height of some blocks
 */

// why choose us section height
var whyChooseUsHeight = $('.why-choose-us').height();

if($(window).width() > 992){
	$('.why-choose-us .image-area').css('height', whyChooseUsHeight);
}


// how we work section height
var howWeWorkHeight = $('.how-we-work').height();

if($(window).width() > 992){
	$('.how-we-work .image-area').css('height', howWeWorkHeight);

}



/**
 * WINDO RESIZE EVENT
 */
$(window).resize(function(){

	/**
	 * controlling height of some blocks on resize
	 */

	// why choose us section height
	var whyChooseUsHeight = $('.why-choose-us').height();

	if($(window).width() > 992){
		$('.why-choose-us .image-area').css('height', whyChooseUsHeight);
	}


	// how we work section height
	var howWeWorkHeight = $('.how-we-work').height();

	if($(window).width() > 992){
		$('.how-we-work .image-area').css('height', howWeWorkHeight);

	}

});


// initializing the google map


if( $('body').hasClass('contact-page')){



	function initialize() {
	var mapCanvas = document.getElementById('google-map'),
		myPos = new google.maps.LatLng(23.782095, 90.3290822);

	var mapOptions = {
	  center: myPos,
	  zoom: 8,
	  mapTypeId: google.maps.MapTypeId.ROADMAP,
	  scrollwheel: false
	}
	var map = new google.maps.Map(mapCanvas, mapOptions);


	var marker = new google.maps.Marker({
	   position: myPos,
	   map: map,
	   title: "Redone"
	});

	marker.setMap(map);

	}
	google.maps.event.addDomListener(window, 'load', initialize);


}


/**
 * CONTACT FORM PROCESSING
 */

$(function() {
    // Here is the form
    var form = $('#redone-contact');

    // Getting the messages div
    var formMessages = $('.form-message p');

    // Setting up an event listener for the contact form
	$(form).submit(function(event) {
	    // Stopping the browser to submit the form
	    event.preventDefault();
	    
	    // Serializing the form data
		var formData = $(form).serialize();

		// Submitting the form using AJAX
		$.ajax({
		    type: 'POST',
		    url: $(form).attr('action'),
		    data: formData
		}).done(function(response) {
			
		    // Making the formMessages div to have the 'success' class
		    $(formMessages).removeClass('error');
		    $(formMessages).addClass('success');

		    // Setting the message text
		    $(formMessages).text(response);

		    // Clearing the form after successful submission 
		    $('#name').val('');
		    $('#email').val('');
		    $('#url').val('');
		    $('#message').val('');
		}).fail(function(data) {
			
		    // Making the formMessages div to have the 'error' class
		    $(formMessages).removeClass('success');
		    $(formMessages).addClass('error');

		    // Setting the message text
		    if (data.responseText !== '') {
		        $(formMessages).text(data.responseText);
		    } else {
		        $(formMessages).text('Oops! An error occured and your message could not be sent.');
		    }
		});

	});

});