<?php 

$controlador = (isset($_GET['c']))?$_GET['c']:'Index';
$accion =(isset($_GET['a']))?$_GET['a']:'index';


if(!empty($controlador) && !empty($accion)){
    $controlador = ucwords(strtolower($controlador)).'Controller';   
     //echo $controlador;
    require_once './controllers/'.$controlador.'.php';
    $objControlador = new $controlador();
   
    $objControlador->$accion();
}
      