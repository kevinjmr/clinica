<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
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
  
  <!--Barra de navegacion, Inicio, Login, Servicios, Acerca de... -->
</head>

<body background="src/fondo.jpg">
  <nav class="light-blue site-header py-1">
    <div class="container d-flex flex-column flex-md-row justify-content-end">
      <a class="text-dark py-2 px-2 d-none d-md-inline-block" href="index.php">Inicio</a>
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
      
      <div id="map-container" class="map-container" >
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15022.808232539386!2d-101.18559908150638!3d19.72530496367456!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0e40be8f4d3b%3A0xf001c256ae856856!2sInstituto+Tecnol%C3%B3gico+de+Morelia!5e0!3m2!1ses-419!2smx!4v1558323241440!5m2!1ses-419!2smx"
       width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
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

  <!--Modal de login-->
  <div class="modal fade" id="modal-login">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">Iniciar Sesion</h5>
        </div>
        <div class="modal-body">
          <form autocomplete="off" id="c_form-h" method="GET" action="login.php">
            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="inputuser" placeholder="Nombre de Usuario" required title="Ingrese el nombre de usuario (RFC, CURP o CedProf)"> </div>
            </div>
            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" name="inputpass" placeholder="Contraseña" required title="Ingrese la contraseña"> </div>
            </div>
            <div class="form-group row">
              <div class="col-12">
                <select name="type"class="form-control">
                  <option value="1">Médico</option>
                  <option value="2">Asistente</option>
                  <option value="3">Paciente</option>
                  <option value="4">Administrador</option>
                </select>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Iniciar sesion</button>
          <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
        </div>
      </form>
      </div>
    </div>
  </div><!--Modal Login-->  
  </body>

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
  <footer class="container py-5">
    <div class="row">
      <div class="col-12 col-md text-center">
        <small class="d-block mb-3 text-muted">© 2019</small>
      </div>
    </div>
  </footer>
</html>