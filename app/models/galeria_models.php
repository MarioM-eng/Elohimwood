<?php  

/**
 * 
 */
class Galeria
{
	public $id;
	public $img;
	public $descripcion;
	public $tipo;
	public $tipoNom;//Se almacena la categoría con el nombre
	
	function __construct($id,$img,$descripcion,$tipo,$tipoNom)
	{
		$this->id=$id;
		$this->img=$img;
		$this->descripcion=$descripcion;
		$this->tipo=$tipo;
		$this->tipoNom=$tipoNom;
	}

	public static function listarFotos(){
		$listaImg=[];
		$db=Db::getConexion();
		$sql=$db->query('SELECT *FROM img');

		//Setencia para cargar las categorias con sus respectivos nombres
		$sqltipo=$db->query('SELECT img.tipo_img_idtipo_img,tipo_img.nombre FROM img JOIN tipo_img ON img.tipo_img_idtipo_img=tipo_img.idtipo_img ORDER BY img.idimg_madera');
		$tipoNombre =[];//Array cara almacenar los nombres
		foreach($sqltipo->fetchAll() as $d){//Ciclo para recorrer los nombres y almacenarlos en el array

			$tipoNombre[] = $d['nombre'];

		}

		$contador=0;//Contador para usarlo de index y recorrer el array tipoNombre

		//Carga en $listaDatos cada registro de la base de datos
		foreach($sql->fetchAll() as $datos){

			$listaImg[] = new Galeria($datos['idimg_madera'],$datos['img'],$datos['descripcion'],$datos['tipo_img_idtipo_img'],$tipoNombre[$contador]);
			$contador = $contador+1;

		}
		
		return $listaImg;

	}

	public static function agregarImg($nombre_img,$descripcion,$cat,$idAd){
		$exito = null;
		$db=Db::getConexion();

		$sql = "INSERT INTO img (img, descripcion, tipo_img_idtipo_img, administrador_idadministrador) VALUES (:img, :descn, :cat, :id_admin)";
    	$query = $db->prepare($sql);
		if ($query->execute([
		    	':img' => $nombre_img,
		    	':descn' => $descripcion,
		    	':cat' => $cat,
		    	':id_admin' => $idAd
		    ])) {
					$exito = true;
				}else {
						$exito = false;
				}

		return $exito;
	}

	public static function getImgById($id){
		$img=[];
		$db=Db::getConexion();
		$sql = "SELECT * FROM img WHERE idimg_madera = :id"; 
		$query = $db->prepare($sql);
		if ($query->execute([
		    	':id' => $id])) 
		{
			foreach($query->fetchAll() as $datos){

			$img[] = new Galeria($datos['idimg_madera'],$datos['img'],$datos['descripcion'],$datos['tipo_img_idtipo_img'],0);

		}
		
		return $img;

		}else {
			return false;
		}
	}

	public static function modificarImg($id,$cont,$index){
		$db=Db::getConexion();
		switch ($index) {
			case 'descripcion':
				$update=$db->prepare('UPDATE img SET descripcion=:indice WHERE idimg_madera=:id');
				$update->bindValue('id',$id);
				$update->bindValue('indice',$cont);
				$update->execute();
				break;
			
			case 'categoria':
				$update=$db->prepare('UPDATE img SET tipo_img_idtipo_img=:indice WHERE idimg_madera=:id');
				$update->bindValue('id',$id);
				$update->bindValue('indice',$cont);
				$update->execute();
				break;
		}
	}

	public static function eliminarImg($ide){
		$db=Db::getConexion();
		$sql = "DELETE FROM img WHERE idimg_madera = :id";
		$query = $db->prepare($sql);
		if ($query->execute([
		    	':id' => $ide])) 
		{
			return true;
		}else {
				return false;
		}
	}

}

?>