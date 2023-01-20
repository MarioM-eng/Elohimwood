<?php 

/**
 * 
 */
class CategoriaF
{

	public $id;
	public $nombre;
	
	function __construct($id,$nombre)
	{
		$this->id=$id;
		$this->nombre=$nombre;
	}

	public static function categoriaFotos(){
		$listaFotos=[];
		$db=Db::getConexion();
		$sql=$db->query('SELECT *FROM tipo_img');
		//Carga en $listaFotos cada registro del tipo de fotos de la base de datos
		foreach($sql->fetchAll() as $datos){

			$listaFotos[] = new CategoriaF($datos['idtipo_img'],$datos['nombre']);

		}
		
		return $listaFotos;
	}

}

?>