<?php if (isset($_GET['user'])) echo $_GET['user'];?>
		<div class="row p-4" style="background-color: white;">
		<div class="col-12 col-sm-12 col-md-12- col-lg-12" style="padding: 1px;">
			<div class="login">
				<article class="fondo shadow border">
				  <img src="img/user.png">
					<form class="needs-validation" novalidate action="?controller=admin&action=loginSesion" method="POST">
					  <div class="form-group">
					    <label for="nick">Nick</label>
					    <input type="text" id="adm" class="form-control" id="nick" aria-describedby="emailHelp" placeholder="Ingresa identificador" name="nick" value="<?php if (isset($_GET['user'])) echo $_GET['user'];?>" required>
					    <div class="valid-feedback">
					    	Looks good!
					    </div>
					    <div class="invalid-feedback">
				          Ingresa un nombre de usuario
				        </div>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Contrase&#241;a</label>
					    <input type="password" id="contra" class="form-control" placeholder="Contrase&#241;a" name="clave" data-toggle="popover" data-placement="bottom" title="Contraseña" data-trigger="manual" data-content="Contraseña incorrecta" required>
					    <div class="valid-feedback">
					    	Looks good!
					    </div>
					    <div class="invalid-feedback">
				          Ingresa una contraseña.
				        </div>
					  </div>
					  <button class="btn btn-primary">Ingresar</button>
					</form>
						<div class="olv">
							<a href="olvidasteContra.php"> &#191;Olvidaste la contrase&#241;a?</a>
						</div>
				</article>
			</div>
		</div>
		</div>
