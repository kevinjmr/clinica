<?php
    //obtener datos para login
    $curp=$_GET["curp"];
    //dia siguiente
    $next=1;
    $fecha = date('Y-m-d',mktime(0,0,0, date("m"),date("d")+$next,date("Y")));
    
    
    require_once __DIR__.'\..\database\Connection.php'; 
        use PostgreSQLPHPconnect\Connection as Connection;
    $try = 0;
    $maxtries=3;
    while($try < $maxtries){
        try{
            $var=0;
            $hora = date('h:i',mktime(7,0+$var,date('h'),date('i')));
            //create a PostgreSQL database connection
            $pdo = Connection::get()->connect("admin");
            $sql = 'SELECT * FROM cita where fecha = :fecha AND hora = :hora';
            $resultado=$pdo->prepare($sql);	        
            $resultado->execute(array(":fecha"=>$fecha,
                                        ":hora"=>$hora));
            //encontrar la primera hora disponible del dia siguiente
            while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
                $var=$var+30;
                $hora = date('h:i',mktime(7,0+$var,date('h'),date('i')));
                $resultado->execute(array(":fecha"=>$fecha,
                                        ":hora"=>$hora));
                if($hora=="02:30"){
                    $next=$next+1;
                    $fecha = date('Y-m-d',mktime(0,0,0,date("m"),date("d")+$next,date("Y")));
                }
            }

            // encontrar el medico con menos citas asignadas
            $sql='SELECT "Ced_prof", COUNT(ced_prof_medico) cantidad FROM medico LEFT JOIN  cita 
            ON  medico."Ced_prof" = cita.ced_prof_medico
            GROUP BY "Ced_prof" ORDER BY cantidad ASC LIMIT 1';
            $stmt = $pdo->query($sql);
            $result = [];
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $result = [
                    $row['Ced_prof'],//0
                    $row['cantidad']//1
                ];
            }
            $cedprof=trim($result[0]);

            $sql='INSERT INTO cita("CURP_paciente", fecha, hora, ced_prof_medico)
            VALUES (:curp, :fecha, :hora, :cedprof);';
            //Se crea la consulta preparada
            $resultado=$pdo->prepare($sql);	        
            $resultado->execute(array(  ":curp"=>$curp,
                                        ":fecha"=>$fecha,
                                        ":hora"=>$hora,
                                        ":cedprof"=>$cedprof));

            $row = $resultado->fetch(PDO::FETCH_ASSOC);  
            if(!$row){
                echo "Funcionó la sentencia";
                header("Location: ../paciente.php?exitoinscita=true");
            }
            $resultado->closeCursor();             
            
        }catch(Exception $e){
            echo "Error en la ejecución de la consulta<br>".$e;
                echo "Mensaje: " . $e->GetMessage() . "<br>";
                echo "Línea: " . $e->getLine();
            $next=$next+1;
            $fecha = date('Y-m-d',mktime(0,0,0,date("m"),date("d")+$next,date("Y")));
            $try=$try+1; 
            header("Location: ../paciente.php?exitoinscita=false");
        }
    }

?>

