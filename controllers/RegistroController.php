<?php
 
if (!isset($_SESSION)) {
    session_start();
}

require_once 'models/RegistroModel.php';


class RegistroController {
  private $model;

    public function __construct() {
        $this->model = new RegistroModel();
    }
    
    
    public function mostrarFRegistro(){
           require_once 'models/RegistroModel.php';
        require_once 'views/registro/registrarNuevoView.php';
    }
    
    
   
    public function agregar() {// GUARDAR UN NUEVO PRODUCTO
       
        $nom = htmlentities($_POST['nombres']);
        $ape = htmlentities($_POST['apellidos']);
        $pass = htmlentities($_POST['password']);
        $user = htmlentities($_POST['user']);
        $cli = htmlentities($_POST['cliente']);
        $email = htmlentities($_POST['correo']);  
      
        $res= $this->model->insertar($nom, $ape,$pass,$user,$cli,$email);
       
        if (!$res) {
            $msgr = '0';
            $color = "danger";
        }else{
           $msgr = '1';
            $color = 'primary';
        }
       $_SESSION['mensaje'] = $msgr;
       $_SESSION['color'] = $color;

        //llamar a la vista
        header("Location:index.php?c=Login&a=Login&mg=$msgr");
    }
  
    
    
        public function  mostrar(){ 
        
        $id = $_SESSION['id'];
        
        $registro = $this->model->consultaXId($id);
        require_once 'views/registro/listaregistroView.php';// no cambian la url
        
    }
    
    public function editar(){ // EDITA UN PRODUCTO EXISTENTE
       $id = $_SESSION['id'];
        $nom = htmlentities($_POST['nombres']);
        $ape = htmlentities($_POST['apellidos']);
        $pass = htmlentities($_POST['password']);
        $user = htmlentities($_POST['user']);
        $cli = htmlentities($_POST['cliente']);
        $email = htmlentities($_POST['correo']);  
    
        $res= $this->model->editar($id,$nom, $ape,$pass,$user,$cli,$email);
        $msj = 'Cliente actualizado exitosamente';
      $color = 'primary';
        if (!$res) {
            $msgr = '0';
            $color = "danger";
        }else{
           $msgr = '1';
            $color = 'primary';
        }
       $_SESSION['mensaje'] = $msgr;
       $_SESSION['color'] = $color;


        //llamar a la vista
         header("Location:index.php?c=Registro&a=mostrar&mg=$msgr"); 
        
    }
    
    
    
    
    
    
    
    
    
    
}