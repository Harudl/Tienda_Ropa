<?php

class IndexController {
    
    
    
   public function index(){
        require_once 'views/homeView.php'; //mostrando la vista de home de la aplicacion
        
    }
    
    public function estaticas(){
        $page =  $_GET['p'];
        require_once 'views/estaticas/'.$page.'.php';
   }
    
   
    
}
