	<!-- Información de contacto -->
	
	<div class="inf">
		<div class="cont-i">
			<div class="inf-t"><span class="ico icon-whatsapp1"></span><p><?php echo $_SESSION['contactos']['whatsapp']; ?></p></div>
			<div class="inf-t"><span class="ico icon-campaignmonitor"></span><p><?php echo $_SESSION['contactos']['email']; ?></p></div>
			<div class="inf-t"><span class="ico icon-campaignmonitor"></span><p><?php echo $_SESSION['contactos']['emailPqr']; ?></p></div>
		</div>
			<!-- ICONOS DE REDES -->
			<div class="cont-redes">
				<div class="redes"><a href="<?php echo $_SESSION["contactos"]["facebook"]; ?>" target="_blank" ><img src="css/fuentes/svg/002-facebook.svg"></a></div>
				<div class="redes"><a href="<?php echo $_SESSION["contactos"]["instagram"]; ?>" target="_blank" ><img src="css/fuentes/svg/003-instagram.svg"></span></a></div>
			</div>
	</div>