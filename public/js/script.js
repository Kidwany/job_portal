"use strict";
/* ==== Jquery Functions ==== */
(function ($) {


	/* ==== Testimonials Slider ==== */
	$(".testimonialsList").owlCarousel({
		loop: true,
		margin: 30,
		nav: false,
		autoplay: true,
		autoPlaySpeed: 5000,
		autoPlayTimeout: 5000,
		autoplayHoverPause: true,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
				nav: false
			},
			768: {
				items: 1,
				nav: false
			},
			1170: {
				items: 2,
				nav: false,
				loop: true
			}
		}
	});

	/* ==== employerList Slider ==== */
	$(".employerList").owlCarousel({
		loop: true,
		margin: 20,
		nav: true,
		autoplay: true,
		autoPlaySpeed: 5000,
		autoPlayTimeout: 5000,
		autoplayHoverPause: true,
		responsiveClass: true,
		responsive: {
			0: {
				items: 3,
				nav: true
			},
			768: {
				items: 5,
				nav: true
			},
			1170: {
				items: 10,
				nav: true,
				loop: true
			}
		}
	});


	/* ==== Revolution Slider ==== */
	if ($('.tp-banner').length > 0) {
		$('.tp-banner').show().revolution({
			delay: 6000,
			startheight: 550,
			startwidth: 1140,
			hideThumbs: 1000,
			navigationType: 'none',
			touchenabled: 'on',
			onHoverStop: 'on',
			navOffsetHorizontal: 0,
			navOffsetVertical: 0,
			dottedOverlay: 'none',
			fullWidth: 'on'
		});
	}


	//Top search bar open/close
	if (!$('.srchbox').hasClass("searchStayOpen")) {
		$("#jbsearch").click(function () {
			$(".srchbox").addClass("openSearch");
			$(".additional_fields").slideDown();
		});


		$(".srchbox").click(function (e) {
			e.stopPropagation();
		});
	}

	/*==============================================
     video  play
     ===============================================*/

	$('#play-video').on('click', function (e) {
		e.preventDefault();
		$('#video-overlay').addClass('open');
		$("#video-overlay").append('<iframe width="560" height="315" src="https://www.youtube.com/embed/ngElkyQ6Rhs" frameborder="0" allowfullscreen></iframe>');
	});

	$('.video-overlay, .video-overlay-close').on('click', function (e) {
		e.preventDefault();
		close_video();
	});

	$(document).keyup(function (e) {
		if (e.keyCode === 27) {
			close_video();
		}
	});

	function close_video() {
		$('.video-overlay.open').removeClass('open').find('iframe').remove();
	};

	
	/*==============================================
     NProgress 
     ===============================================*/

	NProgress.start(); // start    
	NProgress.set(0.1); // To set a progress percentage, call .set(n), where n is a number between 0..1
	NProgress
		.inc(); // To increment the progress bar, just use .inc(). This increments it with a random amount. This will never get to 100%: use it for every image load (or similar).If you want to increment by a specific value, you can pass that as a parameter
	NProgress.configure({
		ease: 'ease',
		speed: 3000
	}); // Adjust animation settings using easing (a CSS easing string) and speed (in ms). (default: ease and 200)
	NProgress.configure({
		trickleSpeed: 1000
	}); //Adjust how often to trickle/increment, in ms.
	NProgress.configure({
		showSpinner: true
	}); //Turn off loading spinner by setting it to false. (default: true)
	NProgress.configure({
		parent: 'body'
	}); //specify this to change the parent container. (default: body)
	NProgress.done(); // end



})(jQuery);