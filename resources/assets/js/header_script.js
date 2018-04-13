$(window).scroll(function() {

    var scrollposition = $(window).scrollTop();

    if ((scrollposition <= 650)) {
        $('.header_2').hide(10);
    } else if ((scrollposition > 850)) {
        $('.header_2').fadeIn(500);
    }

    if ((scrollposition <= 750)) {
        $('.header_2').fadeOut(500);
    } else if ((scrollposition > 750)) {
        $('.header_2').fadeIn(500);
    }


});



