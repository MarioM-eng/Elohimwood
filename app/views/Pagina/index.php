<?php require_once('../app/views/inc/informacionContacto.php'); ?>
<?php require_once('../app/views/inc/header.php'); ?>
<?php require_once('../app/views/Pagina/carrousel.php'); ?>

<div class="container">


<!--contenido principal y secundario de la página-->
	<section class="wrapper"><!--etiqueta sección con una clase llamada wrapper o contenedor-->
		<br>
		<hr>
		<div class="main margen"><!--indica que va el contenido principal-->
			<div class="row">
				<div class="barra">
					<img src="img/barra.jpg">
				</div>
			</div>

		</div>
		<section class="margen">
			<div class="row">
			<?php $sum=0; foreach ($_SESSION['fotos'] as $im): ?>
				<?php if($im->tipo == 1): ?>
					<?php $sum+=1; ?>
				<div class="col-6 col-sm-4 col-md-3 col-lg-3 espa-card">
					<article>
						<div class="card" >
						  <a href="#" data-toggle="modal" data-target="#imgs<?php echo $im->id; ?>">
						  	<img src="img/<?php echo $im->img; ?>" class="card-img-top" alt="Imagen" width="230px" height="230px">
						  </a>
						  <div class="card-body">
						    <p class="card-text ellipsis">

						    	<?php 

						    		echo $retVal = ($im->descripcion == "") ? $im->tipoNom : $im->descripcion ;

						    	?>
						    	
						    </p>
						  </div>
						</div>
					</article>
				</div>
				<?php if($sum==4) break ; ?>
				<?php endif; ?>
			<?php endforeach; ?>
			</div>

			<div class="row">
			<?php $sum=0; foreach ($_SESSION['fotos'] as $im): ?>
				<?php if($im->tipo == 2): ?>
					<?php $sum+=1; ?>
				<div class="col-6 col-sm-4 col-md-3 col-lg-3 espa-card">
					<article>
						<div class="card" >
						  <a href="#" data-toggle="modal" data-target="#imgs<?php echo $im->id; ?>">
						  	<img src="img/<?php echo $im->img; ?>" class="card-img-top" alt="Imagen" width="230px" height="230px">
						  </a>
						  <div class="card-body">
						    <p class="card-text ellipsis">

						    	<?php 

						    		echo $retVal = ($im->descripcion == "") ? $im->tipoNom : $im->descripcion ;

						    	?>
						    	
						    </p>
						  </div>
						</div>
					</article>
				</div>
				<?php if($sum==4) break ; ?>
				<?php endif; ?>
			<?php endforeach; ?>
			</div>
			<a href="?controller=contacto&action=index&dato=img" type="button" class="btn btn-secondary">Ver más...</a>
		</section>

		<aside class="contact"><!--aquí va el contenido secundario- contenido que no es importante para el buscador. aqui suele ir imagenes, publicidad, etc-->

			<div class="row">
				<div class="col-2 col-sm-1 col-md-1 col-lg-1 espa icono"><img src="css/fuentes/svg/009-directorio-telefonico.svg"></div>
				<div class="col-9 col-sm-3 col-md-3 col-lg-3 espa"><p>Contacto: <?php echo $_SESSION['contactos']['celular']."<br>".$_SESSION['contactos']['email']; ?></p></div>
				<div class="col-2 col-sm-1 col-md-1 col-lg-1 espa icono"><img src="css/fuentes/svg/005-mapas-y-banderas.svg"></div>
				<div class="col-9 col-sm-3 col-md-3 col-lg-3 espa"><p>Dirección: CR 11B #11-38 Chinú-Córdoba, Colombia</p></div>
				<div class="col-2 col-sm-1 col-md-1 col-lg-1 espa icono"><img src="css/fuentes/svg/007-marcar.svg"></div>
				<div class="col-9 col-sm-3 col-md-3 col-lg-3 espa"><p>Servicio al cliente: Peticiones, quejas, reclamos o recomendaciones comuníquese a: <i><?php echo $_SESSION['contactos']['emailPqr']; ?></i></p></div>
			</div>

		</aside>

	</section>

	<?php 
		include_once "modal/modal-img-m.php";
		include_once "modal/modal-img-p.php";
	?>

		<hr>
	<?php require_once('../app/views/inc/footer.php'); ?>

</div>