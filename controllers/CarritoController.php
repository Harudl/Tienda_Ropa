<?php

if (!isset($_SESSION)) {
    session_start();
}
class miembro {
    private $idCarrito;
    private $nombre;
    private $precio;
    private $genero;
    private $stock;
    private $archivosubido;

    public function __construct($idCarrit,$nom, $pre, $gen, $stoc, $archivo) {
        $this->idCarrito = $idCarrit;
        $this->nombre = $nom;
        $this->precio = $pre;
        $this->genero= $gen;
        $this->stock= $stoc;
        $this->archivosubido = $archivo;
    }

    public function getIDCarrito() {
        return $this->idCarrito;
    }
    public function getNombre() {
        return $this->nombre;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getGenero() {
        return $this->genero;
    }
    public function getStock() {
        return $this->stock;
    }
    public function getArchivo() {
        return $this->archivosubido;
    }

}
class CarritoController {

    public function listar() {

  if(isset($_GET["mensajeextio"])){   
$msjex = $_GET["mensajeextio"];
if($msjex==1){   echo('<script language="javascript">alert("*****COMPRA CON EXITO*****");</script>');}else{ echo('<script language="javascript">alert("No se pudo realizar la compra");</script>');}

}
 
        $mensajeError = '';
$isFalta = false;
if (!isset($_POST['idC'],$_POST['nombre'], $_POST['precio'], $_POST['genero'], $_POST['stock'],$_POST['imagen']) ||
      empty($_POST['idC']) ||   empty($_POST['nombre']) || empty($_POST['genero']) || empty($_POST['stock'])|| empty($_POST['imagen'])) {
    $mensajeError = 'Debe llenar todos los campos <br/>';
    $isFalta = true;
} else {
    $idC = $_POST['idC'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $genero = $_POST['genero'];
    $stock= $_POST['stock'];
    $archivo = $_POST['imagen'];
}




isset($mensajeError, $total);
empty($mensajeError);




if (!$isFalta) {
  
    $datos = new miembro($idC,$nombre, $precio, $genero, $stock, $archivo);
    try {
        if (!isset($_SESSION['lista'])) {
            $lista = [];
            array_push($lista, $datos);
            $_SESSION['lista'] = $lista;}
            else{
            $lista = $_SESSION['lista'];
            array_push($lista, $datos);
            $_SESSION['lista'] = $lista;
            }     
        echo('<script language="javascript">alert("Datos Guardados Correctamente");</script>');
        require_once 'views/carrito/carritoc.php';
          
           echo'<a href="form.php">Seguir registrando</a>';
    } catch (Exception $ex) {
        echo('<script language="javascript">alert("Datos no Guardados");</script>');
        require_once 'views/carrito/carritoc.php';

    }
   

}



function redireccionar($mensaje) {
    $_SESSION['mensajeError'] = $mensaje;
    header("Location:form.php");
}
 require_once 'views/carrito/carritoc.php';
        
    }
    
 public function carrito() {// MOSTRAR EL FORMULARIO DE NUEVO PRODUCTO
        // llamar al modelo de categorias
       // require_once 'models/EmpleadoModel.php';
          // llamar a la vista
        require_once 'views/carrito/carritoc.php';
    }
    
    public function cerrarsesion() {
unset($_SESSION['lista']);
     header('Location:index.php?c=carrito&a=carrito');


        
    }
     public function eliminarunproducto() {
       $id = $_GET['id'];
       if($_SESSION['lista']){
       $lista=$_SESSION['lista'];
        unset($_SESSION['lista'][$id]); 
        header('Location:index.php?c=carrito&a=carrito');
       }else{    alert("no existe sesion lista");}
    }
    
    
    
      
    
   }
