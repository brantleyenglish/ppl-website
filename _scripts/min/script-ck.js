$(document).ready(function(){var a=!1;$("a.menu-trigger").click(function(){return a?($("body").animate({marginRight:0,marginLeft:-0}),$("#mobile_menu").animate({right:-260}),$("body").removeClass("mn"),a=!1):($("body").addClass("mn"),$("body").animate({marginRight:260,marginLeft:-260}),$("#mobile_menu").animate({right:0}),a=!0),!1}),$(document).scroll(function(){$(window).width()>600&&($(window).scrollTop()>400&&($("#l_arm1").addClass("bounceInLeft").delay(120).queue(function(a){$("#l_arm2").addClass("bounceInLeft").delay(120).queue(function(a){$("#l_arm3").addClass("bounceInLeft"),a()}),a()}),$("#r_arm1").addClass("bounceInRight").delay(30).queue(function(a){$("#r_arm2").addClass("bounceInRight").delay(140).queue(function(a){$("#r_arm3").addClass("bounceInRight"),a()}),a()})),$(window).scrollTop()>2100&&$("#arm").addClass("bounceInUp"))}),$(".royalSlider").royalSlider({keyboardNavEnabled:!0,loop:!0,randomizeSlides:!0,transitionSpeed:1e3,autoPlay:{enabled:!0,pauseOnHover:!0,delay:4500}})});