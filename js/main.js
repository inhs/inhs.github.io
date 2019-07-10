// $(window).on('wheel', function (e) {
// 	var scroll = $(document).scrollTop();

// 	$('.JSfadeElem').each(function () {
// 		let JSelOffset = $(this).offset().top;
// 		if ((JSelOffset - scroll) < 600) {
// 			$(this).removeClass('_disable');
// 		}
// 	});
// });


$(document).ready(function () {
	$('.JStransElem').addClass('JStrans');

	$('.JSsectionMain .JSfadeElem').each(function () {
		let delay = $(this).attr('data-delay');
		let $this = $(this);
		setTimeout(function () {
			$this.removeClass('_disable');
		}, delay);
	});
});