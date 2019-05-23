<!DOCTYPE html>
<html>
<head>
	<title>Cita</title>
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
    require_once __DIR__.'/database/Connection.php';
    require_once __DIR__.'/database/Funcion.php'; 
    use PostgreSQLPHPconnect\Connection as Connection;
    use PostgreSQLPHPconnect\Funcion as Funcion;
    try{
        // create a PostgreSQL database connection
        $pdo = Connection::get()->connect("admin");
        $funcion = new Funcion($pdo);
        // get all stocks data
        $result = $funcion->getCita2($id,$fecha,$hora);  
        $curp = $result[17];
        $sql='select * from historial where "CURP_paciente"=:curp and "Fecha"=:fecha and "Ced_prof_medico"=:cedprof';
        //Se crea la consulta preparada
        $result2=$pdo->prepare($sql);	        
        $result2->execute(array(":curp"=>trim($curp),
                                ":fecha"=>$fecha,
                                ":cedprof"=>$id
                              ));
        $row = $result2->fetch(PDO::FETCH_ASSOC);
        if($row){
          header("Location: vercitaA.php?fecha=$fecha&hora=$hora&id=$id&curp=$curp");
        }else{
          //revisar que este en historial si true entonces vercita.php sino continue ?>

	<nav class="light-blue site-header py-1">
      <div class="col-12 container d-flex flex-column flex-md-row">
        <div class="col-4 container d-flex flex-column flex-md-row">
        </div>
        <div class="col-8 container d-flex flex-column flex-md-row justify-content-end">
          <a class="text-dark py-2 px-2 d-none d-md-inline-block" href="asistente.php">Agenda</a>
          <a class="text-dark py-2 px-2 d-none d-md-inline-block" href="nuevacitaA.php?curp=<?php echo trim($curp);?>&cedprof=<?php echo trim($id);?>">Nueva Cita</a>
            <a class="text-dark py-2 px-2 d-none d-md-inline-block" href="cerrar.php">Cerrar sesion</a>
        </div>
      </div>
  </nav>
<div class="col-12  flex-md-row">
<h3 class="font-weight-bold px-2">medico</h3>
  <div class="col-12 container d-flex flex-column flex-md-row">
  	<div class="col-4 container d-flex flex-column flex-md-row">
  	<h6 class="font-weight-bold px-2">Nombre:</h6>
  	<h6 name=""><?php echo $result[0];echo $result[1];echo $result[2];?></h6>
  </div>
  <div class="col-4 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">Especialidad: </h6>
  	<h6 name=""><?php echo $result[3];?></h6>
  </div>
  <div class="col-4 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">Ced_Prof: </h6>
  	<h6 name=""><?php echo $result[4];?></h6>
  </div>
  </div>



  <div class="col-12 container d-flex flex-column flex-md-row">
  	<div class="col-4 container d-flex flex-column flex-md-row">
  	<h6 class="font-weight-bold px-2">Escuela: </h6>
  	<h6 name=""><?php echo $result[5];?></h6>
  </div>
  <div class="col-4 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">Domicilio: </h6>
  	<h6 name=""><?php echo $result[6];?></h6>
  </div>
  <div class="col-4 container d-flex flex-column flex-md-row">
  	<h6 name=""></a>
  </div>
  </div>
<h3 class="font-weight-bold px-2">Paciente:</h3>
  <div class="col-12 container d-flex flex-column flex-md-row">
  	<div class="col-4 container d-flex flex-column flex-md-row">
  	<h6 class="font-weight-bold px-2">Nombre: </h6>
  	<h6 name=""><?php echo $result[7]; echo $result[8]; echo $result[9];?></h6>
  </div>
  <div class="col-4 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">Edad: </h6>
  	<h6 name=""><?php echo $result[10];?></h6>
  </div>
  <div class="col-4 container d-flex flex-column flex-md-row">
  	<h6 class="font-weight-bold px-2">Est. Civil.: </h6>
  	<h6 name=""><?php echo $result[11];?></h6>
  </div>
  </div>

  <div class="col-12 container d-flex flex-column flex-md-row">
  	
  <div class="col-4 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">Domicilio: </h6>
  	<h6 name=""><?php echo $result[12];?></h6>
  </div>
  <div class="col-4 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">Ocupacion: </h6>
  	<h6 name=""><?php echo $result[13];?></h6>
  </div>
  <div class="col-4 container d-flex flex-column flex-md-row">
  	<h6 class="font-weight-bold px-2">Escolaridad: </h6>
  	<h6 name=""><?php echo $result[14];?></h6>
  </div>
  </div>


  <div class="col-12 container d-flex flex-column flex-md-row">
  	
  <div class="col-4 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">Origen: </h6>
  	<h6 name=""><?php echo $result[15];?></h6>
  </div>
  <div class="col-4 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">Residencia: </h6>
  	<h6 name=""><?php echo $result[16];?></h6>
  </div>
  <div class="invisible col-4 container d-flex flex-column flex-md-row">
  <h6 class="font-weight-bold px-2">nada: </h6>
  	<h6 name="">nada</h6>
  </div>
  </div>

<h3 class="font-weight-bold px-2">Datos de la Cita</h3>
<form autocomlete="off" action="func/inserthistorial.php" method="POST">
  <div class="col-12 container d-flex flex-column flex-md-row">
  	<div class="col-3 container d-flex flex-column flex-md-row">
  	<input type="text" class="form-control" name="inputapnop" placeholder="AP_No_P"> 
  	</div>
  <div class="col-3 container d-flex flex-column flex-md-row">
  	<input type="text" class="form-control" name="inputapp" placeholder="APP"> 
  	</div>
  <div class="col-3 container d-flex flex-column flex-md-row">
  	<input type="text" class="form-control" name="inputahf" placeholder="AHF"> 
  	</div>
   <div class="col-3 container d-flex flex-column flex-md-row">
  	<input type="text" class="form-control" name="inputago" placeholder="AGO"> 
  </div>
  </div>
  <br>
  <div class="col-12 container d-flex flex-column flex-md-row">
  <div class="col-6 container d-flex flex-column flex-md-row">
  	<input type="text" class="form-control" name="inputmenarca" placeholder="Menarca"> 
  	</div>
  <div class="col-3 container d-flex flex-column flex-md-row">
  	<input type="number" min="0" value="0" class="form-control" name="inputritmo" placeholder="Ritmo"> 
  	</div>
   <div class="col-3 container d-flex flex-column flex-md-row">
  	<input type="text" class="form-control" name="inputivsa" placeholder="IVSA"> 
  </div>
  </div>
<br>
  <div class="col-12 container d-flex flex-column flex-md-row">
  	<div class="col-3 container d-flex flex-column flex-md-row">
  	<input type="text" class="form-control" name="inputcesarea" placeholder="Cesarea"> 
  	</div>
  <div class="col-3 container d-flex flex-column flex-md-row">
  	<input type="text" class="form-control" name="inputfum" placeholder="FUM"> 
  	</div>
  <div class="col-3 container d-flex flex-column flex-md-row">
  	<input type="text" class="form-control" name="inputfpp" placeholder="FPP"> 
  	</div>
   <div class="col-3 container d-flex flex-column flex-md-row">
  	<input type="text" class="form-control" name="inputdiu" placeholder="DIU"> 
  </div>
  </div>
<br>
  <div class="col-12 container d-flex flex-column flex-md-row">
  	<div class="col-3 container d-flex flex-column flex-md-row">
  	<input type="text" class="form-control" name="inputhormonales" placeholder="Hormonales"> 
  	</div>
  <br>
  <div class="col-3 container d-flex flex-column flex-md-row">
  	<input type="text" class="form-control" name="inputdocma" placeholder="Docma"> 
  	</div>
  <div class="col-3 container d-flex flex-column flex-md-row">
  	<input type="text" class="form-control" name="inputpapamicolau" placeholder="Papamicolau"> 
  	</div>
   <div class="col-3 container d-flex flex-column flex-md-row">
  </div>
  </div>
<br>
  <div class="col-12 container d-flex flex-column flex-md-row">
  	<div class="col-12 container d-flex flex-column flex-md-row">
  	<input type="text" class="form-control" name="inputpadactual" placeholder="Padecimiento Actual:"> 
  	</div>
  </div>
  <br>
  <div class="col-12 container d-flex flex-column flex-md-row">
  	<div class="col-3 container d-flex flex-column flex-md-row">
  	<input type="text" class="form-control" name="inputta" placeholder="T/A"> 
  	</div>
  <br>
  <div class="col-3 container d-flex flex-column flex-md-row">
  	<input type="text" class="form-control" name="inputfc" placeholder="FC"> 
  	</div> 
  <div class="col-3 container d-flex flex-column flex-md-row">
  	<input type="text" class="form-control" name="inputfr" placeholder="FR"> 
  	</div>
   <div class="col-3 container d-flex flex-column flex-md-row">
   <input type="number" min="0" value="0" class="form-control" name="inputtemp" placeholder="Temperatura"> 
  </div>
  </div>
<br>
<div class="col-12 container d-flex flex-column flex-md-row">
  	<div class="col-3 container d-flex flex-column flex-md-row">
  	<input type="number" min="0" value="0" class="form-control" name="inputpeso" placeholder="Peso"> 
  	</div>
  <br>
  <div class="col-3 container d-flex flex-column flex-md-row">
  	<input type="number" min="0" value="0" class="form-control" name="inputtalla" placeholder="Talla"> 
  	</div>
  <div class="col-3 container d-flex flex-column flex-md-row">
  	<input type="text" class="form-control" name="inputcabeza" placeholder="Cabeza"> 
  	</div>
   <div class="col-3 container d-flex flex-column flex-md-row">
   <input type="text" class="form-control" name="inputtorax" placeholder="Torax"> 
  </div>
  </div>
<br>
<div class="col-12 container d-flex flex-column flex-md-row">
  	<div class="col-3 container d-flex flex-column flex-md-row">
  	<input type="text" class="form-control" name="inputabdomen" placeholder="Abdomen"> 
  	</div>
  <br>
  <div class="col-3 container d-flex flex-column flex-md-row">
  	<input type="text" class="form-control" name="inputextrem" placeholder="Extremidades"> 
  	</div>
  <div class="col-3 container d-flex flex-column flex-md-row">
  	<input type="text" class="form-control" name="inputgenitales" placeholder="Genitales"> 
  	</div>
   <div class="col-3 container d-flex flex-column flex-md-row">
   <input type="text" class="form-control" name="inputvascula" placeholder="Vascula_Perifericos"> 
  </div>
  
  </div>
<br>

<div class="col-12 container d-flex flex-column flex-md-row justify-content-end">
  	
    <div class="invisible col-1 container d-flex flex-column flex-md-row">
  	<input value="<?php echo trim($result[4]);?>" type="text" class="form-control" name="cedprof"> 
  	</div><div class="invisible col-1 container d-flex flex-column flex-md-row">
  	<input value="<?php echo trim($result[17]);?>" type="text" class="form-control" id="curp" name="curp"> 
  	</div><div class="invisible col-1 container d-flex flex-column flex-md-row">
  	<input value="<?php echo trim($fecha);?>" type="text" class="form-control" id="fecha" name="fecha"> 
  	</div>
  
    <div class="form-group row col-8 justify-content-end">
        <button type="submit" disabled="true" class="px-4 btn btn-primary">Guardar</button>
        <button type="button" class="px-4 btn btn-info" onclick="window.location.href='asistente.php'">Cancelar</button>
        <button type="button" class="px-4 btn btn-secondary" onclick="eliminar()">Eliminar</button>
    </div>
    
  </div>
<br>
 </div>
</form>
 
  <?php 
        }
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
    <script > 
    function eliminar(){
      fecha = document.getElementById('fecha').value; 
      curp = document.getElementById('curp').value; 
        if (confirm('¿Estas seguro de eliminar esta cita?')){
          window.location.href='func/eliminarcitaA.php?fecha='+fecha+'&curp='+curp;
        }
    } 
    </script>
    <!--Alertas-->
    
    <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md text-center">
          <small class="d-block mb-3 text-muted">© 2019</small>
        </div>
      </div>
      
    </footer>

</html>