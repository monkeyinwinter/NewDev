$(window).scroll(function() {

var scrollposition = $(window).scrollTop();

if ((scrollposition <= 750)) {
	$('#header_fade').fadeIn(500);
	$('#header_fixed').fadeOut(500);

} else if ((scrollposition > 750)) {
	$('#header_fixed').fadeIn(500);
	$('#header_fade').fadeOut(500);
}


});



