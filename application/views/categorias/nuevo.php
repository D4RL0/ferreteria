<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVA CATEGORÍA
</legend>
<form id="frm_nueva_categoria" class=""
enctype="multipart/form-data"
action="<?php echo site_url('categorias/guardarCategoria'); ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NOMBRE:</label>
      </div>
      <div class="col-md-7">
        <input type="text" id="nom_cat" name="nom_cat" value=""
        class="form-control"
        placeholder="Ingrese el nombre de la categoría" >
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">DESCRIPCIÓN:</label>
      </div>
      <div class="col-md-7">
        <input type="text" id="descripcion_cat" name="descripcion_cat" value=""
        class="form-control"
        placeholder="Ingrese una descripción de la categoría" >
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
          <a href="<?php echo site_url('categorias/index'); ?>"
            class="btn btn-danger">
            <i class="glyphicon glyphicon-remove"></i>
            Cancelar
          </a>
      </div>
    </div>
</form>

<script type="text/javascript">
     $("#frm_nueva_categoria").validate({
        rules:{
            nom_cat:{
              required:true
            },
            descripcion_cat:{
              required:true
            }
        },
        messages:{
          nom_cat:{
              required:"Por favor ingrese el nombre de la categoría"
            },
            descripcion_cat:{
              required:"Por favor ingrese una descripción de la categoría"
            }
        }
     });
</script>






<!-- ll -->
