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
}