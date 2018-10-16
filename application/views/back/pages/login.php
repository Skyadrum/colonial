<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>CPanel - Login</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url(); ?>static/back/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>static/back/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>static/back/css/sb-admin.css" rel="stylesheet">

  <style>
    .top30{
      margin-top: 10%;
    }
  </style>

</head>

<body class="bg-dark">
  <div class="container top30" >
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Inicio de Sesión</div>
      <div class="card-body">
        <form action="<?php echo base_url(); ?>Login/login" method="post">
          <div class="form-group">
            <label for="usuario">Usuario:</label>
            <input class="form-control" name="usuario" id="usuario" type="text" placeholder="Nombre de usuario">
          </div>
          <div class="form-group">
            <label for="password">Contraseña:</label>
            <input class="form-control" name="password" id="password" type="password" placeholder="Contraseña">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
        </form>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>static/back/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>static/back/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>static/back/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
