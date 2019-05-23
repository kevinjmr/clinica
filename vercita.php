<!DOCTYPE html>
<html>
<head>
	<title>Informacion de cita</title>
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

  <?php
    $hora = $_GET['hora'];
    $fecha = $_GET['fecha'];
    $cedprof = $_GET['id'];
    $curp = $_GET['curp'];
    require_once __DIR__.'/database/Connection.php';
    require_once __DIR__.'/database/Funcion.php'; 
    use PostgreSQLPHPconnect\Connection as Connection;
    use PostgreSQLPHPconnect\Funcion as Funcion;
    try{
        // create a PostgreSQL database connection
        $pdo = Connection::get()->connect("admin");
        $funcion = new Funcion($pdo);
        // get all stocks data
        $result = $funcion->getHistorial($cedprof,$curp,$fecha);  
         ?>

	<nav class="light-blue site-header py-1">
      <div class="col-12 container d-flex flex-column flex-md-row">
        <div class="col-4 container d-flex flex-column flex-md-row">
          </div>
        <div class="col-8 container d-flex flex-column flex-md-row justify-content-end">
          <a class="text-dark py-2 px-2 d-none d-md-inline-block" href="medico.php">Agenda</a>
          <a class="text-dark py-2 px-2 d-none d-md-inline-block" href="cerrar.php">Cerrar sesion</a>
        </div>
      </div>
  </nav>
<br>
<div class="col-12  flex-md-row">
<h3 class="font-weight-bold px-2">Medico</h3>
<br>
  <div class="col-12 container d-flex flex-column flex-md-row">
  	<div class="col-4 container d-flex flex-column flex-md-row">
  	<h6 class="font-weight-bold px-2">Nombre:</h6>
  	<h6 name=""><?php echo $result[29]; echo $result[30]; echo $result[31];?></h6>
  </div>
  <div class="col-4 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">Especialidad:</h6>
  	<h6 name=""><?php echo $result[34]; ?></a>
  </div>
  <div class="col-4 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">Ced_Prof:</h6>
  	<h6 name=""><?php echo $result[0]; ?></a>
  </div>
  </div>



  <div class="col-12 container d-flex flex-column flex-md-row">
  	<div class="col-4 container d-flex flex-column flex-md-row">
  	<h6 class="font-weight-bold px-2">Escuela:</h6>
  	<h6 name=""><?php echo $result[35]; ?></a>
  </div>
  <div class="col-4 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">Domicilio:</h6>
  	<h6 name=""><?php echo $result[33]; ?></a>
  </div>
  <div class="col-4 container d-flex flex-column flex-md-row">
  	<h6 name=""></a>
  </div>
  </div>
  <br>
<h3 class="font-weight-bold px-2">Paciente:</h3>
<br>
  <div class="col-12 container d-flex flex-column flex-md-row">
  	<div class="col-4 container d-flex flex-column flex-md-row">
  	<h6 class="font-weight-bold px-2">Nombre:</h6>
  	<h6 name=""><?php echo $result[36]; echo $result[37]; echo $result[38];?></a>
  </div>
  <div class="col-4 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">Edad:</h6>
  	<h6 name=""><?php echo $result[41]; ?></a>
  </div>
  <div class="col-4 container d-flex flex-column flex-md-row">
  
  </div>
  </div>

  <div class="col-12 container d-flex flex-column flex-md-row">
  	<div class="col-4 container d-flex flex-column flex-md-row">
  	<h6 class="font-weight-bold px-2">Est. Civil.:</h6>
  	<h6 name=""><?php echo $result[42]; ?></a>
  </div>
  <div class="col-4 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">Domicilio:</h6>
  	<h6 name=""><?php echo $result[40]; ?></a>
  </div>
  <div class="col-4 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">Ocupacion:</h6>
  	<h6 name=""><?php echo $result[43]; ?></a>
  </div>
  </div>


  <div class="col-12 container d-flex flex-column flex-md-row">
  	<div class="col-4 container d-flex flex-column flex-md-row">
  	<h6 class="font-weight-bold px-2">Escolaridad:</h6>
  	<h6 name=""><?php echo $result[46]; ?></a>
  </div>
  <div class="col-4 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">Origen:</h6>
  	<h6 name=""><?php echo $result[44]; ?></a>
  </div>
  <div class="col-4 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">Residencia:</h6>
  	<h6 name=""><?php echo $result[45]; ?></a>
  </div>
  </div>
<br>
<h3 class="font-weight-bold px-2">Datos de la Cita</h3>
<br>
  <div class="col-12 container d-flex flex-column flex-md-row">
  	<div class="col-3 container d-flex flex-column flex-md-row">
    <h6 class="font-weight-bold px-2">AP_No_P:</h6>
    <h6 name=""><?php echo $result[3]; ?></a>
  	</div>
  
  <div class="col-3 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">APP:</h6>
    <h6 name=""> <?php echo $result[4]; ?></a>
  	
  	</div>
  
  <div class="col-3 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">AHF:</h6>
    <h6 name=""><?php echo $result[5]; ?></a>
  	</div>
   <div class="col-3 container d-flex flex-column flex-md-row">
   <h6 class="font-weight-bold px-2">AGO:</h6>
    <h6 name=""><?php echo $result[6]; ?></a>
  </div>
  </div>
  <br>
  <div class="col-12 container d-flex flex-column flex-md-row">
  	<div class="col-3 container d-flex flex-column flex-md-row">
    <h6 class="font-weight-bold px-2">Fecha:</h6>
    <h6 name=""><?php echo $result[2]; ?></a>
  	
  	</div>
  
  <div class="col-3 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">Menerca:</h6>
    <h6 name=""><?php echo $result[47]; ?></a>
  	</div>
  
  <div class="col-3 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">Ritmo:</h6>
    <h6 name=""><?php echo $result[7]; ?></a>
  	</div>
   <div class="col-3 container d-flex flex-column flex-md-row">
   <h6 class="font-weight-bold px-2">IVSA:</h6>
    <h6 name=""><?php echo $result[8]; ?></a>
  </div>
  </div>
<br>
  <div class="col-12 container d-flex flex-column flex-md-row">
  	<div class="col-3 container d-flex flex-column flex-md-row">
    <h6 class="font-weight-bold px-2">Cesarea:</h6>
    <h6 name=""><?php echo $result[9]; ?></a>
  	</div>
  
  <div class="col-3 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">FUM:</h6>
    <h6 name=""><?php echo $result[10]; ?></a>
  	</div>
  
  <div class="col-3 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">FPP:</h6>
    <h6 name=""><?php echo $result[11]; ?></a>
  	</div>
   <div class="col-3 container d-flex flex-column flex-md-row">
   <h6 class="font-weight-bold px-2">DIU:</h6>
    <h6 name=""><?php echo $result[12]; ?></a>
  </div>
  </div>
<br>
  <div class="col-12 container d-flex flex-column flex-md-row">
  	<div class="col-3 container d-flex flex-column flex-md-row">
    <h6 class="font-weight-bold px-2">Hormonales:</h6>
    <h6 name=""><?php echo $result[13]; ?></a>
  	</div>
  <br>
  <div class="col-3 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">Docma:</h6>
    <h6 name=""><?php echo $result[14]; ?></a> 
  	</div>
  
  <div class="col-3 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">Papamicolau:</h6>
    <h6 name=""><?php echo $result[15]; ?></a>
  	</div>
   <div class="col-3 container d-flex flex-column flex-md-row">
  </div>
  </div>
<br>
  <div class="col-12 container d-flex flex-column flex-md-row">
  	<div class="col-12 container d-flex flex-column flex-md-row">
    <h6 class="font-weight-bold px-2">Padecimiento Actual:</h6>
    <h6 name=""><?php echo $result[16]; ?></a>
  	</div>
  </div>

  <br>
  <div class="col-12 container d-flex flex-column flex-md-row">
  	<div class="col-3 container d-flex flex-column flex-md-row">
    <h6 class="font-weight-bold px-2">T/A:</h6>
    <h6 name=""><?php echo $result[17]; ?></a>
  	</div>
  <br>
  <div class="col-3 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">FC:</h6>
    <h6 name=""><?php echo $result[18]; ?></a>
  	</div>
  
  <div class="col-3 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">FR:</h6>
    <h6 name=""><?php echo $result[19]; ?></a>
  	</div>
   <div class="col-3 container d-flex flex-column flex-md-row">
   <h6 class="font-weight-bold px-2">Temperatura:</h6>
    <h6 name=""><?php echo $result[20]; ?></a>
  </div>
  </div>
<br>

<div class="col-12 container d-flex flex-column flex-md-row">
  	<div class="col-3 container d-flex flex-column flex-md-row">
    <h6 class="font-weight-bold px-2">Peso:</h6>
    <h6 name=""><?php echo $result[21]; ?></a>
  	</div>
  <br>
  <div class="col-3 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">Talla:</h6>
    <h6 name=""><?php echo $result[22]; ?></a>
  	</div>
  
  <div class="col-3 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">Cabeza:</h6>
    <h6 name=""><?php echo $result[23]; ?></a>
  	</div>
   <div class="col-3 container d-flex flex-column flex-md-row">
   <h6 class="font-weight-bold px-2">Torax:</h6>
    <h6 name=""><?php echo $result[24]; ?></a>
  </div>
  </div>
<br>

<div class="col-12 container d-flex flex-column flex-md-row">
  	<div class="col-3 container d-flex flex-column flex-md-row">
    <h6 class="font-weight-bold px-2">Abdomen:</h6>
    <h6 name=""><?php echo $result[25]; ?></a>
  	</div>
  <br>
  <div class="col-3 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">Extremidades:</h6>
    <h6 name=""><?php echo $result[26]; ?></a> 
  	</div>
  
  <div class="col-3 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">Genitales:</h6>
    <h6 name=""><?php echo $result[27]; ?></a>
  	</div>
   <div class="col-3 container d-flex flex-column flex-md-row">
   <h6 class="font-weight-bold px-2">Vascula Perifericos:</h6>
    <h6 name=""><?php echo $result[28]; ?></a>
  </div>
  </div>
<br>

<div class="col-12 container d-flex flex-column flex-md-row">
  	<div class="col-3 container d-flex flex-column flex-md-row">
  	
  	</div>
  <br>
  <div class="col-3 container d-flex flex-column flex-md-row">
  	
  	</div>
  
  <div class="col-3 container d-flex flex-column flex-md-row">
  	 
          
  	</div>
   <div class="col-3 container d-flex flex-column flex-md-row">
   <a class="btn btn-info" href="expediente.php?fecha=<?php echo $fecha;?>&hora=<?php echo $hora;?>&id=<?php echo($cedprof);?>&curp=<?php echo $curp;?>">regresar</a>
  </div>
  </div>
<br>
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

  <footer class="container py-5">
    <div class="row">
      <div class="col-12 col-md text-center">
        <small class="d-block mb-3 text-muted">© 2019</small>
      </div>
    </div>
    
  </footer>
</html>