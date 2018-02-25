$(document).ready(function() {
	$(window).scroll(function() {
  	if($(document).scrollTop() > 50) {
    	$('.navbar-transparent').addClass('change');
       
    }
    else {
    $('.navnavbar-transparent').removeClass('change');
    }
  });
});

$(document).ready(function() {
	$(window).scroll(function() { 
  	if($(document).scrollTop() < 50) {
    	$('.navbar-transparent').removeClass('change');
    }
    else {
    $('.navnavbar-transparent').addClass('change');
    }
  });
});

