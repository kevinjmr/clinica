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
            <a class="text-dark py-2 px-2 d-none d-md-inline-block" href="#">Cerrar Session</a>
    		</div>
    	</div>
  </nav>

 <nav>
 	<div class="col-12 container d-flex flex-column flex-md-row">
 		<div class="col-1 container d-flex flex-column flex-md-row">
 		</div>
 		<div class="col-9 container flex-md-row" id="tabla-medicos">

 		
 			  <h4 class="py-2">Medicos</h4>
            <table class="table table-sm table-bordered" style=" background-color: white " cellspacing="0">
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
 		<div class="col-9 container flex-md-row" id="tabla-Asistentes">
 		<h4>Asistentes</h4>
        <table class="table table-sm table-bordered" style=" background-color: white " cellspacing="0">
                <thead>
                    <tr>
                      <th>RFC</th>
                      <th>Nombre</th>
                      <th>Telefono</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td><a onclick="editarmedico('Work1')">masidonpiasd</a></td>
                      <td>Mariana leal noseque</td>
                      <td>llamame ♥</td>
                    </tr>
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

 </nav>

  <nav>
 	<div class="col-12 container d-flex flex-column flex-md-row">
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
                    <tr>
                      <td><a onclick="editarmedico('Work1')">LMfoo23h8he</a></td>
                      <td>Luis mario Aguilar Guzman</td>
                      <td>3230727</td>
                    </tr>
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

 </nav>

  <nav>
 	<div class="col-12 container d-flex flex-column flex-md-row">
 		<div class="col-1 container d-flex flex-column flex-md-row">
 		</div>
 		<div class="col-9 container flex-md-row" id="tabla-administrador">
 		<h4>Administrador</h4>
        <table class="table table-sm table-bordered" style=" background-color: white " cellspacing="0">
                <thead>
                    <tr>
                      <th>RFC</th>
                      <th>Nombre</th>
                      <th>Telefono</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td><a onclick="editarmedico('Work1')">Paid3fgaog98daw</a></td>
                      <td>Paquito de la O</td>
                      <td>3212322</td>
                    </tr>
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

 </nav>

 <nav>
 	<div class="col-12 container d-flex flex-column flex-md-row">
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
                    <tr>
                      <td><a onclick="editarmedico('Work1')">♥</a></td>
                      <td>Cesar Reynel Ortiz</td>
                      <td>Mariana Leal noseque</td>
                    </tr>
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
          <form id="c_form-h" action="func/insertarmedico.php" method="POST">
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
          <form id="c_form-h" class="">
            
            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="" placeholder="RFC" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="" placeholder="Nombre" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="" placeholder="Apellido Paterno" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="" placeholder="Apellido Materno" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="numeric" class="form-control" name="" placeholder="Telefono" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="" placeholder="Direccion" required> </div>
            </div>


            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" name="" placeholder="Contraseña" required> </div>
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
                <input type="text" class="form-control" name="" placeholder="CURP" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="" placeholder="Nombre" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="" placeholder="Apellido Paterno" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="" placeholder="Apellido Materno" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="numeric" class="form-control" name="" placeholder="Telefono" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="" placeholder="Direccion" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="numeric" class="form-control" name="" placeholder="Edad" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="" placeholder="Estado Civil" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="" placeholder="Ocupacion" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="" placeholder="Escolaridad" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="" placeholder="Lugar de origen" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="" placeholder="Lugar de residencia" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" name="" placeholder="Contraseña" required> </div>
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
                <input type="text" class="form-control" name="" placeholder="RFC" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="" placeholder="Nombre" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="" placeholder="Apellido Paterno" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="" placeholder="Apellido Materno" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="numeric" class="form-control" name="" placeholder="Telefono" required> </div>
            </div>           

            <div class="form-group row">
              <div class="col-12">
                <input type="text" class="form-control" name="" placeholder="Direccion" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" name="" placeholder="Contraseña" required> </div>
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
                <input type="text" class="form-control" name="" placeholder="Cedula Profecional" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Nombre" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Apellido Paterno" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Apellido Materno" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Telefono" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Especialidad" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Direccion" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Escuela" required> </div>
            </div>

            <div class="form-group row">
              <div class="col-12">
                <input type="password" class="form-control" id="inputpasswordh" placeholder="Contraseña" required> </div>
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
    <?php
      if(isset($_GET["exitoinsmedico"])){
        if( $_GET["exitoinsmedico"]=='true'){echo "
          <script > alert('Medico ingresado con exito!'); </script>";}
        else{echo "
          <script > alert('Medico no ingresado, revise su informacion.'); </script>";}
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