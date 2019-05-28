<?php
    //obtener datos para login
    $rfc=$_POST["inputrfc"];
    $nombre=$_POST["inputnombre"];
    $apaterno=$_POST["inputapaterno"];
    $amaterno=$_POST["inputamaterno"];
    $telefono=$_POST["inputtelefono"];
    $direccion=$_POST["inputdireccion"];
    $pass=$_POST["inputpass"];

    require_once __DIR__.'../../database/Connection.php'; 

        use PostgreSQLPHPconnect\Connection as Connection;

    try{

        // create a PostgreSQL database connection
        $pdo = Connection::get()->connect("admin");
        if($pass!=''){
            $sql='UPDATE public.secretaria
            SET "Nombre"=:nombre, "APaterno"=:apaterno, "AMaterno"=:amaterno, "Telefono"=:telefono, "Direccion"=:direccion, pass=:pass
            WHERE "RFC"=:rfc';
            //Se crea la consulta preparada
            $resultado=$pdo->prepare($sql);	        
            $resultado->execute(array(  ":rfc"=>$rfc,
                                        ":nombre"=>$nombre,
                                        ":apaterno"=>$apaterno,
                                        ":amaterno"=>$amaterno,
                                        ":telefono"=>$telefono,
                                        ":direccion"=>$direccion,
                                        ":pass"=>md5(trim($pass))));
        }else{
            $sql='UPDATE public.secretaria
            SET "Nombre"=:nombre, "APaterno"=:apaterno, "AMaterno"=:amaterno, "Telefono"=:telefono, "Direccion"=:direccion
            WHERE "RFC"=:rfc';
            //Se crea la consulta preparada
            $resultado=$pdo->prepare($sql);	        
            $resultado->execute(array(  ":rfc"=>$rfc,
                                        ":nombre"=>$nombre,
                                        ":apaterno"=>$apaterno,
                                        ":amaterno"=>$amaterno,
                                        ":telefono"=>$telefono,
                                        ":direccion"=>$direccion));
        }
        $row = $resultado->fetch(PDO::FETCH_ASSOC);  
        if(!$row){
            echo "Funcionó la sentencia";
            header("Location: ../administrador.php?exitoeditasistente=true");
        }
        $resultado->closeCursor();             
            

    }catch(Exception $e){
        echo "Error en la ejecución de la consulta<br>".$e;
            echo "Mensaje: " . $e->GetMessage() . "<br>";
            echo "Línea: " . $e->getLine();
        header("Location: ../administrador.php?exitoeditasistente=false");    
    }

?>