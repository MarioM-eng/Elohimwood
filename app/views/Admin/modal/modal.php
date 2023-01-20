<!-- Modal -->
<div class="modal fade" id="id-admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLongTitle">Administrador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate action="?controller=admin&action=updateAdmin" method="POST">
          <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $_SESSION['nick']['id']; ?>">
            <label for="id-ad">Nuevo nick</label><input type="text" name="nick" class="form-control" required>
            <div class="valid-feedback">              
              Looks good!
            </div>
            <div class="invalid-feedback">
                  Ingresa un nombre de usuario
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="clave-admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLongTitle">Contraseña</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate action="?controller=admin&action=updateAdmin" method="POST">
          <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $_SESSION['nick']['id']; ?>">
            <label for="id-ad">Nueva contraseña:</label><input type="password" id="clave" name="clave" class="form-control clave" required>
            <div class="valid-feedback">              
              Looks good!
            </div>
            <div class="invalid-feedback">
                  Ingresa una contraseña
            </div>
            <a id="ver-modal" href=""><span class="icon-eye"></span></a>
          </div>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>