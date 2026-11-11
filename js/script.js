var a = 0;
$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        navText: ["<div id='owl-carousel-prev'>&nbsp;</div>", "<div id='owl-carousel-next'>&nbsp;</div>"],
        navElement: 'div',
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                autoplay: false,
                items: 1
            },
            992: {
                items: 3
            },
            768: {
                items: 2
            },
            576: {
                items: 1
            }
        }
    });
    if ($("#contact_us_container").length > 0 && $(window).width() > 767) {
        var height = $(window).height() - $(".navbar-container").height() - $(".contactbanner").height() - $("#contact_us_footer_banner").height() - $(".site-footer").height();
        $("#contact_us_container").height((height < 400 ? '400px' : height));
    }
});
$(window).scroll(function () {
    if ($('.counter').length) {
        var oTop = $('.counter').offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
            $('.counter-label').each(function () {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                        countNum: countTo
                    },
                    {
                        duration: 2000,
                        easing: 'swing',
                        step: function () {
                            $this.find("span:first").text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $this.find("span:first").text(this.countNum);
                        }
                    });
            });
            a = 1;
        }
    }
});