			<?php foreach ($_SESSION['fotos'] as $im): ?>
			<?php if($im->tipo==2): ?>
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
			<?php endif; ?>
			<?php endforeach; ?>