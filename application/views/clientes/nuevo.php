<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVO CLIENTE
</legend>
<form id="frm_nueva_cliente" class=""
enctype="multipart/form-data"
action="<?php echo site_url('clientes/guardarCliente'); ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">CÉDULA:</label>
      </div>
      <div class="col-md-7">
        <input type="number" id="cedula_cli" name="cedula_cli" value=""
        class="form-control"
        placeholder="Ingrese el número de cédula" >
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">APELLIDO:</label>
      </div>
      <div class="col-md-7">
        <input type="text" id="apellido_cli" name="apellido_cli" value=""
        class="form-control"
        placeholder="Ingrese el apellido" >
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NOMBRE:</label>
      </div>
      <div class="col-md-7">
        <input type="text" id="nombre_cli" name="nombre_cli" value=""
        class="form-control"
        placeholder="Ingrese el nombre" >
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">TELÉFONO:</label>
      </div>
      <div class="col-md-7">
        <input type="number" id="telefono_cli" name="telefono_cli" value=""
        class="form-control"
        placeholder="Ingrese el número de teléfono" >
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">DIRECCIÓN:</label>
      </div>
      <div class="col-md-7">
        <input type="text" id="direccion_cli" name="direccion_cli" value=""
        class="form-control"
        placeholder="Ingrese la dirección" >
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">EMAIL:</label>
      </div>
      <div class="col-md-7">
        <input type="text" id="email_cli" name="email_cli" value=""
        class="form-control"
        placeholder="Ingrese el correo electronico" >
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-7">
          <button type="submit" name="button"
                  class="btn btn-primary">
             <i class="glyphicon glyphicon-ok"></i>
             Guardar
          </button>
          <a href="<?php echo site_url('clientes/index'); ?>"
            class="btn btn-danger">
            <i class="glyphicon glyphicon-remove"></i>
            Cancelar
          </a>
      </div>
    </div>
</form>

<script type="text/javascript">
     $("#frm_nueva_cliente").validate({
        rules:{
            nom_cli:{
              required:true
            },
            descripcion_cli:{
              required:true
            }
        },
        messages:{
          nom_cli:{
              required:"Por favor ingrese el nombre de la cliente"
            },
            descripcion_cli:{
              required:"Por favor ingrese una descripción de la cliente"
            }
        }
     });
</script>






<!-- ll -->
