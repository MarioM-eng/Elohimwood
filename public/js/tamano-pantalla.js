$(window).resize(function() {

	//VAR PARA SABER EL TAMAÑO DEL HEADER
	var tamheader = $('header').innerHeight()+10;
	
   if ( $(window).width() >= 719 && $(window).width() < 991.9 ) {
			$('.item-header').removeClass('border-primary');
			$('.item-header').removeClass('border-right');
		} else {
			$('.item-header').addClass('border-primary');
			$('.item-header').addClass('border-right');
		}

	if ( $(window).width() < 991.9 ) {
			$("#submenu").addClass('deshabilitar');
		} else {
			$("#submenu").removeClass('deshabilitar');
		}

	if ( $(window).width() < 719 ) {
			$('header').addClass('header2');
			$('#margin-container').css({'margin-top':tamheader+'px'});
		} 
});

(function(){

		var sizeScreen = function(){
			var tamano = screen.width;
			var tamheader = $('header').height()+40;
			var elemento = document.getElementsByClassName("item-header");

			if(tamano < 991.9){
				for (var i = 0; i < elemento.length; i++) {
					elemento[i].classList.remove("border-primary","border-right");
				}
			}else {
				for (var i = 0; i < elemento.length; i++) {
					elemento[i].classList.add("border-primary","border-right");
				}
					
			}

			if (tamano < 719) {
				$('header').addClass('header2');
				$('#margin-container').css({'margin-top':tamheader+'px'});
			}
		}

		var sizeScreen2 = function(){
			var tamano = screen.width;
			var elemento= document.getElementById("data-t");
			if(tamano > 0 && tamano < 991.9){
					elemento= document.getElementById("submenu");
					elemento.classList.add("deshabilitar");
			}else {
					elemento= document.getElementById("submenu");
					elemento.classList.remove("deshabilitar");
				
			}
		}
		sizeScreen();
		if(document.getElementById("submenu") != undefined) sizeScreen2();
		}())
//alert("La resolución de tu pantalla es: " + screen.width + " x " + screen.height);