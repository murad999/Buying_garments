$(document).ready(function(){

    'use strict';
	  
	/*----------------------------- Scroll To Top -----------------------*/
	$(window).on('scroll',function () {
		if ($(this).scrollTop() > 600) {
			$('#scrollup').fadeIn();
		} else {
			$('#scrollup').fadeOut();
		}
	});

	$('#scrollup').on('click',function(){
		$('html, body').animate({
		scrollTop: 0
	}, 2000);
	return false;
	});
		
		
	// -----------------------------------------
    // search 
    // -----------------------------------------
	$(function () {
		$('a[href="#search"]').on('click', function(event) {
			event.preventDefault();
			$('#search').addClass('open');
			$('#search > form > input[type="search"]').focus();
		});
		
		$('#search, #search button.close').on('click keyup', function(event) {
			if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
				$(this).removeClass('open');
			}
		});
		
		
		//Do not include! This prevents the form from submitting for DEMO purposes only!
		$('form').submit(function(event) {
			event.preventDefault();
			return false;
		})
	});
		
	
	
	// -----------------------------------------
    // owlCarousel team
    // -----------------------------------------
	$("#owl-demo1").owlCarousel({
		items: 3,
		autoplay: true,
		loop: true,
		dots:false,
		mouseDrag:false,
		nav: true,
		navText : [""],
		autoplaySpeed: 1000,
        responsiveClass:true,
		responsive : {
			0 : {
				items: 1,
			},
			768 : {
				items: 2,
			},
			992 : {
				items: 2,
			},
			1024 : {
				items: 3,
			},
		}
    });
	
	
	// -----------------------------------------
    // owlCarousel team
    // -----------------------------------------
	$("#owl-demo2").owlCarousel({
		items: 1,
		autoplay: true,
		loop: true,
		dots:false,
		mouseDrag:false,
		nav: true,
		navText : [""],
		autoplaySpeed: 1000,
        responsiveClass:true,
		responsive : {
			0 : {
				items: 1,
			},
			768 : {
				items: 1,
			},
			992 : {
				items: 1,
			}
		}
    });
	
	
	// -----------------------------------------
    // owlCarousel team
    // -----------------------------------------
	$("#owl-demo3").owlCarousel({
		items: 5,
		autoplay: true,
		loop: true,
		dots:false,
		mouseDrag:false,
		nav: false,
		navText : [""],
		autoplaySpeed: 1000,
        responsiveClass:true,
		responsive : {
			0 : {
				items: 1,
			},
			480 : {
				items: 2,
			},
			768 : {
				items: 5,
			}
		}
    });
	
	
	// -----------------------------------------
    // fusion
    // -----------------------------------------
	$(window).on('load', function(){
		if($('.fusion-container').length){
			var $container = $('.fusion-container').isotope({
			    itemSelector: '.fusion-item',
			    masonry: {
			        columnWidth: '.fusion--sizer'
			    }
			});
		}
	});

	
	// -----------------------------------------
    // masonry 
    // -----------------------------------------
	$('.ms-menu .title').on('click', function(){
		$(this).toggleClass('active').next('.toggle').slideToggle();
		return false;
	});
	$(window).on('load', function(){
		if($('.ms-container').length){
			var $container = $('.ms-container').isotope({
			    itemSelector: '.ms-item',
			    masonry: {
			        columnWidth: '.ms-sizer'
			    }
			});
			$('.ms-menu a').on('click', function() {
		        if($(this).hasClass('active')) return false;
		        $(this).parent().find('.active').removeClass('active');
		        $(this).addClass('active');
		        $(this).closest('.ms-menu').find('.title').text($(this).find('.text').text());
		        if($(this).closest('.ms-menu').find('.title').is(':visible')) $(this).closest('.ms-menu').find('.toggle').slideUp();
		        var filterValue = $(this).attr('data-filter');
		        $container.isotope({ filter: filterValue });
		    });
		}
	});
    
	
	// -----------------------------------------
    // counterUp
    // -----------------------------------------
	$('.counter').counterUp({
		delay: 10,
		time: 4000
	});
	
	
    // -----------------------------------------
    // AOS 
    // -----------------------------------------
	  AOS.init({
        easing: 'ease-in-out-sine'
      });
	
	
	/*-------------- rev_slider_1 ------------------*/
	var revapiengine,
	nipone=jQuery;
	nipone(document).ready(function() {
		if(nipone("#rev_slider_1").revolution == undefined){
			revslider_showDoubleJqueryError("#rev_slider_1");
		}else{
			revapiengine = nipone("#rev_slider_1").show().revolution({
				sliderType:"standard",
				jsFileLocation:"",
				sliderLayout:"fullscreen",
				dottedOverlay:"none",
				delay:5000,
				navigation: {
					keyboardNavigation:"off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation:"off",
					mouseScrollReverse:"default",
					onHoverStop:"off",
					arrows: {
						style:"uranus",
						enable:true,
						hide_onmobile:false,
						hide_onleave:false,
						tmp:'',
						left: {
							h_align:"left",
							v_align:"center",
							h_offset:20,
							v_offset:0
						},
						right: {
							h_align:"right",
							v_align:"center",
							h_offset:20,
							v_offset:0
						}
					}
				},
				responsiveLevels:[1240,1024,778,480],
				visibilityLevels:[1240,1024,778,480],
				gridwidth:[1600,1024,778,480],
				gridheight:[800,768,700,500],
				lazyType:"none",
				shadow:0,
				spinner:"off",
				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,
				shuffle:"off",
				autoHeight:"off",
				fullScreenAutoWidth:"off",
				fullScreenAlignForce:"off",
				fullScreenOffsetContainer: "",
				fullScreenOffset: "60px",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					nextSlideOnWindowFocus:"off",
					disableFocusListener:false,
				}
			});
		}
	});	/*ready*/
	
	
	
	
	/*-------------- rev_slider_car ------------------*/
	var revapiengine,
	nipone=jQuery;
	nipone(document).ready(function() {
		if(nipone("#rev_slider_car").revolution == undefined){
			revslider_showDoubleJqueryError("#rev_slider_car");
		}else{
			revapiengine = nipone("#rev_slider_car").show().revolution({
				sliderType:"standard",
				jsFileLocation:"",
				sliderLayout:"fullscreen",
				dottedOverlay:"none",
				delay:5000,
				navigation: {
					keyboardNavigation:"off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation:"off",
					mouseScrollReverse:"default",
					onHoverStop:"off",
					arrows: {
						style:"uranus",
						enable:true,
						hide_onmobile:false,
						hide_onleave:false,
						tmp:'',
						left: {
							h_align:"left",
							v_align:"center",
							h_offset:20,
							v_offset:0
						},
						right: {
							h_align:"right",
							v_align:"center",
							h_offset:20,
							v_offset:0
						}
					}
				},
				responsiveLevels:[1240,1024,778,480],
				visibilityLevels:[1240,1024,778,480],
				gridwidth:[1600,1024,778,480],
				gridheight:[800,768,700,500],
				lazyType:"none",
				shadow:0,
				spinner:"off",
				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,
				shuffle:"off",
				autoHeight:"off",
				fullScreenAutoWidth:"off",
				fullScreenAlignForce:"off",
				fullScreenOffsetContainer: "",
				fullScreenOffset: "60px",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					nextSlideOnWindowFocus:"off",
					disableFocusListener:false,
				}
			});
			 if(revapiengine) revapiengine.revSliderSlicey();
		}
	});	/*ready*/
	
	
	// -----------------------------------------
    // GMaps 
    // -----------------------------------------
    var map;
	$('.map-display').each(function() {
		var element = $(this).attr('id');
		map = new GMaps({
		el: '#' + element,
		center: new google.maps.LatLng(23.7946976,90.3971412),
		zoom:10,
		scrollwheel: false,
		styles: [
				{
					"featureType": "water",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#d6e9b9"
						},
						{
							"lightness": 1
						}
					]
				},
				{
					"featureType": "landscape",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#eaeaea"
						},
						{
							"lightness": 2
						}
					]
				},
				{
					"featureType": "road.highway",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"color": "#f0c17f"
						},
						{
							"lightness": 17
						}
					]
				},
				{
					"featureType": "road.highway",
					"elementType": "geometry.stroke",
					"stylers": [
						{
							"color": "#f0c17f"
						},
						{
							"lightness": 29
						},
						{
							"weight": 0.2
						}
					]
				},
				{
					"featureType": "road.arterial",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#f0c17f"
						},
						{
							"lightness": 18
						}
					]
				},
				{
					"featureType": "road.local",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#ffffff"
						},
						{
							"lightness": 16
						}
					]
				},
				{
					"featureType": "poi",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#f5f5f5"
						},
						{
							"lightness": 21
						}
					]
				},
				{
					"featureType": "poi.park",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#d6e9b9"
						},
						{
							"lightness": 21
						}
					]
				},
				{
					"elementType": "labels.text.stroke",
					"stylers": [
						{
							"visibility": "on"
						},
						{
							"color": "#ffffff"
						},
						{
							"lightness": 16
						}
					]
				},
				{
					"elementType": "labels.text.fill",
					"stylers": [
						{
							"saturation": 36
						},
						{
							"color": "#333333"
						},
						{
							"lightness": 40
						}
					]
				},
				{
					"elementType": "labels.icon",
					"stylers": [
						{
							"visibility": "off"
						}
					]
				},
				{
					"featureType": "transit",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#f2f2f2"
						},
						{
							"lightness": 19
						}
					]
				},
				{
					"featureType": "administrative",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"color": "#fefefe"
						},
						{
							"lightness": 20
						}
					]
				},
				{
					"featureType": "administrative",
					"elementType": "geometry.stroke",
					"stylers": [
						{
							"color": "#fefefe"
						},
						{
							"lightness": 17
						},
						{
							"weight": 1.2
						}
					]
				}
			]
		});
		map.addMarker({
		lat: 23.7945159,
		lng:90.4011135,
			title: 'Banani',
			icon:'assets/images/map-marker.png',
		   
		});
	});
	
	
    // -----------------------------------------
    // Preloader 
    // -----------------------------------------
	$(window).on('load',function() {
		$("#PreloaderG1").delay(1000).fadeOut(500);
	});
	
}); // JQuery end