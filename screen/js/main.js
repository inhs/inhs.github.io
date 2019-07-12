function switcher() {
	let val = $(this).attr('data-switch');
	$('.JSswitcher').removeClass('_active');
	$('.JSswitcher[data-switch="' + val + '"]').addClass('_active');
	$('.JSportfolioList').removeClass('_active');
	$('.JSportfolioList[data-switch="' + val + '"]').addClass('_active');
	$('.JSportfolioList._active').find('.JSportfolioItems').slice(0, 4).fadeIn(0);
};
function openModal() {
	let dataVal = $(this).attr('data-modal');
	let $modal = $('.JSmodal[data-modal="' + dataVal + '"]');
	$modal.toggleClass('_active');
	let $iframe = $modal.find('iframe');
	let videoSrc = $iframe.attr('src');
	$iframe.attr('data-src', videoSrc);
	let tempSrc = $iframe.attr('data-src');
	if ($modal.hasClass('_active')) {
		$iframe.attr('src', tempSrc);
		
	}
	else {
		$modal.find('iframe').removeAttr('src')
	}
};


$(document).ready(function () {
	$('.phoneMask').mask('+7 (000) 000 00 00')
	$('.JSswitcher').on('click', switcher);
	$('.JSslickSlider1').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 4,
		dots: false,
		prevArrow: $('.prevSlide1'),
		nextArrow: $('.nextSlide1'),
	});
	$('.JSslickSlider2').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3,
		dots: false,
		prevArrow: $('.prevSlide2'),
		nextArrow: $('.nextSlide2'),
	});
	$('.JSmodalToggle').on('click', openModal);
	$('.JSportfolioItems').slice(0, 4).fadeIn(0);
	$('.JSportfolioMoreBtn').on('click', function() {
		$('.JSportfolioList._active').find('.JSportfolioItems:hidden').slice(0, 4).slideDown(500);
	});
});