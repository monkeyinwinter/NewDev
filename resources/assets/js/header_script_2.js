$(document).ready(function(){

    $('.header_2').hide();
    $('.header_sub_menu').css({'display':'none'});

    $('.header_1').hover(
        function () {
            $('.header_sub_menu').stop(true, false).css({'display':'flex'})
        },
        function () {
            $('.header_sub_menu').stop(true, false).css({'display':'none'})
        });

    $('.header_2').hover(
        function () {
            $('.header_sub_menu').stop(true, false).css({'display':'flex'})
        },
        function () {
            $('.header_sub_menu').stop(true, false).css({'display':'none'})
        });

});


