<?php
    //obtener datos para login
    $cedprof=$_POST["inputcedprof"];
    $nombre=$_POST["inputnombre"];
    $apaterno=$_POST["inputapaterno"];
    $amaterno=$_POST["inputamaterno"];
    $telefono=$_POST["inputtelefono"];
    $especialidad=$_POST["inputespecialidad"];
    $direccion=$_POST["inputdireccion"];
    $escuela=$_POST["inputescuela"];
    $pass=$_POST["inputpass"];

    require_once __DIR__.'\..\database\Connection.php'; 

        use PostgreSQLPHPconnect\Connection as Connection;

    try{

        // create a PostgreSQL database connection
        $pdo = Connection::get()->connect("admin");
        if($pass!=''){
            $sql='UPDATE public.medico
            SET "Nombre"=:nombre, "APaterno"=:apaterno, "AMaterno"=:amaterno, "Telefono"=:telefono, "Direccion"=:direccion, "Especialidad"=:especialidad, "Escuela"=:escuela, pass=:pass
            WHERE "Ced_prof"=:cedprof';
            //Se crea la consulta preparada
            $resultado=$pdo->prepare($sql);	        
            $resultado->execute(array(  ":cedprof"=>$cedprof,
                                        ":nombre"=>$nombre,
                                        ":apaterno"=>$apaterno,
                                        ":amaterno"=>$amaterno,
                                        ":telefono"=>$telefono,
                                        ":direccion"=>$direccion,
                                        ":especialidad"=>$especialidad,
                                        ":escuela"=>$escuela,
                                        ":pass"=>md5(trim($pass))));
        }else{
            $sql='UPDATE public.medico
            SET "Nombre"=:nombre, "APaterno"=:apaterno, "AMaterno"=:amaterno, "Telefono"=:telefono, "Direccion"=:direccion, "Especialidad"=:especialidad, "Escuela"=:escuela
            WHERE "Ced_prof"=:cedprof';
            //Se crea la consulta preparada
            $resultado=$pdo->prepare($sql);	        
            $resultado->execute(array(  ":cedprof"=>$cedprof,
                                        ":nombre"=>$nombre,
                                        ":apaterno"=>$apaterno,
                                        ":amaterno"=>$amaterno,
                                        ":telefono"=>$telefono,
                                        ":direccion"=>$direccion,
                                        ":especialidad"=>$especialidad,
                                        ":escuela"=>$escuela));
        }
        $row = $resultado->fetch(PDO::FETCH_ASSOC);  
        if(!$row){
            echo "Funcionó la sentencia";
            header("Location: ../administrador.php?exitoeditmedico=true");
        }
        $resultado->closeCursor();             
            

    }catch(Exception $e){
        echo "Error en la ejecución de la consulta<br>".$e;
            echo "Mensaje: " . $e->GetMessage() . "<br>";
            echo "Línea: " . $e->getLine();
        header("Location: ../administrador.php?exitoeditmedico=false");    
    }

?>