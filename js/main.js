$(window).scroll(function() {
if ($(this).scrollTop() > 1){  
    $('header').addClass("sticky");
  }
  else{
    $('header').removeClass("sticky");
  }
});


$(document).ready(function(){
	$('.hamburger').on('click',function(){
		$('.mymenu').slideToggle();
	});
});




$(document).ready(function() {
	$('.scroll').click(function(event){
		$('html,body').animate({scrollTop:'+=590px'}),600;
	});
	return false;
});
	


