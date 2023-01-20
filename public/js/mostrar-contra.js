(function(){

	var ver = function(e){
		var input = document.getElementsByClassName('clave')[0];

		if(input.getAttribute("type")=="password"){
			input.setAttribute("type", "text");
		}else {
			input.setAttribute("type", "password");
		}
		e.preventDefault();//previene el comportamiento de los elementos
	}

	var verModal = function(er){
		console.log("Focus!");
		var input = document.getElementsByClassName('clave')[1];

		if(input.getAttribute("type")=="password"){
			input.setAttribute("type", "text");
		}else {
			input.setAttribute("type", "password");
		}
		er.preventDefault();//previene el comportamiento de los elementos
	}

	var elemento = document.getElementById('ver');
		elemento.addEventListener("click",ver);

	var elementoModal = document.getElementById("ver-modal");
		elementoModal.addEventListener("click",verModal);

		}())