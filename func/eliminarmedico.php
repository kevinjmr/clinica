<?php 
    $cedprof = $_GET['cedprof'];
    
    require_once __DIR__.'../../database/Connection.php'; 

        use PostgreSQLPHPconnect\Connection as Connection;

    try{
        // create a PostgreSQL database connection
        $pdo = Connection::get()->connect("admin");
            $sql='DELETE FROM public.medico
            WHERE "Ced_prof"=:cedprof';
            //Se crea la consulta preparada
            $resultado=$pdo->prepare($sql);	        
            $resultado->execute(array(":cedprof"=>$cedprof));
        
        $row = $resultado->fetch(PDO::FETCH_ASSOC);  
        if(!$row){
            echo "Funcionó la sentencia";
            header("Location: ../administrador.php?exitodelmedico=true");
        }
        $resultado->closeCursor();             
            

    }catch(Exception $e){
        echo "Error en la ejecución de la consulta<br>".$e;
            echo "Mensaje: " . $e->GetMessage() . "<br>";
            echo "Línea: " . $e->getLine();
        header("Location: ../administrador.php?exitodelmedico=false");    
    }
?>