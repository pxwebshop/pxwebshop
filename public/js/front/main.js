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
		} else {
			bodyFixReset();
		}
	});

	$('.c-box2__item').matchHeight();
	$('.c-list2__wrap').matchHeight();
	$('.c-list10__wrap').matchHeight();
	
	$('.c-box3__wrap').slick({
		dots: false,
		infinite: true,
		speed: 1000,
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 2000,
		pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
		focusOnSelect: false,
		draggable: false,
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

	$(".c-box14").click(function() {
		$("html, body").animate({ scrollTop: 0 }, "slow");
		return false;
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

	var modal = $('.c-modal');
	var btn = $('.js-btn-modal');
	var span = $('.c-modal__close');

	btn.click(function () {
		let id = $(this).data('service');
		$("select[name='service_pack'] option").each(function(index){
			if (id == index) {
				$(`select[name='service_pack'] option[value='${index}']`).attr("selected", "selected");
			} else {
				$(`select[name='service_pack'] option[value='${index}']`).removeAttr("selected");
			}
		});
		modal.fadeIn(500);
		bodyFix();
	});

	span.click(function () {
		modal.fadeOut(500);
		bodyFixReset();
	});

	$(window).on('click', function (e) {
		if ($(e.target).is('.c-modal')) {
			modal.fadeOut(500);
			bodyFixReset();
		}
	});

	$('.c-toc a').click(function(e) {
		e.preventDefault();
		let aid = $(this).attr('href');
		let headerHeight = $('header').innerHeight();
		if ($(window).outerWidth() < 768) {
			headerHeight = headerHeight/2;
		} else {
			headerHeight = headerHeight*2;
		}
		$('html,body').animate({scrollTop: $(aid).offset().top - headerHeight +'px'},'slow');
	});
});

$(window).scroll(function(){
	if ($(this).scrollTop() > 250) {
		$('.c-header').addClass('fixed');
		$('.c-box14').fadeIn(800);
	} else {
		$('.c-header').removeClass('fixed');
		$('.c-box14').fadeOut(800);
	}
});