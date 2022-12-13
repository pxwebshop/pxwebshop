$(document).ready(function() {
	$(".c-header__link").click(function(e) {
		console.log(this);
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
	});

	$('.is-list1').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 5,
		slidesToScroll: 1,
		autoplay: true,
		arrows: false,
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
		draggable: false,
		autoplaySpeed: 3000,
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
		$($(this).data('modal')).modal({ fadeDuration: 250 });
		return false;
	});
});

$(window).scroll(function(){
	if ($(this).scrollTop() > 120) {
		$('.c-header').addClass('fixed');
	} else {
		$('.c-header').removeClass('fixed');
	}
});