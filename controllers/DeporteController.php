<?php
 
if (!isset($_SESSION)) {
    session_start();
}

require_once 'models/DeporteModel.php';

class DeporteController {
    
    private $model;

    public function __construct() {
        $this->model = new DeporteModel();
      
    }
  /// PRESENTA LA LISTA
    public function deporteAdmin(){
    $resultados = $this->model->listar();
    require_once 'views/deporte/listadeporteView.php';
       
    }
    
    public function deporteCliente(){
    $resultados = $this->model->deporteCli();
    require_once 'views/deporte/listadeporteView.php';
    }
    
    
    /////// MOSTRAR FORMULARIO 
    public function mostrarForm() {
        require_once 'models/DeporteModel.php';
        require_once 'views/deporte/deporteNuevoView.php';
    }
    
    
    /////////// AGREGAR
    
    
    public function agregar() {// GUARDAR UN NUEVO PRODUCTO
        // validaciones
        // if(!isset($_POST['codigo'])) {  $_SESSION['mensaje']="Faltan datos requeridos";
        // header('');}
        // leer parametros del fomulario
        $nom = htmlentities($_POST['nombre']);
        $prec = htmlentities($_POST['precio']);
        $gen = htmlentities($_POST['genero']);
        $stock = htmlentities($_POST['stock']);
        $target_file = "assets/images/imad/". basename($_FILES["archivosubido"]["name"]);
     $archi=$target_file;
    if (move_uploaded_file($_FILES["archivosubido"]["tmp_name"], $target_file)) {
    $msj = htmlspecialchars(basename( $_FILES["archivosubido"]["name"]));
    }
        
    /////////////FALTA VALIDAR ARCHIVO
        $usu = 'usuario'; //$_SESSION['usuario'];    
        //llamar al modelo
        
        
        $res= $this->model->insertar($nom, $prec,$archi,$gen,$stock);
        
       
        if (!$res) {
            $msj = "No se pudo realizar el guardado";
            $color = "danger";
        }else{
           $msj = 'Producto guardado exitosamente';
            $color = 'primary';
        }
       $_SESSION['mensaje'] = $msj;
       $_SESSION['color'] = $color;

        //llamar a la vista
        header('Location:index.php?c=Deporte&a=deporteAdmin');
    }
  
    ///////////////////EDITAR
    
    ///FORMULARIO PARA EDITAR
    public function  mostrar(){ 
        // validaciones
        // if(!isset($_GET['id'])) {  $_SESSION['mensaje']="Faltan datos requeridos";
        // header('');}
        // leer parametros 
        $id = htmlentities($_GET['id']);
        $usu = 'usuario'; //$_SESSION['usuario'];    
       
        
        //llamar al modelo
        $depor = $this->model->consultaXId($id);
        
        // llamar a la vista
         require_once 'views/deporte/deporteEditarView.php';// no cambian la url
        
    }
    
    public function editar(){ // EDITA UN PRODUCTO EXISTENTE
          // validaciones
        // if(!isset($_POST['codigo'])) {  $_SESSION['mensaje']="Faltan datos requeridos";
        // header('');}
        // leer parametros del fomulario
         $id = htmlentities($_POST['id']);
       $nom = htmlentities($_POST['nombre']);
        $prec = htmlentities($_POST['precio']);
        $gen = htmlentities($_POST['genero']);
        $stock = htmlentities($_POST['stock']);
        $deleteArchivo = htmlentities($_POST['archivoDel']);
        echo $deleteArchivo;
       
       // VALIDAR ARCHIVO SI EXISTE   
      
        
        
     $target_file = "assets/images/imad/". basename($_FILES["archivosubido"]["name"]);
     
     
     // archivo no existe
      if (!file_exists($target_file)){
         if (move_uploaded_file($_FILES["archivosubido"]["tmp_name"], $target_file)) {
    $archi=$target_file;
    unlink($deleteArchivo);
    } 
  }else{  ///archivo ya existe
        $archi=$deleteArchivo;
     // echo('<script language="javascript">alert("Archivo Ya existente");</script>');
     // move_uploaded_file($deleteArchivo, $deleteArchivo);
   }
    
    
    
        $usu = 'usuario'; //$_SESSION['usuario'];    
    
        
//llamar al modelo
        $res= $this->model->editar($id,$nom, $prec,$archi,$gen,$stock);
        $msj = 'Producto actualizado exitosamente';
        $color = 'primary';
        if (!$res) {
            $msj = "No se pudo realizar la actualizacion";
            $color = "danger";
        }
       $_SESSION['mensaje'] = $msj;
       $_SESSION['color'] = $color;

        //llamar a la vista
         header('Location:index.php?c=Deporte&a=deporteAdmin'); 
        
    }
    
    
    
    
  // ELIMINAR 
    public function eliminar() {
        // validaciones
        // if(!isset($_GET['id'])) {  $_SESSION['mensaje']="Faltan datos requeridos";
        // header('');}
        // leer parametros 
        $id = htmlentities($_GET['id']);
        $archiD = htmlentities($_GET['archivoDelete']);
        unlink($archiD);
        $usu = 'usuario'; //$_SESSION['usuario'];    
        //llamar al modelo
        $res= $this->model->eliminar($id);
        $msj = 'Producto eliminado exitosamente';
        $color = 'primary';
        if (!$res) {
            $msj = "No se pudo realizar la eliminacion";
            $color = "danger";
        }
       $_SESSION['mensaje'] = $msj;
       $_SESSION['color'] = $color;

        //llamar a la vista
        header('Location:index.php?c=Deporte&a=deporteAdmin');
    }
    
    public function buscarAjaxd(){
       //lectura de parametros
       $busq= $_GET['b'];
   
       //llamar al modelo
       $resultados = $this->model->consultaXParametro($busq);
       //llama a la vista
       // require_once 'views/productos/listaproductosView.php';
        
        echo json_encode($resultados);
   }
    
    
  
    
    
    
    
}