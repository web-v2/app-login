<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Farmacia|Login</title>
  <link rel="icon" type="image/png" href="<?=url?>vistas/modulos/dist/img/favicon.ico"/>
  <link rel="stylesheet" href="<?=url?>vistas/modulos/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?=url?>vistas/modulos/plugins/fontawesome-free/css/all.min.css">
  <style>
    .error-login-msg{color: red !important;}
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">    
    <span class="login100-form-title p-b-37">
      <img src="<?=url?>vistas/modulos/dist/img/logo.png" class="img-responsive" alt="Logos"  width="120" height="120">
      <br>
      <center><h2>Farmacia la 22</h2></center>
    </span>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Ingresa a tu cuenta</p>
      
      <form action="" method="post" id="formulario">
        <div class="input-group mb-3">
        <input type="text" class="form-control"
           placeholder="Usuario" name="username" id="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input type="password" class="form-control" name="password" id="password"
           placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <p class="error-login-msg">
          <?php
              if(isset($errorLogin)){
                  echo $errorLogin;
              }
          ?>
          </p>        
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">
            Iniciar Sesion</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     <p class="mb-0">
        <a href="#" class="text-center">Registrarse</a> <!-- //url?>usuario/vistaRegistro -->
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?=url?>vistas/modulos/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?=url?>vistas/modulos/plugins/sweetalert2/sweetalert2.all.js"></script>

<!-- Bootstrap 4 -->
<script src="<?=url?>vistas/modulos/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=url?>vistas/modulos/dist/js/adminlte.min.js"></script>
<script type="module" src="<?=url?>vistas/js/iniciarSesion.js"></script>
</body>
</html>
