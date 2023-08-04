<?php if (!$this->session->userdata('conectad0')): ?>
  <script type="text/javascript">
    window.location.href="<?php echo site_url('seguridades/login'); ?>"
  </script>
<?php endif; ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- importacion para dispocitivos moviles responsibilidad  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ferretería</title>
    <!-- IMPORTACION JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
      <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Importacion de Jquery Validate -->
    <script type="text/javascript" src="<?php echo base_url('assets/librerias/validate/jquery.validate.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/librerias/validate/additional-methods.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/librerias/validate/messages_es_AR.min.js'); ?>"></script>
    <!-- Importación de DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <!-- Importación de SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.15/sweetalert2.css" integrity="sha512-JzSVRb7c802/njMbV97pjo1wuJAE/6v9CvthGTDxiaZij/TFpPQmQPTcdXyUVucsvLtJBT6YwRb5LhVxX3pQHQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.15/sweetalert2.js" integrity="sha512-9V+5wAdU/RmYn1TP+MbEp5Qy9sCDYmvD2/Ub8sZAoWE2o6QTLsKx/gigfub/DlOKAByfhfxG5VKSXtDlWTcBWQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Importacion Bootstrap Select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/i18n/defaults-es_ES.min.js" integrity="sha512-RN/dgJo36dNkKVnb1XGzePP4/8XGa/r+On4XYUy8I1C5z+9SsIEU2rFh6TrunAnddKwtXwMdI0Se8HZxd0GtiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <?php if ($this->session->flashdata('confirmacion')): ?>
      <script type="text/javascript">
        $(document).ready(function(){
          Swal.fire(
            'CONFIRMACIÓN', //titulo
            '<?php echo $this->session->flashdata('confirmacion'); ?>', //Contenido o mensaje
            'success' //Tipo de alerta
          )
        });
      </script>
    <?php endif; ?>


    <?php if ($this->session->flashdata('error')): ?>
      <script type="text/javascript">
        $(document).ready(function(){
          Swal.fire(
            'ERROR', //titulo
            '<?php echo $this->session->flashdata('error'); ?>', //Contenido o mensaje
            'error' //Tipo de alerta
          )
        });
      </script>
    <?php endif; ?>

    <!-- Importando Inconos de FontAwesome (fa) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    </head>
  <body>
    <div class="text-center">
      <img src="<?php echo base_url(); ?>/assets/img/images.png" alt="Logo" height="100px">
    </div>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url(); ?>">Ferretería</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php if ($this->session->userdata('conectad0')->perfil_usu=="ADMINISTRADOR"): ?>
                        <li id="menu-categorias"><a href="<?php echo site_url('categorias/index'); ?>">Categorias</a></li>
                    <?php endif; ?>
                    <li class="dropdown" id="menu-productos">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('productos/index'); ?>">LISTADO </a></li>
                            <?php if ($this->session->userdata('conectad0')->perfil_usu=="ADMINISTRADOR"): ?>
                            <li><a href="<?php echo site_url('productos/nueva'); ?>">NUEVO </a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    <?php if ($this->session->userdata('conectad0')->perfil_usu=="ADMINISTRADOR"): ?>
                        <li class="dropdown" id="menu-productos">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clientes <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('clientes/index'); ?>">LISTADO </a></li>
                                <li><a href="<?php echo site_url('clientes/nuevo'); ?>">NUEVO </a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>

                <!-- Agregar el botón de cierre de sesión -->
                <?php if ($this->session->userdata('conectad0')): ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo site_url('seguridades/logout'); ?>">Cerrar sesión</a></li>
                    </ul>
                <?php endif; ?>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
