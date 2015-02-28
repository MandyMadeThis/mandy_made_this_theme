/*global $: false*/
$(window).load(function() {
    'use strict';
    // init Isotope
    var $contain = $('.workItems').isotope({
        // options
        itemSelector: '.workItems li',
        masonry: {
            columnWidth: 300,
            isFitWidth: true
        }
    });

    // filter items on button click
    $('.filters').on('click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        $contain.isotope({
            filter: filterValue
        });
    });
});


$(function() {
    'use strict';
    if ($('body').hasClass('home')) {
        var oldTop = 0;


        $(window).on('scroll', function() {
            // How far are we scrolled down? in PX
            var tipTop = $(window).scrollTop();
            // Where in the document is our nav? In PX
            var navHeight = $('nav').height();
            var navTop = $('nav').position().top;

            // this is a way to store the old navigation top
            if (navTop > 0) { // if NOT fixed
                oldTop = navTop; // store the value of the old navTop
            }

            //if we have scrolled past it
            if (tipTop >= navTop) {
                $('header').addClass('sticky');
                $('header').css('padding-top', navHeight);
            } else {
                $('header').removeClass('sticky');
                $('header').css('padding-top', 0);
            }

            // check if we need to unstick it because of the fixed bug
            if (oldTop > tipTop) {
                $('header').removeClass('sticky');
                $('header').css('padding-top', 0);
            }

        }); // end window scroll


        //smoothscroll
        $('header nav a').smoothScroll({
            offset: -52,
        });
    }

    //Contact 
    $('.contact').hide();

    $('body').on('click', 'nav li:last-child', function() {
        if ($(document).scrollTop() >= 200) {
            // user scrolled 200 pixels or more;
            $('html,body').animate({
                scrollTop: 0
            }, 100, function() {
                $('.contact').addClass('revealed');
                $('.contact').slideToggle();
            });
        } else {
            $('.contact').addClass('revealed');
            $('.contact').slideToggle();
        }
    });

    $('a.close').on('click', function() {
        $('.contact').slideUp().promise().done(function() {
            $('contact').removeClass('revealed');
        });
    });

    $('button.hire').on('click', function() {
        $('html, body').animate({
            scrollTop: 0
        }, 200);
        $('contact').addClass('revealed');
        $('.contact').slideDown();
    });

    $('.serviceContent button.quote').on('click', function() {
        $('html, body').animate({
            scrollTop: 0
        }, 200).promise().done(function() {
            $('contact').addClass('revealed');
            $('.contact').slideDown();
        });
    });

    $('footer a.intouch').on('click', function() {
        $('html, body').animate({
            scrollTop: 0
        }, 200).promise().done(function() {
            $('contact').addClass('revealed');
            $('.contact').slideDown();
        });
    });

    // services accordion
    $(function() {
        $('#accordion').accordion({
            heightStyle: 'content'
        });
    }); //end of accordion


    // Signature on single blog post
    if ($('body').hasClass('single')) {
        var sig = false;
        $(window).on('scroll', function() {

            var sigTop = $('.svgWrap').offset().top - 500;
            var winTop = $(window).scrollTop();

            if (sigTop < winTop && !sig) {
                sig = true;
                animateSignature();
            }
        });
    }

    var animateSignature = function() {
        $('.signature').attr('class', 'signature animate');
    };


}); //end of doc ready