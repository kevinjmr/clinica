<?php
    //obtener datos para login
    $receta=$_POST["inputreceta"];
    $curp=$_POST["curp"];
    $cedprof=$_POST["cedprof"];
   
    require_once __DIR__.'\..\database\Connection.php'; 

        use PostgreSQLPHPconnect\Connection as Connection;

    try{

        // create a PostgreSQL database connection
        $pdo = Connection::get()->connect("admin");

        $sql='INSERT INTO public.receta("CURP_paciente", descripcion, ced_prof_medico)
        VALUES (:curp, :receta, :cedprof);';
        //Se crea la consulta preparada
        $resultado=$pdo->prepare($sql);	        
        $resultado->execute(array(  ":curp"=>$curp,
                                    ":receta"=>$receta,
                                    ":cedprof"=>$cedprof));

        $row = $resultado->fetch(PDO::FETCH_ASSOC);  
        if(!$row){
            echo "Funcionó la sentencia";
            header("Location: ../medico.php?exitoinsreceta=true");
        }
        $resultado->closeCursor();             
            

    }catch(Exception $e){
        echo "Error en la ejecución de la consulta<br>".$e;
            echo "Mensaje: " . $e->GetMessage() . "<br>";
            echo "Línea: " . $e->getLine();
        header("Location: ../medico.php?exitoinsreceta=false");    
    }

?>

