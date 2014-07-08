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
	    loop: true
	});  
});