<div class="row">
  <div class="col-md-12 text-center well">
      <h3>ACTUALIZAR CATEGORÍA</h3>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <?php if ($categoriaEditar): ?>
        <!-- <?php print_r($categoriaEditar); ?> -->
        <form class="" action="<?php echo site_url('categorias/procesarActualizacion'); ?>" method="post">
            <center>
              <input type="hidden" name="id_cat"
              value="<?php echo $categoriaEditar->id_cat; ?>">
            </center>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">NOMBRE:</label>
              </div>
              <div class="col-md-7">
                <input type="text" name="nom_cat"
                value="<?php echo $categoriaEditar->nom_cat; ?>"
                class="form-control"
                placeholder="Ingrese el nombre de la categoría" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">DESCRIPCIÓN:</label>
              </div>
              <div class="col-md-7">
                <input type="text" name="descripcion_cat"
                value="<?php echo $categoriaEditar->descripcion_cat; ?>"
                class="form-control"
                placeholder="Ingrese una descripción de la categía" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-7">
                  <button type="submit" name="button"
                          class="btn btn-warning">
                     <i class="glyphicon glyphicon-ok"></i>
                     Actualizar
                  </button>
                  <a href="<?php echo site_url('categorias/index'); ?>"
                    class="btn btn-danger">
                    <i class="glyphicon glyphicon-remove"></i>
                    Cancelar
                  </a>
              </div>
            </div>
        </form>

    <?php else: ?>
        <div class="alert alert-danger">
            <b>No se encontro la categoría :(</b>
        </div>
    <?php endif; ?>
  </div>
</div>
