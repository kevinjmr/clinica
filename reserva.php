<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
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
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="https://fezvrasta.github.io/bootstrap-material-design/favicon.ico">
  <!--Barra de navegacion, Inicio, Login, Servicios, Acerca de... -->
</head>

<body background="src/fondo.jpg">
  <nav class="ligth-blue site-header py-1">
    <div class="container d-flex flex-column flex-md-row justify-content-end">
      <a class="text-dark py-2 px-2 d-none d-md-inline-block" href="index.php">Inicio</a>
      <a class="text-dark py-2 px-2 d-none1 d-md-inline-block" href="#modal-login" data-toggle="modal" id="modal-34228">Iniciar Sesion</a>
      <a class="text-dark py-2 px-2 d-none d-md-inline-block" href="index.php#servicios">Servicios</a>
      <a class="text-dark py-2 px-2 d-none1 d-md-inline-block" href="https://fezvrasta.github.io/bootstrap-material-design/docs/4.0/examples/product/#">Acerca de nosotros</a>
    </div>
  </nav>
  <div class="row text-center">
    <div class="col-12">
      <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg2">
        <div class="col-md-5 p-lg-5 mx-auto">
          <h1 class="font-weight-normal text-white" style="	background-image: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.2));	background-position: top left;	background-size: 100%;	background-repeat: repeat;" id="servicios">Servicios</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="row text-center">
    <div class="col-6 text-right">
      <img alt="Bootstrap Image Preview" src="src/4.jpg"  width="50%" class="img-thumbnail">
    </div>
    <div class="col-6">
      <div class="text-left">
        <div class="card-body">
          <h5 class="card-title"><b>Dirección</b></h5>
          <h6 class="card-subtitle my-2 text-muted">Morelia, Michoacan</h6>
          <p class="card-text">Avenida Tecnológico 1500 <br> C.P. 58120 <br>Morelia, Michoacán</p>
          <a href="#modal-login" data-toggle="modal" id="modal-34229" class="card-link">Iniciar Sesion</a>
          <a href="https://goo.gl/maps/9VUKgDEizfb3Rcx48" target="_blank"class="card-link">Mapa</a>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modal-login">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">Iniciar Sesion</h5>
        </div>
        <div class="modal-body">
          <form id="c_form-h" class="">
            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" id="inputmailh" placeholder="Nombre de Usuario"> </div>
            </div>
            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Contraseña"> </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Iniciar sesion</button>
          <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  <footer class="container py-5">
    <div class="row">
      <div class="col-12 col-md text-center">
        <small class="d-block mb-3 text-muted">© 2019</small>
      </div>
    </div>
  </footer>
  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script>
    Holder.addTheme('thumb', {
      bg: '#55595c',
      fg: '#eceeef',
      text: 'Thumbnail'
    });
  </script>
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 20px;right:20px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:220px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;<img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"></pingendo>
</body>

</html>