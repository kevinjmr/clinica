<?php
 
namespace PostgreSQLPHPconnect;
 
/**
 * Represent a Function
 */


class Funcion{
 
    private $pdo;
    
    function __construct($pdo){
        $this->pdo=$pdo;
    }

    //Obtiene solo un medico
    public function getMedico($id) {
        $q='select * from medico where "Ced_prof"= :id';
        $stmt=$this->pdo->prepare($q);	        
        $stmt->execute(array(":id"=>$id));
        $result = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $result[] = [
            $row['Nombre'], //0
            $row['APaterno'],//1
            $row['AMaterno'],//2
            $row['Telefono'],//3
            $row['Direccion'],//4
            $row['Especialidad'],//5
            $row['Escuela']//6
            ];
        }
         
        return $result;
    }

    //Obtiene todos los medicos
    public function getMedicos() {
        $q='select * from medico';
        $stmt = $this->pdo->query($q);
        $result = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $result[] = [
                $row['Ced_prof'],//0
                $row['Nombre'],//1
                $row['APaterno'],//2
                $row['AMaterno'],//3
                $row['Telefono'],//4
                $row['Direccion'],//5
                $row['Especialidad'],//6
                $row['Escuela'],//7
                $row['pass']//8
            ];
        }
         
        return $result;
    }

    //Obtiene solo un asistente
    public function getAsistente($id) {
        $q='select * from secretaria where "RFC"= :id';
        $stmt=$this->pdo->prepare($q);	        
        $stmt->execute(array(":id"=>$id));
        $result = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $result[] = [
                $row['RFC'],//0
                $row['Nombre'],//1
                $row['APaterno'],//2
                $row['AMaterno'],//3
                $row['Telefono'],//4
                $row['Direccion'],//5
                $row['pass']//6
            ];
        }
         
        return $result;
    }

    //Obtiene todos los asistentes
    public function getAsistentes() {
        
        $q='select * from secretaria';
        $stmt = $this->pdo->query($q);
        $result = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $result[] = [
                $row['RFC'],//0
                $row['Nombre'],//1
                $row['APaterno'],//2
                $row['AMaterno'],//3
                $row['Telefono'],//4
                $row['Direccion'],//5
                $row['pass']//6
            ];
        }
         
        return $result;
    }

    //Obtiene todos un paciente especifico
    public function getPaciente($id) {
        $q='select * from paciente where "CURP"= :id';
        $stmt=$this->pdo->prepare($q);	        
        $stmt->execute(array(":id"=>$id));
        $result = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $result = [
            $row['Nombre'], //0
            $row['APaterno'],//1
            $row['AMaterno'],//2
            $row['Telefono'],//3
            $row['Direccion'],//4
            $row['Edad'],//5
            $row['Edo_civil'],//6
            $row['Ocupacion'],//7
            $row['Escolaridad'],//8
            $row['Lugar_de_origen'],//9
            $row['Lugar_de_residencia'],//10
            $row['pass']//11
            ];
        }
         
        return $result;
    }
    //Función para obtener a todos los pacientes de la clinica
    public function getPacientes() {
        
        $q='select * from paciente';
        $stmt = $this->pdo->query($q);
        $result = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $result[] = [
                $row['CURP'],//0
                $row['Nombre'],//1
                $row['APaterno'],//2
                $row['AMaterno'],//3
                $row['Telefono'],//4
                $row['Direccion'],//5
                $row['Edad'],//6
                $row['Edo_civil'],//7
                $row['Ocupacion'],//8
                $row['Escolaridad'],//9
                $row['Lugar_de_origen'],//10
                $row['Lugar_de_residencia'],//11
                $row['pass']//12

            ];
        }
         
        return $result;
    }

    //Funcion para obtener a los consultorios
    public function getConsultorios() {
        $q='select * from consultorio';
        $stmt = $this->pdo->query($q);
        $result = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $result[] = [
                $row['Id'],//0
                $row['Medico'],//1
                $row['Secretaria']//2

            ];
        }
         
        return $result;
    }

    //Obtiene un consultorio especifico
    public function getConsultorio($id) {
        $q='select * from consultorio where "Id"= :id';
        $stmt=$this->pdo->prepare($q);	        
        $stmt->execute(array(":id"=>$id));
        $result = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $result = [
                $row['Medico'],//0
                $row['Secretaria'],//1
            ];
        }
         
        return $result;
    }


    //Funcion para obtener a los Administradores de la aplicación
    public function getAdmins() {
        $q='select * from administracion';
        $stmt = $this->pdo->query($q);
        $result = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $result[] = [
                $row['Nombre'],//0
                $row['APaterno'],//1
                $row['AMaterno'],//2
                $row['Telefono'],//3
                $row['Direccion'],//4
                $row['pass'],//5
                $row['RFC']//6

            ];
        }
         
        return $result;
    }

    //Funcion para obtener a los Citas de la aplicación
    public function getCitas() {
        $q='select * from cita';
        $stmt = $this->pdo->query($q);
        $result = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $result = [
                $row['Id'],//0
                $row['CURP_paciente'],//1
                $row['ced_prof_medico'],//2
                $row['fecha'],//3
                $row['descripcion']//4
            ];
        }
         
        return $result;
    }
    public function getCitas2($curp) {
        $q='SELECT fecha, hora, "Nombre", "APaterno", "AMaterno"
        FROM cita INNER JOIN medico ON "Ced_prof" = ced_prof_medico 
        WHERE "CURP_paciente"=:curp ORDER BY fecha ASC';
        $stmt=$this->pdo->prepare($q);	        
        $stmt->execute(array(":curp"=>$curp));
        $result = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $result[] = [
                $row['fecha'],//0
                $row['hora'],//1
                $row['Nombre'],//2
                $row['APaterno'],//3
                $row['AMaterno']//4
            ];
        }
         
        return $result;
    }
    public function getReceta($curp) {
        $q='SELECT fecha, descripcion, "Nombre", "APaterno", "AMaterno" 
        FROM receta INNER JOIN medico ON "Ced_prof" = ced_prof_medico 
        WHERE "CURP_paciente"=:curp ORDER BY fecha DESC LIMIT 1';
        $stmt=$this->pdo->prepare($q);	        
        $stmt->execute(array(":curp"=>$curp));
        $result = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $result = [
                $row['fecha'],//0
                $row['descripcion'],//1
                $row['Nombre'],//2
                $row['APaterno'],//3
                $row['AMaterno']//4
            ];
        }
         
        return $result;
    }
    //Obtiene solo una Cita
    public function getCita($id,$fecha,$hora) {
        $q='SELECT "CURP_paciente", descripcion, "Nombre", "APaterno", "AMaterno" 
        FROM cita c inner join paciente p on c."CURP_paciente"=p."CURP" 
        where ced_prof_medico= :id AND fecha= :fecha AND hora= :hora';
        $stmt=$this->pdo->prepare($q);	        
        $stmt->execute(array(":id"=>$id,
                            ":fecha"=>$fecha,
                            ":hora"=>$hora));
        $result = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $result = [
                $row['CURP_paciente'],//0
                $row['descripcion'],//1
                $row['Nombre'],//2
                $row['APaterno'],//3
                $row['AMaterno']//4
            ];
        }
         
        return $result;
    }
    public function getCitaA($id,$fecha,$hora) {
        $q='SELECT "CURP_paciente", descripcion, "Nombre", "APaterno", "AMaterno" 
        FROM cita c inner join paciente p on c."CURP_paciente"=p."CURP" 
        where ced_prof_medico = (SELECT "Medico" FROM consultorio where "Secretaria"= :id) 
        AND fecha= :fecha AND hora= :hora';
        $stmt=$this->pdo->prepare($q);	        
        $stmt->execute(array(":id"=>$id,
                            ":fecha"=>$fecha,
                            ":hora"=>$hora));
        $result = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $result = [
                $row['CURP_paciente'],//0
                $row['descripcion'],//1
                $row['Nombre'],//2
                $row['APaterno'],//3
                $row['AMaterno']//4
            ];
        }
         
        return $result;
    }


    //Obtiene solo una Cita para detalle de la cita
    public function getCita2($id,$fecha,$hora) {
        $q='SELECT m."Nombre" AS nombrem, m."APaterno" AS paternom, m."AMaterno" AS maternom, m."Especialidad", m."Ced_prof", m."Escuela", m."Direccion" AS direccionm,
        p."CURP", p."Nombre" AS nombrep, p."APaterno" AS paternop, p."AMaterno" AS maternop, p."Edad", p."Edo_civil", p."Direccion" AS direccionp, p."Ocupacion", p."Escolaridad", p."Lugar_de_origen", p."Lugar_de_residencia"
        FROM cita c inner join paciente p on c."CURP_paciente"=p."CURP" inner join medico m
        on m."Ced_prof" = c.ced_prof_medico where "Ced_prof"=:id AND fecha= :fecha AND hora= :hora';
        $stmt=$this->pdo->prepare($q);	        
        $stmt->execute(array(":id"=>$id,
                            ":fecha"=>$fecha,
                            ":hora"=>$hora));
        $result = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $result = [
                $row['nombrem'],//0
                $row['paternom'],//1
                $row['maternom'],//2
                $row['Especialidad'],//3
                $row['Ced_prof'],//4
                $row['Escuela'],//5
                $row['direccionm'],//6

                $row['nombrep'],//7
                $row['paternop'],//8
                $row['maternop'],//9  
                $row['Edad'],//10  
                $row['Edo_civil'],//11
                $row['direccionp'],//12
                $row['Ocupacion'],//13
                $row['Escolaridad'],//14
                $row['Lugar_de_origen'],//15
                $row['Lugar_de_residencia'],//16
                $row['CURP']//17
            ];
        }
         
        return $result;
    }



    //Obtiene solo un Administrador
    public function getAdmin($id) {
        $q='select * from administracion where "RFC"= :id';
        $stmt=$this->pdo->prepare($q);	        
        $stmt->execute(array(":id"=>$id));
        $result = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $result[] = [
                $row['Nombre'],//1
                $row['APaterno'],//2
                $row['AMaterno'],//3
                $row['Telefono'],//4
                $row['Direccion'],//5
                $row['pass']//6
                
            ];
        }
         
        return $result;
    }

    //Obtiene solo una Cita para detalle de la cita
    public function getHistoriales($id) {
        $q='SELECT m."Nombre", m."APaterno", m."AMaterno", "Fecha", "Padecimiento_actual", "CURP_paciente"
        FROM historial h inner join medico m on m."Ced_prof" = h."Ced_prof_medico" WHERE h."CURP_paciente"= :id';
        $stmt=$this->pdo->prepare($q);	        
        $stmt->execute(array(":id"=>$id));
        $result = [];
        
        while($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
        $result = [
            $row['Nombre'],//0
            $row['APaterno'],//1
            $row['AMaterno'],//2
            $row['Fecha'],//3
            $row['Padecimiento_actual'],//4
            $row['CURP_paciente']//5
            
        ];}
        
         
        return $result;
    }

    //Carga un historial
    public function getHistorial($cedprof,$curp,$fecha) {
        $q='SELECT h."Ced_prof_medico", h."Fecha", h."AP_No_P", h."APP", h."AHF", h."AGO", h."Menarca", h."Ritmo",
        h."IVSA", h."Cesarea", h."FUM", h."FPP", h."DIU", h."Hormonales", h."Docma", h."Papamicolau", h."Padecimiento_actual",
        h."T/A", h."FC", h."FR", h."Temperatura",h."Peso", h."Talla", h."Cabeza", h."Torax", h."Abdomen",
        h."Extremidades", h."Genitales", h."Vascula_Perifericos", h."CURP_paciente",
        m."Ced_prof", m."Nombre" AS nombrem, m."APaterno" AS paternom, m."AMaterno" AS maternom,
        m."Telefono" AS telefonom, m."Direccion" AS direccionm, m."Especialidad", m."Escuela",
        p."CURP", p."Nombre" AS nombrep, p."APaterno" AS paternop, p."AMaterno" AS maternop,
        p."Telefono" AS telefonop, p."Direccion" AS direccionp, p."Edad", p."Edo_civil", p."Ocupacion",
        p."Lugar_de_origen", p."Lugar_de_residencia", p."Escolaridad"
        FROM historial h inner join medico m on m."Ced_prof" = h."Ced_prof_medico" 
        inner join paciente p on h."CURP_paciente" = p."CURP"
        WHERE h."CURP_paciente"=:curp and h."Fecha"=:fecha and h."Ced_prof_medico"=:cedprof';
        $stmt=$this->pdo->prepare($q);	        
        $stmt->execute(array(   ":curp"=>$curp,
                                ":fecha"=>$fecha,
                                ":cedprof"=>$cedprof
                            ));
        $result = [];
        while($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
            $result = [
                $row['Ced_prof_medico'],//0
                $row['CURP_paciente'],//1
                $row['Fecha'],//2

                $row['AP_No_P'],//3
                $row['APP'],//4
                $row['AHF'],//5
                $row['AGO'],//6
                $row['Ritmo'],//7
                $row['IVSA'],//8
                $row['Cesarea'],//9
                $row['FUM'],//10
                $row['FPP'],//11
                $row['DIU'],//12
                $row['Hormonales'],//13
                $row['Docma'],//14
                $row['Papamicolau'],//15
                $row['Padecimiento_actual'],//16
                $row['T/A'],//17
                $row['FC'],//18
                $row['FR'],//19
                $row['Temperatura'],//20
                $row['Peso'],//21
                $row['Talla'],//22
                $row['Cabeza'],//23
                $row['Torax'],//24
                $row['Abdomen'],//25
                $row['Extremidades'],//26
                $row['Genitales'],//27
                $row['Vascula_Perifericos'],//28
                
                $row['nombrem'],//29
                $row['paternom'],//30
                $row['maternom'],//31
                $row['telefonom'],//32
                $row['direccionm'],//33
                $row['Especialidad'],//34
                $row['Escuela'],//35

                $row['nombrep'],//36
                $row['paternop'],//37
                $row['maternop'],//38
                $row['telefonop'],//39
                $row['direccionp'],//40
                $row['Edad'],//41
                $row['Edo_civil'],//42
                $row['Ocupacion'],//43
                $row['Lugar_de_origen'],//44
                $row['Lugar_de_residencia'],//45
                $row['Escolaridad'],//46
                $row['Menarca'],//47
            ];
        }
         
        return $result;
    }

}