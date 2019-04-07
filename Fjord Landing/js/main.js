$(window).scroll(function (e) {
    var st = $(this).scrollTop();
    var winWidth = $(window).width();
    if (st <= 700) {
        $('.section1__col').css({
            'transform': 'translate(0,+' + st / 10 + '%)'
        });
    };
    console.log({
        st
    });

    if (st >= 300) {
        $('.features__col').css({
            'transform': 'translate(0, 0)'
        })
    }
    if (st >= 2500) {
        $('.section5__col1').css({
            'transform': 'translate(0, 0)'
        })
    }
    if (st >= 4400) {
        $('.section7__feature').css({
            'transform': 'translate(0, 0)'
        })
    }

});

var typed = new Typed('.section__title__text-typed', {
    stringsElement: '.section4 .section__title-typed',
    loop: true,
    showCursor: false,
    backDelay: 700,
    backSpeed: 40,
    typeSpeed: 80,
});

$('.slider__iphone__wrap').slick({
    dots: false,
    arrows: true,
    appendArrows: $('.slider__iphone'),
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    variableWidth: true,
})

$('.slider__ipad__wrap').slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    variableWidth: true,
})
$('.slider__ipad-mobile').slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    variableWidth: true,
});
$('.slick__sl').slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true,
});
$('.section8__photo-slider').slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true,
})
if ($(window).width() > 1000) {
    $('.section8').on('mousemove', function (e) {
        var change;
        var xpos = e.clientX;
        var ypos = e.clientY;
        var left = change * 20;
        var xpos = xpos;
        ypos = ypos;
        $('.section8__photo1').css({
            'transform': 'translate(-' + (xpos / 80) + '%,-' + (ypos / 60) + '%)'
        });
        $('.section8__photo2').css({
            'transform': 'translate(-' + (xpos / 80) + '%,-' + (ypos / 60) + '%)'
        });
        $('.section8__photo3').css({
            'transform': 'translate(-' + (xpos / 80) + '%,-' + (ypos / 60) + 'px)'
        });
        $('.section8__photo4').css({
            'transform': 'translate(-' + (xpos / 160) + '%,-' + (ypos / 60) + '%)'
        });
        $('.section8__photo5').css({
            'transform': 'translate(-' + (xpos / 80) + '%,-' + (ypos / 60) + '%)'
        });
        $('.section8__photo6').css({
            'transform': 'translate(-' + (xpos / 80) + '%,-' + (ypos / 60) + '%)'
        });
        $('.section8__photo7').css({
            'transform': 'translate(-' + (xpos / 80) + '%,-' + (ypos / 60) + '%)'
        });
    });
};

var winWidth = $(window).width() / 192;
$('.slider__ipad').css({
    'font-size': winWidth + 'px'
})
if ($(window).width() > 1024) {
    $('.section8__photo').css({
        'font-size': winWidth + 'px'
    });
    $('.section8').css({
        'font-size': winWidth + 'px'
    });
} else {
    winWidth = 1024 / 192;
    $('.section8__photo').css({
        'font-size': winWidth + 'px'
    });
    $('.section8').css({
        'font-size': winWidth + 'px'
    });
}
$(window).resize(function () {
    var winWidth = $(window).width() / 192;
    $('.slider__ipad').css({
        'font-size': winWidth  + 'px'
    })
    if ($(window).width() > 1024) {
        $('.section8__photo').css({
            'font-size': winWidth + 'px'
        });
        $('.section8').css({
            'font-size': winWidth + 'px'
        });
    }
});
$('._menu__li-more').on('click', function(){
    $(this).find('.mob-m-dropdown').toggleClass('mob-m-dropdown_active')
});
$('.burger-btn, .mob-m-close').on('click', function(){
    $('.mobile-menu-wrap').toggleClass('mobile-menu-wrap_active');
    if($('.mobile-menu-wrap').hasClass('mobile-menu-wrap_active')) {
        $('.mobile-menu-wrap').addClass('mobile-menu-wrap_active-bef')
    }
    
});