<?php  
if(!isset($_SESSION)) session_start();
//$_SESSION['logueado'] = false;

require_once('../app/models/galeria_models.php');
		$contador = 0;//Contador para agregarlo al nombre de la imagen que se guardará ej:imagen_1.jpg;
		$_SESSION['img']=[];//Arreglo para almacenar el nombre de las imagenes.En este caso colocamos los [] para que el arreglo se reinicie al recargar la pág. y no siga agregando sobre los datos.
		$_SESSION['fotos'] = Galeria::listarFotos();
		foreach ($_SESSION['fotos'] as $im){
			$contador+=1;//Cuenta el número de imagen que está en la base de datos
			array_push($_SESSION['img'],$im->img);
		}
		$_SESSION['cotador']=$contador;//LLeva la cuenta de cuantas imagenes hay en la bd


if (isset($_POST['metPost'])) {//Se activa si la variable existe. Solo necesitauna parte del código
	if(!isset($_SESSION)) session_start();
	require_once('routes.php');
	return null;
}

require_once('../app/models/pagina_models.php');
		$datosE = Pagina::datosEmpresa();
		foreach ($datosE as $dat){
		$_SESSION['datosE']=array('id' => $dat->id,
								'nombre' => $dat->nombre,
								'mision' => $dat->mision,
								'vision' => $dat->vision,
								'nosotros' => $dat->nosotros);
		}
		//var_dump($_SESSION['datosE']);
		//var_dump($_SESION);

require_once('../app/models/contacto_models.php');
		$contactos = Contactos::Contactos();
		foreach ($contactos as $con){
			$_SESSION['contactos']=array('id' => $con->id,
									'celular' => $con->celular,
									'whatsapp' => $con->whatsapp,
									'email' => $con->email,
									'emailPqr' => $con->emailPqr,
									'facebook' => $con->facebook,
									'instagram' => $con->instagram);
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Elohimwood S.A.S</title>
	<meta name="description" content="Maderas elohimwood" charset="utf-8"/><!-- meta sirve para que los buscadores encuentren mas rapido informacion de esta pagina. no debe tener mas de 150 caracteres -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="img/logo/logo.ico" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style-admin.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/fuentes/icomoon/style.css">
	<link rel="stylesheet" type="text/css" href="css/fuentes/icomoon-admin/style.css">
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/prefixfree.dynamic-dom.min.js" type="text/javascript"></script>
</head>
<body>
	<div class="loader">
		<div class="spinner-grow text-primary" role="status">
		  <span class="sr-only">Loading...</span>
		</div>
	</div>

		<?php require_once('routes.php'); ?>

	
	<script src="js/popper.min.js"></script>
	<?php  

		//Si la contrasena es erronea, aparecerá un popover(hecho con jquery) con el mensaje
		if (!isset($_SESSION)) session_start();
		if (isset($_SESSION['contra'])) {
			if ($_SESSION['contra']==true) {
				echo "<script type=\"text/javascript\" src=\"js/autofocus.js\"></script>";
			}
		}

	?>
	<script type="text/javascript" src="js/pop.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/validar.js"></script>
	<script type="text/javascript" src="js/tamano-pantalla.js"></script>
	<script type="text/javascript" src="js/header.js"></script>
	<script type="text/javascript" src="js/loader.js"></script>
	<script type="text/javascript" src="js/loadersi.js"></script>
	<!--<script type="text/javascript" src="js/limpiar-barra.js"></script>-->

	

</body>
</html>