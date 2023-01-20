<?php 
	if(!isset($_SESSION)) session_start();
	//var_dump($_SESSION);
	if (isset($_SESSION['logueado'])) {
		if ($_SESSION['logueado'] == false) {
			echo " <script type=\"text/javascript\">window.location=\"?controller=admin&action=login\"</script>";
			echo "No está autorizados";
			die();
		}
	}else{
		echo " <script type=\"text/javascript\">window.location=\"?controller=admin&action=login\"</script>";
		echo "No está autorizado";
		die();
	}

	//var_dump($_SESSION['nick']['id']);

?>

<div id="margin-container" class="container">

	<?php require_once('../app/views/inc/header-admin.php'); ?>

	<div class="wraper-admin">
		<div class="contenedor-admin border bg-light shadow-lg">
			<div class="row mod">
				<div class="col-12 col-sm col-md col-lg">
					<a href="?controller=admin&action=actualizarDatosEmpresa">
						<div class="opcion-admin border">
							<div class="ico-admin"><span class="icon-paste"></span></div>
							<p>Actualizar datos de la empresa</p>
						</div>
					</a>
				</div>
				<div class="col-12 col-sm col-md col-lg">
					<a href="?controller=galeria&action=galeriaFotos">
						<div class="opcion-admin border">
							<div class="ico-admin"><span class="icon-images"></span></div>
							<p>Administrar galería de fotos</p>
						</div>
					</a>
				</div>
				<div class="col-12 col-sm col-md col-lg">
					<a href="?controller=admin&action=modificarDatosAdmin">
						<div class="opcion-admin border">
							<div class="ico-admin"><span class="icon-profile"></span></div>
							<p>Modificar datos de este usuario</p>
						</div>
					</a>
				</div>
			</div>
		</div>
		
	</div>
</div>

<hr>
	<?php require_once('../app/views/inc/footer.php'); ?>