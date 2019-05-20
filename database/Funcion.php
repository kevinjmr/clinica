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

    //Obtiene solo un asistente especifico
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
                $row['Medico'], //0
                $row['Secretaria'] //1
            ];
        }
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
}