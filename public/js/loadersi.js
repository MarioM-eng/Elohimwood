(function(){

	var loader = function(){
		var elemento = document.getElementsByClassName('loader')[1];
		if(elemento != undefined){
			elemento.setAttribute("class","deshabilitar");
			console.log('hola');
		}
	}
	loader();

}())