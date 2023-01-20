<?php  

/**
 * Modelo para acceso a base de datos y funciones CRUD
 */
class Admin
{
	
	//Atributos
	public $ida;
	public $nick;
	public $clave;

	function __construct($id,$nick,$clave)
	{
		$this->ida=$id;
		$this->nick=$nick;
		$this->clave=$clave;
	}

	//Funcion para obtener todos los datos del administrador
	public static function datosAdmin(){
		$listaDatosA=[];
		$db=Db::getConexion();
		$sql=$db->query('SELECT *FROM administrador');
		//Carga en $listaDatos cada registro de la base de datos
		foreach($sql->fetchAll() as $datos){

			$listaDatosA[] = new Admin($datos['idadministrador'],$datos['nick'],$datos['clave']);

		}
		
		return $listaDatosA;
	}

	//la función para obtener un administrador por el id
	public static function getById($id){
		//buscar
		$db=Db::getConexion();
		$select=$db->prepare('SELECT * FROM administrador WHERE idadministrador=:id');
		$select->bindValue('id',$id);
		$select->execute();
		//asignarlo al objeto usuario
		$usuarioDb=$select->fetch();
		$usuario[]= new Admin($usuarioDb['idadministrador'],$usuarioDb['nick'],$usuarioDb['clave']);
		return $usuario;
	}

	//Funcion para actualizar el nick del usuario
	public static function updateNick($id,$nick){
		$db=Db::getConexion();
		$update=$db->prepare('UPDATE administrador SET nick=:nick WHERE idadministrador=:id');
		$update->bindValue('id',$id);
		$update->bindValue('nick',$nick);
		$update->execute();
	}

	//Funcion para actualizar la clave del usuario
	public static function updateClave($id,$clave){
		$db=Db::getConexion();
		$update=$db->prepare('UPDATE administrador SET clave=:clave WHERE idadministrador=:id');
		$update->bindValue('id',$id);
		$update->bindValue('clave',$clave);
		$update->execute();
	}
}

?>