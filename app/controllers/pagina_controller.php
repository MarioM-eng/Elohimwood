<?php  
/**
*Descripción: Controlador para la entidad usuario
*/

/**
 * 
 */
class PaginaController
{
	
	function __construct(){}

	public function index(){
		if(!isset($_SESSION)) session_start();
		require_once('../app/views/Pagina/index.php');
	}

	public function error(){
		require_once('../app/views/Pagina/error.php');
	}

	public function actualizarDatos(){
		if (isset($_POST['mision'])) {
			if ($_POST['mision']!=NULL) {
				$_SESSION['dato']="mision";
				$dato=Pagina::updateDatos($_POST['idd'],$_POST['mision'],$_SESSION['dato']);
				$_POST['mision']=NULL;
			}else{
				echo "<script>alert('El campo \"Misión\" no debe estar vacío')</script>";
			}

			echo "<script type=\"text/javascript\">window.location=\"?controller=admin&action=actualizarDatosEmpresa\"</script>";
			return null;
		}

		if (isset($_POST['vision'])) {
			if ($_POST['vision']!=NULL) {
				$_SESSION['dato']="vision";
				$dato=Pagina::updateDatos($_POST['idd'],$_POST['vision'],$_SESSION['dato']);
				$_POST['vision']=NULL;
			}else{
				echo "<script>alert('El campo \"Visión\" no debe estar vacío')</script>";
			}

			echo "<script type=\"text/javascript\">window.location=\"?controller=admin&action=actualizarDatosEmpresa\"</script>";
			return null;
		}

		if (isset($_POST['nosotros'])) {
			if ($_POST['nosotros']!=NULL) {
				$_SESSION['dato']="nosotros";
				$dato=Pagina::updateDatos($_POST['idd'],$_POST['nosotros'],$_SESSION['dato']);
				$_POST['nosotros']=NULL;
			}else{
				echo "<script>alert('El campo \"Nosotros\" no debe estar vacío')</script>";
			}

			echo "<script type=\"text/javascript\">window.location=\"?controller=admin&action=actualizarDatosEmpresa\"</script>";
			return null;
		}
	}
}




?>