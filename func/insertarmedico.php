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

    require_once __DIR__.'../../database/Connection.php';
     

        use PostgreSQLPHPconnect\Connection as Connection;

    try{

        // create a PostgreSQL database connection
        $pdo = Connection::get()->connect("admin");

        $sql='INSERT INTO public.medico(
            "Ced_prof", "Nombre", "APaterno", "AMaterno", "Telefono", "Direccion", "Especialidad", "Escuela", pass)
            VALUES (:cedprof, :nombre, :apaterno, :amaterno, :telefono, :direccion, :especialidad, :escuela, :pass);';
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
                                    ":pass"=>$pass));

        $row = $resultado->fetch(PDO::FETCH_ASSOC);  
        if(!$row){
            echo "Funcionó la sentencia";
            header("Location: ../administrador.php?exitoinsmedico=true");
        }
        $resultado->closeCursor();             
            

    }catch(Exception $e){
        echo "Error en la ejecución de la consulta<br>".$e;
            echo "Mensaje: " . $e->GetMessage() . "<br>";
            echo "Línea: " . $e->getLine();
        header("Location: ../administrador.php?exitoinsmedico=false");    
    }

?>

