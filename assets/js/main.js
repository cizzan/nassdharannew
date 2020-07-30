
(function ($) {
    "use strict";

    /* search */
    $('.search-open').on('click', function () {
        $('.search-inside').fadeIn();
    });
    $('.search-close').on('click', function () {
        $('.search-inside').fadeOut();
    });


    /* meanmenu */
    $('.main-menu nav').meanmenu({
        meanMenuContainer: '.mobile-menu',
        meanScreenWidth: "991"
    });

<<<<<<< HEAD
    /*// When the user scrolls the page, execute myFunction
    window.onscroll = function () { myFunction() };

    // Get the navbar
    var navbar = document.getElementById("navbar");

    // Get the offset position of the navbar
    var sticky = navbar.offsetTop;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }*/
=======
    // When the user scrolls the page, execute myFunction
    // window.onscroll = function () { myFunction() };

    // // Get the navbar
    // var navbar = document.getElementById("navbar");

    // // Get the offset position of the navbar
    // var sticky = navbar.offsetTop;

    // // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    // function myFunction() {
    //     if (window.pageYOffset >= sticky) {
    //         navbar.classList.add("sticky")
    //     } else {
    //         navbar.classList.remove("sticky");
    //     }
    // }
>>>>>>> f19a8a3066503bf55b1d080e69969cfa69fcb526
    /* slider-active */
    $('.slider-active').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        navElement: 'div',
        navText: ['<i class="ti-angle-left" aria-hidden="true"></i>', '<i class="ti-angle-right" aria-hidden="true"></i>'],
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })


    /* testimonial-active */
    $('.testimonial-active').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })



    /* counter */
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });



    /* image-link */
    $('.image-link').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    /* blog-thumb-active */
    $('.blog-thumb-active').owlCarousel({
        loop: true,
        nav: true,
        autoplay: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            450: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })



    /* Scroll Up */
    $.scrollUp({
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade',
        scrollText: '<i class="fa fa-angle-up"></i>',
    });


    /* magnificPopup */
    $('.video-popup').magnificPopup({
        type: 'iframe'
    });

    /* blog-thumb-active */
    $('.blog-thumb-active').owlCarousel({
        loop: true,
        nav: true,
        autoplay: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            450: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

    /* WOW active */
    new WOW().init();

    /* brand-active */
    $('.brand-active').owlCarousel({
        loop: true,
        nav: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })



    $('[data-countdown]').each(function () {
        var $this = $(this), finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function (event) {
            $this.html(event.strftime('<div class="time-count">%D <span>days</span></div><div class="time-count">%H <span>hour</span></div><div class="time-count">%M <span>minute</span></div><div class="time-count">%S <span>Second</span></div>'));
        });
    });











})(jQuery);	