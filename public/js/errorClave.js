(function(){

 	var volver = function(){
 		var al = confirm('Contraseña incorrecta');
 		if (al) {
 			window.history.back();
 		}else {
 			window.location="?controller=pagina&action=index";
 		}
 	}
 	volver();
 
}())