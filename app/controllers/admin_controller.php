<?php  
/**
*Descripción: Controlador para la entidad usuario
*/

/**
 * 
 */
class AdminController
{
	
	function __construct(){}

	public function index(){
		require_once('../app/views/Admin/index.php');
	}

	public function login(){
		require_once('../app/views/Admin/login.php');
	}

	public function loginSesion(){
		require_once('../app/views/Admin/sesion/login.php');
	}

	public function cerrarSesion(){
		require_once('../app/views/Admin/sesion/cerrarSesion.php');
	}

	public function actualizarDatosEmpresa(){
		require_once('../app/views/Admin/modificar-datos-empresa.php');
	}
	
	public function modificarDatosAdmin(){
		require_once('../app/models/admin_models.php');
		if (!isset($_SESSION['nick']['id'])) {/*Si el id del administrador no existe, se irá al login por ya que este se asigna al momento de iniciar sesion, por ende se intenta acceder sin iniciar sesion*/
			echo " <script type=\"text/javascript\">window.location=\"?controller=admin&action=login\"</script>";
		}
		$admin = Admin::getById($_SESSION['nick']['id']);//Se le pasa el id del administrador
		foreach ($admin as $ad){
			//var_dump($ad);
			$id = $ad->ida;
			$nick = $ad->nick;
			$clave = $ad->clave;
		}
		require_once('../app/views/Admin/modificar-datos-usuario.php');
	}

	public function updateAdmin(){
		require_once('../app/models/admin_models.php');	
		if (isset($_POST['nick'])) {
			if ($_POST['nick']==NULL) {
				echo "<script>alert('El campo \"Nick\" no debe estar vacío')</script>";
			}else{
				$usuario=Admin::updateNick($_POST['id'],$_POST['nick']);
			}
				
		}elseif (isset($_POST['clave'])) {
			if ($_POST['clave']==NULL) {
				echo "<script>alert('El campo \"Clave\" no debe estar vacío')</script>";
			}else{
				$usuario=Admin::updateClave($_POST['id'],$_POST['clave']);
			}
			
		}
				
		echo "<script type=\"text/javascript\">window.location=\"?controller=admin&action=modificarDatosAdmin\"</script>";
	}
}



?>