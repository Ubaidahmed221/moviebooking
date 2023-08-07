//////////////////////////////////////////////////////
// scroll to top function
//////////////////////////////////////////////////////
function scroll_top() {
    if ($(this).scrollTop() > 300) {
        $('.scroll_top').fadeIn();
    } else {
        $('.scroll_top').fadeOut();
    }
}
// scroll to top function END


//////////////////////////////////////////////////////
// load object with fade effect function
//////////////////////////////////////////////////////
function fadeInBlock() {
    $('.fadeInBlock').each(function(i) {

        var bottom_of_object = $(this).offset().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height();

        //bottom_of_window = bottom_of_window - 50;

        /* If the object is completely visible in the window, fade it it */
        if (bottom_of_window > bottom_of_object) {
            $(this).animate({
                'opacity': '1'
            }, 500);
        }
    });
}
// load object with fade effect END


$(document).ready(function(e) {

    //////////////////////////////////////////////////////
    // scroll to top
    //////////////////////////////////////////////////////
    scroll_top();
    //Click event to scroll to top
    $('.scroll_top').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 600);
        return false;
    });


    //////////////////////////////////////////////////////
    // load object with fade effect
    //////////////////////////////////////////////////////
    somevar = $(window).width();
    if (somevar > 768) {
        $('.fadeInBlock').css("opacity", "0");
    }
    fadeInBlock();





});
/*
 //$(document).ready
 */
$(window).scroll(function() {

    var winScrollTop = $(window).scrollTop();
    targetobj = "#_atssh";

    if ($(targetobj)[0]) {

        var panelBottom = $(targetobj).offset().top + $(targetobj).outerHeight() - 100;
        if (winScrollTop >= panelBottom)
            $('#at4-share').fadeIn(200);
        else {
            $('#at4-share').fadeOut(200);
        }

    }
    //////////////////////////////////////////////////////
    // scroll to top
    //////////////////////////////////////////////////////
    scroll_top();


    //////////////////////////////////////////////////////
    // load object with fade effect
    //////////////////////////////////////////////////////
    fadeInBlock();

});
/*
 // $(window).scroll
 */













$(window).load(function() {


    //////////////////////////////
    //Homepage banner
    //////////////////////////////

    $(document).ready(function() {
        /* $( 'body' ).responsiveVideo(); */


        $(".target").toggleClass("hidden");
        $(".target-two").toggleClass("hidden");
        $('.owl-carousel').owlCarousel({

            margin: 10,
            navText: ["<i class='fa fa-arrow-left icon-white'></i>", "<i class='fa fa-arrow-right icon-white'></i>"],
            responsiveClass: true,

            responsive: {
                0: {

                    items: 1,
                    nav: true,
                    autoplay: true,
                    autoplayTimeout: 7000,
                    loop: true,
                    lazyLoad: true


                },
                600: {
                    items: 3,
                    nav: true,
                    autoplay: true,
                    autoplayTimeout: 7000,
                    loop: true,
                    lazyLoad: true


                },
                1000: {
                    items: 4,
                    nav: true,
                    autoplay: true,
                    autoplayTimeout: 7000,
                    loop: true,
                    lazyLoad: true

                },
                1920: {
                    items: 4,
                    nav: true,
                    autoplay: true,
                    autoplayTimeout: 7000,
                    loop: true,
                    lazyLoad: true
                }
            },

            autoHeight: false

        });


        $("#showbtn").on('click', function() {
            /*$(".target-two").toggleClass("hidden");
            $(".target").toggleClass("hidden");*/
            var carousel = $('.target .owl-carousel').data('owlCarousel');
            carousel._width = $('.target .owl-carousel').width();
            carousel._height = $('.target-two .owl-carousel').height();
            carousel.invalidate('width');
            carousel.invalidate('height');
            //$('.owl-height').css('height','628px');
            $('.owl-height').css('height', '729px');
            carousel.refresh();
        });
        $("#comingbtn").on('click', function() {
            /* $(".target").toggleClass("hidden");
             $(".target-two").toggleClass("hidden");*/
            var carousel = $('.target-two .owl-carousel').data('owlCarousel');
            carousel._width = $('.target-two .owl-carousel').width();
            carousel._height = $('.target-two .owl-carousel').height();
            //$('.owl-height').css('height','628px');
            $('.owl-height').css('height', '729px');
            carousel.invalidate('width');
            carousel.invalidate('height');
            carousel.refresh();
        });

    });








});
/*
 //$(window).load
 */

// on accordions with down arrows, change these to "up" arrows
// for active panels
$('.accordion .accordion-navigation').first().find('a i').removeClass('fa fa-chevron-down').addClass('fa fa-chevron-up');
$('.accordion').on('toggled', function(event, accordion) {
    $('.accordion .accordion-navigation').first().find('a i').removeClass('fa icon-chevron-up').addClass('fa fa-chevron-down');
    if ($('.accordion .accordion-navigation').hasClass('active')) {
        $('.accordion .accordion-navigation.active a i').removeClass('fa fa-chevron-down').addClass('fa fa-chevron-up');
    } else {
        $('.accordion .accordion-navigation a i').removeClass('fa fa-chevron-down').addClass('fa fa-chevron-down');
    }
});



$(document).foundation({
    equalizer: {
        // Specify if Equalizer should make elements equal height once they become stacked.
        equalize_on_stack: true
    }
});

$("option").each(function() {

    $(this).text($(this).text().toUpperCase());
});

$(function() {
    $("#accordion").accordion({
        collapsible: true
    });

});



function sameHeight() {


}



function equalHeight(group) {
    tallest = 0;
    group.each(function() {
        thisHeight = $(this).height();
        if (thisHeight > tallest) {
            tallest = thisHeight;
        }
    });
    group.height(tallest);
}

jQuery(window).bind("load", function() {
    var footer = jQuery("#footer");
    var pos = footer.position();
    var height = jQuery(window).height();
    height = height - pos.top;
    height = height - footer.height();
    if (height > 0) {
        footer.css({
            'margin-top': height + 'px'
        });
    }
});