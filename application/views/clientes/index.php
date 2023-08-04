<legend class="text-center">
  <i class="glyphicon glyphicon-user"></i>GESTIÓN DE CLIENTES</legend>
  <hr>
  <center>
    <a href="<?php echo site_url('clientes/nuevo'); ?>"
      class="btn btn-success">
      <i class="glyphicon glyphicon-plus"></i>
      Agregar Nuevo
    </a>
  </center>
  <br>
  <br>
  <?php if ($listadoClientes): ?>
    <table id="tbl-clientes" class="table table-striped table-border table-hover">
      <thead>
        <tr>
          <th class="text-center">ID</th>
          <th class="text-center">CÉDULA</th>
          <th class="text-center">APELLIDO</th>
          <th class="text-center">NOMBRE</th>
          <th class="text-center">TELÉFONO</th>
          <th class="text-center">DIRECCIÓN</th>
          <th class="text-center">EMAIL</th>
          <th class="text-center">ACCIONES</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach ($listadoClientes->result()
           as $clienteTemporal): ?>
             <tr>
                <td class="text-center">
                    <?php echo $clienteTemporal->id_cli; ?>
                </td>
                <td class="text-center">
                  <?php echo $clienteTemporal->cedula_cli; ?>
                </td>
                <td class="text-center">
                  <?php echo $clienteTemporal->apellido_cli; ?>
                </td>
                <td class="text-center">
                    <?php echo $clienteTemporal->nombre_cli; ?>
                </td>
                <td class="text-center">
                  <?php echo $clienteTemporal->telefono_cli; ?>
                </td>
                <td class="text-center">
                  <?php echo $clienteTemporal->direccion_cli; ?>
                </td>
                <td class="text-center">
                  <?php echo $clienteTemporal->email_cli; ?>
                </td>
                <td class="text-center">
                    <a href="<?php echo site_url('clientes/actualizar'); ?>/<?php echo $clienteTemporal->id_cli; ?>" class="btn btn-warning">
                      <i class="glyphicon glyphicon-edit"></i>
                      Editar <!--Amarillo - Lapiz -->
                    </a>
                    <?php if ($this->session->userdata('conectad0')->perfil_usu=="ADMINISTRADOR"): ?>
                    <a href="<?php echo site_url('clientes/borrar'); ?>/<?php echo $clienteTemporal->id_cli; ?>" class="btn btn-danger">
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
    <h3><b>No existen clientes</b></h3>
  <?php endif; ?>

<script type="text/javascript">
  $("#tbl-clientes").DataTable();
</script>

<style media="screen">
  .dataTables_filter label input{
    border:3px solid red !important;
  }
</style>















  <!--  -->
