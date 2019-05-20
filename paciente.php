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
	<title>Paciente</title>
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

<body background="src/fondo.jpg">
<nav class="light-blue site-header py-1">
    	<div class="container d-flex flex-column flex-md-row">
    		<div class="col-4 container d-flex flex-column flex-md-row">
    			<a class="font-weight-bold py-2 px-2 d-none d-md-inline-block" >Bienvenido: <?php echo $_SESSION['nombre'] ?> </a>
        </div>
    		<div class="col-8 container d-flex flex-column flex-md-row">
            <div class="col-12 justify-content-end container d-flex flex-column flex-md-row">
              <button type="button" class="btn btn-sm btn-info" href="#modal-select-paciente" data-toggle="modal">INFO</button>
              <a class="text-dark py-2 px-2 d-none d-md-inline-block" href="cerrar.php">Cerrar Sesion</a>
            </div>
          </div>
    	</div>
  </nav>

  <nav>
  	<div class="col-12 container d-flex flex-column flex-md-row">
      <div class="col-1 container d-flex flex-column flex-md-row"></div>
  		<div class="col-6 container  flex-md-row">
    	  <h4 class="py-2 px-2 d-none d-md-inline-block" >Ultima Receta</h4>		
        <div class="card">
          <div class="box" id="ultima-receta">asoidioasjdoijasodjasod ijasoidjioasjd jasoid jasiodj oasjd oasjd jasoidioasjdoijasodjasod ijasoidjioasjd jasoid jasiodj oasjd oasjd jasoidioasjdoijasodjasod ijasoidjioasjd jasoid jasiodj oasjd oasjd jasoidioasjdoijasodjasod ijasoidjioasjd jasoid jasiodj oasjd oasjd jasoidioasjdoijasodjasod ijasoidjioasjd jasoid jasiodj oasjd oasjd jasoidioasjdoijasodjasod ijasoidjioasjd jasoid jasiodj oasjd oasjd j
          </div>
	      </div>
    	</div>
    	<div class="col-4 container flex-md-row ">
        <h4 class="py-2 px-2 d-none d-md-inline-block" >Citas</h4>
        <div class="py-2 card">
          <div class="box" id="ultima-cita"> asoidioasjdoijasodjasod ijasoidjioasjd jasoid jasiodj oasjd oasjd jasoidioasjdoijasodjasod ijasoidjioasjd jasoid jasiodj oasjd oasjd jasoidioasjdoijasodjasod ijasoidjioasjd jasoid jasiodj oasjd oasjd jasoidioasjdoijasodjasod ijasoidjioasjd jasoid jasiodj oasjd oasjd jasoidioasjdoijasodjasod ijasoidjioasjd jasoid jasiodj oasjd oasjd jasoidioasjdoijasodjasod ijasoidjioasjd jasoid jasiodj oasjd
          </div>
				</div>
				<button class="py-2 btn btn-sm btn-blue btn-block">Agendar cita</button>
    	</div>
      <div class="col-1 container flex-md-row"></div>
  	</div>
  </nav>

  <!--Inicia la conexion de postgres-->
<?php
  $curp = $_SESSION['nombre'];
  require_once __DIR__.'..\database\Connection.php';
  require_once __DIR__.'..\database\Funcion.php'; 
  use PostgreSQLPHPconnect\Connection as Connection;
  use PostgreSQLPHPconnect\Funcion as Funcion;
  try{
      // create a PostgreSQL database connection
      $pdo = Connection::get()->connect("admin");
      $funcion = new Funcion($pdo);
      // get all stocks data
      $result = $funcion->getPaciente($curp);  ?>

<!-- modal para insertar administrador -->
<div class="modal fade" id="modal-select-paciente">
    <div class="modal-dialog modal-lg"  role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">Datos del Paciente:</h5>
        </div>
        <div class="modal-body">
          <form id="c_form-h" class="">
            <div class="form-group row">
              <div class="col-6">
                <label  type="text" class="form-control" name="curp"><?php echo trim($curp); ?></label>
                </div>
                <div class="col-6">
                <label  type="text" class="form-control" name="Nombre"><?php echo $result[0]; echo $result[1]; echo $result[2];?></label>
                </div>
            </div>
            <div class="form-group row">
              <div class="col-6">
                <label type="text" class="form-control" name="Telefono"><?php echo $result[3]; ?></label>
                </div>
                <div class="col-6">
                <label type="text" class="form-control" name="Direccion"><?php echo $result[4]; ?></label>
                </div>
            </div>
            <div class="form-group row">
              <div class="col-6">
                <label type="text" class="form-control" name="Edad"><?php echo $result[5]; ?></label>
                </div>
                 <div class="col-6">
                <label type="text" class="form-control" name="Edo_civil"><?php echo $result[6]; ?></label>
                </div> 
            </div>        
            <div class="form-group row">
              <div class="col-6">
                <label type="text" class="form-control" name="Escolaridad"><?php echo $result[8]; ?></label>
                </div>
                <div class="col-6">
                <label type="text" class="form-control" name="Ocupacion"><?php echo $result[7]; ?></label>
                </div>
            </div>
            <div class="form-group row">
              <div class="col-6">
                <label type="text" class="form-control" name="Lugar_de_origen"><?php echo $result[9]; ?></label>
                </div>
                <div class="col-6">
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
  <footer class="container py-5">
    <div class="row">
      <div class="col-12 col-md text-center">
        <small class="d-block mb-3 text-muted">© 2019</small>
      </div>
    </div>
  </footer>

</html>