var wpcf7Elm = document.querySelector('.wpcf7');
wpcf7Elm.addEventListener('wpcf7submit', function (event) {
	var o = $(this).parents(".form__wrap__slider"), n = o.find(".input__name"), t = o.find(".input__phone");
	if ("" != n.val() && "" != t.val()) {
		n = n.val();
		o.find(".form__title__name").html(n), o.slick("slickNext")
	}
}, false);

window.onload = function () {
	$('input[type=tel]').mask('+7 (000) 000-00-00', {selectOnFocus: true, placeholder: "(___) ___-__-__"});
	$('.sourceUrl').val(location.href);

	$(".wpcf7").on('wpcf7:submit', function (event) {

		if ($(this).find('form').data('cl') == 'bottom_form') {
			yaCounter53495044.reachGoal('cel2');
			ga('send', 'event', 'send_form', 'cel2');

			gtag('event', 'cel2', {'event_category': 'send_form','event_label': 'share'});

			roistat.event.send('find');

		} else {
			yaCounter53495044.reachGoal('cel1');
			ga('send', 'event', 'send_form', 'cel1');
			gtag('event', 'cel1', {'event_category': 'send_form','event_label': 'share'});

			roistat.event.send('more');


		}
	});
};

