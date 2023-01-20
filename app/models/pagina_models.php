<?php  

/**
 * Modelo para acceso a base de datos y funciones CRUD
 */
class Pagina
{
	
	//Atributos
	public $id;
	public $nombre;
	public $mision;
	public $vision;
	public $nosotros;

	function __construct($id,$nombre,$mision,$vision,$nosotros)
	{
		$this->id=$id;
		$this->nombre=$nombre;
		$this->mision=$mision;
		$this->vision=$vision;
		$this->nosotros=$nosotros;
	}

	//Funcion para obtener todos los datos de la empresa
	public static function datosEmpresa(){
		$listaDatos=[];
		$db=Db::getConexion();
		$sql=$db->query('SELECT *FROM datos_empresa');
		//Carga en $listaDatos cada registro de la base de datos
		foreach($sql->fetchAll() as $datos){

			$listaDatos[] = new Pagina($datos['iddatos_empresa'],$datos['nombre'],$datos['mision'],$datos['vision'],$datos['nosotros']);

		}
		
		return $listaDatos;
	}

	public static function updateDatos($id,$d,$tipo){
		$db=Db::getConexion();
		switch ($tipo) {
			case 'mision':
				$update=$db->prepare('UPDATE datos_empresa SET mision=:indice WHERE iddatos_empresa=:id');
				$update->bindValue('id',$id);
				$update->bindValue('indice',$d);
				$update->execute();
				break;
			
			case 'vision':
				$update=$db->prepare('UPDATE datos_empresa SET vision=:indice WHERE iddatos_empresa=:id');
				$update->bindValue('id',$id);
				$update->bindValue('indice',$d);
				$update->execute();
				break;

			case 'nosotros':
				$update=$db->prepare('UPDATE datos_empresa SET nosotros=:indice WHERE iddatos_empresa=:id');
				$update->bindValue('id',$id);
				$update->bindValue('indice',$d);
				$update->execute();
				break;
		}
		
	}
}

?>