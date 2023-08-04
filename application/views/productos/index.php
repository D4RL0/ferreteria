<script type="text/javascript">
  $("#menu-productos").addClass('active');
</script>

<br>
<center>
  <h1><b>LISTADO DE PRODUCTOS</b></h1>
  <br>
  <a href="<?php echo site_url('productos/nueva'); ?>"
    class="btn btn-primary">
    Agregar Producto
  </a>
</center>
<br>
<table class="table table-bordered
table-striped table-hover">
  <thead>
    <tr>
      <th class="text-center">ID</th>
      <th class="text-center">CÓDIGO</th>
      <th class="text-center">CATEGORÍA</th>
      <th class="text-center">NOMBRE</th>
      <th class="text-center">PRECIO</th>
      <th class="text-center">STOCK</th>
      <th class="text-center">FOTO</th>
      <th class="text-center">ACCIONES</th>
    </tr>
  </thead>
  <tbody>
      <?php if ($listadoProductos): ?>
          <?php foreach ($listadoProductos->result() as $producto): ?>
            <tr>
                <td class="text-center">
                  <?php echo $producto->id_pro; ?>
                </td>
                <td class="text-center">
                  <?php echo $producto->codigo_pro; ?>
                </td>
                <td class="text-center">
                  <?php echo $producto->nom_cat; ?>
                </td>
                <td class="text-center">
                  <?php echo $producto->nombre_pro; ?>
                </td>
                <td class="text-center">
                  <?php echo $producto->precio_pro; ?>
                </td>
                <td class="text-center">
                  <?php echo $producto->stock_pro; ?>
                </td>
                <td class="text-center">
                  <?php if ($producto->foto_pro!=""): ?>
                    <a href="<?php echo base_url('uploads/productos').'/'.$producto->foto_pro; ?>"
                      target="_blank">
                      <img src="<?php echo base_url('uploads/productos').'/'.$producto->foto_pro; ?>"
                      width="50px" height="50px"
                      alt="">
                    </a>
                  <?php else: ?>
                    N/A
                  <?php endif; ?>
                </td>
                <td class="text-center">
                <?php if ($this->session->userdata('conectad0')->perfil_usu=="ADMINISTRADOR"): ?>
                    <a href="<?php echo site_url('productos/editar').'/'.$producto->id_pro; ?>" class="btn btn-warning">
                      <i class="glyphicon glyphicon-edit"></i>
                      Editar
                    </a>
                    <?php endif; ?>
                    <?php if ($this->session->userdata('conectad0')->perfil_usu=="ADMINISTRADOR"): ?>
                    <a href="<?php echo site_url('productos/borrar'); ?>/<?php echo $producto->id_pro; ?>" class="btn btn-danger">
                      <i class="glyphicon glyphicon-trash"></i>
                      Eliminar
                    </a>
                    <?php endif; ?>
                </td>
            </tr>
          <?php endforeach; ?>
      <?php endif; ?>
  </tbody>
</table>
