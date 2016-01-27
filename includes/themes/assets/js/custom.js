var $ = jQuery.noConflict();

$(document).ready(function($) {
    "use strict";
//  Slider high on small screens
    if ($('#slider').length > 0) {
		if (document.documentElement.clientWidth < 768) {
			$('#slider').css('height', $(window).height());
		} else {
			$('#slider').css('height', 1000);
		}			
	}
	
	/*Center menu. if logo have big height*/
	if ($('.navbar-header a.navbar-brand img').length > 0) {
		var vLogoH = parseInt($('.navbar-header a.navbar-brand').outerHeight());
		var vPadd  = parseInt($('.navbar-brand.nav.logo').css('padding-top')) + parseInt($('.navbar-brand.nav.logo').css('padding-bottom'));
		
			if (vLogoH > 18) {
				vLogoH = (vLogoH / 2) - vPadd;
				if (!isMobileWidth()) {
					$('.navigation header#top.navbar .container nav.collapse').css({'top':vLogoH});
				} else {
					$('.navigation header#top.navbar .container nav.collapse').css({'top':0});
				}				
				$('.navbar-toggle').css({'top':vLogoH+5});
			}	
	}
});

$(window).resize(function () {

	if ($('#slider').length > 0) {
		if (document.documentElement.clientWidth < 768) {
			$('#slider').css('height', $(window).height());
		} else {
			$('#slider').css('height', 1000);
		}			
	
		
		$('.flexslider').each(function () {
			var slideHeight = $(this).height();
			var contentHeight = $(this).children('.slide-content').height();
			var padTop = (slideHeight / 2) - (contentHeight / 2);
			$('.slide-content').css('padding-top', padTop);
		});
	
	}	
	
	if ($('.navbar-header a.navbar-brand img').length > 0) {
		var vLogoH = parseInt($('.navbar-header a.navbar-brand').outerHeight());
		var vPadd  = parseInt($('.navbar-brand.nav.logo').css('padding-top')) + parseInt($('.navbar-brand.nav.logo').css('padding-bottom'));
		
			if (vLogoH > 18) {
				vLogoH = (vLogoH / 2) - vPadd;
				if (!isMobileWidth()) {
					$('.navigation header#top.navbar .container nav.collapse').css({'top':vLogoH});
				} else {
					$('.navigation header#top.navbar .container nav.collapse').css({'top':0});
				}				
				$('.navbar-toggle').css({'top':vLogoH+5});
			}	
	}
});

$(window).load(function () {
 
	if ($('.navbar-header a.navbar-brand img').length > 0) {
		var vLogoH = parseInt($('.navbar-header a.navbar-brand').outerHeight());
		var vPadd  = parseInt($('.navbar-brand.nav.logo').css('padding-top')) + parseInt($('.navbar-brand.nav.logo').css('padding-bottom'));
		
			if (vLogoH > 18) {
				vLogoH = (vLogoH / 2) - vPadd;
				if (!isMobileWidth()) {
					$('.navigation header#top.navbar .container nav.collapse').css({'top':vLogoH});
				} else {
					$('.navigation header#top.navbar .container nav.collapse').css({'top':0});
				}				
				$('.navbar-toggle').css({'top':vLogoH+5});
			}	
	}
   
});

function isMobileWidth() {
    return $('#mobile-indicator').is(':visible');
}

function playVideo(){
	var myVideo = document.getElementById("home-video");
	myVideo.addEventListener('ended',videoEndHandler,false);
	if (myVideo.paused) {
        myVideo.play(); 
        $("#play-logo").hide();
	}
    else {
    	myVideo.pause();
        $("#play-logo").show();
    } 
	
}

function videoEndHandler(e) {
	var myVideo = document.getElementById("home-video");
	$("#play-logo").show();
	myVideo.load();
}