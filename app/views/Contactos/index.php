<?php 
if (isset($_GET['dato'])) {
 	switch ($_GET['dato']) {//Según almacenado en la variable GET, se mostrará un texto en el Jumbotron
 	 	case 'mision':
 	 		$titulo = "Misión";
 	 		$contenido = $_SESSION['datosE']['mision'];
 	 		unset($_GET['dato']);
 	 		break;
 	 	case 'vision':
 	 		$titulo = "Visión";
 	 		$contenido = $_SESSION['datosE']['vision'];
 	 		unset($_GET['dato']);
 	 		break;
 	 	case 'nosotros':
 	 		$titulo = "Nosotros";
 	 		$contenido = $_SESSION['datosE']['nosotros'];
 	 		unset($_GET['dato']);
 	 		break;
 	 	case 'contacto':
 	 		$titulo = "Contactos";
 	 		$contenido = $_SESSION['datosE']['nombre'];
 	 		unset($_GET['dato']);
 	 		break;
 	 	case 'img':
 	 		$titulo = "Galería";
 	 		$contenido = $_SESSION['datosE']['nombre'];
 	 		break;
 	 	case 'imgM':
 	 		$titulo = "Galería";
 	 		$contenido =$_SESSION['datosE']['nombre']."/Galería/Maderas";
 	 		break;
 	 	case 'imgP':
 	 		$titulo = "Galería";
 	 		$contenido = $_SESSION['datosE']['nombre']."/Galería/Productos";
 	 		break;
 	 } }else{
 	echo "No existe";
 } 
?>

<?php require_once('../app/views/inc/informacionContacto.php'); ?>
<?php require_once('../app/views/inc/header.php'); ?>

<div id="margin-container" class="container">
	<section class="contactenos">

		<div class="row" id="jumbo">
			<div class="jumbotron jumbotron-fluid">
			  <div class="container">
			    <h1 class="display-4"><?php echo $titulo ?></h1>
			    <p class="lead"><?php echo $contenido ?></p>
			  </div>
			</div>
		</div>
		
		<section class="imagenesGal">
			<div class="row deshabilitar" id="galeriaImgIndex">
				
			</div>
		</section>

			<?php require_once('modal/modal-img.php'); ?>


		<h2>Contáctenos</h2>
		
		<div class="row infoCont">
			<div class="col-12 col-sm col-md col-lg col-xl">
				<article>
					
					<div class="rel over">
						<div class="contact-ico btn-primary">
							<span class="icon-office"></span>
						</div>
						<div class="sombra"></div>
						<div class="abso">
							<p>Dirección: CR 11B #11-38 Chinú-Córdoba, Colombia</p>
						</div>
					</div>

					<div class="rel over">
						<div class="contact-ico btn-primary">
							<span class="icon-mail4"></span>
						</div>
						<div class="sombra"></div>
						<div class="abso">
							<p><?php echo $_SESSION['contactos']['email'] ?></p>
						</div>
					</div>

					<div class="rel over">
						<div class="contact-ico btn-primary">
							<span class="icon-whatsapp"></span>
						</div>
						<div class="sombra"></div>
						<div class="abso">
							<p><?php echo $_SESSION['contactos']['whatsapp'] ?></p>
						</div>
					</div>

					<div class="rel over">
						<div class="contact-ico btn-primary">
							<span class="icon-facebook2"></span>
						</div>
						<div class="sombra"></div>
						<div class="abso">
							<a href="<?php echo $_SESSION["contactos"]["facebook"]; ?>">Facebook</a>
						</div>
					</div>

					<div class="rel over">
						<div class="contact-ico btn-primary">
							<span class="icon-instagram"></span>
						</div>
						<div class="sombra"></div>
						<div class="abso">
							<a href="<?php echo $_SESSION["contactos"]["instagram"]; ?>">Instagram</a>
						</div>
					</div>

					
				</article>
			</div>

			<div class="col col-sm-6 col-md col-lg-6 col-xl-6">
				<article>

					<img src="img/direccion.png" width="100%">
					
				</article>
			</div>
		</div>

		<div class="row">
			<div class="col col-sm col-md col-lg">
				<article class="datosE">
					<div id="misioncon">
						<div class="card" style="width: 18rem;">
						  <div class="card-body">
						    <h5 class="card-title">Mision</h5>
						    <h6 class="card-subtitle mb-2 text-muted">ElohimWood</h6>
						    <p class="card-text"><?php echo $_SESSION['datosE']['mision']; ?></p>
						  </div>
						</div>
					</div>
				</article>
			</div>

			<div class="col col-sm col-md col-lg">
				<article class="datosE">
					<div id="visioncon">
						<div class="card" style="width: 18rem;">
						  <div class="card-body">
						    <h5 class="card-title">Vision</h5>
						    <h6 class="card-subtitle mb-2 text-muted">ElohimWood</h6>
						    <p class="card-text"><?php echo $_SESSION['datosE']['vision']; ?></p>
						  </div>
						</div>
					</div>
				</article>
			</div>

			<div class="col col-sm col-md col-lg">
				<article class="datosE">
					<div id="nosotroscon">
						<div class="card" style="width: 18rem;">
						  <div class="card-body">
						    <h5 class="card-title">Nosotros</h5>
						    <h6 class="card-subtitle mb-2 text-muted">ElohimWood</h6>
						    <p class="card-text"><?php echo $_SESSION['datosE']['nosotros']; ?></p>
						  </div>
						</div>
					</div>
				</article>
			</div>
				
		</div>
		
	</section>

</div>
<hr>
	<?php require_once('../app/views/inc/footer.php'); ?>

	<script>
		var habilitarImgs = function(){
			var elemento = document.getElementById('galeriaImgIndex');
			elemento.className=('row');
		}

		var imgFun = function(){//Función para mostrar toda la galería
		        $.post("?controller=contacto&action=imagenes", {}, function(htmlexterno){$("#galeriaImgIndex").html(htmlexterno);
		    	});
		};
		var imgMFun = function(){//Función para mostrar solo las fotos de maderas
		        $.post("?controller=contacto&action=imagenesM", {metPost: "activo"}, function(htmlexterno){$("#galeriaImgIndex").html(htmlexterno);//Se envia una variable por post para que con una condicion solo traida lo necesario(Las fotos).
		    	});
		};
		var imgPFun = function(){//Función para mostrar solo las fotos de productos
		        $.post("?controller=contacto&action=imagenesP", {metPost: "activo"}, function(htmlexterno){$("#galeriaImgIndex").html(htmlexterno);
		    	});
		};
	</script>

<?php  

	if (isset($_GET['dato'])) {
		switch ($_GET['dato']) {//Según el dato que esté en la variable GET, se mostrará una galería de fotos
			case 'img':
				echo "<script>habilitarImgs()</script>";
				echo "<script>imgFun()</script>";
				break;
			case 'imgM':
				echo "<script>habilitarImgs()</script>";
				echo "<script>imgMFun()</script>";
				break;
			case 'imgP':
				echo "<script>habilitarImgs()</script>";
				echo "<script>imgPFun()</script>";
				break;
		}
	}

?>