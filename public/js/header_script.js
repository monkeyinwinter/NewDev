$(window).scroll(function() {

var scrollposition = $(window).scrollTop();

if ((scrollposition <= 650)) {

	$('#header_fixed').fadeOut(500);

} else if ((scrollposition > 650)) {
	$('#header_fixed').fadeIn(500);

}


});



