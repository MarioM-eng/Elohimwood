<?php  

/**
 * 
 */
class GaleriaController
{
	
	function __construct()
	{}

	public function galeriaFotos(){
		require_once('../app/models/categoriaf_models.php');
		$categ = CategoriaF::categoriaFotos();
		require_once('../app/views/Galeria/galeria-fotos.php');
	}

	public function agregarFoto(){
		$agg=false;//Variable puesta en false por si ocurre algun error pueda mandar un mensaje de error
		$descripcion = $_POST['desc'];
		$cat = $_POST['cate'];
		$valid=false;//Variable para validar que la foto se subió con exito al servidor o no
		require_once('../app/imagenes.php');//En esta ruta se procesa la imagen
		if ($valid) {
			require_once('../app/models/galeria_models.php');
			$agg = Galeria::agregarImg($nombre_def,$descripcion,$cat,$_SESSION['nick']['id']);
			$_SESSION['men'] = $agg;//Variable que arroja boolean si se agrego imagen o no
			echo "<script type=\"text/javascript\">window.location=\"?controller=galeria&action=galeriaFotos\"</script>";
		}else{
			$_SESSION['men'] = $agg;//Variable que arroja boolean si se agrego imagen o no
			return null;
		}
		
		
	}

	public function modificarFoto(){
		require_once('../app/models/galeria_models.php');	
		if (isset($_POST['descd'])) {
				$descripcion=Galeria::modificarImg($_GET['idI'],$_POST['descd'],'descripcion');
			}
				
		if (isset($_POST['cated'])) {
			if ($_POST['cated']==1 || ($_POST['cated']==2)) {
				$usuario=Galeria::modificarImg($_GET['idI'],$_POST['cated'],'categoria');
			}else{
				echo "<script>alert('El campo \"Seleccionar categoria\" no debe estar vacío')</script>";
			}
			
		}
				
		echo "<script type=\"text/javascript\">window.location=\"?controller=galeria&action=galeriaFotos\"</script>";

	}

	public function eliminarFoto(){
		require_once('../app/models/galeria_models.php');
		//Recorremos el array de los checkbox con name=ids[]
		for ($i=0; $i < count($_POST['ids']); $i++) { 
			$buscar = Galeria::getImgById($_POST['ids'][$i]);//buscamos la imagen según el id
			unlink('img/'.$buscar[0]->img); //Eliminar el archivo en el servidor
			$delete = Galeria::eliminarImg($_POST['ids'][$i]);//Eliminamos el registro de la imagen en la bd
		}
		echo "<script type=\"text/javascript\">window.location=\"?controller=galeria&action=galeriaFotos\"</script>";

	}

	public function cargarTodas(){
		require_once('../app/views/Galeria/cargarTodas.php');
	}

	public function cargarMadera(){
		require_once('../app/views/Galeria/cargarMadera.php');
	}

	public function cargarProducto(){
		require_once('../app/views/Galeria/cargarProducto.php');
	}

}

?>