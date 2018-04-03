$(document).ready(function(){

  $('#header_fixed').hide();
  $('#header_top_sub_menu').css({'height':'0'});


  $('#header_contain').hover(
          function () {
            $('#header_top_sub_menu').stop(true, false)
                      			.delay(60)
                        		.animate({height:'90px'},500)
          },
          function () {
            $('#header_top_sub_menu').stop(true, false)
                       			 .delay(600)
                        		 .animate({height:'0px'},500)
    });


});

