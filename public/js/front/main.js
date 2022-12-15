$(document).ready(function() {
	$(".c-header__link").click(function(e) {
		e.preventDefault();
		var aid = $(this).attr("href");
		$('html,body').animate({scrollTop: $(aid).offset().top},'slow');
	});

	$('.c-box2__item').matchHeight();
	$('.c-list2__wrap').matchHeight();
	
	$('.c-box3__wrap').slick({
		dots: true,
		infinite: true,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 1,
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

	var btn = $('.c-slider__btn');
	btn.on('click', function() {
		var img = $($(this).closest('.c-slider__inner').children().get(0)).html();
		var id = $(this).data('modal');

		id = id.replace("#", "");
		var html = `<div id="${id}" class="c-slider__modal is-modal">${img}</div>`;
		if ($("#"+ id).length === 0) {
			$('body').append(html);
		}
		$($(this).data('modal')).modal({ fadeDuration: 250 });

		return false;
	});

	$(".js-menu").click(function() {
		if ($(this).hasClass('is-active')) {
			$(this).removeClass('is-active');
			$(this).prev().removeClass('is-active');
			$('body').removeClass('is-fixed');
		} else {
			$(this).addClass('is-active');
			$(this).prev().addClass('is-active');
			$('body').addClass('is-fixed');
		}
	})
});

$(window).scroll(function(){
	if ($(this).scrollTop() > 120) {
		$('.c-header').addClass('fixed');
	} else {
		$('.c-header').removeClass('fixed');
	}
});