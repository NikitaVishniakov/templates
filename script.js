/**
 * Created by vishniakov on 28.06.17.
 */
$(document).ready(function(){
    $('.mobile-open').click(function () {
        $('.menu').toggleClass('menu-hidden');
        $('.mobile-open .burger-wrapper').toggleClass('open');
    });
    $('.main-container').click(function () {
        $('.menu').addClass('menu-hidden');
        $('.mobile-open .burger-wrapper').removeClass('open');
    });
    if($(window).width() < 900) {
        $('.menu').addClass('menu-hidden');
    }
    $('.menu').click(function () {
        if($(window).width() < 900) {
            // $('.menu').addClass('menu-hidden');
            // $('.mobile-open .burger-wrapper').removeClass('open');
        }
    })
    $('.user-name').click(function () {
        $('.user-menu').toggle();
    })
    $('.user-menu').click(function () {
        $('.user-menu').addClass('menu-hidden');
    })
    $(window).resize(function() {
        if($(window).width() > 900){
            $('.menu').removeClass('menu-hidden');
            $('.mobile-open .burger-wrapper').addClass('open');
        }
        else{
            $('.menu').addClass('menu-hidden');
            $('.mobile-open .burger-wrapper').removeClass('open');
        }
    });
})