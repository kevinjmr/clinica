<?php 
    //obtener datos para login
    $user=$_GET["inputuser"];
    $pass=$_GET["inputpass"];
    $logintype=$_GET["type"];

    require_once __DIR__.'/database/Connection.php'; 

		use PostgreSQLPHPconnect\Connection as Connection;

	try{

		// create a PostgreSQL database connection
		$pdo = Connection::get()->connect("admin");

		if($user==="admin" && $pass==="admin123"){
            session_start();
            $_SESSION['nombre']= $user;
            $_SESSION['contrasenia']= $pass;
            header("location:administrador.php");
        }else if($user!="" || $pass!=""){
            if($logintype==="1"){
                
                $sql='select * from medico where medico."Ced_prof"= :user';
                //Se crea la consulta preparada
                $resultado=$pdo->prepare($sql);	        
                $resultado->execute(array(":user"=>$user));
        
                $row = $resultado->fetch(PDO::FETCH_ASSOC);
                $real = $row['pass'];    
                if(trim($real)==trim($pass)) {

                    session_start();
                    $_SESSION['nombre']= $user;
                    $_SESSION['contrasenia']= $pass;
                    header("location:medico.php");
                }else{
                    echo"<script>alert('Contraseña incorrecta')</script>";
                    header("location:index.php?fallopass=true");
                }
                $resultado->closeCursor();             
            }elseif($logintype==="2"){
                
                $sql='select * from secretaria where secretaria."RFC"= :user';
                //Se crea la consulta preparada
                $resultado=$pdo->prepare($sql);	        
                $resultado->execute(array(":user"=>$user));
        
                $row = $resultado->fetch(PDO::FETCH_ASSOC);
                $real = $row['pass'];    
                if(trim($real)==trim($pass)) {
                    session_start();
                    $_SESSION['nombre']= $user;
                    $_SESSION['contrasenia']= $pass;
                    header("location:asistente.php");
                }else{
                    echo"<script>alert('Contraseña incorrecta')</script>";
                    header("location:index.php?fallopass=true");
                }
                $resultado->closeCursor();      
            }else {
                
                $sql='select * from paciente where paciente."CURP"= :user';
                //Se crea la consulta preparada
                $resultado=$pdo->prepare($sql);	        
                $resultado->execute(array(":user"=>$user));
        
                $row = $resultado->fetch(PDO::FETCH_ASSOC);
                $real = $row['pass'];    
                if(trim($real)==trim($pass)) {
                    session_start();
                    $_SESSION['nombre']= $user;
                    $_SESSION['contrasenia']= $pass;
                    header("location:paciente.php");
                }else{
                    echo"<script>alert('Contraseña incorrecta')</script>";
                    header("location:index.php?fallopass=true");
                }
                $resultado->closeCursor();      
            }
        }else{
            echo"<script>alert('Contraseña incorrecta')</script>";
            header("location:index.php?fallopass=true");
                
        }

	}catch(Exception $e){
		echo "Error en la ejecución de la consulta<br>".$e;
			echo "Mensaje: " . $e->GetMessage() . "<br>";
			echo "Línea: " . $e->getLine();
	}
?>