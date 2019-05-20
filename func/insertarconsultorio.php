<?php
    //obtener datos para login
    $medico=$_POST["inputmedico"];
    $secretaria=$_POST["inputsecretaria"];

    require_once __DIR__.'\..\database\Connection.php'; 

        use PostgreSQLPHPconnect\Connection as Connection;

    try{

        // create a PostgreSQL database connection
        $pdo = Connection::get()->connect("admin");

        $sql='INSERT INTO public.consultorio(
            "Medico", "Secretaria")
            VALUES (:medico, :secretaria);';
        //Se crea la consulta preparada
        $resultado=$pdo->prepare($sql);	        
        $resultado->execute(array(  ":medico"=>$medico,
                                    ":secretaria"=>$secretaria));

        $row = $resultado->fetch(PDO::FETCH_ASSOC);  
        if(!$row){
            echo "Funcionó la sentencia";
            header("Location: ../administrador.php?exitoinsconsultorio=true");
        }
        $resultado->closeCursor();             
            

    }catch(Exception $e){
        echo "Error en la ejecución de la consulta<br>".$e;
            echo "Mensaje: " . $e->GetMessage() . "<br>";
            echo "Línea: " . $e->getLine();
        header("Location: ../administrador.php?exitoinsconsultorio=false");    
    }

?>

