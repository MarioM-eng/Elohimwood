(function(){

 	var volver = function(){
 		var al = confirm('Usuario no existe');
 		if (al) {
 			window.location="?controller=admin&action=login";
 		}else {
 			window.location="?controller=pagina&action=index";
 		}
 	}
 	volver();
 
}())