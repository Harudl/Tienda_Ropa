<?php

require_once 'config/Conexion.php';

class LoginModel {

private $con;

    public function __construct() { //cosntructor
        $this->con = Conexion::getConexion(); //operador :: llamando a un metodo estatico
    }
 
    public function consultaUser($email,$pass) {

        $sql = "SELECT * FROM usuarios where email=:email and password=:pass";
        
        $stmt = $this->con->prepare($sql);
        //bind parameters
        $data = ['email' => $email,
                'pass' => $pass,
                  ];
        //ejecuto la sentencia
        $stmt->execute($data);
        // recupero resultados
        $resultados = $stmt->fetch(PDO::FETCH_ASSOC);
        // retorno resultados
      if ($stmt->rowCount() <= 0){// verificar si se inserto 
      return true;
        }
        return false;
      //  return $resultados;
      }
      
     public function consultaTipoUser($email,$pass){
   $sql = "SELECT * FROM usuarios INNER JOIN tipo_usuario ON tipo_usuario_tipo_id_user=tipo_id_user where email=:email and password=:pass";
        $stmt = $this->con->prepare($sql);
        //bind parameters
         $data = ['email' => $email,
                'pass' => $pass,
                  ];
        //ejecuto la sentencia
        $stmt->execute($data);
        // recupero resultados
        $resultados = $stmt->fetch(PDO::FETCH_ASSOC);
        // retorno resultados
        return $resultados;
         
         
         
     }
      
     
     public function cerrarLogin (){
         unset($_SESSION['usuario']); 
          unset($_SESSION['rol']); 
          
        setcookie("user", "", time() - (60 * 60), "/");
       setcookie("pass", "", time() - (60 * 60), "/");
        setcookie("rol", "", time() - (60 * 60), "/");
       session_destroy(); 
       
     }
      
       
      
}    