<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
    		<div class="col-7 container d-flex flex-column flex-md-row">
    			<a class="font-weight-bold py-2 px-2 d-none d-md-inline-block" >ADMINISTRACION</a>
    		</div>
    		<div class="col-5 container d-flex flex-column flex-md-row">
    			<a class="text-dark py-2 px-2 d-none d-md-inline-block" href="#">Medicos</a>
      			<a class="text-dark py-2 px-2 d-none d-md-inline-block" href="#">Asistentes</a>
      			<a class="text-dark py-2 px-2 d-none d-md-inline-block" href="#">Paciente</a>
      			<a class="text-dark py-2 px-2 d-none d-md-inline-block" href="#">Administradores</a>
      			<a class="text-dark py-2 px-2 d-none d-md-inline-block" href="#">Consultorios</a>
    		</div>
    	</div>
  </nav>

 <nav>
 	<div class="col-12 container d-flex flex-column flex-md-row">
 		<div class="col-1 container d-flex flex-column flex-md-row">
 		</div>
 		<div class="col-9 container d-flex flex-column flex-md-row" id="tabla-medicos">

 		
 			<div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active table-responsive" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <h4 class="py-2">Medicos</h4>
            <table class="table table-sm table-bordered" cellspacing="0">
                <thead>
                    <tr>
                      <th>Cedula Profecional</th>
                      <th>Nombre</th>
                      <th>Telefono</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td><a onclick="editarmedico('Work1')">kasi12n3iss</a></td>
                      <td>Kevin Jesus Martinez Rico</td>
                      <td>3230727</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>



 		</div>

 		<div class="col-2 container d-flex flex-column">
 			<div class="col-1">
 			<a class="btn btn-outline-blue " href="#modal-insert-medico" data-toggle="modal">&#10010</a>
 			</div>
 			<div class="col-1">
 			</div>
 		</div>

 	</div>

 </nav>

 <nav>
 	<div class="col-12 container d-flex flex-column flex-md-row">
 		<div class="col-1 container d-flex flex-column flex-md-row">
 		</div>
 		<div class="col-9 container d-flex flex-column flex-md-row" id="tabla-Asistentes">
 		<h4>Asistentes</h4>
 		</div>	
 		<div class="col-2 container d-flex flex-column flex-md-row">
 			<div class="col-1">
 			<a class="btn btn-outline-blue " href="#modal-insert-asistente" data-toggle="modal">&#10010</a>
 			</div>
 			<div class="col-1">
 			</div>
 		</div>		
 	</div>

 </nav>

  <nav>
 	<div class="col-12 container d-flex flex-column flex-md-row">
 		<div class="col-1 container d-flex flex-column flex-md-row">
 		</div>
 		<div class="col-9 container d-flex flex-column flex-md-row" id="tabla-pacientes">
 		<h4>Pacientes</h4>
 		</div>	
 		<div class="col-2 container d-flex flex-column flex-md-row">
 			<div class="col-1">
 			<a class="btn btn-outline-blue " href="#modal-insert-Paciente" data-toggle="modal">&#10010</a>
 			</div>
 			<div class="col-1">
 			</div>
 		</div>		
 	</div>

 </nav>

  <nav>
 	<div class="col-12 container d-flex flex-column flex-md-row">
 		<div class="col-1 container d-flex flex-column flex-md-row">
 		</div>
 		<div class="col-9 container d-flex flex-column flex-md-row" id="tabla-administrador">
 		<h4>Administrador</h4>
 		</div>	
 		<div class="col-2 container d-flex flex-column flex-md-row">
 			<div class="col-1">
 			<a class="btn btn-outline-blue " href="#modal-insert-Administrador" data-toggle="modal">&#10010</a>
 			</div>
 			<div class="col-1">
 			</div>
 		</div>		
 	</div>

 </nav>

 <nav>
 	<div class="col-12 container d-flex flex-column flex-md-row">
 		<div class="col-1 container d-flex flex-column flex-md-row">
 		</div>
 		<div class="col-9 container d-flex flex-column flex-md-row" id="tabla-consultorio">
 		<h4>Consultorios</h4>
 		</div>	
 		<div class="col-2 container d-flex flex-column flex-md-row">
 			<div class="col-1">
 			<a class="btn btn-outline-blue " href="#modal-insert-consultorio" data-toggle="modal">&#10010</a>
 			</div>
 			<div class="col-1">
 			</div>
 		</div>		
 	</div>

 </nav>



<
  <!-- modal para insertar medico -->
<div class="modal fade" id="modal-insert-medico">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">Insertar Nuevo Medico</h5>
        </div>
        <div class="modal-body">
          <form id="c_form-h" class="">
            
            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" id="inputmailh" placeholder="Cedula Profecional"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Nombre"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Apellido Paterno"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Apellido Materno"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Telefono"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Especialidad"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Direccion"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Escuela"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Contraseña"> </div>
            </div>

            
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
          <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>


 <!-- modal para insertar asistente -->
<div class="modal fade" id="modal-insert-asistente">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">Insertar Nuevo Asistente</h5>
        </div>
        <div class="modal-body">
          <form id="c_form-h" class="">
            
            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" id="inputmailh" placeholder="RFC"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Nombre"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Apellido Paterno"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Apellido Materno"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Telefono"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Direccion"> </div>
            </div>


            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Contraseña"> </div>
            </div>

            
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
          <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
        </div>
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
          <form id="c_form-h" class="">
            
            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" id="inputmailh" placeholder="CURP"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Nombre"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Apellido Paterno"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Apellido Materno"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Telefono"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Direccion"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Edad"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Estado Civil"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Ocupacion"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Escolaridad"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Lugar de origen"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Lugar de residencia"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Contraseña"> </div>
            </div>

            
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
          <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
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
          <form id="c_form-h" class="">
            
            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" id="inputmailh" placeholder="RFC"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Nombre"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Apellido Paterno"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Apellido Materno"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Telefono"> </div>
            </div>           

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Direccion"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Contraseña"> </div>
            </div>

            
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
          <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
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
          <form id="c_form-h" class="">
            
            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" id="inputmailh" placeholder="Cedula Profecional"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Nombre"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Apellido Paterno"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Apellido Materno"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Telefono"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Especialidad"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Direccion"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Escuela"> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Contraseña"> </div>
            </div>

            
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
          <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
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
  <script >
  	function editarmedico(id){
  	  //document.getElementById('inputmailh').placeholder=id;
      <?php
        require_once __DIR__.'database/Connection.php'; 
        
        use PostgreSQLPHPconnect\Connection as Connection;

        try{
            // create a PostgreSQL database connection
            $pdo = Connection::get()->connect("admin");
            
            $funcion = new Funcion($pdo);
            
            // get all stocks data
            $result = $funcion->getMedico(id);  
        
        }catch (PDOException $e){
              // report error message
              echo $e->getMessage();
        }

        foreach ($result as $res) :
    ?>
        <?php echo htmlspecialchars(ucwords(strtolower($res['nombrec']))); ?>
          
            <?php echo htmlspecialchars(ucwords(strtolower($res['nombree']))); ?>
          
            <?php echo htmlspecialchars($res['status']); ?>
          
            <?php echo htmlspecialchars($res['fechaIngreso']); ?>
          
        <?php endforeach; ?>
      $('#modal-insert-medico').modal('show')
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