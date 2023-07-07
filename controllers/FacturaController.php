<?php
require_once 'controllers/CarritoController.php';
require_once 'models/FacturaModel.php';



class FacturaController {
    
    private $model;
    public function __construct() {
        $this->model = new FacturaModel();
    }
    
        
    public function compra() {// GUARDAR UN NUEVO PRODUCTO
        // validaciones
        // if(!isset($_POST['codigo'])) {  $_SESSION['mensaje']="Faltan datos requeridos";
        // header('');}
        // leer parametros del fomulario
         
  if(isset($_SESSION['lista'])){
      $lis=$_SESSION['lista'];
     foreach ($lis as $n){ 
  echo var_dump($n);
   echo $idP=$n->getIDCarrito();
  $stock = $n->getStock();
   $idU = $_SESSION['id'];
   $precF = $n->getPrecio();
    $fechaActual = new DateTime('NOW');
    $strfecha = $fechaActual->format('Y-m-d H:i:s');
   $res= $this->model->insertar($idP, $idU,$precF,$strfecha); 
   
   $res2= $this->model->actualizar($idP,  $stock); 
   
   echo "lista vacia";
      }
         }else {
             echo "lista vacia";
         }
      if (!$res && !$res2) {
            $msj = '0';
       $color = "danger";
        }else {
           echo('<script>alert("Ex");</script>');
            unset($_SESSION['lista']);
           $msj = '1';
           
            $color = 'primary';
        }
       $_SESSION['mensaje'] = $msj;
       $_SESSION['color'] = $color;
        //llamar a la vista
        header("Location:index.php?c=carrito&a=listar&mensajeextio=$msj");
    }
    
    
    
    
    
    public function mostrar(){
    $resultados = $this->model->mostrarF();
    require_once 'views/factura/listafacturaView.php';
    }
  
    
        public function buscarAjax(){
       //lectura de parametros
       $busq= $_GET['b'];
   
       //llamar al modelo
       $resultados = $this->model->consultaXParametro($busq);
       //llama a la vista
       // require_once 'views/productos/listaproductosView.php';
        
        echo json_encode($resultados);
   }
    
    
    
    
    
    
    
}