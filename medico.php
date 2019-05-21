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
    <title>Medico</title>
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
  <body background="src/fondo.jpg">
      <nav class="light-blue site-header py-1">
      <div class="col-12 container d-flex flex-column flex-md-row">
        <div class="col-4 container d-flex flex-column flex-md-row">
          <a class="font-weight-bold py-2 px-2 d-none d-md-inline-block" >Bienvenido: <?php echo $_SESSION['nombre'] ?> </a>
        </div>
        <div class="col-8 container d-flex flex-column flex-md-row justify-content-end">
          <button type="button" class="btn btn-sm btn-info" href="#modal-select-Medico" data-toggle="modal">INFO</button>
          <a class="text-dark py-2 px-2 d-none d-md-inline-block" href="#">Agenda</a>
          <a class="text-dark py-2 px-2 d-none d-md-inline-block" href="cerrar.php">Cerrar sesion</a>
        </div>
      </div>
  </nav>
<br>
<br>
<?php 
  $date = date('Y-m-d');
  if(isset($_GET["fecha"])){
    $date = $_GET["fecha"];
  }
?>
  <div class="col-12 container d-flex flex-column flex-md-row">
    <div class="col-2 container d-flex flex-column flex-md-row">
    </div>  
    <div class="col-8 container d-flex flex-column flex-md-row">
    <div class="col-2 container d-flex flex-column flex-md-row">
    </div>
    <div class="col-4 container d-flex flex-column flex-md-row">
        <input type="date" value="<?php echo $date; ?>" onchange="cargar()" id="date" class="form-control" name="date">
      </div>
      <div class="col-2 container d-flex flex-column flex-md-row">
    </div>
    </div>
    
    <div class="col-2 container d-flex flex-column flex-md-row">
    </div>
  </div>
  <br>

  <div class="col-12 container d-flex flex-column flex-md-row">
    <div class="col-3 container d-flex flex-column flex-md-row">
    </div>
    <div class="col-6 container d-flex flex-column flex-md-row">
       <table class="table table-sm table-bordered" style=" background-color: white " cellspacing="0">
                <thead>
                    <tr>
                      <th>HORA:</th>
                      <th>PACIENTE:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                      require_once __DIR__.'../database/Connection.php';
                      require_once __DIR__.'../database/Funcion.php'; 
                      use PostgreSQLPHPconnect\Connection as Connection;
                      use PostgreSQLPHPconnect\Funcion as Funcion;
                      try{
                          // create a PostgreSQL database connection
                          $pdo = Connection::get()->connect("admin");
                          $funcion = new Funcion($pdo);

                      }catch (PDOException $e){
                          // report error message
                          echo $e->getMessage();
                      }
                      ?>
                    <tr>
                      <td><a href="cita.php?fecha=<?php echo $date;?>&hora=7:00">7:00 A.M.</a></td>
                      <?php $result=$funcion->getCita($varcomparacion, $date, "7:00"); ?>
                      <td><?php if($result){  echo $result[2]; 
                                              echo $result[3]; 
                                              echo $result[4];}
                                              else echo("Disponible");?></td>
                    </tr>
                    <tr>
                      <td><a href="cita.php?fecha=<?php echo $date;?>&hora=7:30">7:30 A.M.</a></td>
                      <?php $result=$funcion->getCita($varcomparacion, $date, "7:30"); ?>
                      <td><?php if($result){  echo $result[2]; 
                                              echo $result[3]; 
                                              echo $result[4];}
                                              else echo("Disponible");?></td>
                    </tr>
                    <tr>
                    <td><a href="cita.php?fecha=<?php echo $date;?>&hora=8:00">8:00 A.M.</a></td>
                      <?php $result=$funcion->getCita($varcomparacion, $date, "8:00"); ?>
                      <td><?php if($result){  echo $result[2]; 
                                              echo $result[3]; 
                                              echo $result[4];}
                                              else echo("Disponible");?></td>
                    </tr>
                    <tr>
                    <td><a href="cita.php?fecha=<?php echo $date;?>&hora=8:30">8:30 A.M.</a></td>
                      <?php $result=$funcion->getCita($varcomparacion, $date, "8:30"); ?>
                      <td><?php if($result){  echo $result[2]; 
                                              echo $result[3]; 
                                              echo $result[4];}
                                              else echo("Disponible");?></td>
                    </tr>
                    <tr>
                    <td><a href="cita.php?fecha=<?php echo $date;?>&hora=9:00">9:00 A.M.</a></td>
                      <?php $result=$funcion->getCita($varcomparacion, $date, "9:00"); ?>
                      <td><?php if($result){  echo $result[2]; 
                                              echo $result[3]; 
                                              echo $result[4];}
                                              else echo("Disponible");?></td>
                    </tr>
                    <tr>
                    <td><a href="cita.php?fecha=<?php echo $date;?>&hora=9:30">9:30 A.M.</a></td>
                      <?php $result=$funcion->getCita($varcomparacion, $date, "9:30"); ?>
                      <td><?php if($result){  echo $result[2]; 
                                              echo $result[3]; 
                                              echo $result[4];}
                                              else echo("Disponible");?></td>
                    </tr>
                    <tr>
                    <td><a href="cita.php?fecha=<?php echo $date;?>&hora=10:00">10:00 A.M.</a></td>
                      <?php $result=$funcion->getCita($varcomparacion, $date, "10:00"); ?>
                      <td><?php if($result){  echo $result[2]; 
                                              echo $result[3]; 
                                              echo $result[4];}
                                              else echo("Disponible");?></td>
                    </tr>
                    <tr>
                    <td><a href="cita.php?fecha=<?php echo $date;?>&hora=10:30">10:30 A.M.</a></td>
                      <?php $result=$funcion->getCita($varcomparacion, $date, "10:30"); ?>
                      <td><?php if($result){  echo $result[2]; 
                                              echo $result[3]; 
                                              echo $result[4];}
                                              else echo("Disponible");?></td>
                    </tr>
                    <tr>
                    <td><a href="cita.php?fecha=<?php echo $date;?>&hora=11:00">11:00 A.M.</a></td>
                      <?php $result=$funcion->getCita($varcomparacion, $date, "11:00"); ?>
                      <td><?php if($result){  echo $result[2]; 
                                              echo $result[3]; 
                                              echo $result[4];}
                                              else echo("Disponible");?></td>
                    </tr>
                    <tr>
                    <td><a href="cita.php?fecha=<?php echo $date;?>&hora=11:30">11:30 A.M.</a></td>
                      <?php $result=$funcion->getCita($varcomparacion, $date, "11:30"); ?>
                      <td><?php if($result){  echo $result[2]; 
                                              echo $result[3]; 
                                              echo $result[4];}
                                              else echo("Disponible");?></td>
                    </tr>
                    <tr>
                    <td><a href="cita.php?fecha=<?php echo $date;?>&hora=12:00">12:00 A.M.</a></td>
                      <?php $result=$funcion->getCita($varcomparacion, $date, "12:00"); ?>
                      <td><?php if($result){  echo $result[2]; 
                                              echo $result[3]; 
                                              echo $result[4];}
                                              else echo("Disponible");?></td>
                    </tr>
                    <tr>
                    <td><a href="cita.php?fecha=<?php echo $date;?>&hora=12:30">12:30 A.M.</a></td>
                      <?php $result=$funcion->getCita($varcomparacion, $date, "12:30"); ?>
                      <td><?php if($result){  echo $result[2]; 
                                              echo $result[3]; 
                                              echo $result[4];}
                                              else echo("Disponible");?></td>
                    </tr>
                    <tr>
                    <td><a href="cita.php?fecha=<?php echo $date;?>&hora=1:00">1:00 P.M.</a></td>
                      <?php $result=$funcion->getCita($varcomparacion, $date, "1:00"); ?>
                      <td><?php if($result){  echo $result[2]; 
                                              echo $result[3]; 
                                              echo $result[4];}
                                              else echo("Disponible");?></td>
                    </tr>
                    <tr>
                    <td><a href="cita.php?fecha=<?php echo $date;?>&hora=1:30">1:30 P.M.</a></td>
                      <?php $result=$funcion->getCita($varcomparacion, $date, "1:30"); ?>
                      <td><?php if($result){  echo $result[2]; 
                                              echo $result[3]; 
                                              echo $result[4];}
                                              else echo("Disponible");?></td>
                    </tr>
                    <tr>
                    <td><a href="cita.php?fecha=<?php echo $date;?>&hora=2:00">2:00 P.M.</a></td>
                      <?php $result=$funcion->getCita($varcomparacion, $date, "2:00"); ?>
                      <td><?php if($result){  echo $result[2]; 
                                              echo $result[3]; 
                                              echo $result[4];}
                                              else echo("Disponible");?></td>
                    </tr>
                    <tr>
                    <td><a href="cita.php?fecha=<?php echo $date;?>&hora=2:30">2:30 P.M.</a></td>
                      <?php $result=$funcion->getCita($varcomparacion, $date, "2:30"); ?>
                      <td><?php if($result){  echo $result[2]; 
                                              echo $result[3]; 
                                              echo $result[4];}
                                              else echo("Disponible");?></td>
                    </tr>

                </tbody>
            </table>
    </div>
    <div class="col-3 container d-flex flex-column flex-md-row">
    </div>
  </div>


<?php 
    $cedprof = $varcomparacion;

    try{
        // create a PostgreSQL database connection
        $pdo = Connection::get()->connect("admin");
        $funcion = new Funcion($pdo);
        // get all stocks data
        $result = $funcion->getMedico($cedprof);  ?>


  <!-- modal para ver datos del Medico -->
<div class="modal fade" id="modal-select-Medico">
    <div class="modal-dialog modal-lg"  role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">Datos del Medico:</h5>
        </div>
        <div class="modal-body">
          <form id="c_form-h" class="">
            <div class="form-group row">
              <div class="col-6 d-flex flex-column">
                <label>Ced_Prof:</label>
                <label  type="text" class="form-control" name="ced_prof"><?php echo $cedprof; ?></label>
                </div>
                <div class="col-6 d-flex flex-column" >
                <label>Nombre    :</label>
                <label  type="text" class="form-control" name="Nombre"><?php echo $result[0][0]; ?><?php echo $result[0][1]; ?><?php echo $result[0][2]; ?></label>
                </div>
            </div>
            <div class="form-group row">
              <div class="col-6 d-flex flex-column">
              <label>Telefono  :</label>
                <label type="text" class="form-control" name="Telefono"><?php echo trim($result[0][3]); ?></label>
                </div>
                <div class="col-6 d-flex flex-column">
                <label>Direccion :</label>
                <label type="text" class="form-control" name="Direccion"><?php echo trim($result[0][5]); ?></label>
                </div>
            </div>
            <div class="form-group row">
              <div class="col-6 d-flex flex-column">
              <label>Especialidad:</label>
                <label type="text" class="form-control" name="Especialidad"><?php echo trim($result[0][4]); ?></label>
                </div>
                 <div class="col-6 d-flex flex-column">
                 <label>Escuela:</label>
                <label type="text" class="form-control" name="Escuela"><?php echo trim($result[0][5]); ?></label>
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

<?php 
  }catch (PDOException $e){
    // report error message
    echo $e->getMessage();
  }
?>


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
  <script>
    function cargar(){
      fecha = document.getElementById('date').value;
      window.location.replace("medico.php?fecha="+fecha);
    }
  </script>
  <footer class="container py-5">
    <div class="row">
      <div class="col-12 col-md text-center">
        <small class="d-block mb-3 text-muted">© 2019</small>
      </div>
    </div>
  </footer>




  </html>
