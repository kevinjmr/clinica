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

    /*public function actualizarTodo($a, $b) {
        $stmt = $this->pdo->prepare('SELECT actualizar(:a,:b)');
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        $stmt->execute([
            ':a' => $a,
            ':b' => $b
        ]);
        return $stmt->fetchColumn(0);
    }

    public function actualizar($tabla, $valor, $condicion) {
        $stmt = $this->pdo->prepare('SELECT actualizar(:a,:b,:c)');
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        $stmt->execute([
            ':a' => $tabla,
            ':b' => $valor,
            ':c' => $condicion
        ]);
        return $stmt->fetchColumn(0);
    }
    
    public function eliminarCliente($cnombre,$cpaterno,$cmaterno){
        $seleccion ="select borrarcliente(':a',':b',':c')";

       
        $stmt = $this->pdo->prepare($seleccion);
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        $stmt->execute([
            ':a' => $cnombre,
            ':b' => $cpaterno,
            ':c' => $cmaterno
        ]);
        if($result = $pdo->query($seleccion)){
            echo "Funcionó la sentencia";
            header("Location: admin.php#clientes");
        }
        else{
            echo "No funciono, error al ejecutar la sentencia: (".$pdo->error_log.")";
        }
    }
    public function getDietas() {
        
        $q='select * from verdietase()';
        $stmt = $this->pdo->query($q);
        $result = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $result[] = [
                'nombred' => $row['nombred'],
                'fechad' => $row['fechad'],
                'creadord' => $row['creadord']
            ];
        }
        return $result;
    }*/

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



     //Funcion para obtener todos los médicos en la página administrador
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




    //Función para obtener a todos los Asistentes o Secretarias disponibles
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





    //Funcion para obtener a los Administradores de la aplicación
    public function getAdmins() {
        $q='select * from administracion';
        $stmt = $this->pdo->query($q);
        $result = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $result[] = [
                $row['Nombre'],//1
                $row['APaterno'],//2
                $row['AMaterno'],//3
                $row['Telefono'],//4
                $row['Direccion'],//5
                $row['pass'],//6
                $row['RFC']//7

            ];
        }
        return $result;
    }
    
}