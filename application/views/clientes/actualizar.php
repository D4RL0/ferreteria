<div class="row">
  <div class="col-md-12 text-center well">
      <h3>ACTUALIZAR CLIENTE</h3>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <?php if ($clienteEditar): ?>
        <!-- <?php print_r($clienteEditar); ?> -->
        <form class="" action="<?php echo site_url('clientes/procesarActualizacion'); ?>" method="post">
            <center>
              <input type="hidden" name="id_cli"
              value="<?php echo $clienteEditar->id_cli; ?>">
            </center>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">CÉDULA:</label>
              </div>
              <div class="col-md-7">
                <input type="number" name="cedula_cli"
                value="<?php echo $clienteEditar->cedula_cli; ?>"
                class="form-control"
                placeholder="Ingrese el número de cédula" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">APELLIDO:</label>
              </div>
              <div class="col-md-7">
                <input type="text" name="apellido_cli"
                value="<?php echo $clienteEditar->apellido_cli; ?>"
                class="form-control"
                placeholder="Ingrese el apellido" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">NOMBRE:</label>
              </div>
              <div class="col-md-7">
                <input type="text" name="nombre_cli"
                value="<?php echo $clienteEditar->nombre_cli; ?>"
                class="form-control"
                placeholder="Ingrese el nombre" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">TELÉFONO:</label>
              </div>
              <div class="col-md-7">
                <input type="number" name="telefono_cli"
                value="<?php echo $clienteEditar->telefono_cli; ?>"
                class="form-control"
                placeholder="Ingrese el número de teléfono" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">DIRECCIÓN:</label>
              </div>
              <div class="col-md-7">
                <input type="text" name="direccion_cli"
                value="<?php echo $clienteEditar->direccion_cli; ?>"
                class="form-control"
                placeholder="Ingrese la dirección" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">EMAIL:</label>
              </div>
              <div class="col-md-7">
                <input type="text" name="email_cli"
                value="<?php echo $clienteEditar->email_cli	; ?>"
                class="form-control"
                placeholder="Ingrese la dirección de correo electronico" required>
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
                  <a href="<?php echo site_url('clientes/index'); ?>"
                    class="btn btn-danger">
                    <i class="glyphicon glyphicon-remove"></i>
                    Cancelar
                  </a>
              </div>
            </div>
        </form>

    <?php else: ?>
        <div class="alert alert-danger">
            <b>No se encontro el cliente :(</b>
        </div>
    <?php endif; ?>
  </div>
</div>
