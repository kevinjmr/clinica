<!-- Continua con los valores de la sesión correspondiente -->
<?php
SESSION_START();

$varcomparacion = $_SESSION['nombre'];

if( $varcomparacion == null || $varcomparacion == ''){
  header("location:index.php");
}
?>





<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<body>
 


<nav class="site-header py-1">
    	<div class="col-12 container d-flex flex-column flex-md-row">
<<<<<<< HEAD
    		<div class="col-7 container d-flex flex-column flex-md-row">
    			<a class="py-2 px-2 d-none d-md-inline-block" >ADMINISTRACION; Bienvenido: <?php echo $_SESSION['nombre'] ?>  </a>
    		</div>
    		<div class="col-5 container d-flex flex-column flex-md-row">
    			<a class="py-2 px-2 d-none d-md-inline-block" href="#">Medicos</a>
      			<a class="py-2 px-2 d-none d-md-inline-block" href="#">Asistentes</a>
      			<a class="py-2 px-2 d-none d-md-inline-block" href="#">Paciente</a>
      			<a class="py-2 px-2 d-none d-md-inline-block" href="#">Administradores</a>
      			<a class="py-2 px-2 d-none d-md-inline-block" href="#">Consultorios</a>
      			<a class="py-2 px-2 d-none d-md-inline-block" href="cerrar.php">Cerrar Sesion</a>
=======
    		<div class="col-6 container d-flex flex-column flex-md-row">
    			<a class="font-weight-bold py-2 px-2 d-none d-md-inline-block" >ADMINISTRACION</a>
    		</div>
    		<div class="col-6 container d-flex flex-column flex-md-row">
    			<a class="text-dark py-2 px-2 d-none d-md-inline-block" href="#">Medicos</a>
      			<a class="text-dark py-2 px-2 d-none d-md-inline-block" href="#">Asistentes</a>
      			<a class="text-dark py-2 px-2 d-none d-md-inline-block" href="#">Paciente</a>
      			<a class="text-dark py-2 px-2 d-none d-md-inline-block" href="#">Administradores</a>
      			<a class="text-dark py-2 px-2 d-none d-md-inline-block" href="#">Consultorios</a>
            <a class="text-dark py-2 px-2 d-none d-md-inline-block" href="#">Cerrar Session</a>
>>>>>>> cesar-part
    		</div>
    	</div>
  </nav>

 <nav>
 	<div class="col-12 container d-flex flex-column flex-md-row">
 		<div class="col-1 container d-flex flex-column flex-md-row">
 		</div>
 		<div class="col-9 container d-flex flex-column flex-md-row" id="tabla-medicos">

 		
 			<div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <h4>Medicos</h4>
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Project Name</th>
                                            <th>Employer</th>
                                            <th>Awards</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#" onclick="editarmedico('Work1')">Work 1</a></td>
                                            <td>Doe</td>
                                            <td>john@example.com</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Work 2</a></td>
                                            <td>Moe</td>
                                            <td>mary@example.com</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Work 3</a></td>
                                            <td>Dooley</td>
                                            <td>july@example.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Project Name</th>
                                            <th>Employer</th>
                                            <th>Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">Work 1</a></td>
                                            <td>Doe</td>
                                            <td>john@example.com</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Work 2</a></td>
                                            <td>Moe</td>
                                            <td>mary@example.com</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Work 3</a></td>
                                            <td>Dooley</td>
                                            <td>july@example.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Contest Name</th>
                                            <th>Date</th>
                                            <th>Award Position</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">Work 1</a></td>
                                            <td>Doe</td>
                                            <td>john@example.com</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Work 2</a></td>
                                            <td>Moe</td>
                                            <td>mary@example.com</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Work 3</a></td>
                                            <td>Dooley</td>
                                            <td>july@example.com</td>
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
  		alert(id);
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