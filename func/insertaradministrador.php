<?php
    //obtener datos para login
    $nombre=$_POST["nombre"];
    $apaterno=$_POST["apaterno"];
    $amaterno=$_POST["amaterno"];
    $telefono=$_POST["telefono"];
    $direccion=$_POST["direccion"];
    $pass=$_POST["pass"];
    $RFC=$_POST["rfc"];

    require_once __DIR__.'../../database/Connection.php';
     

        use PostgreSQLPHPconnect\Connection as Connection;

    try{

        // create a PostgreSQL database connection
        $pdo = Connection::get()->connect("admin");

        $sql='INSERT INTO public.administracion(
            "Nombre", "APaterno", "AMaterno", "Telefono", "Direccion", pass, 
            "RFC")
    VALUES (:nombre, :apaterno, :amaterno, :telefono, :direccion, :pass, 
            :rfc)';
        //Se crea la consulta preparada
        $resultado=$pdo->prepare($sql);	        
        $resultado->execute(array( 
                                    ":nombre"=>trim($nombre),
                                    ":apaterno"=>trim($apaterno),
                                    ":amaterno"=>trim($amaterno),
                                    ":telefono"=>trim($telefono),
                                    ":direccion"=>trim($direccion),
                                    ":pass"=>trim($pass),
                                    ":rfc"=>trim($RFC)
                                    )
                                );

        $row = $resultado->fetch(PDO::FETCH_ASSOC);  
        if(!$row){
            echo "Funcionó la sentencia";
            //header("Location: ../administrador.php?exitoinsadministrador=true");
        }
        $resultado->closeCursor();             
            

    }catch(Exception $e){
        echo "Error en la ejecución de la consulta<br>".$e;
            echo "Mensaje: " . $e->GetMessage() . "<br>";
            echo "Línea: " . $e->getLine();
        //header("Location: ../administrador.php?exitoinsadministrador=false");    
    }

?>

