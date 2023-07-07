<?php
  session_start();


require_once 'models/LoginModel.php';

class LoginController {
  private $model;

    public function __construct() {
        $this->model = new LoginModel();
    }
    
    
     public function login() {// MOSTRAR EL FORMULARIO DE NUEVO PRODUCTO
        // llamar al modelo de categorias
       // require_once 'models/EmpleadoModel.php';
          // llamar a la vista
        require_once 'views/login/login.php';
    }
    public function cerrarSesion(){
    
        $this->model->cerrarLogin();
     header('Location:index.php?c=Index&a=index');
        
    }
    
         
    public function usuario(){
         $email = htmlentities($_POST['correo']);
        $pass = htmlentities($_POST['contraseña']);
        
       // $usu = 'usuario'; //$_SESSION['usuario'];    
        
        $depor = $this->model->consultaUser($email,$pass);
        
        // llamar a la vista
        if ($depor == false ){
          $tipoUser = $this->model->consultaTipoUser($email,$pass);
          
          if ($tipoUser['tipo_rol_user'] == "admin"){
          setcookie("user", $tipoUser['username'], time() + (60 * 60), "/");
          setcookie("pass", $tipoUser['password'], time() + (60 * 60), "/");
          setcookie("rol", $tipoUser['tipo_rol_user'], time() + (60 * 60), "/");
          $_SESSION['user']=$tipoUser['username'];
          $_SESSION['rol']="admin";
          header('Location:index.php?c=Index&a=index');
          }
           if ($tipoUser['tipo_rol_user'] == "cliente"){
            setcookie("user", $tipoUser['username'], time() + (60 * 60), "/");
          setcookie("pass", $tipoUser['password'], time() + (60 * 60), "/");
          setcookie("rol", $tipoUser['tipo_rol_user'], time() + (60 * 60), "/");
          $_SESSION['id']=$tipoUser['id'];
          $_SESSION['user']=$tipoUser['username'];
          $_SESSION['rol']="cliente";
          header('Location:index.php?c=Index&a=index');   
         
          }
           if ($tipoUser['tipo_rol_user'] == "vendedor"){
              
          }
          
          
          //$_SESSION('usuario') = 
            
        }if ($depor == true){
        require_once 'views/login/login.php';
      echo('<script>alert("Contraseña/Usuario Incorrectos");</script>');
        }
      
        
    }
    
    
    
 
    
    
}