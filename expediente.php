<!DOCTYPE html>
<html>
<head>
  
  <title>Expediente</title>
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
    $fecha = $_GET['fecha'];
    $hora = $_GET['hora'];
    $id = $_GET['id'];
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
        $result = $funcion->getHistoriales(trim($curp));  ?>

	<nav class="light-blue site-header py-1">
      <div class="col-12 container d-flex flex-column flex-md-row">
        <div class="col-3 container d-flex flex-column flex-md-row">
        </div>
        <div class="col-9 container d-flex flex-column flex-md-row justify-content-end">
          	<a class="text-dark py-2 px-2 d-none d-md-inline-block" href="medico.php">Agenda</a>
          	<a class="text-dark py-2 px-2 d-none d-md-inline-block" href="cita.php?fecha=<?php echo $fecha;?>&hora=<?php echo $hora;?>&id=<?php echo $id;?>">Regresar</a>
            <a class="text-dark py-2 px-2 d-none d-md-inline-block" href="cerrar.php">Cerrar sesion</a>
        </div>
      </div>
  </nav>
<br>
  <div class="col-2 container d-flex flex-column flex-md-row"></div>
  <div class="col-8 containerflex-md-row">
  	<div class="container d-flex flex-column flex-md-row">
  		<h4 class="font-weight-bold px-2">Expediente: </h4>
  		<h4><?php echo $curp;?></h4>

  	</div>
  	
  	<h6>(seleciona para ver detalles)</h6>
            <table class="table table-sm table-bordered" style=" background-color: white " cellspacing="0">
                <thead>
                    <tr>
                      <th href="#">Fecha</th>
                      <th>Medico</th>
                      <th>Padecimiento</th>
                    </tr>
                </thead>
                <tbody>
                      <tr>
                      <?php if($result){?>
                        <td value=""><a id="a" href="vercita.php?fecha=<?php echo $fecha;?>&hora=<?php echo $hora;?>&id=<?php echo $id;?>&curp=<?php echo $result[5];?>"><?php echo $result[3];?></a></td>
                        <td id="b"><?php echo $result[0]; echo $result[1]; echo $result[2];?></td>
                        <td id="c"><?php echo $result[4];?></td>
                      <?php }else{?> 
                        <td value=""><a id="a">Vacio</td>
                        <td id="b"></td>
                        <td id="c"></td>
                      <?php }?>
                      </tr>
                </tbody>
            </table>
  </div>
  <div class="col-2 container d-flex flex-column flex-md-row"></div>

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