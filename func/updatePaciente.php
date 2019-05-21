<?php
    //obtener datos para login
    $CURP=$_POST["inputcurp"];
    $nombre=$_POST["inputnombre"];
    $apaterno=$_POST["inputapaterno"];
    $amaterno=$_POST["inputamaterno"];
    $telefono=$_POST["inputtelefono"];
    $direccion=$_POST["inputdireccion"];
    $edad=$_POST["inputedad"];
    $edocivil=$_POST["inputedocivil"];
    $ocupacion=$_POST["inputocupacion"];
    $escolaridad=$_POST["inputescolaridad"];
    $lugardeorigen=$_POST["inputlugardeorigen"];
    $lugarderesidencia=$_POST["inputlugarderesidencia"];
    $pass=$_POST["inputpass"];

    require_once __DIR__.'../../database/Connection.php'; 

        use PostgreSQLPHPconnect\Connection as Connection;

    try{

        // create a PostgreSQL database connection
        $pdo = Connection::get()->connect("admin");
        if($pass!=''){
            $sql='UPDATE public.paciente
            SET "CURP"=:curp, "Nombre"=:nombre, "APaterno"=:apaterno, "AMaterno"=:amaterno, "Telefono"=:telefono, "Direccion"=:direccion, "Edad"=:edad, "Edo_civil"=:edocivil,
            "Ocupacion"=:ocupacion, "Escolaridad"=:escolaridad, "Lugar_de_origen"=:lugardeorigen, "Lugar_de_residencia"=:lugarderesidencia, pass=:pass
            WHERE "CURP"=:curp';
            //Se crea la consulta preparada
            $resultado=$pdo->prepare($sql);	        
            $resultado->execute(array(  ":curp"=>$CURP,
                                        ":nombre"=>$nombre,
                                        ":apaterno"=>$apaterno,
                                        ":amaterno"=>$amaterno,
                                        ":telefono"=>$telefono,
                                        ":direccion"=>$direccion,
                                        ":edad"=>$edad,
                                        ":edocivil"=>$edocivil,
                                        ":ocupacion"=>$edocivil,
                                        ":escolaridad"=>$escolaridad,
                                        ":lugardeorigen"=>$lugardeorigen,
                                        ":lugarderesidencia"=>$lugarderesidencia,
                                        ":pass"=>$pass));
        }else{
            $sql='UPDATE public.paciente
            SET "CURP"=:curp, "Nombre"=:nombre, "APaterno"=:apaterno, "AMaterno"=:amaterno, "Telefono"=:telefono, "Direccion"=:direccion, "Edad"=:edad, "Edo_civil"=:edocivil,
            "Ocupacion"=:ocupacion, "Escolaridad"=:escolaridad, "Lugar_de_origen"=:lugardeorigen, "Lugar_de_residencia"=:lugarderesidencia
            WHERE "CURP"=:curp';
            //Se crea la consulta preparada
            $resultado=$pdo->prepare($sql);	        
            $resultado->execute(array( 
            ":curp"=>$CURP,
            ":nombre"=>$nombre,
            ":apaterno"=>$apaterno,
            ":amaterno"=>$amaterno,
            ":telefono"=>$telefono,
            ":direccion"=>$direccion,
            ":edad"=>$edad,
            ":edocivil"=>$edocivil,
            ":ocupacion"=>$edocivil,
            ":escolaridad"=>$escolaridad,
            ":lugardeorigen"=>$lugardeorigen,
            ":lugarderesidencia"=>$lugarderesidencia));
        }
        $row = $resultado->fetch(PDO::FETCH_ASSOC);  
        if(!$row){
            echo "Funcionó la sentencia";
            header("Location: ../administrador.php?exitoeditpaciente=true");
        }
        $resultado->closeCursor();             
            

    }catch(Exception $e){
        echo "Error en la ejecución de la consulta<br>".$e;
            echo "Mensaje: " . $e->GetMessage() . "<br>";
            echo "Línea: " . $e->getLine();
        //header("Location: ../administrador.php?exitoeditpaciente=false");    
    }

?>