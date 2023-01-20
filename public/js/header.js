$(document).ready(function(){
	$(window).scroll(function(){

	var tamheader = $('header').innerHeight()+20;
	var tamheader2 = $('header').innerHeight();

		if ($(window).width() > 719 && $(this).scrollTop() > 48 ) {
			$('header').addClass('header2');
			$('#margin-container').css({'margin-top':tamheader+'px'});
		} else if($(window).width() > 719 && $(this).scrollTop() == 0) {
			$('header').removeClass('header2');
			$('#margin-container').css({'margin-top':'0px'});
		}

		if ($(this).scrollTop() > 48 ) {
			$('#bt-mas-menos').addClass('wrap-masmenos');
			$('#bt-mas-menos').css({'top':tamheader2+'px'});
		} else {
			$('#bt-mas-menos').removeClass('wrap-masmenos');
			$('#bt-mas-menos').css({'top':'0px'});
		}

	})
})