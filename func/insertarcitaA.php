<?php
    //obtener datos para login
    $hora=$_GET["hora"];
    $fecha=$_GET["fecha"];
    $curp=$_GET["curp"];
    $cedprof=$_GET["id"];
   
    require_once __DIR__.'\..\database\Connection.php'; 

        use PostgreSQLPHPconnect\Connection as Connection;

    try{

        // create a PostgreSQL database connection
        $pdo = Connection::get()->connect("admin");

        $sql='INSERT INTO cita("CURP_paciente", fecha, hora, ced_prof_medico)
        VALUES (:curp, :fecha, :hora, :cedprof);';
        //Se crea la consulta preparada
        $resultado=$pdo->prepare($sql);	        
        $resultado->execute(array(  ":curp"=>$curp,
                                    ":fecha"=>$fecha,
                                    ":hora"=>$hora,
                                    ":cedprof"=>$cedprof));

        $row = $resultado->fetch(PDO::FETCH_ASSOC);  
        if(!$row){
            echo "Funcionó la sentencia";
            header("Location: ../asistente.php?exitoinscita=true");
        }
        $resultado->closeCursor();             
            

    }catch(Exception $e){
        echo "Error en la ejecución de la consulta<br>".$e;
            echo "Mensaje: " . $e->GetMessage() . "<br>";
            echo "Línea: " . $e->getLine();
        header("Location: ../asistente.php?exitoinscita=false");    
    }

?>

