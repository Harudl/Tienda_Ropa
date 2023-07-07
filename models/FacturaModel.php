<?php

require_once 'config/Conexion.php';

class FacturaModel {

    private $con;

    public function __construct() { //cosntructor
        $this->con = Conexion::getConexion(); //operador :: llamando a un metodo estatico
    }
    
    
      
   public function insertar($idP, $idU,$precF,$strfecha) {
        //prepare
        $sql = "INSERT INTO compras (id_compras, usuario_id_usuario, deportes_id_producto, fecha_compra,precio_final) VALUES 
            (NULL, :idU, :idP,:strfecha, :precF)";
        //now()
        $sentencia = $this->con->prepare($sql);
               
        $data = ['idU' => $idU,
            'idP' => $idP,
            'strfecha' => $strfecha,
            'precF' => $precF,
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
  public function actualizar($idP, $stockTo) {
        //prepare
        $sql = "update  deportes set stock=:stock - 1 where deportes.id_producto=:idP";
     $sentencia = $this->con->prepare($sql);
        //bind parameters
        $data = [ 'idP' => $idP,
            'stock' => $stockTo,
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
    
    
    
   public function mostrarF(){
   $idUsuario=$_SESSION['id'];
   $sql = "select * from compras INNER JOIN deportes ON deportes_id_producto=id_producto INNER JOIN usuarios ON id=".$idUsuario." where usuario_id_usuario=".$idUsuario."";
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
        //ejecuto la sentencia
        $stmt->execute();
        // recupero resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // retorno resultados
        return $resultados;
       
       
   }
   
   public function consultaXParametro($busqueda) {

       
       
       $sql = "SELECT * FROM compras INNER JOIN deportes on deportes_id_producto=id_producto WHERE (nombre_producto like :b1 and usuario_id_usuario=".$_SESSION['id'].")";

        $stmt = $this->con->prepare($sql);
        //bind parameters
        $conlike = '%' . $busqueda . '%';
        $data = ['b1' => $conlike];
        //ejecuto la sentencia
        $stmt->execute($data);
        // recupero resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // retorno resultados
        return $resultados;
    }
    
   
        
    
}