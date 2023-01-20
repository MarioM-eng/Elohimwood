<?php
 
	//función que llama al controlador y su respectiva acción, que son pasados como parámetros
	function call($controller, $action){
		//importa el controlador desde la carpeta Controllers
		require_once('../app/controllers/' . $controller . '_controller.php');
		//crea el controlador
		switch($controller){
			case 'pagina':
				$controller= new PaginaController();
				break; 
			case 'contacto':
				$controller= new ContactoController();
				break;
			case 'admin':
				$controller= new AdminController();
				break;
			case 'galeria':
				$controller= new GaleriaController();
				break;  
 
		}
		//llama a la acción del controlador
		$controller->{$action}();
	}
 
	//array con los controladores y sus respectivas acciones
	$controllers= array(
						'pagina'=>['index','actualizarDatos','error'],
						'contacto'=>['index','actualizarContactos','imagenes','imagenesM','imagenesP'],
						'galeria'=>['galeriaFotos','agregarFoto','eliminarFoto','modificarFoto','cargarTodas','cargarMadera','cargarProducto'],
						'admin'=>['index','login','loginSesion','updateAdmin','cerrarSesion','actualizarDatosEmpresa','modificarDatosAdmin']
						);
	//verifica que el controlador enviado desde index.php esté dentro del arreglo controllers
	if (array_key_exists($controller, $controllers)) {
		//verifica que el arreglo controllers con la clave que es la variable controller del index exista la acción
		if (in_array($action, $controllers[$controller])) {
			//llama  la función call y le pasa el controlador a llamar y la acción (método) que está dentro del controlador
			call($controller, $action);
		}else{
			call('pagina', 'error');
		}
	}else{// le pasa el nombre del controlador y la pagina de error
		call('pagina', 'error');
	}
?>