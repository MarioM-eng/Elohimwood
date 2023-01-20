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

?>

<div id="margin-container" class="container">

	<?php require_once('../app/views/inc/header-admin.php'); ?>

<div class="wraper-admin">
	<div class="contenedor-admin border bg-light shadow-lg">
		
		<form>
			<div class="form-group row">
				<div class="col-12 col-sm-2 col-md-1 col-lg-1">
					<label for="id">Nick: </label>
				</div>
				<div class="col-8 col-sm col-md col-lg-6">
					<p id="id"><?php echo $nick; ?></p>
				</div>
				<div class="col-2 col-sm col-md col-lg-3">
					<a data-toggle="modal" data-target="#id-admin" class="btn btn-primary"><span class="icon-pencil"></span></a>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-12 col-sm-2 col-md-1 col-lg-1">
					<label for="clave" >Clave: </label>
				</div>
				<div class="col-8 col-sm col-md col-lg-6 inp-cls">
					<input type="password" id="clave" class="form-control clave" name="" <?php echo "value=\"$clave\""; ?> disabled>
					<a id="ver" class="ver" href=""><span class="icon-eye"></span></a>
				</div>
				<div class="col-2 col-sm col-md col-lg-3">
					<a data-toggle="modal" data-target="#clave-admin" class="btn btn-primary"><span class="icon-pencil"></span></a>
				</div>
			</div>
		</form>
		<?php 
			include_once "modal/modal.php";
		?>

	</div>
</div>
</div>
<hr>
	<?php require_once('../app/views/inc/footer.php'); ?>

<script type="text/javascript" src="js/mostrar-contra.js"></script>
