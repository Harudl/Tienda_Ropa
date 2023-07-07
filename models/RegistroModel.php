<?php

require_once 'config/Conexion.php';

class RegistroModel {

    private $con;

    public function __construct() { //cosntructor
        $this->con = Conexion::getConexion(); //operador :: llamando a un metodo estatico
    }
     
   public function insertar($nom, $ape,$pass,$user,$cli,$email) {
        //prepare
        $sql = "INSERT INTO usuarios (id, username, password, nombre,apellidos,tipo_usuario_tipo_id_user, email) VALUES 
            (NULL, :user, :pass, :nom, :ape, :cli,:email)";
        //now()
        $sentencia = $this->con->prepare($sql);
               
        $data = ['user' => $user,
            'pass' => $pass,
            'nom' => $nom,
            'ape' => $ape,
            'cli' => $cli,
             'email' => $email,
         ];
        //execute
        print_r($data);
        $sentencia->execute($data);
        //retornar resultados
        if ($sentencia->rowCount() <= 0) {// rowCount retorna el numero de filas afectadas
            // verificar si se inserto 
            return false;
        }
        return true;
    }

     public function consultaXId($id) {

        $sql = "SELECT * FROM usuarios where id=:id";
        $stmt = $this->con->prepare($sql);
        //bind parameters
        $data = ['id' => $id];
        //ejecuto la sentencia
        $stmt->execute($data);
        // recupero resultados
        $resultados = $stmt->fetch(PDO::FETCH_ASSOC);
        // retorno resultados
        return $resultados;
    }
    
    
    
    public function editar($id,$nom, $ape,$pass,$user,$cli,$email) {
        //prepare
        $sql = "update  usuarios set username=:user, password=:pass, 
            nombre=:nom, apellidos=:ape,tipo_usuario_tipo_id_user=:cli,email=:email where id=:id";

        $sentencia = $this->con->prepare($sql);
        //bind parameters
        $data = [ 'user' => $user,
            'pass' => $pass,
            'nom' => $nom,
            'ape' => $ape,
            'cli' => $cli,
             'email' => $email,
             'id' => $id,
        ];
        //execute
        $sentencia->execute($data);
        //retornar resultados
        if ($sentencia->rowCount() <= 0) {// rowCount retorna el numero de filas afectadas
            // verificar si se inserto 
            return false;
        }
        return true;
    }
 
    
}
