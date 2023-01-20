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

		<div id="bt-mas-menos" class="row ">

			<div class="wrapbotonesagg-delete">

				<a href="" data-toggle="modal" data-target="#aggImg"><div class="border border-primary"><div class="iconmas"><span class="icon-plus"></span></div></div></a>

				<a href="" id="eliminarf"><div class="border border-primary"><div class="iconmenos"><span class="icon-minus"></span></div></div></a>

			</div>
			
		</div>

		<div class="alert alert-primary alert-dismissible fade show none" id="alerta" role="alert">
		  <strong>¡Exito!</strong> Imagen guardada con exito.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>

		<div class="alert alert-danger alert-dismissible fade show none" id="alertall" role="alert">
		  <strong>¡Error!</strong> La imagen no se ha podidio guardar.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>

		<?php  

			if (isset($_SESSION['men'])) {
				if($_SESSION['men']){
					//Linea para borrar la clase none(para desaparecer) y aparezca mensaje de exito u error.
					echo "<script>
						  var elemento = document.getElementById('alerta');
						  elemento.className =elemento.className.replace( /(?:^|\s)none(?!\S)/g , '' )
						</script>";
						$_SESSION['men']=null; //Anulamos la variable para que no vuelva aparecer la alerta
				}else{
					echo "<script>
						  var elementoll = document.getElementById('alertall');
						  elementoll.className =elementoll.className.replace( /(?:^|\s)none(?!\S)/g , '' );
						</script>";
						$_SESSION['men']=null; //Anulamos la variable para que no vuelva aparecer la alerta
				}
			}

		?>

		<div class="row selector">

			<div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6">
				<!-- <select class="custom-select">
				  <option selected>Todas las fotos</option>
				  <?php //foreach ($categ as $dat): ?>
				  <option value="<?php // echo $dat->id; ?>"><?php// echo $dat->nombre; ?></option>
				<?php //endforeach; ?>
				</select> -->
				<nav>
				  <div class="nav nav-tabs" id="nav-tab" role="tablist">
				    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Todas</a>
				    <?php foreach ($categ as $dat): ?>
				    <a class="nav-item nav-link" id="item<?php  echo $dat->id; ?>" data-toggle="tab" href="#nav-<?php  echo $dat->id; ?>" role="tab" aria-controls="nav-profile" aria-selected="false"><?php echo $dat->nombre; ?></a>
				    <?php endforeach; ?>
				  </div>
				</nav>
			</div>
			
		</div>

		<form name="myform" action="?controller=galeria&action=eliminarFoto" method="POST">

			<div class="tab-content" id="nav-tabContent">
				
					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						
						<?php require_once('cargarTodas.php') ?>

					</div>

					<div class="tab-pane fade" id="nav-1" role="tabpanel" aria-labelledby="nav-home-tab">
						<!-- Se cargan las fotos de madera -->
					</div>

					<div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-home-tab">
						<!-- Se cargan las fotos de producto -->
					</div>

			</div>

		</form>

		<?php 
			include_once "modal/modal-img.php";
			include_once "modal/modal-img-m.php";
			include_once "modal/modal-img-p.php";
			include_once "modal/modal-agg-img.php";
			include_once "modal/modal-mod-img.php";
			include_once "modal/modal-mod-img-m.php";
			include_once "modal/modal-mod-img-p.php";
		?>

	</div>

</div>

<hr>
	<?php require_once('../app/views/inc/footer.php'); ?>

<script type="text/javascript" src="js/validar_admin.js"></script>
<script type="text/javascript" src="js/categorias_fotos.js"></script>