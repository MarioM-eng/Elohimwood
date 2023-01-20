		<div class="row">
			<?php $sum=0; foreach ($_SESSION['fotos'] as $im):?>
			<?php if($im->tipo==2): ?>
				<div class="col-6 col-sm-4 col-md-3 col-lg-3 espa-card">
					<article>
						<div class="card" >
							<a href="#" data-toggle="modal" data-target="#imgsp<?php echo $sum+=1 ?>"> 
						  		<img src="img/<?php echo $im->img; ?>" class="card-img-top" alt="Imagen" width="230px" height="230px">
							</a>
							<div class="card-body">
								<a href="" data-toggle="modal" data-target="#modImg-p<?php echo $sum ?>"><div class="border border-primary"><div class="iconmod"><span class="icon-pencil"></span></div></div></a>
								<div class="custom-control custom-checkbox">
								  <input type="checkbox" class="custom-control-input check" id="customCheckp<?php echo $sum; ?>" name="ids[]" value="<?php echo $im->id; ?>">
								  <label class="custom-control-label" for="customCheckp<?php echo $sum; ?>">Seleccionar</label>
								</div>
								<p class="card-text ellipsis catImg"><?php echo $im->descripcion; ?></p>
								<p class="card-text "><?php echo $im->tipo.'-'.$im->tipoNom; ?></p>
							</div>
						</div>
					</article>
				</div>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>