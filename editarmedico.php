<!DOCTYPE html>
<html>
<head>
	<title>Editar Medico</title>
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
    $cedprof = $_GET['cedprof'];

    require_once __DIR__.'..\database\Connection.php';
    require_once __DIR__.'..\database\Funcion.php'; 
    use PostgreSQLPHPconnect\Connection as Connection;
    use PostgreSQLPHPconnect\Funcion as Funcion;
    try{
        // create a PostgreSQL database connection
        $pdo = Connection::get()->connect("admin");
        $funcion = new Funcion($pdo);
        // get all stocks data
        $result = $funcion->getMedico($cedprof);  ?>
    <nav class="light-blue site-header py-1">
    	<div class="col-12 container d-flex flex-column flex-md-row">
    		<div class="col-12 container d-flex flex-column flex-md-row">
    			<a class="font-weight-bold py-2 px-2 d-none d-md-inline-block" >Editar Medico: <?php echo $cedprof; ?>  </a>
    		</div>
    	</div>
    </nav>

    <div class="row">
    <div clas="col-12">
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <form action="func/updatemedico.php" method="POST">
        <div class="invisible form-group">
            <input value="<?php echo trim($cedprof); ?>" type="text" class="form-control" name="inputcedprof" placeholder="Cedula Profecional" required>
        </div>
        <div class="form-group">
          <label>Nombre:</label>
          <input value="<?php echo trim($result[0][0]); ?>" type="text" class="form-control " name="inputnombre" placeholder="Nombre"  required> 
        </div>
        <div class="form-group">
          <label>Apellido paterno:</label>
          <input value="<?php echo trim($result[0][1]); ?>" type="text" class="form-control" name="inputapaterno" placeholder="Apellido Paterno" required>
        </div>
        <div class="form-group">
          <label>Apellido meterno:</label>
            <input value="<?php echo trim($result[0][2]); ?>" type="text" class="form-control" name="inputamaterno" placeholder="Apellido Materno" required>
        </div>
        <div class="form-group">
        <label>Telefono:</label>
            <input value="<?php echo trim($result[0][3]); ?>" type="numer" class="form-control" name="inputtelefono" placeholder="Telefono" required>
        </div>
        <div class="form-group">
        <label>Especialidad:</label>
            <input value="<?php echo trim($result[0][4]); ?>" type="text" class="form-control" name="inputespecialidad" placeholder="Especialidad" required>
        </div>
        <div class="form-group">
        <label>Direccion:</label>
            <input value="<?php echo trim($result[0][5]); ?>" type="text" class="form-control" name="inputdireccion" placeholder="Direccion" required>
        </div>
        <div class="form-group">
        <label>Escuela:</label>
            <input value="<?php echo trim($result[0][0]); ?>" type="text" class="form-control" name="inputescuela" placeholder="Escuela" required>
        </div>
        <div class="form-group">
        <label>Contraseña (Dejar vacio si no desea cambiarla):</label>
            <input type="password" class="form-control" name="inputpass" placeholder="Contraseña">
        </div>  
        <div class="form-group">
            <span class="text-align-left badge badge-pill badge-light">Al hacer click en el boton de 'GUARDAR' o en el de 'ELIMINAR' se realizaran cambios irreversibles. Verifique su informacion antes.</span>
        </div>
        <div class="form-group justify-content-end">
          <button type="submit" class="btn btn-primary">Guardar</button>
          <button type="button" class="btn btn-info" onclick="window.location.href='administrador.php'">Cancelar</button>
          <button type="button" class="btn btn-secondary" onclick="window.location.href='func/eliminarmedico.php?cedprof=<?php echo trim($cedprof); ?>'">Eliminar</button>
        </div> 
        </form>
      </div>
      <div class="col-2"></div>
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
    <!--Script alertas-->
  </footer>
  
</html>