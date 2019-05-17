<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
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
  <nav class="site-header py-1">
    <div class="container d-flex flex-column flex-md-row justify-content-end">
      <a class="py-2 px-2 d-none d-md-inline-block" href="#">Inicio</a>
      <!--Ejecuta un model para ingresar las credenciales-->
      <a class="py-2 px-2 d-none1 d-md-inline-block" href="#modal-login" data-toggle="modal" id="modal-34228">Iniciar Sesion</a>
      <a class="py-2 px-2 d-none d-md-inline-block" href="#servicios">Servicios</a>
      <a class="py-2 px-2 d-none1 d-md-inline-block" href="https://fezvrasta.github.io/bootstrap-material-design/docs/4.0/examples/product/#">Acerca de nosotros</a>
    </div>
  </nav>
  <?php
  if(isset($_GET["fallopass"]) && $_GET["fallopass"]=='true'){
    echo "<script>alert('Contraseña incorrecta')</script>";
  }
  ?>

  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg" style="	background-image: url(&quot;src/1.jpg&quot;);	background-position: center center;	background-size: 80%;	background-repeat: no-repeat;">
    <div class="col-md-5 p-lg-5 mx-auto my-5" style="	background-image: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.1));	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
      <h1 class="font-weight-normal display-4 border border-top border-dark rounded-0 text-white bg-dark">Clinica Dolores</h1>
      <p class="lead font-weight-normal text-white" style="	background-image: linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.4));	background-position: top left;	background-size: 100%;	background-repeat: repeat;">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple's marketing pages.</p>
    </div>
  </div>
  <div class="row text-center">
    <div class="col-12">
      <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg2">
        <div class="col-md-5 p-lg-5 mx-auto">
          <h1 class="font-weight-normal text-white" style="	background-image: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.2));	background-position: top left;	background-size: 100%;	background-repeat: repeat;" id="servicios">Servicios</h1>
        </div>
      </div>
      <div class="container" style="background-color: #fff">
        <div class="row">
          <div class="col-4">
            <img alt="Bootstrap Image Preview" src="src/3.jpg">
          </div>
          <div class="col-8">
            <h4 class="py-4">Reserva una cita con tu medico de cabecera.</h4>
            <a class="btn btn-outline-blue" href="reserva.html">RESERVAR</a>
          </div>  
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
          <form id="c_form-h" method="GET" action="login.php">
            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="inputuser" placeholder="Nombre de Usuario"> </div>
            </div>
            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" name="inputpass" placeholder="Contraseña"> </div>
            </div>
            <div class="form-group row">
              <div class="col-12">
                <select name="type"class="form-control">
                  <option value="1">Médico</option>
                  <option value="2">Enfermero(a)</option>
                  <option value="3">Paciente</option>
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
</body>

</html>