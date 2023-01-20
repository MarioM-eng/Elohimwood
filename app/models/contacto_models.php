<?php  

class Contactos
{
	public $id;
	public $celular;
	public $whatsapp;
	public $email;
	public $emailPqr;
	public $facebook;
	public $instagram;
	
	function __construct($id,$celular,$whatsapp,$email,$emailPqr,$facebook,$instagram)
	{
		$this->id=$id;
		$this->celular=$celular;
		$this->whatsapp=$whatsapp;
		$this->email=$email;
		$this->emailPqr=$emailPqr;
		$this->facebook=$facebook;
		$this->instagram=$instagram;
	}

		//Funcion para obtener todos los contactos de la empresa
	public static function contactos(){
		$listaContactos=[];
		$db=Db::getConexion();
		$sql=$db->query('SELECT *FROM contacto');
		//Carga en $listaDatos cada registro de la base de datos
		foreach($sql->fetchAll() as $datos){

			$listaContactos[] = new Contactos($datos['idcontacto'],$datos['celular'],$datos['whatsapp'],$datos['email'],$datos['email_pqr'],$datos['facebook'],$datos['instagram']);

		}
		
		return $listaContactos;
	}

	public static function updateContactos($id,$c,$tipo){
		$db=Db::getConexion();
		switch ($tipo) {
			case 'celular':
				$update=$db->prepare('UPDATE contacto SET celular=:indice WHERE idcontacto=:id');
				$update->bindValue('id',$id);
				$update->bindValue('indice',"+57 $c");
				$update->execute();
				break;
			
			case 'whatsapp':
				$update=$db->prepare('UPDATE contacto SET whatsapp=:indice WHERE idcontacto=:id');
				$update->bindValue('id',$id);
				$update->bindValue('indice',"+57 $c");
				$update->execute();
				break;

			case 'email':
				$update=$db->prepare('UPDATE contacto SET email=:indice WHERE idcontacto=:id');
				$update->bindValue('id',$id);
				$update->bindValue('indice',$c);
				$update->execute();
				break;

			case 'emailPqr':
				$update=$db->prepare('UPDATE contacto SET emailPqr=:indice WHERE idcontacto=:id');
				$update->bindValue('id',$id);
				$update->bindValue('indice',$c);
				$update->execute();
				break;

			case 'facebook':
				$update=$db->prepare('UPDATE contacto SET facebook=:indice WHERE idcontacto=:id');
				$update->bindValue('id',$id);
				$update->bindValue('indice',"https://$c");
				$update->execute();
				break;

			case 'instagram':
				$update=$db->prepare('UPDATE contacto SET instagram=:indice WHERE idcontacto=:id');
				$update->bindValue('id',$id);
				$update->bindValue('indice',"https://$c");
				$update->execute();
				break;
		}
		
	}
}

?>