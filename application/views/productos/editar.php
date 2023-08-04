<script type="text/javascript">
  $("#menu-productos").addClass('active');
</script>

<div class="container">
  <center>
    <h3><b>Actualizar Producto</b></h3>
  </center>
  <br>
  <form class=""
  action="<?php echo site_url('productos/actualizarProducto'); ?>"
  method="post">

    <input type="hidden" name="id_pro" value="<?php echo $producto->id_pro; ?>">
    
    <b>Categoría:</b> <br>
    <select class="form-control" name="fk_id_cat"
    id="fk_id_cat" required data-live-search="true">
        <option value="">--Seleccione la Categoría--</option>
        <?php if ($listadoCategorias): ?>
            <?php foreach ($listadoCategorias->result()
            as $categoriaTemporal): ?>
              <option value="<?php echo $categoriaTemporal->id_cat; ?>">
                <?php echo $categoriaTemporal->nom_cat; ?>
                |
                <?php echo $categoriaTemporal->descripcion_cat; ?>
              </option>
            <?php endforeach; ?>
        <?php endif; ?>
    </select>
    <br>
    <b>Código:</b>
    <input class="form-control"
    type="number" name="codigo_pro" id="codigo_pro" value="">
    <br>
    <b>Nombre:</b>
    <input class="form-control"
    type="text" name="nombre_pro" id="nombre_pro" value="">
    <br>
    <b>Precio:</b>
    <input class="form-control"
    type="number" name="precio_pro" id="precio_pro" value="">
    <br>
    <b>Stock:</b>
    <input class="form-control"
    type="number" name="stock_pro" id="stock_pro" value="">
    <br>
    <b>Stock:</b>
    <input class="form-control"
    type="number" name="stock_pro" id="stock_pro" value="">
    <br>
    <button type="submit" name="button" class="btn btn-success">
      Guardar
    </button>
    <a href="<?php echo site_url('productos/index'); ?>"
      class="btn btn-danger">
      Cancelar
    </a>
  </form>

</div>

<script type="text/javascript">
   $('#fk_id_cat').
   val("<?php echo $producto->fk_id_cat; ?>");
   $('#fk_id_cat').selectpicker();
</script>



<!--  -->
