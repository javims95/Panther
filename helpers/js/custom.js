/******************************************
    File Name: custom.js
*******************************************/

"use strict";

/**== wow animation ==**/

new WOW().init();

/**== loader js ==*/

jQuery(document).ready(function ($) {
    
    setTimeout(function(){ 
        $(".bg_load").fadeOut("slow");
    }, 700);

    /**== Menu js ==**/

    $("#navbar_menu").menumaker({
        title: "Menu",
        format: "multitoggle"
    });

    /** counter js **/

    $('.counter-count').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
    
    /** header fixed js **/

    $(window).scroll(function () {
        if ($(window).scrollTop() >= 300) {
            $('.header_fixed_on_scroll').addClass('fixed-header');
        }
        else {
            $('.header_fixed_on_scroll').removeClass('fixed-header');
        }
    });


});
