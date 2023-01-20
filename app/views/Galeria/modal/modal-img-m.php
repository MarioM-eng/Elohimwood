<?php $sum=0; foreach ($_SESSION['fotos'] as $im): if($im->tipo==1): ?>
<!-- Modal -->
<div class="modal fade" id="imgsm<?php echo $sum+=1 ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLongTitle">Imagen <?php echo $sum; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="img/<?php echo $im->img; ?>" class="card-img-top" alt="Imagen">
        <hr>
        <p class="limite-p"><?php echo $im->descripcion; ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php endif; endforeach; ?>