<?php  

/**
 * 
 */
class ContactoController
{
	
	function __construct()
	{
		
	}

	public function index(){
		require_once('../app/views/Contactos/index.php');
	}

	public function actualizarContactos(){
		if (isset($_POST['celular'])) {
			if ($_POST['celular']!=NULL) {
				$_SESSION['dato']="celular";
				$dato=Contactos::updateContactos($_POST['idc'],$_POST['celular'],$_SESSION['dato']);
				$_POST['celular']=NULL;
			}else{
				echo "<script>alert('El campo \"Celular\" no debe estar vacío')</script>";
			}

			echo "<script type=\"text/javascript\">window.location=\"?controller=admin&action=actualizarDatosEmpresa\"</script>";
			return null;
		}

		if (isset($_POST['whatsapp'])) {
			if ($_POST['whatsapp']!=NULL) {
				$_SESSION['dato']="whatsapp";
				$dato=Contactos::updateContactos($_POST['idc'],$_POST['whatsapp'],$_SESSION['dato']);
				$_POST['whatsapp']=NULL;
			}else{
				echo "<script>alert('El campo \"Whatsapp\" no debe estar vacío')</script>";
			}

			echo "<script type=\"text/javascript\">window.location=\"?controller=admin&action=actualizarDatosEmpresa\"</script>";
			return null;
		}

		if (isset($_POST['email'])) {
			if ($_POST['email']!=NULL) {
				$_SESSION['dato']="email";
				$dato=Contactos::updateContactos($_POST['idc'],$_POST['email'],$_SESSION['dato']);
				$_POST['email']=NULL;
			}else{
				echo "<script>alert('El campo \"Email\" no debe estar vacío')</script>";
			}

			echo "<script type=\"text/javascript\">window.location=\"?controller=admin&action=actualizarDatosEmpresa\"</script>";
			return null;
		}

		if (isset($_POST['emailPqr'])) {
			if ($_POST['emailPqr']!=NULL) {
				$_SESSION['dato']="emailPqr";
				$dato=Contactos::updateContactos($_POST['idc'],$_POST['emailPqr'],$_SESSION['dato']);
				$_POST['emailPqr']=NULL;
			}else{
				echo "<script>alert('El campo \"Email pqr\" no debe estar vacío')</script>";
			}

			echo "<script type=\"text/javascript\">window.location=\"?controller=admin&action=actualizarDatosEmpresa\"</script>";
			return null;
		}

		if (isset($_POST['facebook'])) {
			if ($_POST['facebook']!=NULL) {
				$_SESSION['dato']="facebook";
				$dato=Contactos::updateContactos($_POST['idc'],$_POST['facebook'],$_SESSION['dato']);
				$_POST['facebook']=NULL;
			}else{
				echo "<script>alert('El campo \"Facebook\" no debe estar vacío')</script>";
			}

			echo "<script type=\"text/javascript\">window.location=\"?controller=admin&action=actualizarDatosEmpresa\"</script>";
			return null;
		}

		if (isset($_POST['instagram'])) {
			if ($_POST['instagram']!=NULL) {
				$_SESSION['dato']="instagram";
				$dato=Contactos::updateContactos($_POST['idc'],$_POST['instagram'],$_SESSION['dato']);
				$_POST['instagram']=NULL;
			}else{
				echo "<script>alert('El campo \"Instagram\" no debe estar vacío')</script>";
			}

			echo "<script type=\"text/javascript\">window.location=\"?controller=admin&action=actualizarDatosEmpresa\"</script>";
			return null;
		}
	}

	public function imagenes(){
		require_once('../app/views/Contactos/modal/cont-img.php');
	}

	public function imagenesM(){
		require_once('../app/views/Contactos/modal/cont-imgM.php');
	}

	public function imagenesP(){
		require_once('../app/views/Contactos/modal/cont-imgP.php');
	}

}

?>