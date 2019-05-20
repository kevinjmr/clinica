<?php
    //obtener datos para realizar el insert en la base de datos con el método POST
    $RFC=$_POST["inputRFC"];
    $nombre=$_POST["inputNombre"];
    $apaterno=$_POST["inputAPaterno"];
    $amaterno=$_POST["inputAMaterno"];
    $telefono=$_POST["inputTelefono"];
    $direccion=$_POST["inputDireccion"];
    $pass=$_POST["inputPass"];

    require_once __DIR__.'../../database/Connection.php';
     

        use PostgreSQLPHPconnect\Connection as Connection;

    try{

        // create a PostgreSQL database connection
        $pdo = Connection::get()->connect("admin");

        $sql='INSERT INTO public.secretaria(
            "RFC", "Nombre", "APaterno", "AMaterno", "Telefono", "Direccion", 
            pass)
    VALUES (:rfc, :nombre, :apaterno, :amaterno, :telefono, :direccion, 
            :pass);';
        //Se crea la consulta preparada
        $resultado=$pdo->prepare($sql);	        
        $resultado->execute(array(  ":rfc"=>$RFC,
                                    ":nombre"=>$nombre,
                                    ":apaterno"=>$apaterno,
                                    ":amaterno"=>$amaterno,
                                    ":telefono"=>$telefono,
                                    ":direccion"=>$direccion,
                                    ":pass"=>$pass));

        $row = $resultado->fetch(PDO::FETCH_ASSOC);  
        if(!$row){
            echo "Funcionó la sentencia";
            header("Location: ../administrador.php?exitoinsasis=true");
        }
        $resultado->closeCursor();             
            

    }catch(Exception $e){
        echo "Error en la ejecución de la consulta<br>".$e;
            echo "Mensaje: " . $e->GetMessage() . "<br>";
            echo "Línea: " . $e->getLine();
        header("Location: ../administrador.php?exitoinsasis=false");    
    }


?>