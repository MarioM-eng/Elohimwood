
<!-- Modal -->
<div class="modal fade" id="aggImg" tabindex="-1" role="dialog" aria-labelledby="..." aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Agregar una foto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form-modE" action="?controller=galeria&action=agregarFoto" enctype="multipart/form-data" method="POST">
        <div class="modal-body">
            <div class="col- col-sm col-md col-lg">
              <div class="custom-file">
                <input type="file" class="custom-file-input"name="imagen" id="customFileLang" lang="es">
                <label class="custom-file-label" for="customFileLang" id="fileName">Seleccionar Archivo</label>
              </div>
              <div class="form-group">
                   <label for="exampleFormControlTextarea1">Descripción</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3" maxlength="250"></textarea>
              </div>
            </div><br>

            <div class="col- col-sm col-md col-lg">
              <select class="custom-select" id="agg-img.select" name='cate'>
                <option selected>Selecioner categoría</option>
                  <?php foreach ($categ as $dat): ?>
                    <option value="<?php  echo $dat->id; ?>"><?php echo $dat->nombre; ?></option>
                  <?php endforeach;?>
              </select>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" id="img-agg-button" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>