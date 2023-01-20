<?php 
	if(!isset($_SESSION)) session_start();
	//var_dump($_SESSION);
	//var_dump($_SESSION['datosE']);
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

<?php require_once('../app/views/inc/informacionContacto.php'); ?>

<div id="margin-container" class="container">

	<?php require_once('../app/views/inc/header-admin.php'); ?>
<div>
	<div class="row">
		<div class="col-12 col-sm-4 col-md-4 col-lg-4">
			<form class="form-modE needs-validation" novalidate action="?controller=pagina&action=actualizarDatos" method="POST">
				<div class="form-group">
					<input type="hidden" name="idd" value="<?php echo $_SESSION['datosE']['id']; ?>">
					   <label for="exampleFormControlTextarea1">Modificar la misión:</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" name="mision" rows="3" placeholder="<?php echo $_SESSION['datosE']['mision']; ?>"  maxlength="250" required></textarea>
				</div>
				<div class="valid-feedback">				    	
					Looks good!
				</div>
				<div class="invalid-feedback">
			        Ingresa un nombre de usuario
				</div>
				<button type="submit" class="btn btn-primary">Actualizar</button>
			</form>
		</div>

		<div class="col-12 col-sm-4 col-md-4 col-lg-4">
			<form class="form-modE needs-validation" novalidate action="?controller=pagina&action=actualizarDatos" method="POST">
				<div class="form-group">
					<input type="hidden" name="idd" value="<?php echo $_SESSION['datosE']['id']; ?>">
					   <label for="exampleFormControlTextarea1">Modificar la visión:</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" name="vision" rows="3" placeholder="<?php echo $_SESSION['datosE']['vision']; ?>" maxlength="250" required></textarea>
				</div>
				<div class="valid-feedback">				    	
					Looks good!
				</div>
				<div class="invalid-feedback">
			        Ingresa un nombre de usuario
				</div>
				<button type="submit" class="btn btn-primary">Actualizar</button>
			</form>
		</div>

		<div class="col-12 col-sm-4 col-md-4 col-lg-4">
			<form class="form-modE needs-validation" novalidate action="?controller=pagina&action=actualizarDatos" method="POST">
				<div class="form-group">
					<input type="hidden" name="idd" value="<?php echo $_SESSION['datosE']['id']; ?>">
					   <label for="exampleFormControlTextarea1">Modificar nosotros:</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" name="nosotros" rows="3" placeholder="<?php echo $_SESSION['datosE']['nosotros']; ?>" maxlength="250" required></textarea>
				</div>
				<div class="valid-feedback">				    	
					Looks good!
				</div>
				<div class="invalid-feedback">
			        Ingresa un nombre de usuario
				</div>
				<button type="submit" class="btn btn-primary">Actualizar</button>
			</form>
		</div>

		<div class="col-12 col-sm-4 col-md-4 col-lg-4">
			<form class="form-modE needs-validation" novalidate action="?controller=contacto&action=actualizarContactos" method="POST">
			  <div class="form-group">
			  	<input type="hidden" name="idc" value="<?php echo $_SESSION['contactos']['id']; ?>">
			  	<label>Celular</label>
			    	<input type="text" class="form-control" name="celular" placeholder="<?php echo $_SESSION['contactos']['celular']; ?>" pattern="[0-9]*" required>
			    	<div class="valid-feedback">
			    		Muy bien!
					</div>
					<div class="invalid-feedback">
			        	Este campo no debe contener caracteres (+/-_.,)
					</div>
			  </div>
			  <button type="submit" class="btn btn-primary">Actualizar</button>
			</form>
		</div>

		<div class="col-12 col-sm-4 col-md-4 col-lg-4">
			<form class="form-modE needs-validation" novalidate action="?controller=contacto&action=actualizarContactos" method="POST">
			  <div class="form-group">
			  	<input type="hidden" name="idc" value="<?php echo $_SESSION['contactos']['id']; ?>">
			  	<label>Whatsapp</label>
			    	<input type="text" class="form-control" name="whatsapp" placeholder="<?php echo $_SESSION['contactos']['whatsapp']; ?>" pattern="[0-9]*" required>
			    	<div class="valid-feedback">
			    		Muy bien!
					</div>
					<div class="invalid-feedback">
			        	Este campo no debe contener caracteres (+/-_.,)
					</div>
			  </div>
			  <button type="submit" class="btn btn-primary">Actualizar</button>
			</form>
		</div>

		<div class="col-12 col-sm-4 col-md-4 col-lg-4">
			<form class="form-modE needs-validation" novalidate action="?controller=contacto&action=actualizarContactos" method="POST">
			  <div class="form-group">
			  	<input type="hidden" name="idc" value="<?php echo $_SESSION['contactos']['id']; ?>">
			  	<label>Email</label>
			    	<input type="email" class="form-control" name="email" placeholder="<?php echo $_SESSION['contactos']['email']; ?>" required>
			    	<div class="valid-feedback">
			    		Muy bien!
					</div>
					<div class="invalid-feedback">
			        	Ingrese un correo valido. Ej: ejemplo123@example.com
					</div>
			  </div>
			  <button type="submit" class="btn btn-primary">Actualizar</button>
			</form>
		</div>

		<div class="col-12 col-sm-4 col-md-4 col-lg-4">
			<form class="form-modE needs-validation" novalidate action="?controller=contacto&action=actualizarContactos" method="POST">
			  <div class="form-group">
			  	<input type="hidden" name="idc" value="<?php echo $_SESSION['contactos']['id']; ?>">
			  	<label>Email pqr</label>
			    	<input type="email" class="form-control" name="emailPqr" placeholder="<?php echo $_SESSION['contactos']['emailPqr']; ?>" required>
			    	<div class="valid-feedback">
			    		Muy bien!
					</div>
					<div class="invalid-feedback">
			        	Ingrese un correo valido. Ej: ejemplo123@example.com
					</div>
			  </div>
			  <button type="submit" class="btn btn-primary">Actualizar</button>
			</form>
		</div>

		<div class="col-12 col-sm-4 col-md-4 col-lg-4">
			<form class="form-modE needs-validation" novalidate action="?controller=contacto&action=actualizarContactos" method="POST">
			  <div class="form-group">
			  	<input type="hidden" name="idc" value="<?php echo $_SESSION['contactos']['id']; ?>">
			  	<label>Facebook</label>
			      <input type="text" class="form-control" name="facebook" placeholder="<?php echo $_SESSION['contactos']['facebook']; ?>" required>
			  </div>
			  <div class="valid-feedback">				    	
					Looks good!
				</div>
				<div class="invalid-feedback">
			        Ingresa un nombre de usuario
				</div>
			  <button type="submit" class="btn btn-primary">Actualizar</button>
			</form>
		</div>

		<div class="col-12 col-sm-4 col-md-4 col-lg-4">
			<form class="form-modE needs-validation" novalidate action="?controller=contacto&action=actualizarContactos" method="POST">
			  <div class="form-group">
			  	<input type="hidden" name="idc" value="<?php echo $_SESSION['contactos']['id']; ?>">
			  	<label>Instagram</label>
			      <input type="text" class="form-control" name="instagram" placeholder="<?php echo $_SESSION['contactos']['instagram']; ?>" required>
			  </div>
			  <div class="valid-feedback">				    	
					Looks good!
				</div>
				<div class="invalid-feedback">
			        Ingresa un nombre de usuario
				</div>
			  <button type="submit" class="btn btn-primary">Actualizar</button>
			</form>
		</div>
	</div>
</div>
<hr>
	<?php require_once('../app/views/inc/footer.php'); ?>

</div>