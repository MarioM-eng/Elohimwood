<?php

/**
 * Conexión a la base de datos
 */
class Db
{
	
	private static $instance=NULL;
	//private define('IMGSDIR', '../public/img/');
		
	private function __construct(){}
		
	public static function getConexion(){
		//Si la variable $instance está definida y es igual a NULL será un boolean false, pero la condicion se hace con el operador ! así que el resultado es true.
		if (!isset(self::$instance)) {
		$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
		echo "Holoa";
		self::$instance = new PDO('mysql:host=localhost;dbname=elohimwood', 'root', 'root',$pdo_options);
		}
	return self::$instance;
	}


}

?>