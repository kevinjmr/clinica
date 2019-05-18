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
<nav class="grey site-header py-1">
    	<div class="col-12 container d-flex flex-column flex-md-row">
    		<div class="col-7 container d-flex flex-column flex-md-row">
    			<h2 class="py-2 px-2 d-none d-md-inline-block" href="#modal-select-paciente" data-toggle="modal" >Paciente</h2>
    		</div>
    		<div class="col-5 container d-flex flex-column flex-md-row">
    		</div>
    	</div>
  </nav>

  <nav>
  
  	<div class="col-12 container d-flex flex-column flex-md-row">
    <div class="col-1 container d-flex flex-column flex-md-row"></div>
  		<div class="col-6 container  flex-md-row">
    	<h4 class="py-2 px-2 d-none d-md-inline-block" >Ultima Receta</h4>		
    <div class="card">
    
    	<div class="box" id="ultima-receta">asoidioasjdoijasodjasod ijasoidjioasjd jasoid jasiodj oasjd oasjd jasoidioasjdoijasodjasod ijasoidjioasjd jasoid jasiodj oasjd oasjd jasoidioasjdoijasodjasod ijasoidjioasjd jasoid jasiodj oasjd oasjd jasoidioasjdoijasodjasod ijasoidjioasjd jasoid jasiodj oasjd oasjd jasoidioasjdoijasodjasod ijasoidjioasjd jasoid jasiodj oasjd oasjd jasoidioasjdoijasodjasod ijasoidjioasjd jasoid jasiodj oasjd oasjd j

    	</div>
	</div>


    		</div>
    		<div class="col-4 container flex-md-row">
    			<h4 class="py-2 px-2 d-none d-md-inline-block" >Citas</h4>
    			<div class="card">
    				<div class="box" id="ultima-cita"> asoidioasjdoijasodjasod ijasoidjioasjd jasoid jasiodj oasjd oasjd jasoidioasjdoijasodjasod ijasoidjioasjd jasoid jasiodj oasjd oasjd jasoidioasjdoijasodjasod ijasoidjioasjd jasoid jasiodj oasjd oasjd jasoidioasjdoijasodjasod ijasoidjioasjd jasoid jasiodj oasjd oasjd jasoidioasjdoijasodjasod ijasoidjioasjd jasoid jasiodj oasjd oasjd jasoidioasjdoijasodjasod ijasoidjioasjd jasoid jasiodj oasjd

    				</div>
				</div>
				<a class="btn btn-blue " href="#modal-insert-medico" data-toggle="modal">Agendar cita</a>
    		</div>
        <div class="col-1 container flex-md-row"></div>
  	</div>
  </nav>


<!-- modal para insertar administrador -->
<div class="modal fade" id="modal-select-paciente">
    <div class="modal-dialog modal-lg"  role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">Datos del Paciente:</h5>
        </div>
        <div class="modal-body">
          <form id="c_form-h" class="">
            
            <div class="form-group row">
              <div class="col-6">
                <label type="text" class="form-control" name="CURP">curp</label>
                </div>
                <div class="col-6">
                <label type="text" class="form-control" name="Nombre">nombre</label>
                </div>
            </div>

            <div class="form-group row">
              <div class="col-6">
                <label type="text" class="form-control" name="Telefono">telefono</label>
                </div>
                <div class="col-6">
                <label type="text" class="form-control" name="Direccion">direccion</label>
                </div>
            </div>


            <div class="form-group row">
              <div class="col-6">
                <label type="text" class="form-control" name="Edad">edad</label>
                </div>
                 <div class="col-6">
                <label type="text" class="form-control" name="Edo_civil">estado civil</label>
                </div>
                 
            </div>           

            

            <div class="form-group row">
              <div class="col-6">
                <label type="text" class="form-control" name="Escolaridad">escolaridad</label>
                </div>
                <div class="col-6">
                <label type="text" class="form-control" name="Ocupacion">ocupacion</label>
                </div>
            </div>


            <div class="form-group row">
              <div class="col-6">
                <label type="text" class="form-control" name="Lugar_de_origen">origen </label>
                </div>
                <div class="col-6">
                <label type="text" class="form-control" name="Lugar_de_residencia">residencia</label>
                </div>
            </div>
            
          </form>
        </div>
        <div class="modal-footer">
                  <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
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