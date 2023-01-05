let body = $('body')
let bodyHtml = $('body, HTML')


$(document).ready(function() {
	/* ======================================
	body fix
	====================================== */
	var scrollPosi;

	function bodyFix() {
		scrollPosi = $(window).scrollTop();
		body.css({
			position: "fixed",
			width: "100%",
			"z-index": "1",
			top: -scrollPosi,
			"overflow-y": 'scroll'
		});
	}

	function bodyFixReset() {
		body.css({
			position: "relative",
			width: "auto",
			top: "0",
		});
		bodyHtml.scrollTop(scrollPosi);
	}

	$('.c-btn1').click(function() {
		
	});

	$("a.c-header__link").click(function(e) {
		let headerHeight = $('header').innerHeight();
		if ($(window).outerWidth() < 768) {
			headerHeight = headerHeight*2;
		} else {
			headerHeight = headerHeight/2;
		}
		$("a.c-header__link").each(function() {
			$(this).removeClass('is-choose');
		});

		$(this).addClass('is-choose');

		$('.c-header__nav').removeClass('is-active');
		$('.js-menu').removeClass('is-active');
		var aid = $(this).attr("href");
		
		if(aid.indexOf('#') != -1 && aid != '#about-us') {
			aid = aid.replace("/", "");

			if ($(aid).offset() !== undefined) {
				bodyFixReset();
				e.preventDefault();
				$('html,body').animate({scrollTop: $(aid).offset().top - headerHeight +'px'},'slow');
			}
		}
	});

	$('.c-box2__item').matchHeight();
	$('.c-list2__wrap').matchHeight();
	$('.c-list10__wrap').matchHeight();
	
	
	$('.c-box3__wrap').slick({
		dots: true,
		infinite: true,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 3,
		arrows: false,
		responsive: [{
			breakpoint: 768,
			settings: {
					slidesToShow: 1,
					slidesToScroll: 1
			  	}
			}
		]
	});

	$('.c-slider__list').slick({
		dots: true,
		infinite: true,
		speed: 700,
		slidesToShow: 3,
		slidesToScroll: 3,
		autoplay: false,
		autoplaySpeed: 2000,
		arrows: false,
		responsive: [{
			breakpoint: 768,
			settings: {
					slidesToShow: 1,
					slidesToScroll: 1
			  	}
			}
		]
	});

	$('.is-list1').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 5,
		slidesToScroll: 1,
		autoplay: true,
		arrows: false,
		responsive: [{
			breakpoint: 768,
			settings: {
					slidesToShow: 3,
					slidesToScroll: 1
			  	}
			}
		]
	});

	$('.is-list2').slick({
		dots: false,
		infinite: true,
		speed: 800,
		slidesToShow: 2,
		slidesToScroll: 1,
		autoplay: true,
		arrows: false,
		pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
		focusOnSelect: false,
		draggable: false,
		autoplaySpeed: 3000,
		responsive: [{
			breakpoint: 768,
			settings: {
					slidesToShow: 1,
					slidesToScroll: 1
			  	}
			}
		]
	});

	$('.c-box3__question').click(function() {
		$(this).next().slideToggle();
		if ($(this).hasClass('is-active')) {
			$(this).removeClass('is-active')
		} else {
			$(this).addClass('is-active')
		}
	});

	$(".js-menu").click(function() {
		if ($(this).hasClass('is-active')) {
			$(this).removeClass('is-active');
			$(this).prev().removeClass('is-active');
			bodyFixReset();
		} else {
			$(this).addClass('is-active');
			$(this).prev().addClass('is-active');
			bodyFix();
		}
	});
});

$(window).scroll(function(){
	if ($(this).scrollTop() > 250) {
		$('.c-header').addClass('fixed');
	} else {
		$('.c-header').removeClass('fixed');
	}
});