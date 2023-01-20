<?php $sum=0; foreach ($_SESSION['fotos'] as $im): if($im->tipo==1): //Para saber cuantas veces debe crearse un modal con igual "ID" que el boton que los llama?>
<!-- Modal -->
<div class="modal fade" id="modImg-m<?php echo $sum+=1 ?>" tabindex="-1" role="dialog" aria-labelledby="..." aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modificar datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
        	<form class="form-modE" novalidate action="?controller=galeria&action=modificarFoto&idI=<?php echo $im->id; ?>" method="POST">
	            <div class="col- col-sm col-md col-lg">
	              <div class="form-group">
	                   <label for="Textarea<?php echo $sum; ?>">Descripción</label>
	                <textarea class="form-control" id="Textarea<?php echo $sum; ?>" name="descd" rows="3" maxlength="250"></textarea>
	                <div class="valid-feedback">
					 Looks good!
					</div>
					<div class="invalid-feedback">
				      Ingresa este campo no puede estar vacío.
				    </div>
	              </div>
	              <button type="submit" class="btn btn-primary">Actualizar</button>
	            </div>
            </form><br>

			<form name="formModSelect" class="form-modE needs-validation" novalidate action="?controller=galeria&action=modificarFoto&idI=<?php echo $im->id; ?>" method="POST">
	            <div class="col- col-sm col-md col-lg">
	            	<div class="form-group">
		              <select class="custom-select select" name='cated'>
		                <option selected>Selecioner categoría</option>
		                  <?php foreach ($categ as $dat): ?>
		                    <option value="<?php  echo $dat->id; ?>"><?php echo $dat->nombre; ?></option>
		                  <?php endforeach;?>
		              </select>
	          		</div>
	              <button class="btn btn-primary modSelect">Actualizar</button>
	            </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
  </div>
</div>
<?php endif; endforeach; ?>