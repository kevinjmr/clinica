<?php
    //obtener datos para login
    $rfc=$_POST["inputrfc"];
    $nombre=$_POST["inputnombre"];
    $apaterno=$_POST["inputapaterno"];
    $amaterno=$_POST["inputamaterno"];
    $telefono=$_POST["inputtelefono"];
    $direccion=$_POST["inputdireccion"];
    $pass=$_POST["inputpass"];

    require_once __DIR__.'\..\database\Connection.php'; 

        use PostgreSQLPHPconnect\Connection as Connection;

    try{

        // create a PostgreSQL database connection
        $pdo = Connection::get()->connect("admin");

        $sql='INSERT INTO public.secretaria(
            "RFC", "Nombre", "APaterno", "AMaterno", "Telefono", "Direccion", pass)
            VALUES (:rfc, :nombre, :apaterno, :amaterno, :telefono, :direccion, :pass);';
        //Se crea la consulta preparada
        $resultado=$pdo->prepare($sql);	        
        $resultado->execute(array(  ":rfc"=>$rfc,
                                    ":nombre"=>$nombre,
                                    ":apaterno"=>$apaterno,
                                    ":amaterno"=>$amaterno,
                                    ":telefono"=>$telefono,
                                    ":direccion"=>$direccion,
                                    ":pass"=>$pass));

        $row = $resultado->fetch(PDO::FETCH_ASSOC);  
        if(!$row){
            echo "Funcionó la sentencia";
            header("Location: ../administrador.php?exitoinsasistente=true");
        }
        $resultado->closeCursor();             
            

    }catch(Exception $e){
        echo "Error en la ejecución de la consulta<br>".$e;
            echo "Mensaje: " . $e->GetMessage() . "<br>";
            echo "Línea: " . $e->getLine();
        header("Location: ../administrador.php?exitoinsasistente=false");    
    }

?>

