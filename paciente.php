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
         ?>

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
          <div class="box" id="ultima-receta">
            <?php 
              $result = $funcion->getReceta($curp);
            ?>
              <?php if($result){?>
              <div class="container">
                <a><?php echo $result[0]; ?> / <?php echo $result[2]; echo $result[3]; echo $result[4];?></a>
                <h6><?php echo $result[1]; ?></h6>
              </div>
              <?php} else {?>
              <div class="container">
                <a></a>
                <h6><?php ?></h6>
              </div>
              <?php }?>
          </div>
	      </div>
    	</div>
    	<div class="col-4 container flex-md-row ">
        <h4 class="py-2 px-2 d-none d-md-inline-block" >Citas</h4>
        <div class="py-2 card">
          <div class="box" id="ultima-cita">
            <?php 
              $result = $funcion->getCitas2($curp);
              foreach ($result as $res) :
            ?>
              <div class="container">
                <a><?php echo $res[0]; ?> / <?php echo $res[1]; ?></a>
                <h6><?php echo $res[2]; echo $res[3]; echo $res[4];?></h6>
              </div>
            <?php endforeach; ?>
          </div>
				</div>
				<button class="btn btn-sm btn-blue btn-block" onclick="agendar('<?php echo($curp);?>')">Agendar cita</button>
    	</div>
      <div class="col-1 container flex-md-row"></div>
  	</div>
  </nav>

  
  <?php $result = $funcion->getPaciente($curp);  ?>

<!-- modal para ver datos del paciente -->
<div class="modal fade" id="modal-select-paciente">
    <div class="modal-dialog modal-lg"  role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">Datos del Paciente:</h5>
        </div>
        <div class="modal-body">
          <form id="c_form-h" class="">
            <div class="form-group row">
              <div class="col-6  flex-column">
                <label>CURP      :</label>
                <label  type="text" class="form-control" id="curp" name="curp"><?php echo trim($curp); ?></label>
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

  <?php 
    
    }catch (PDOException $e){
        // report error message
        echo $e->getMessage();
    } 
  $pdo=null;   
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
  function agendar(curp){
    if (confirm('¿Estas seguro de que quieres agendar una cita? \nLas citas se asignan en automatico.')){
      window.location.href='func/insertarcitaauto.php?curp='+curp;
    }
  }
  </script>
  <!--Alertas-->
  <?php 
  if(isset($_GET["exitoinscita"])){
    if( $_GET["exitoinscita"]=='true'){
      echo "<script> alert('Cita agregada con exito!'); </script>";}
    else{
      echo "<script> alert('Cita no agregada, revise su informacion.\nNo se puede programar a un mismo paciente dos veces en un mismo dia.'); </script>";}
  }
  ?>
  

</html>