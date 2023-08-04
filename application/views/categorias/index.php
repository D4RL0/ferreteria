<legend class="text-center">
  <i class="glyphicon glyphicon-user"></i>GESTION DE CATEGORÍAS</legend>
  <hr>
  <center>
    <a href="<?php echo site_url('categorias/nuevo'); ?>"
      class="btn btn-success">
      <i class="glyphicon glyphicon-plus"></i>
      Agregar Nuevo
    </a>
  </center>
  <br>
  <br>
  <?php if ($listadoCategorias): ?>
    <table id="tbl-categorias" class="table table-striped table-border table-hover">
      <thead>
        <tr>
          <th class="text-center">ID</th>
          <th class="text-center">NOMBRE</th>
          <th class="text-center">DESCRIPCIÓN</th>
          <th class="text-center">ACCIONES</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach ($listadoCategorias->result()
           as $categoriaTemporal): ?>
             <tr>
                <td class="text-center">
                    <?php echo $categoriaTemporal->id_cat; ?>
                </td>
                <td class="text-center">
                  <?php echo $categoriaTemporal->nom_cat; ?>
                </td>
                <td class="text-center">
                  <?php echo $categoriaTemporal->descripcion_cat; ?>
                </td>
                <td class="text-center">
                <?php if ($this->session->userdata('conectad0')->perfil_usu=="ADMINISTRADOR"): ?>
                    <a href="<?php echo site_url('categorias/actualizar'); ?>/<?php echo $categoriaTemporal->id_cat; ?>" class="btn btn-warning">
                      <i class="glyphicon glyphicon-edit"></i>
                      Editar <!--Amarillo - Lapiz -->
                    </a>
                    <?php endif; ?>
                    <?php if ($this->session->userdata('conectad0')->perfil_usu=="ADMINISTRADOR"): ?>
                    <a href="<?php echo site_url('categorias/borrar'); ?>/<?php echo $categoriaTemporal->id_cat; ?>" class="btn btn-danger">
                      <i class="glyphicon glyphicon-trash"></i>
                      Eliminar <!--Amarillo - Basurero -->
                    </a>
                    <?php endif; ?>
                </td>
             </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
  <?php else: ?>
    <h3><b>No existen categorias</b></h3>
  <?php endif; ?>

<script type="text/javascript">
  $("#tbl-categorias").DataTable();
</script>

<style media="screen">
  .dataTables_filter label input{
    border:3px solid red !important;
  }
</style>















  <!--  -->
