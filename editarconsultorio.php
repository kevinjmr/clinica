<!DOCTYPE html>
<html>
<head>
	<title>Editar Consultorio</title>
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
    $id = $_GET['id'];

    require_once __DIR__.'..\database\Connection.php';
    require_once __DIR__.'..\database\Funcion.php'; 
    use PostgreSQLPHPconnect\Connection as Connection;
    use PostgreSQLPHPconnect\Funcion as Funcion;
    try{
        // create a PostgreSQL database connection
        $pdo = Connection::get()->connect("admin");
        $funcion = new Funcion($pdo);
        // get all stocks data
        $result = $funcion->getConsultorio($id);  ?>
    <nav class="light-blue site-header py-1">
    	<div class="col-12 container d-flex flex-column flex-md-row">
    		<div class="col-12 container d-flex flex-column flex-md-row">
    			<a class="font-weight-bold py-2 px-2 d-none d-md-inline-block" >Editar Consultorio: <?php echo $id; ?>  </a>
    		</div>
    	</div>
    </nav>
    <form id="c_form-h" action="func/updateconsultorio.php" method="POST">
      
      <div class="col-12">
        <div class="invisible form-group row">
          <div class="col-8">
            <input value="<?php echo trim($id); ?>" type="text" class="form-control" name="inputid" placeholder="Id del consultorio" required> </div>
        </div>
        <div class="form-group row">
          <div class="col-8">
            <input value="<?php echo trim($result[0]); ?>" type="text" class="form-control" name="inputmedico" placeholder="Medico" title="Ingresar la Cedula del Medico" required> </div>
        </div>
        <div class="form-group row">
          <div class="col-8">
            <input value="<?php echo trim($result[1]); ?>" type="text" class="form-control" name="inputsecretaria" placeholder="Secretaria" title="Ingresar el RFC del Asistente" required> </div>
        </div>
        <div class="form-group row">
          <div class="col-8">
            <span class="text-align-left badge badge-pill badge-light">Al hacer click en el boton de 'GUARDAR' o en el de 'ELIMINAR' se realizaran cambios irreversibles. Verifique su informacion antes.</span></div>
        </div>  
      </div>
      <div class="form-group row col-8 justify-content-end">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="button" class="btn btn-info" onclick="window.location.href='administrador.php'">Cancelar</button>
        <button type="button" class="btn btn-secondary" onclick="window.location.href='func/eliminarconsultorio.php?id=<?php echo trim($id); ?>'">Eliminar</button>
      </div>
    </div>
  </form>  
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
    <!--Script alertas-->
  </footer>
  
</html>