<?php 
	require_once ('../app/config/connection.php');
	// la variable controller guarda el nombre del controlador y action guarda la acción por ejemplo registrar, actualizar, etc 
	//si la variable controller y action son pasadas por la url desde layout.php entran en el if
	if (isset($_GET['controller']) && isset($_GET['action'])) {
		$controller=$_GET['controller'];
		$action=$_GET['action'];
	} else if(isset($_GET['admin'])){
		$controller='admin';
		$action='login';	
	}else {
		$controller='pagina';
		$action='index';
	}	
	//carga la vista layout.php
	require_once('../app/layout.php');
?>