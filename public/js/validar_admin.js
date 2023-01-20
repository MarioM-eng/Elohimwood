(function(){

	//VALIDAR ELIMINAR IMAGEN
	var eliminarFoto = function(){
		var elemento = document.getElementsByClassName('check');
		var tamano = elemento.length;
		for (var i = 0; i < tamano; i++) {
			//alert(i);
			if (elemento[i].checked) {
				return true;
			}
		}
		alert('No hay fotos seleccionadas');
		return false;
	}

	var submitform = function(e){
		if (eliminarFoto()) {
			var men = confirm("Está seguro que quiere eliminar esta(s) imagen(es)");
			if (men) {
				document.myform.submit();
			}
    		e.preventDefault();
    	}else {
    		e.preventDefault();
    	}
	}

	var enlace = document.getElementById("eliminarf");
	enlace.addEventListener("click", submitform);

	//FIN VALIDAR ELIMINAR IMAGEN


//VALIDAR AGREGAR IMAGEN

	var validAggImg = function(e){

		//validar seleccionar imagen
		var nombreArchivo = document.getElementById('customFileLang').files[0];

		if (nombreArchivo === undefined) {
			alert('Debe seleccionar una imagen');
			e.preventDefault();
			return null;
		}

		//Validar seleccionar categoria
		var elemento = document.getElementById('agg-img.select');

		if (elemento.options.selectedIndex == 0) {
			alert('Debe seleccionar una categoria');
			e.preventDefault();
		}

	}

	var button = document.getElementById("img-agg-button");
	button.addEventListener("click", validAggImg);


	//INPUT PARA SELECCIONAR ARCHIVO Y PONERLE EL NOMBRE EN EL LABEL
	var fileNombre = function(){

		var nombreArchivo = document.getElementById('customFileLang').files[0];

		if(nombreArchivo != undefined){//Si el elemento está definido(tiene contenido)

			var label = document.getElementById('fileName');

			label.innerHTML = nombreArchivo.name;//Extraemos el nombre de la imagen;


		}

	}

	var file = document.getElementById("customFileLang");
	file.addEventListener("change", fileNombre);
	//FIN INPUT PARA SELECCIONAR ARCHIVO

	//FINAL VALIAR AGREGAR IMAGEN

	

	
}())