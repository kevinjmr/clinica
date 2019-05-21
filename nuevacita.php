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
        <div class="col-4 container d-flex flex-column flex-md-row">
          <a class="font-weight-bold py-2 px-2 d-none d-md-inline-block" >Bienvenido:  <?php echo $_SESSION['nombre'] ?></a>
          
        </div>
        <div class="col-8 container d-flex flex-column flex-md-row flex-md-row">
        <button type="button" class="btn btn-sm btn-info" href="#modal-select-Medico" data-toggle="modal">INFO</button>
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
  			<input type="date" style="border-radius: 5px;" name="">
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
                    <tr>
                      <td><a onclick="editarmedico('Work1')">7:00 A.M.</a></td>
                      <td>Mariana leal sandoval</td>
                    </tr>
                    <tr>
                      <td><a onclick="editarmedico('Work1')">7:30 A.M.</a></td>
                      <td>Mariana leal sandoval</td>
                    </tr>
                    <tr>
                      <td><a onclick="editarmedico('Work1')">8:00 A.M.</a></td>
                      <td>Mariana leal sandoval</td>
                    </tr>
                    <tr>
                      <td><a onclick="editarmedico('Work1')">8:30 A.M.</a></td>
                      <td>Mariana leal sandoval</td>
                    </tr>
                    <tr>
                      <td><a onclick="editarmedico('Work1')">9:00 A.M.</a></td>
                      <td>Mariana leal sandoval</td>
                    </tr>
                    <tr>
                      <td><a onclick="editarmedico('Work1')">9:30 A.M.</a></td>
                      <td>Mariana leal sandoval</td>
                    </tr>
                    <tr>
                      <td><a onclick="editarmedico('Work1')">10:00 A.M.</a></td>
                      <td>Mariana leal sandoval</td>
                    </tr>
                    <tr>
                      <td><a onclick="editarmedico('Work1')">10:30 A.M.</a></td>
                      <td>Mariana leal sandoval</td>
                    </tr>
                    <tr>
                      <td><a onclick="editarmedico('Work1')">11:00 A.M.</a></td>
                      <td>Mariana leal sandoval</td>
                    </tr>
                    <tr>
                      <td><a onclick="editarmedico('Work1')">11:30 A.M.</a></td>
                      <td>Mariana leal sandoval</td>
                    </tr>
                    <tr>
                      <td><a onclick="editarmedico('Work1')">12:00 P.M.</a></td>
                      <td>Mariana leal sandoval</td>
                    </tr>
                    <tr>
                      <td><a onclick="editarmedico('Work1')">12:30 P.M.</a></td>
                      <td>Mariana leal sandoval</td>
                    </tr>
                    <tr>
                      <td><a onclick="editarmedico('Work1')">1:00 P.M.</a></td>
                      <td>Mariana leal sandoval</td>
                    </tr>
                    <tr>
                      <td><a onclick="editarmedico('Work1')">1:30 P.M.</a></td>
                      <td>Mariana leal sandoval</td>
                    </tr>
                    <tr>
                      <td><a onclick="editarmedico('Work1')">2:00 P.M.</a></td>
                      <td>Mariana leal sandoval</td>
                    </tr>
                    <tr>
                      <td><a onclick="editarmedico('Work1')">2:30 P.M.</a></td>
                      <td>Mariana leal sandoval</td>
                    </tr>

                </tbody>
            </table>
  	</div>
  	<div class="col-3 container d-flex flex-column flex-md-row">
  	</div>
  </div>


</body>
</html>