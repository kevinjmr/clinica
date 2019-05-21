<?php
    //obtener datos para login
    $inputapnop=$_POST["inputapnop"];
    $inputapp=$_POST["inputapp"];
    $inputahf=$_POST["inputahf"];
    $inputago=$_POST["inputago"];
    $inputmenarca=$_POST["inputmenarca"];
    $inputritmo=$_POST["inputritmo"];
    $inputivsa=$_POST["inputivsa"];
    $inputcesarea=$_POST["inputcesarea"];
    $inputfum=$_POST["inputfum"];
    $inputfpp=$_POST["inputfpp"];
    $inputdiu=$_POST["inputdiu"];
    $inputhormonales=$_POST["inputhormonales"];
    $inputdocma=$_POST["inputdocma"];
    $inputpapamicolau=$_POST["inputpapamicolau"];
    $inputpadactual=$_POST["inputpadactual"];
    $inputta=$_POST["inputta"];
    $inputfc=$_POST["inputfc"];
    $inputfr=$_POST["inputfr"];
    $inputtemp=$_POST["inputtemp"];
    $inputpeso=$_POST["inputpeso"];
    $inputtalla=$_POST["inputtalla"];
    $inputcabeza=$_POST["inputcabeza"];
    $inputtorax=$_POST["inputtorax"];
    $inputabdomen=$_POST["inputabdomen"];
    $inputextrem=$_POST["inputextrem"];
    $inputgenitales=$_POST["inputgenitales"];
    $inputvascula=$_POST["inputvascula"];
    $cedprof=$_POST["cedprof"];
    $curp=$_POST["curp"];
    $fecha=$_POST["fecha"];

    require_once __DIR__.'../../database/Connection.php';
    use PostgreSQLPHPconnect\Connection as Connection;

    try{

        // create a PostgreSQL database connection
        $pdo = Connection::get()->connect("admin");

        $sql='INSERT INTO public.historial(
            "Ced_prof_medico","CURP_paciente","Fecha", "AP_No_P", "APP", "AHF", "AGO", "Menarca", "Ritmo", "IVSA", "Cesarea",
            "FUM", "FPP", "DIU", "Hormonales", "Docma", "Papamicolau", "Padecimiento_actual", "T/A", "FC", "FR",
            "Temperatura", "Peso", "Talla", "Cabeza", "Torax", "Abdomen", "Extremidades", "Genitales", "Vascula_Perifericos")
            VALUES (:cedprof,:curp,:fecha, :inputapnop, :inputapp, :inputahf, :inputago, :inputmenarca, :inputritmo, :inputivsa,
             :inputcesarea, :inputfum, :inputfpp, :inputdiu, :inputhormonales, :inputdocma, :inputpapamicolau, 
             :inputpadactual, :inputta, :inputfc, :inputfr, :inputtemp, :inputpeso, :inputtalla, :inputcabeza,
             :inputtorax, :inputabdomen, :inputextrem, :inputgenitales, :inputvascula)';
        //Se crea la consulta preparada
        $resultado=$pdo->prepare($sql);	        
        $resultado->execute(array(  ":inputapnop"=>$inputapnop,
                                    ":inputapp"=>$inputapp,
                                    ":inputahf"=>$inputahf,
                                    ":inputago"=>$inputago,
                                    ":inputmenarca"=>$inputmenarca,
                                    ":inputritmo"=>$inputritmo,
                                    ":inputivsa"=>$inputivsa,
                                    ":inputcesarea"=>$inputcesarea,
                                    ":inputfum"=>$inputfum,
                                    ":inputfpp"=>$inputfpp,
                                    ":inputdiu"=>$inputdiu,
                                    ":inputhormonales"=>$inputhormonales,
                                    ":inputdocma"=>$inputdocma,
                                    ":inputpapamicolau"=>$inputpapamicolau,
                                    ":inputpadactual"=>$inputpadactual,
                                    ":inputta"=>$inputta,
                                    ":inputfc"=>$inputfc,
                                    ":inputfr"=>$inputfr,
                                    ":inputtemp"=>$inputtemp,
                                    ":inputpeso"=>$inputpeso,
                                    ":inputtalla"=>$inputtalla,
                                    ":inputcabeza"=>$inputcabeza,
                                    ":inputtorax"=>$inputtorax,
                                    ":inputabdomen"=>$inputabdomen,
                                    ":inputextrem"=>$inputextrem,
                                    ":inputgenitales"=>$inputgenitales,
                                    ":inputvascula"=>$inputvascula,
                                    ":cedprof"=>$cedprof,
                                    ":curp"=>$curp,
                                    ":fecha"=>$fecha ));

        $row = $resultado->fetch(PDO::FETCH_ASSOC);  
        if(!$row){
            echo "Funcionó la sentencia";
            //header("Location: ../medico.php?exitoinshistorial=true");
        }
        $resultado->closeCursor();             
            

    }catch(Exception $e){
        echo "Error en la ejecución de la consulta<br>".$e;
            echo "Mensaje: " . $e->GetMessage() . "<br>";
            echo "Línea: " . $e->getLine();
        //header("Location: ../medico.php?exitoinshistorial=false");    
    }

?>

