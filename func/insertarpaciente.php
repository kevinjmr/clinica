<?php
    //obtener datos para login
    $CURP=$_POST["inputcurp"];
    $nombre=$_POST["nombre"];
    $apaterno=$_POST["apaterno"];
    $amaterno=$_POST["amaterno"];
    $telefono=$_POST["telefono"];
    $direccion=$_POST["direccion"];
    $edad=$_POST["edad"];
    $estadocivil=$_POST["estadocivil"];
    $ocupacion=$_POST["ocupacion"];
    $escolaridad=$_POST["escolaridad"];
    $lugardeorigen=$_POST["lugardeorigen"];
    $lugarderesidencia=$_POST["lugarderesidencia"];
    $pass=$_POST["pass"];

    require_once __DIR__.'../../database/Connection.php';
     

        use PostgreSQLPHPconnect\Connection as Connection;

    try{

        // create a PostgreSQL database connection
        $pdo = Connection::get()->connect("admin");

        $sql='INSERT INTO public.paciente(
            "CURP", "Nombre", "APaterno", "AMaterno", "Telefono", "Direccion", 
            "Edad", "Edo_civil", "Ocupacion", "Escolaridad", "Lugar_de_origen", 
            "Lugar_de_residencia", pass)
    VALUES (:curp, :nombre, :apaterno, :amaterno, :telefono, :direccion, 
            :edad, :edocivil, :ocupacion, :escolaridad, :lugardeorigen, 
            :lugarderesidencia, :pass);';
        //Se crea la consulta preparada
        $resultado=$pdo->prepare($sql);	        
        $resultado->execute(array(  ":curp"=>$CURP,
                                    ":nombre"=>$nombre,
                                    ":apaterno"=>$apaterno,
                                    ":amaterno"=>$amaterno,
                                    ":telefono"=>$telefono,
                                    ":direccion"=>$direccion,
                                    ":edad"=>$edad,
                                    ":edocivil"=>$estadocivil,
                                    ":ocupacion"=>$ocupacion,
                                    ":escolaridad"=>$escolaridad,
                                    ":lugardeorigen"=>$lugardeorigen,
                                    ":lugarderesidencia"=>$lugarderesidencia,
                                    ":pass"=>md5(trim($pass))));

        $row = $resultado->fetch(PDO::FETCH_ASSOC);  
        if(!$row){
            echo "Funcionó la sentencia";
            header("Location: ../administrador.php?exitoinspaciente=true");
        }
        $resultado->closeCursor();             
            

    }catch(Exception $e){
        echo "Error en la ejecución de la consulta<br>".$e;
            echo "Mensaje: " . $e->GetMessage() . "<br>";
            echo "Línea: " . $e->getLine();
        //header("Location: ../administrador.php?exitoinspaciente=false");    
    }

?>

