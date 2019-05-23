<!DOCTYPE html>
<html>
<head>
	<title>Nueva cita</title>
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
<?php 
  $date = date('Y-m-d');
  if(isset($_GET["fecha"])){
    $date = $_GET["fecha"];
  }
  $curp=$_GET['curp'];
  $cedprof=$_GET['cedprof'];
?>
<body background="src/fondo.jpg">
	<nav class="light-blue site-header py-1">
      <div class="col-12 container d-flex flex-column flex-md-row">
        <div class="col-4 container d-flex flex-column flex-md-row">
        <div class="invisible col-2 container d-flex flex-column flex-md-row">
  			  <input value="<?php echo $curp; ?>" id="curp" type="text" style="border-radius: 5px;" name="">
        </div>
        <div class="invisible col-2 container d-flex flex-column flex-md-row">
          <input value="<?php echo $cedprof; ?>" id="cedprof" type="text" style="border-radius: 5px;" name="">
        </div>
        </div>
        <div class="col-8 container d-flex flex-column flex-md-row flex-md-row justify-content-end">
          <a class="text-dark py-2 px-2 d-none d-md-inline-block" href="medico.php">Agenda</a>
          <a class="text-dark py-2 px-2 d-none d-md-inline-block" href="cita.php">Regresar</a>
            <a class="text-dark py-2 px-2 d-none d-md-inline-block" href="index.php">Cerrar sesion</a>
        </div>
      </div>
  </nav>
<br>
  <div class="col-12 container d-flex flex-column flex-md-row">
  	<div class="col-2 container d-flex flex-column flex-md-row">
  	</div>	
  	<div class="col-8 container d-flex flex-column flex-md-row">
  	<div class="col-2 container d-flex flex-column flex-md-row">
  	</div>
  	<div class="col-4 container d-flex flex-column flex-md-row">
  			<input value="<?php echo $date; ?>" onchange="cargar()" id="date" type="date" style="border-radius: 5px;" name="">
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
                      $varcomparacion=$cedprof;
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
                      <?php $result=$funcion->getCita($varcomparacion, $date, "07:00"); 
                        if($result){ ?> <td><a >7:00 A.M.</a></td>
                                    <td> <?php echo $result[2]; echo $result[3]; echo $result[4];}
                        else{?> <td><a >7:00 A.M.</a></td><td> <a href="func/insertarcita.php?fecha=<?php echo $date;?>&hora=07:00&id=<?php echo($varcomparacion);?>&curp=<?php echo trim($curp);?>"><?php echo("Disponible");}?></a></td>
                    </tr>
                    <tr>
                    <?php $result=$funcion->getCita($varcomparacion, $date, "07:30"); 
                        if($result){ ?> <td><a>7:30 A.M.</a></td>
                                    <td> <?php echo $result[2]; echo $result[3]; echo $result[4];}
                        else{?> <td><a >7:30 A.M.</a></td><td> <a href="func/insertarcita.php?fecha=<?php echo $date;?>&hora=07:30&id=<?php echo($varcomparacion);?>&curp=<?php echo trim($curp);?>"><?php echo("Disponible");}?></a></td>
                    </tr>
                    <tr>
                    <?php $result=$funcion->getCita($varcomparacion, $date, "08:00"); 
                        if($result){ ?> <td><a>8:00 A.M.</a></td>
                                    <td> <?php echo $result[2]; echo $result[3]; echo $result[4];}
                        else{?> <td><a >8:00 A.M.</a></td><td> <a href="func/insertarcita.php?fecha=<?php echo $date;?>&hora=08:00&id=<?php echo($varcomparacion);?>&curp=<?php echo trim($curp);?>"><?php echo("Disponible");}?></a></td>
                    </tr>
                    <tr>
                    <?php $result=$funcion->getCita($varcomparacion, $date, "08:30"); 
                        if($result){ ?> <td><a>8:30 A.M.</a></td>
                                    <td> <?php echo $result[2]; echo $result[3]; echo $result[4];}
                        else{?> <td><a >8:30 A.M.</a></td><td> <a href="func/insertarcita.php?fecha=<?php echo $date;?>&hora=08:30&id=<?php echo($varcomparacion);?>&curp=<?php echo trim($curp);?>"><?php echo("Disponible");}?></a></td>
                    </tr>
                    <tr>
                    <?php $result=$funcion->getCita($varcomparacion, $date, "09:00"); 
                        if($result){ ?> <td><a>9:00 A.M.</a></td>
                                    <td> <?php echo $result[2]; echo $result[3]; echo $result[4];}
                        else{?> <td><a >9:00 A.M.</a></td><td> <a href="func/insertarcita.php?fecha=<?php echo $date;?>&hora=09:00&id=<?php echo($varcomparacion);?>&curp=<?php echo trim($curp);?>"><?php echo("Disponible");}?></a></td>
                    </tr>
                    <tr>
                    <?php $result=$funcion->getCita($varcomparacion, $date, "09:30"); 
                        if($result){ ?> <td><a>9:30 A.M.</a></td>
                                    <td> <?php echo $result[2]; echo $result[3]; echo $result[4];}
                        else{?> <td><a >9:30 A.M.</a></td><td> <a href="func/insertarcita.php?fecha=<?php echo $date;?>&hora=09:30&id=<?php echo($varcomparacion);?>&curp=<?php echo trim($curp);?>"><?php echo("Disponible");}?></a></td>
                    </tr>
                    <tr>
                    <?php $result=$funcion->getCita($varcomparacion, $date, "10:00"); 
                        if($result){ ?> <td><a>10:00 A.M.</a></td>
                                    <td> <?php echo $result[2]; echo $result[3]; echo $result[4];}
                        else{?> <td><a >10:00 A.M.</a></td><td> <a href="func/insertarcita.php?fecha=<?php echo $date;?>&hora=10:00&id=<?php echo($varcomparacion);?>&curp=<?php echo trim($curp);?>"><?php echo("Disponible");}?></a></td>
                    </tr>
                    <tr>
                    <?php $result=$funcion->getCita($varcomparacion, $date, "10:30"); 
                        if($result){ ?> <td><a>10:30 A.M.</a></td>
                                    <td> <?php echo $result[2]; echo $result[3]; echo $result[4];}
                        else{?> <td><a >10:30 A.M.</a></td><td> <a href="func/insertarcita.php?fecha=<?php echo $date;?>&hora=10:30&id=<?php echo($varcomparacion);?>&curp=<?php echo trim($curp);?>"><?php echo("Disponible");}?></a></td>
                    </tr>
                    <tr>
                    <?php $result=$funcion->getCita($varcomparacion, $date, "11:00"); 
                        if($result){ ?> <td><a>11:00 A.M.</a></td>
                                    <td> <?php echo $result[2]; echo $result[3]; echo $result[4];}
                        else{?> <td><a >11:00 A.M.</a></td><td> <a href="func/insertarcita.php?fecha=<?php echo $date;?>&hora=11:00&id=<?php echo($varcomparacion);?>&curp=<?php echo trim($curp);?>"><?php echo("Disponible");}?></a></td>
                    </tr>
                    <tr>
                    <?php $result=$funcion->getCita($varcomparacion, $date, "11:30"); 
                        if($result){ ?> <td><a>11:30 A.M.</a></td>
                                    <td> <?php echo $result[2]; echo $result[3]; echo $result[4];}
                        else{?> <td><a >11:30 A.M.</a></td><td> <a href="func/insertarcita.php?fecha=<?php echo $date;?>&hora=11:30&id=<?php echo($varcomparacion);?>&curp=<?php echo trim($curp);?>"><?php echo("Disponible");}?></a></td>
                    </tr>
                    <tr>
                    <?php $result=$funcion->getCita($varcomparacion, $date, "12:00"); 
                        if($result){ ?> <td><a>12:00 P.M.</a></td>
                                    <td> <?php echo $result[2]; echo $result[3]; echo $result[4];}
                        else{?> <td><a >12:00 P.M.</a></td><td> <a href="func/insertarcita.php?fecha=<?php echo $date;?>&hora=12:00&id=<?php echo($varcomparacion);?>&curp=<?php echo trim($curp);?>"><?php echo("Disponible");}?></a></td>
                    </tr>
                    <tr>
                    <?php $result=$funcion->getCita($varcomparacion, $date, "12:30"); 
                        if($result){ ?> <td><a></a></td>
                                    <td> <?php echo $result[2]; echo $result[3]; echo $result[4];}
                        else{?> <td><a >12:30 P.M.</a></td><td> <a href="func/insertarcita.php?fecha=<?php echo $date;?>&hora=12:30&id=<?php echo($varcomparacion);?>&curp=<?php echo trim($curp);?>"><?php echo("Disponible");}?></a></td>
                    </tr>
                    <tr>
                    <?php $result=$funcion->getCita($varcomparacion, $date, "01:00"); 
                        if($result){ ?> <td><a>1:00 P.M.</a></td>
                                    <td> <?php echo $result[2]; echo $result[3]; echo $result[4];}
                        else{?> <td><a >1:00 P.M.</a></td><td> <a href="func/insertarcita.php?fecha=<?php echo $date;?>&hora=01:00&id=<?php echo($varcomparacion);?>&curp=<?php echo trim($curp);?>"><?php echo("Disponible");}?></a></td>
                    </tr>
                    <tr>
                    <?php $result=$funcion->getCita($varcomparacion, $date, "01:30"); 
                        if($result){ ?> <td><a>1:30 P.M.</a></td>
                                    <td> <?php echo $result[2]; echo $result[3]; echo $result[4];}
                        else{?> <td><a >1:30 P.M.</a></td><td> <a href="func/insertarcita.php?fecha=<?php echo $date;?>&hora=01:30&id=<?php echo($varcomparacion);?>&curp=<?php echo trim($curp);?>"><?php echo("Disponible");}?></a></td>
                    </tr>
                    <tr>
                    <?php $result=$funcion->getCita($varcomparacion, $date, "02:00"); 
                        if($result){ ?> <td><a>2:00 P.M.</a></td>
                                    <td> <?php echo $result[2]; echo $result[3]; echo $result[4];}
                        else{?> <td><a >2:00 P.M.</a></td><td> <a href="func/insertarcita.php?fecha=<?php echo $date;?>&hora=02:00&id=<?php echo($varcomparacion);?>&curp=<?php echo trim($curp);?>"><?php echo("Disponible");}?></a></td>
                    </tr>
                    <tr>
                    <?php $result=$funcion->getCita($varcomparacion, $date, "02:30"); 
                        if($result){ ?> <td><a>2:30 P.M.</a></td>
                                    <td> <?php echo $result[2]; echo $result[3]; echo $result[4];}
                        else{?> <td><a >2:30 P.M.</a></td><td> <a href="func/insertarcita.php?fecha=<?php echo $date;?>&hora=02:30&id=<?php echo($varcomparacion);?>&curp=<?php echo trim($curp);?>"><?php echo("Disponible");}?></a></td>
                    </tr>
                </tbody>
            </table>
  	</div>
  	<div class="col-3 container d-flex flex-column flex-md-row">
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
  <script>
    function cargar(){
      fecha = document.getElementById('date').value;
      curp = document.getElementById('curp').value;
      cedprof = document.getElementById('cedprof').value;
      window.location.replace("nuevacita.php?fecha="+fecha+"&curp="+curp+"&cedprof="+cedprof);
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