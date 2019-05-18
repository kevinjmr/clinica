<!-- Continua con los valores de la sesión correspondiente -->
<?php
SESSION_START();

$varcomparacion = $_SESSION['nombre'];

if( $varcomparacion == null || $varcomparacion == ''){
  header("location:index.php");
}
?>




<!DOCTYPE html>
  <html>
  <head>
    <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="https://fezvrasta.github.io/bootstrap-material-design/favicon.ico">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/my.css" rel="stylesheet">
  <link href="./Product example for Bootstrap_files/product.css" rel="stylesheet">
  <title>Clinica Dolores</title>
  <style type="text/css">
    :root #content>#right>.dose>.dosesingle,
    :root #content>#center>.dose>.dosesingle {
      display: none !important;
    }
  </style>
  </head>
  <body>
      <nav class="light-blue site-header py-1">
      <div class="col-12 container d-flex flex-column flex-md-row">
        <div class="col-10 container d-flex flex-column flex-md-row">
          <h2 class="py-2 px-2 d-none d-md-inline-block" href="#modal-select-paciente" data-toggle="modal" >Asistente</h2>
          <button type="button" class="btn btn-info" style="max-width: 40%; max-height:  50%;" data-dismiss="modal">info</button>
        </div>
        <div class="col-3 container d-flex flex-column flex-md-row">
          <a class="text-dark py-2 px-2 d-none d-md-inline-block" href="#">Bienvenido: <?php echo $_SESSION['nombre'] ?> </a>
            <a class="text-dark py-2 px-2 d-none d-md-inline-block" href="cerrar.php">Cerrar session</a>
        </div>
      </div>
  </nav>
<br>
<br>

<h1> Esta es la página del Asistente XDXDXDXDXDXDDXDXDXD</h1>

  </body>
  </html>