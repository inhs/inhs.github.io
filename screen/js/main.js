$(window).on('scroll', function () {
	const scroll = $(document).scrollTop();
	$('.JSparallaxElem').each(function () {
		$this = $(this);
		let direction = $(this).attr('data-direction');
		let speed = $(this).attr('data-speed') / 3;
		let offset = $(this).offset().top;
		$this.css({
			'transform': 'translateY(' + scroll / (speed * direction) + 'px)'
		});
	});
	$('.JSfadeElem').each(function () {
		let JSelOffset = $(this).offset().top;
		if ((JSelOffset - scroll) < 600) {
			$(this).removeClass('_disable');
		}
	});
});

$(window).ready(function () {
	$('.JStransElem').addClass('JStrans');// JStrans

	$('.JSsectionMain .JSfadeElem').each(function () {
		let delay = $(this).attr('data-delay');
		let $this = $(this);
		setTimeout(function () {
			$this.removeClass('_disable');
		}, delay);
	});
	$('.JSsectionMain').on('mousemove', function (e) {
		let halfWidth = $(window).width() / 2;
		let halfHeight = $(window).height() / 2;
		let x = e.pageX - halfWidth;
		let y = e.pageY - halfHeight;
		$('.JSsectionMain .JSparallaxElem').each(function () {
			let direction = $(this).attr('data-direction');
			let speed = $(this).attr('data-speed');
			$(this).css({
				'transform': 'translate(' + x / (speed * direction) + 'px, ' + y / (speed * direction) + 'px)'
			});
		});
	});
});