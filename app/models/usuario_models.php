<?php  

/**
 * Modelo para acceso a base de datos y funciones CRUD
 */
class Ususario
{
	
	//Atributos
	public $id;
	public $nombre;
	public $apellido;
	public $email;

	function __construct($id, $nombre, $apellido, $email)
	{
		$this->id=$id;
		$this->nombre=$nombre;
		$this->apellido=$apellido;
		$this->email=$email;
	}

	//Funcion para obtener todos los usuarios
	public static function all(){
		$listaUsuarios[];
		$db=Db::getConnet();
		$sql=$db->query('SELECT *FROM usuario');

		//Carga en $listaUsuarios cada registro de la base de datos
		foreach($sql->fetchAll() as $usuario){

			$listaUsuarios[] = new Usuario($usuario['id'],$usuario['nombre'],$usuario['apellido'],$usuario['email']);

		}
		return $listaUsuarios;
	}

	//la función para registrar un usuario
	public static function save($usuario){
			$db=Db::getConnect();
			$insert=$db->prepare('INSERT INTO USUARIOS VALUES(:id,:nombre,:apellido,:email)');
			$insert->bindValue('id',$usuario->id);
			$insert->bindValue('nombre',$usuario->nombre);
			$insert->bindValue('nombre',$usuario->apellido);
			$insert->bindValue('email',$usuario->email);
			$insert->execute();
		}
 
	//la función para actualizar 
	public static function update($usuario){
		$db=Db::getConnect();
		$update=$db->prepare('UPDATE usuarios SET alias=:alias, nombres=:nombres, email=:email WHERE id=:id');
		$update->bindValue('id',$usuario->id);
		$update->bindValue('nombre',$usuario->nombre);
		$update->bindValue('apellido',$usuario->apellido);
		$update->bindValue('email',$usuario->email);
		$update->execute();
	}
 
	// la función para eliminar por el id
	public static function delete($id){
		$db=Db::getConnect();
		$delete=$db->prepare('DELETE FROM usuarios WHERE ID=:id');
		$delete->bindValue('id',$id);
		$delete->execute();
	}
 
	//la función para obtener un usuario por el id
	public static function getById($id){
		//buscar
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM usuarios WHERE ID=:id');
		$select->bindValue('id',$id);
		$select->execute();
		//asignarlo al objeto usuario
		$usuarioDb=$select->fetch();
		$usuario= new Usuario($usuarioDb['id'],$usuarioDb['alias'],$usuarioDb['nombres'],$usuarioDb['email']);
		return $usuario;
	}
}

?>