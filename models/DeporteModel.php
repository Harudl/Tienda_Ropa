<?php

require_once 'config/Conexion.php';

class DeporteModel {

    private $con;

    public function __construct() { //cosntructor
        $this->con = Conexion::getConexion(); //operador :: llamando a un metodo estatico
    }

    public function listar() {
         $sql = "select * from deportes";
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
        //ejecuto la sentencia
        $stmt->execute();
        // recupero resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // retorno resultados
        return $resultados;
    }
    
    public function deporteCli (){
         $sql = "select * from deportes where stock!=0";
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
        //ejecuto la sentencia
        $stmt->execute();
        // recupero resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // retorno resultados
        return $resultados;
    }
    
    
   public function insertar($nom, $prec,$archi,$gen,$stock) {
        //prepare
        $sql = "INSERT INTO deportes (id_producto, nombre_producto, precio, imagen,genero, stock) VALUES 
            (NULL, :nom, :prec, :archi, :gen, :stock)";
        //now()
        $sentencia = $this->con->prepare($sql);
               
        $data = ['nom' => $nom,
            'prec' => $prec,
            'archi' => $archi,
            'gen' => $gen,
            'stock' => $stock,
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

        $sql = "SELECT * FROM deportes where id_producto=:id";
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
    
    
    
    
    public function editar($id,$nom, $prec,$archi,$gen,$stock) {
        //prepare
        $sql = "update  deportes set nombre_producto=:nom, precio=:prec, 
            imagen=:archi, genero=:gen, 
            stock=:stock where id_producto=:id";
echo $archi;
        $sentencia = $this->con->prepare($sql);
        //bind parameters
        $data = [ 'nom' => $nom,
            'prec' => $prec,
            'archi' => $archi,
            'gen' => $gen,
            'stock' => $stock,
             'id' => $id
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
    
    
    
    
    
    /////ELIMINAR
    
     public function eliminar($id) {
        //prepare
        $sql = "update deportes set stock=0 where id_producto=:id ";
        $sentencia = $this->con->prepare($sql);
        //bind parameters
        $data = ['id' => $id
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
    
     public function consultaXParametro($busqueda) {

        $sql = "SELECT * FROM deportes where id_producto = id_producto and 
		(nombre_producto like :b1)";
        $stmt = $this->con->prepare($sql);
        //bind parameters
        $conlike = '%' . $busqueda. '%';
        $data = ['b1' => $conlike];
        //ejecuto la sentencia
        $stmt->execute($data);
        // recupero resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // retorno resultados
        return $resultados;
    }
    
    
    
    
    
    
}