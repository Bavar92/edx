$ = jQuery;

$('img.img_svg').each(function () {
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    $.get(imgURL, function (data) {
        var $svg = jQuery(data).find('svg');

        if (typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }


        if (typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass + ' replaced-svg');
        }

        $svg = $svg.removeAttr('xmlns:a');

        if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
            $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
        }

        $img.replaceWith($svg);

    }, 'xml');

});


$(document).ready(function () {
    var width = document.body.clientWidth;

    $("#menuOpen span").click(function (e) {
        $(this).parent().toggleClass("opened");
    });

    $('.fancy').fancybox();

    if (width <= 1024) {
        $("#mainMenu .menu-item-has-children > a").append("<span></span>");
        $("#mainMenu .menu-item-has-children span").click(function () {
            $(this).parent().next().slideToggle(300);
            $(this).toggleClass("active");
            return false;
        });
    }


    //WPCF7
    $(this).on('click', '.wpcf7-not-valid-tip', function () {
        $(this).prev().trigger('focus');
        $(this).fadeOut(500, function () {
            $(this).remove();
        });
    });

    $(window).bind("resize", function () {

    });

    if (!$(".woocommerce-checkout")[0]) {
        $('select').selectric({
            disableOnMobile: false
        });
        $(".wpcf7-form select option:first-of-type").attr('selected', 'true').attr('disabled', 'disabled').attr('value', '0');
    }

    // if ($(window).width() > 767) {
    //     var team = $('.team .personTitle');
    //     team.click(function () {
    //         team.removeClass('active');
    //         $(this).addClass('active');
    //         $('.personInfo .infoWrap').hide().eq($(this).index()).fadeIn(500);
    //     });
    // } else {
    //     var team = $('.personTitle figure');
    //     team.click(function () {
    //         if ($(this).hasClass('active')) {
    //             team.removeClass('active');
    //             $(this).removeClass('active');
    //             $(this).next().stop().slideUp(500);
    //         } else {
    //             team.removeClass('active');
    //             $(this).addClass('active');
    //             team.next().slideUp(500);
    //             $(this).next().stop().slideDown(500);
    //         }
    //     });
    // }

    var team = $('.team .personTitle');

    team.click(function () {
        if ($(window).width() > 767) {
            team.removeClass('active');
            $(this).addClass('active');
            team.find('.infoWrap').hide();
            $('.personInfo .infoWrap').hide().eq($(this).index()).fadeIn(500);
        } else {
            // if ($(this).hasClass('active')) {
            //     team.removeClass('active');
            //         $(this).removeClass('active');
            //         $(this).next().stop().slideUp(500);
            //     } else {
            //         team.removeClass('active');
            //         $(this).addClass('active');
            //         team.next().slideUp(500);
            //         $(this).next().stop().slideDown(500);
            //     }
            $('.personInfo .infoWrap').hide();
            team.removeClass('active');
            team.find('.infoWrap').slideUp();
            $(this).addClass('active');
            $(this).find('.infoWrap').slideDown();
        }
    });




    var c, currentScrollTop = 0,
        navbar = $('header');

    var position = $(window).scrollTop();
    if (position > 50) {
        navbar.addClass('scroll');
    }


    $(window).scroll(function () {
        var a = $(window).scrollTop();
        if (a > 50) {
            navbar.addClass("scroll");
        } else  {
            navbar.removeClass("scroll");
        }

    });

    if ($(window).width() > 1024) {
        $('#mainMenu > ul > li').hover(function () {
                $(this).children().next().stop().slideDown(400);
            },
            function () {
                $(this).children().next().stop().slideUp();
            });
    }

    $('.event .button').click(function () {
        var val = $(this).attr('data-id');
        $('.title input[name="title"]').val(val);
    });


    var fileTitle = $('.titleItems .title');
    fileTitle.click(function () {
        fileTitle.removeClass('active');
        $(this).addClass('active');
        if ($(window).width() > 1024) {
            $('.wrapFiles .groupElements').hide().eq($(this).index()).fadeIn(500);
        } else {
            //$('.mobile-content-files').css('display', 'none');
            $('.mobile-content-files').slideUp();
            $(this).find('.mobile-content-files').slideDown();
        }

    });
    fileTitle.eq(0).click();

    var pro = $('.itemPro .titlePro');
    pro.click(function () {
        if ($(this).hasClass('active')) {
            pro.removeClass('active');
            $(this).removeClass('active');
            $(this).next().stop().slideUp(500);
        } else {
            pro.removeClass('active');
            $(this).addClass('active');
            pro.next().slideUp(500);
            $(this).next().stop().slideDown(500);
        }
    });
    pro.eq(0).click();

    var fileVideo = $('.smallVideo video');
    fileVideo.click(function () {
        fileVideo.removeClass('active');
        $(this).addClass('active');
        $('.bigVideo video').each(function () {
            $(this)[0].pause();
        });
        $('.bigVideo video').hide().eq($(this).index()).fadeIn(500);
    });
    fileVideo.eq(0).click();

    //if (width >= 768) {
        var option = $('.options .option');
        option.click(function () {
            option.removeClass('active');
            $(this).addClass('active');
            $('.infoOptions .contentBox').hide().eq($(this).index()).fadeIn(500);
        });
        option.eq(0).click();
    //} else {
        var optionTable = $('.optionsWrapper .option');
        optionTable.click(function () {
            if ($(this).hasClass('active')) {
                optionTable.removeClass('active');
                $(this).removeClass('active');
                $(this).next().stop().slideUp(500);
            } else {
                optionTable.removeClass('active');
                $(this).addClass('active');
                optionTable.next().slideUp(500);
                $(this).next().stop().slideDown(500);
            }
        });
    //}

    // $('.bigVideo video').click(function () {
    //     this.paused ? this.play() : this.pause();
    // });


    $('.pages a').filter(function () {
        return this.href === location.href;

    }).addClass('active').removeAttr('href');

    $('.removeLink > a').removeAttr('href');


    var acc = $('.itemsSupport h4 .arrow');
    acc.click(function () {
        $(this).animate({height: 'auto'}, 500).promise().done(function () {
            $('html,body').animate({scrollTop: $(this).offset().top - 130}, 500);

        });
        if ($(this).hasClass('active')) {
            acc.removeClass('active');
            $(this).removeClass('active');
            $(this).parent().next().stop().slideUp(500);
        } else {
            acc.removeClass('active');
            $(this).addClass('active');
            acc.parent().next().slideUp(500);
            $(this).parent().next().stop().slideDown(500);
        }

    });

    var swipeTitle = [];
    $('.swiper-slide').each(function () {
        swipeTitle.push($(this).data('title'));
        // console.log(idArr);
    });
    if ($(".swiper-products").length > 0) {
        var swiper = new Swiper('.swiper-products', {
            spaceBetween: 1,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + '">' + swipeTitle[index] + '</span>';
                }
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            }
        });
    }


});

$(window).on('load', function () {
    if ($(".bottomSlider").length > 0) {
        var swiper = new Swiper('.bottomSlider', {
            slidesPerView: 3,
            //autoHeight: true,
            breakpoints: {
                780: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                660: {
                    slidesPerView: 1,
                    spaceBetween: 20
                }
            },
            spaceBetween: 38,
            loop: true,
            pagination: {
                el: '.pagination-custom',
                clickable: true
            },
            navigation: {
                nextEl: '.b-right',
                prevEl: '.b-left'
            }
        });
    }

    mobile_video_slider_init();

    if ($(".homeSlider").length > 0) {
        var swiper = new Swiper('.homeSlider', {
            loop: true
        });
    }
});

$(window).resize(function () {
    if ($(window).width() <= 768) {
        mobile_video_slider_init();
    }
    if ($('.team .personTitle').length) {
        $('.team .personTitle').removeClass('active');
        $('.team .personTitle').find('.infoWrap').hide();
    }
    if ($('.personInfo .infoWrap').length) {
        $('.personInfo .infoWrap').hide();
    }

});

function mobile_video_slider_init() {
    if ($(".video-mobile-slider").length > 0) {
        var swiper = new Swiper('.video-mobile-slider', {
            slidesPerView: 1,
            spaceBetween: 38,
            loop: true,
            pagination: {
                el: '.vm-pagination',
                clickable: true
            }
        });
    }
}

function fix_team_resize() {

}