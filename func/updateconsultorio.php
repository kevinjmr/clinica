<?php
    //obtener datos para login
    $id=$_POST["inputid"];
    $medico=$_POST["inputmedico"];
    $secretaria=$_POST["inputsecretaria"];
    
    require_once __DIR__.'\..\database\Connection.php'; 

        use PostgreSQLPHPconnect\Connection as Connection;

    try{

        // create a PostgreSQL database connection
        $pdo = Connection::get()->connect("admin");
        
        $sql='UPDATE public.consultorio
        SET "Medico"=:medico, "Secretaria"=:secretaria
        WHERE "Id" = :id';
        //Se crea la consulta preparada
        $resultado=$pdo->prepare($sql);	        
        $resultado->execute(array(  ":id"=>$id,
                                    ":medico"=>$medico,
                                    ":secretaria"=>$secretaria));
        
        $row = $resultado->fetch(PDO::FETCH_ASSOC);  
        if(!$row){
            echo "Funcionó la sentencia";
            header("Location: ../administrador.php?exitoeditconsultorio=true");
        }
        $resultado->closeCursor();             
            

    }catch(Exception $e){
        echo "Error en la ejecución de la consulta<br>".$e;
            echo "Mensaje: " . $e->GetMessage() . "<br>";
            echo "Línea: " . $e->getLine();
        header("Location: ../administrador.php?exitoeditconsultorio=false");    
    }

?>