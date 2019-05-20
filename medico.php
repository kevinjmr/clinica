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
          <h2 class="py-2 px-2 d-none d-md-inline-block" data-toggle="modal" >Medico</h2>
        </div>
        <div class="col-3 container d-flex flex-column flex-md-row">
        <button type="button" class="btn btn-sm btn-info" href="#modal-select-Medico" data-toggle="modal">INFO</button>
          <a class="text-dark py-2 px-2 d-none d-md-inline-block" href="#">Agenda</a>
            <a class="text-dark py-2 px-2 d-none d-md-inline-block" href="cerrar.php">Cerrar sesion</a>
        </div>
      </div>
  </nav>
<br>
<br>

  <div class="col-12 container d-flex flex-column flex-md-row">
    <div class="col-2 container d-flex flex-column flex-md-row">
    </div>
    <div class="col-8 container flex-md-row">
    <div class="col-3 container flex-md-row"></div>
    <div class="col-4 container flex-md-row">
      <h3>Citas de la semana</h3>
    </div>
    <div class="col-3 container flex-md-row"></div>
        <table class="table table-sm table-bordered" style=" background-color: white " cellspacing="0">
                <thead>
                    <tr>
                      <th>Fecha</th>
                      <th>Paciente</th>
                      <th>Medico</th>
                      <th>Descripcion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td><a onclick="editarmedico('Work1')">1996/10/19 9:30</a></td>
                      <td>Mariana leal sandoval</td>
                      <td>Cesar Reynel Ortiz</td>
                      <td>♥</td>
                    </tr>
                </tbody>
            </table>
    
    </div>
    <div class="col-2 container d-flex flex-column flex-md-row">
    </div>    
    
  </div>




  <!-- modal para ver datos del Medico -->
<div class="modal fade" id="modal-select-paciente">
    <div class="modal-dialog modal-lg"  role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">Datos del Paciente:</h5>
        </div>
        <div class="modal-body">
          <form id="c_form-h" class="">
            <div class="form-group row">
              <div class="col-6 d-flex flex-column">
                <label>CURP      :</label>
                <label  type="text" class="form-control" name="curp"><?php echo trim($curp); ?></label>
                </div>
                <div class="col-6 d-flex flex-column" >
                <label>Nombre    :</label>
                <label  type="text" class="form-control" name="Nombre"><?php echo $result[0]; echo $result[1]; echo $result[2];?></label>
                </div>
            </div>
            <div class="form-group row">
              <div class="col-6 d-flex flex-column">
              <label>Telefono  :</label>
                <label type="text" class="form-control" name="Telefono"><?php echo $result[3]; ?></label>
                </div>
                <div class="col-6 d-flex flex-column">
                <label>Direccion :</label>
                <label type="text" class="form-control" name="Direccion"><?php echo $result[4]; ?></label>
                </div>
            </div>
            <div class="form-group row">
              <div class="col-6 d-flex flex-column">
              <label>Edad       :</label>
                <label type="text" class="form-control" name="Edad"><?php echo $result[5]; ?></label>
                </div>
                 <div class="col-6 d-flex flex-column">
                 <label>Edo_civil  :</label>
                <label type="text" class="form-control" name="Edo_civil"><?php echo $result[6]; ?></label>
                </div> 
            </div>        
            <div class="form-group row">
              <div class="col-6 d-flex flex-column">
              <label>Escolaridad:</label>
                <label type="text" class="form-control" name="Escolaridad"><?php echo $result[8]; ?></label>
                </div>
                <div class="col-6 d-flex flex-column">
                <label>Ocupacion  :</label>
                <label type="text" class="form-control" name="Ocupacion"><?php echo $result[7]; ?></label>
                </div>
            </div>
            <div class="form-group row">
              <div class="col-6 d-flex flex-column">
              <label>Origen     :</label>
                <label type="text" class="form-control" name="Lugar_de_origen"><?php echo $result[9]; ?></label>
                </div>
                <div class="col-6 d-flex flex-column">
                <label>Residencia :</label>
                <label type="text" class="form-control" name="Lugar_de_residencia"><?php echo $result[10]; ?></label>
                </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>



  </body>

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
