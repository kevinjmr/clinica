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
	<title>Pagina de administracion</title>
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
    			<a class="font-weight-bold py-2 px-2 d-none d-md-inline-block" >Bienvenido: <?php echo $_SESSION['nombre'] ?>  </a>
    		</div>
    		<div class="col-8 container d-flex flex-column flex-md-row justify-content-end">
    			<a class="text-dark py-2 px-2 d-none d-md-inline-block" href="#medicos">Medicos</a>
      			<a class="text-dark py-2 px-2 d-none d-md-inline-block" href="#asistentes">Asistentes</a>
      			<a class="text-dark py-2 px-2 d-none d-md-inline-block" href="#pacientes">Paciente</a>
      			<a class="text-dark py-2 px-2 d-none d-md-inline-block" href="#administrador">Administradores</a>
      			<a class="text-dark py-2 px-2 d-none d-md-inline-block" href="#consultorios">Consultorios</a>
      			<a class="text-dark py-2 px-2 d-none d-md-inline-block" href="cerrar.php">Cerrar Sesion</a>
    		</div>
    	</div>
  </nav>

  <!--Carga de la tabla de medicos desde la bd-->
 	<div id="medicos" class="col-12 container d-flex flex-column flex-md-row">
 		<div class="col-1 container d-flex flex-column flex-md-row">
 		</div>
 		<div class="col-9 container flex-md-row" id="tabla-medicos">
 			  <h4 class="py-2">Medicos</h4>
            <table class="table table-sm table-bordered" style=" background-color: white " cellspacing="0">
                <thead>
                    <tr>
                      <th>Cedula Profesional</th>
                      <th>Nombre</th>
                      <th>Telefono</th>
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
                          // get all stocks data
                          $result = $funcion->getMedicos();  

                      }catch (PDOException $e){
                          // report error message
                          echo $e->getMessage();
                      }
                      foreach ($result as $res) :
                    ?>
                      <tr>
                        <td><a href="editarmedico.php?cedprof=<?php echo $res[0]; ?>">
                          <?php echo $res[0]; ?></a>
                        </td>
                        <td>
                          <?php echo $res[1]; echo $res[2]; echo $res[3] ?>
                        </td>
                        <td>
                          <?php echo $res[4]; ?>
                        </td>
                      </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
 		</div>
 		<div class="col-2 container d-flex flex-column">
 			<div class="col-1">
 			<a class="btn btn-outline-blue " href="#modal-insert-medico" data-toggle="modal">&#10010</a>
 			</div>
 			<div class="col-1">
 			</div>
 		</div>
 	</div>

<!--Carga de la tabla de asistentes desde la bd-->
 	<div id="asistentes" class="col-12 container d-flex flex-column flex-md-row">
 		<div class="col-1 container d-flex flex-column flex-md-row">
 		</div>
 		<div class="col-9 container flex-md-row" id="tabla-Asistentes">
 		<h4 >Asistentes</h4>
        <table class="table table-sm table-bordered" style=" background-color: white " cellspacing="0">
                <thead>
                    <tr>
                      <th>RFC</th>
                      <th>Nombre</th>
                      <th>Telefono</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                      
                      try{
                          // get all stocks data
                          $result = $funcion->getAsistentes();  

                      }catch (PDOException $e){
                          // report error message
                          echo $e->getMessage();
                      }
                      foreach ($result as $res) :
                    ?>
                      <tr>
                        <td><a href="editarasistente.php?rfc=<?php echo $res[0]; ?>">
                          <?php echo $res[0]; ?></a>
                        </td>
                        <td>
                          <?php echo $res[1]; echo $res[2]; echo $res[3] ?>
                        </td>
                        <td>
                          <?php echo $res[4]; ?>
                        </td>
                      </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
 		</div>	
 		<div class="col-2 container d-flex flex-column flex-md-row">
 			<div class="col-1">
 			<a class="btn btn-outline-blue " href="#modal-insert-asistente" data-toggle="modal">&#10010</a>
 			</div>
 			<div class="col-1">
 			</div>
 		</div>		
 	</div>

<!--Carga de la tabla de pacientes desde la bd-->
 	<div id="pacientes" class="col-12 container d-flex flex-column flex-md-row">
 		<div class="col-1 container d-flex flex-column flex-md-row">
 		</div>
 		<div class="col-9 container flex-md-row" id="tabla-pacientes">
 		<h4>Pacientes</h4>
        <table class="table table-sm table-bordered" style=" background-color: white " cellspacing="0">
                <thead>
                    <tr>
                      <th>CURP</th>
                      <th>Nombre</th>
                      <th>Telefono</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                      
                      try{
                          // create a PostgreSQL database connection
                          $pdo = Connection::get()->connect("admin");
                          $funcion = new Funcion($pdo);
                          // get all stocks data
                          $result = $funcion->getPacientes();  

                      }catch (PDOException $e){
                          // report error message
                          echo $e->getMessage();
                      }
                      foreach ($result as $res) :
                    ?>
                      <tr>
                        <td><a href="editarpaciente.php?CURP=<?php echo $res[0]; ?>">
                          <?php echo $res[0]; ?></a>
                        </td>
                        <td>
                          <?php echo $res[1]; echo $res[2]; echo $res[3] ?>
                        </td>
                        <td>
                          <?php echo $res[4]; ?>
                        </td>
                      </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
 		</div>	
 		<div class="col-2 container d-flex flex-column flex-md-row">
 			<div class="col-1">
 			<a class="btn btn-outline-blue " href="#modal-insert-Paciente" data-toggle="modal">&#10010</a>
 			</div>
 			<div class="col-1">
 			</div>
 		</div>		
 	</div>

<!--Carga de la tabla de administradores desde la bd-->
 	<div  id="administrador" class="col-12 container d-flex flex-column flex-md-row">
 		<div class="col-1 container d-flex flex-column flex-md-row">
 		</div>
 		<div class="col-9 container flex-md-row" id="tabla-administrador">
 		<h4>Administradores</h4>
        <table class="table table-sm table-bordered" style=" background-color: white " cellspacing="0">
                <thead>
                    <tr>
                      <th>RFC</th>
                      <th>Nombre</th>
                      <th>Telefono</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                      
                      try{
                          // create a PostgreSQL database connection
                          $pdo = Connection::get()->connect("admin");
                          $funcion = new Funcion($pdo);
                          // get all stocks data
                          $result = $funcion->getAdmins();  

                      }catch (PDOException $e){
                          // report error message
                          echo $e->getMessage();
                      }
                      foreach ($result as $res) :
                    ?>
                      <tr>
                        <td><a href="editaradmin.php?RFC=<?php echo $res[6]; ?>">
                          <?php echo $res[6]; ?></a>
                        </td>
                        <td>
                          <?php echo $res[0]; echo $res[1]; echo $res[2] ?>
                        </td>
                        <td>
                          <?php echo $res[3]; ?>
                        </td>
                      </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
 		</div>	
 		<div class="col-2 container d-flex flex-column flex-md-row">
 			<div class="col-1">
 			<a class="btn btn-outline-blue " href="#modal-insert-Administrador" data-toggle="modal">&#10010</a>
 			</div>
 			<div class="col-1">
 			</div>
 		</div>		
 	</div>

<!--Carga de la tabla de consultorios desde la bd-->
 	<div  id="consultorios" class="col-12 container d-flex flex-column flex-md-row">
 		<div class="col-1 container d-flex flex-column flex-md-row">
 		</div>
 		<div class="col-9 container flex-md-row" id="tabla-consultorio">
 		<h4>Consultorios</h4>
        <table class="table table-sm table-bordered" style=" background-color: white " cellspacing="0">
                <thead>
                    <tr>
                      <th>ID</th>
                      <th>Medico</th>
                      <th>Secretaria</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                      
                      try{
                          // create a PostgreSQL database connection
                          $pdo = Connection::get()->connect("admin");
                          $funcion = new Funcion($pdo);
                          // get all stocks data
                          $result = $funcion->getConsultorios();  

                      }catch (PDOException $e){
                          // report error message
                          echo $e->getMessage();
                      }
                      foreach ($result as $res) :
                    ?>
                      <tr>
                        <td><a href="editarconsultorio.php?id=<?php echo $res[0]; ?>">
                          <?php echo $res[0]; ?></a>
                        </td>
                        <td>
                          <?php echo $res[1]; ?>
                        </td>
                        <td>
                          <?php echo $res[2]; ?>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
 		</div>	
 		<div class="col-2 container d-flex flex-column flex-md-row">
 			<div class="col-1">
 			<a class="btn btn-outline-blue " href="#modal-insert-consultorio" data-toggle="modal">&#10010</a>
 			</div>
 			<div class="col-1">
 			</div>
 		</div>		
 	</div>

  <!-- modal para insertar medico -->
<div class="modal fade" id="modal-insert-medico">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">Insertar Nuevo Medico</h5>
        </div>
        <div class="modal-body">
          <form autocomplete="off" id="c_form-h" action="func/insertarmedico.php" method="POST">
            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="inputcedprof" placeholder="Cedula Profecional" required> </div>
            </div>
            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="inputnombre" placeholder="Nombre"  required> </div>
            </div>
            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="inputapaterno" placeholder="Apellido Paterno" required> </div>
            </div>
            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="inputamaterno" placeholder="Apellido Materno" required> </div>
            </div>
            <div class="form-group row">
              <div class="col-12">
                <input type="numer" class="form-control" name="inputtelefono" placeholder="Telefono" required> </div>
            </div>
            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="inputespecialidad" placeholder="Especialidad" required> </div>
            </div>
            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="inputdireccion" placeholder="Direccion" required> </div>
            </div>
            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="inputescuela" placeholder="Escuela" required> </div>
            </div>
            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" name="inputpass" placeholder="Contraseña" required> </div>
            </div>   
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
          <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
        </div>
      </form>

      </div>
    </div><!--modal-dialog-->
  </div>

 <!-- modal para insertar asistente -->
<div class="modal fade" id="modal-insert-asistente">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">Insertar Nuevo Asistente</h5>
        </div>
        <div class="modal-body">
          <form autocomplete="off" id="c_form-h" action="func/insertarasistente.php" method="POST">
            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="inputrfc" placeholder="RFC" required> </div>
            </div>
            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="inputnombre" placeholder="Nombre" required> </div>
            </div>
            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="inputapaterno" placeholder="Apellido Paterno" required> </div>
            </div>
            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="inputamaterno" placeholder="Apellido Materno" required> </div>
            </div>
            <div class="form-group row">
              <div class="col-12">
                <input type="numeric" class="form-control" name="inputtelefono" placeholder="Telefono" required> </div>
            </div>
            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="inputdireccion" placeholder="Direccion" required> </div>
            </div>
            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" name="inputpass" placeholder="Contraseña" required> </div>
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
          <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- modal para insertar paciente -->
<div class="modal fade" id="modal-insert-Paciente">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">Insertar Nuevo Paciente</h5>
        </div>
        <div class="modal-body">
          <form id="c_form-h" class="" action="func/insertarpaciente.php" method="POST">
            
            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="inputcurp" placeholder="CURP" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="apaterno" placeholder="Apellido Paterno" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="amaterno" placeholder="Apellido Materno" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="numeric" class="form-control" name="telefono" placeholder="Telefono" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="direccion" placeholder="Direccion" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="numeric" class="form-control" name="edad" placeholder="Edad" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="estadocivil" placeholder="Estado Civil" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="ocupacion" placeholder="Ocupacion" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="escolaridad" placeholder="Escolaridad" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="lugardeorigen" placeholder="Lugar de origen" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="lugarderesidencia" placeholder="Lugar de residencia" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" name="pass" placeholder="Contraseña" required> </div>
            </div>
            

            <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
          <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
        </div>
            
          </form>
        </div>
        
      </div>
    </div>
  </div>



<!-- modal para insertar administrador -->
<div class="modal fade" id="modal-insert-Administrador">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">Insertar Nuevo administrador</h5>
        </div>
        <div class="modal-body">
          <form id="c_form-h" class="" action="func/insertaradministrador.php" method="POST">
            
            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="rfc" placeholder="RFC" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="apaterno" placeholder="Apellido Paterno" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="amaterno" placeholder="Apellido Materno" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="numeric" class="form-control" name="telefono" placeholder="Telefono" required> </div>
            </div>           

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="direccion" placeholder="Direccion" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" name="pass" placeholder="Contraseña" required> </div>
            </div>
            
            <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
          <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
        </div>
            
          </form>
        </div>
        
      </div>
    </div>
  </div>


 <!-- modal para insertar consultorio -->
<div class="modal fade" id="modal-insert-consultorio">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">Insertar Nuevo Consultorio</h5>
        </div>
        <div class="modal-body">
          <form autocomplete="off" id="c_form-h" action="func/insertarconsultorio.php" method="POST">
            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="inputmedico" placeholder="Cedula profecional del Medico" required> </div>
            </div>
            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="inputsecretaria" placeholder="RFC del asistente" required> </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
    <!--Script alertas-->
    <?php
      if(isset($_GET["exitoinsmedico"])){
        if( $_GET["exitoinsmedico"]=='true'){echo "
          <script > alert('Medico ingresado con exito!'); </script>";}
        else{echo "
          <script > alert('Medico no ingresado, revise su informacion.'); </script>";}
      }
      if(isset($_GET["exitoeditmedico"])){
        if( $_GET["exitoeditmedico"]=='true'){echo "
          <script > alert('Medico editado con exito!'); </script>";}
        else{echo "
          <script > alert('Medico no editado, revise su informacion.'); </script>";}
      }
      if(isset($_GET["exitodelmedico"])){
        if( $_GET["exitodelmedico"]=='true'){echo "
          <script > alert('Medico eliminado con exito!'); </script>";}
        else{echo "
          <script > alert('Medico no eliminado, revise su informacion.'); </script>";}
      }


      if(isset($_GET["exitoinsasistente"])){
        if( $_GET["exitoinsasistente"]=='true'){echo "
          <script > alert('Asistente ingresado con exito!'); </script>";}
        else{echo "
          <script > alert('Asistente no ingresado, revise su informacion.'); </script>";}
      }
      if(isset($_GET["exitoeditasistente"])){
        if( $_GET["exitoeditasistente"]=='true'){echo "
          <script > alert('Asistente editado con exito!'); </script>";}
        else{echo "
          <script > alert('Asistente no editado, revise su informacion.'); </script>";}
      }
      if(isset($_GET["exitodelasistente"])){
        if( $_GET["exitodelasistente"]=='true'){echo "
          <script > alert('Asistente eliminado con exito!'); </script>";}
        else{echo "
          <script > alert('Asistente no eliminado, revise su informacion.'); </script>";}
      }


      if(isset($_GET["exitoinsconsultorio"])){
        if( $_GET["exitoinsconsultorio"]=='true'){echo "
          <script > alert('Consultorio insertado con exito!'); </script>";}
        else{echo "
          <script > alert('Consultorio no insertado, revise su informacion.'); </script>";}
      }
      if(isset($_GET["exitoeditconsultorio"])){
        if( $_GET["exitoeditconsultorio"]=='true'){echo "
          <script > alert('Consultorio editado con exito!'); </script>";}
        else{echo "
          <script > alert('Consultorio no editado, revise su informacion.'); </script>";}
      }
      if(isset($_GET["exitodelconsultorio"])){
        if( $_GET["exitodelconsultorio"]=='true'){echo "
          <script > alert('Consultorio eliminado con exito!'); </script>";}
        else{echo "
          <script > alert('Consultorio no eliminado, revise su informacion.'); </script>";}
      }
      
      if(isset($_GET["exitoinspaciente"])){
        if( $_GET["exitoinspaciente"]=='true'){echo "
          <script > alert('Paciente ingresado con exito!'); </script>";}
        else{echo "
          <script > alert('Paciente no ingresado, revise su informacion.'); </script>";}
      }
      if(isset($_GET["exitoeditpaciente"])){
        if( $_GET["exitoeditpaciente"]=='true'){echo "
          <script > alert('Paciente editado con exito!'); </script>";}
        else{echo "
          <script > alert('Paciente no editado, revise su informacion.'); </script>";}
      }
      if(isset($_GET["exitodelpaciente"])){
        if( $_GET["exitodelpaciente"]=='true'){echo "
          <script > alert('Paciente eliminado con exito!'); </script>";}
        else{echo "
          <script > alert('Paciente no eliminado, revise su informacion.'); </script>";}
      }


      if(isset($_GET["exitoinsadministrador"])){
        if( $_GET["exitoinsadministrador"]=='true'){echo "
          <script > alert('Admin ingresado con exito!'); </script>";}
        else{echo "
          <script > alert('Admin no ingresado, revise su informacion.'); </script>";}
      }
      if(isset($_GET["exitoeditadministrador"])){
        if( $_GET["exitoeditadministrador"]=='true'){echo "
          <script > alert('Admin editado con exito!'); </script>";}
        else{echo "
          <script > alert('Admin no editado, revise su informacion.'); </script>";}
      }
      if(isset($_GET["exitodeladministrador"])){
        if( $_GET["exitodeladministrador"]=='true'){echo "
          <script > alert('Admin eliminado con exito!'); </script>";}
        else{echo "
          <script > alert('Admin no eliminado, revise su informacion.'); </script>";}
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
