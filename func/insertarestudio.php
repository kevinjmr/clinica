<?php
    //obtener datos para login
    $estudio=$_POST["inputestudio"];
    $curp=$_POST["curp"];
   
    require_once __DIR__.'\..\database\Connection.php'; 

        use PostgreSQLPHPconnect\Connection as Connection;

    try{

        // create a PostgreSQL database connection
        $pdo = Connection::get()->connect("admin");

        $sql='INSERT INTO public.estudio("CURP_paciente", descripcion)
        VALUES (:curp, :estudio);';
        //Se crea la consulta preparada
        $resultado=$pdo->prepare($sql);	        
        $resultado->execute(array(  ":curp"=>$curp,
                                    ":estudio"=>$estudio));

        $row = $resultado->fetch(PDO::FETCH_ASSOC);  
        if(!$row){
            echo "Funcionó la sentencia";
            header("Location: ../medico.php?exitoinsestudio=true");
        }
        $resultado->closeCursor();             
            

    }catch(Exception $e){
        echo "Error en la ejecución de la consulta<br>".$e;
            echo "Mensaje: " . $e->GetMessage() . "<br>";
            echo "Línea: " . $e->getLine();
        header("Location: ../medico.php?exitoinsestudio=false");    
    }

?>

