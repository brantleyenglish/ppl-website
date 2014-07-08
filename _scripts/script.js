$(document).ready(function(){



	var jPM = $.jPanelMenu({
	    menu: '#mobile_menu',
	    direction: 'right'
	});		
	
	jPM.on();


	$(".royalSlider").royalSlider({
	    // options go here
	    // as an example, enable keyboard arrows nav
	    keyboardNavEnabled: true,
	    loop: true,
	    randomizeSlides: true,
	    transitionSpeed: 1000,
	    autoPlay: {
    		// autoplay options go gere
    		enabled: true,
    		pauseOnHover: true,
    		delay: 4500
    	}
	});  
	
	
	// DESKTOP ANIMATIONS
	enquire.register("screen and (min-width: 769px)", {
	
	    // OPTIONAL
	    // If supplied, triggered when a media query matches.
	    match : function() {
	    
			$(document).scroll(function() {
			    if ($(window).scrollTop() > 2100) {
			        $("#arm").animate({bottom:0},1000);
			    }
			    if ($(window).scrollTop() > 250) {
			        $("#arm2").animate({bottom:0},1000);
			    }
			    if ($(window).scrollTop() > 1300) {
			        $("#letter").animate({left:0},1000);
			    }
			    if ($(window).scrollTop() > 400) {
			        $("#l_arm1").animate({left:-995},1100);
			        $("#l_arm2").animate({left:-1070},1300);
			        $("#l_arm3").animate({left:-970},600);
			        $("#r_arm1").animate({right:-1200},600);
			        $("#r_arm2").animate({right:-1300},1300);
			        $("#r_arm3").animate({right:-1230},1100);
			    }
			    if ($(window).scrollTop() > 570) {
			        $(".stats1").animate({left:90},1000);
			    }
			    if ($(window).scrollTop() > 660) {
			        $(".stats2").animate({left:0},1000);
			    }
			});
			
	    }    
	                                
	});
	
	
	// TABLET ANIMATIONS
	enquire.register("screen and (max-width: 768px) and (min-width: 601px)", {
	
	    // OPTIONAL
	    // If supplied, triggered when a media query matches.
	    match : function() {
	    
			$(document).scroll(function() {
			    if ($(window).scrollTop() > 400) {
			        $("#l_arm1").animate({left:-1145},1100);
			        $("#l_arm2").animate({left:-1220},1300);
			        $("#l_arm3").animate({left:-1120},600);
			        $("#r_arm1").animate({right:-1350},600);
			        $("#r_arm2").animate({right:-1450},1300);
			        $("#r_arm3").animate({right:-1380},1100);
			    }
			    if ($(window).scrollTop() > 3300) {
			        $("#arm").animate({bottom:0},1000);
			    }
			    if ($(window).scrollTop() > 30) {
			        $("#arm2").animate({bottom:0},1000);
			    }
			    if ($(window).scrollTop() > 1800) {
			        $("#letter").animate({left:0},1000);
			    }
			});

			//don't display testimonials on index.php
			document.getElementById('testBlock').style.display = 'none';
	
	    }      
	                                
	});
	
	// SMALL DEVICE ANIMATIONS
	enquire.register("screen and (max-width: 600px)", {
	
	    // OPTIONAL
	    // If supplied, triggered when a media query matches.
	    match : function() {
	    
			$(document).scroll(function() {
			    if ($(window).scrollTop() > 300) {
			        $("#l_arm1").animate({left:-510},1100);
			        $("#l_arm2").animate({left:-540},1300);
			        $("#l_arm3").animate({left:-500},600);
			        $("#r_arm1").animate({right:-510},600);
			        $("#r_arm2").animate({right:-540},1300);
			        $("#r_arm3").animate({right:-500},1100);
			    }
			});
			
			$(document).scroll(function() {
			    if ($(window).scrollTop() > 2500) {
			        $("#arm").animate({bottom:266},600);
			    }
			});
			
			$(document).scroll(function() {
			    if ($(window).scrollTop() > 300) {
			        $("#arm2").animate({bottom:266},600);
			    }
			});
			
			$(document).scroll(function() {
			    if ($(window).scrollTop() > 1800) {
			        $("#letter").animate({left:30},800);
			    }
			});

			//don't display testimonials on index.php
			document.getElementById('testBlock').style.display = 'none';
	
	    }      
	                                
	});

});

