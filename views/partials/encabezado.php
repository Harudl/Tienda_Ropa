   <?php     
if (!isset($_SESSION)) {
    session_start();
}
 ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    
    <head>
        <title>DE-ONICHAN</title>
        <meta charset="UTF-8">
        <meta name="DEONICHAN" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/cssmenuybase/menuestilo.css"/>
   
         <link rel="stylesheet" href="assets/css/cssmujeres/cssmujer.css"/>  
         <link rel="stylesheet" href="assets/css/cssninos/estiloninos.css"/> 
         
       
         
        <link rel="stylesheet" href="assets/css/cssrebajas/EstilosRebajas.css"/> 
      
        <link rel="stylesheet" href="assets/css/cssregistro/cssregistro.css"/>
       
        <script type="text/javascript" src="assets/js/validaciones.js"> </script>
         <script type="text/javascript" src="assets/js/validacionsport.js"> </script>
         <script type="text/javascript" src="assets/js/validacionproducto.js"> </script>
                <script type="text/javascript" src="assets/js/validarregistro.js"> </script>
         
        <style>
            *{
   margin: 0;
   font-family:cursive;
}
             h5{
                 font-weight: normal;
                 font-size:20px;
             }
            #ninosD{
                 font-size: 10px;
                 color:#474747
             }
          
             #femenino1{
        width:60%;
       height: 60%;    
             }
               #mujer{
                 font-size: 10px;
                 margin-top: 15px ;
                 margin-bottom: 50px;
                 color:#474747
             }
              h1{
        text-align: center;  
        }   
      
     .elemento img{
               width: 75%; /*width:230px;*/
               height:70%; /*height: 170px;*/
                 position:relative;
            }  
       
       .elemento{
                border:1px solid purple;
                border-radius: 10px;
               /* AQUI VER*/
             /*   padding: 15px;
                margin:  5px;*/
             padding: 5%;
                margin:  1%;
                background: white;
                text-align: center;
                cursor:pointer;
                transition:all 300ms;
        position:relative;
             }
             
                      
              .elemento:hover{
               transform: scale(1.05);
               color:#CB72AE;
               font-family:book Antiqua;
               font-size: 16px; 
               border:3px solid black;
               border-radius: 10px;
              
               font-style: italic;
               }
               
               
            
            #galeria{
                display:grid;
                grid-template-rows: 280px 280px;
           grid-template-columns: 22% 22% 22% 22%; 
                grid-gap:15px;
                margin-top: 2%;
                margin-left: 10%;
                margin-bottom: 2%;
               
            }
                #galeria2{
                display:grid;
                grid-template-rows: 280px 280px;
              
                grid-template-columns: 22% 22% 22% 22%; 
                grid-gap:15px;
                  margin-top: 2%;
                  margin-left: 10%;
                  margin-bottom: 2%;

            }
            
            @media  (max-width:720px){
              #galeria{
                display:grid;
                grid-template-rows: 300px 300px;
           grid-template-columns: 150px 150px; 
                grid-gap:8px;
                margin-top: 2%;
                margin-left: 8%;
                margin-bottom: 2%;
               
            } 
            #galeria2{
                display:grid;
                grid-template-rows: 300px 300px;
           grid-template-columns: 150px 150px; 
                grid-gap:8px;
                margin-top: 2%;
                margin-left: 8%;
                margin-bottom: 2%;
               
            }  
            
            .elemento{
                border:1px solid purple;
                border-radius: 10px;
               /* AQUI VER*/
                padding: 5%;
                margin:  1%;
                background: white;
                text-align: center;
                cursor:pointer;
                transition:all 300ms;
            }
            }
            
            
            
            .itemtext{
            text-align: center; 
            border:2px;
            border-radius: 10px;
           Font-size: 70%; 
          
         /*  Font-size: 12px; */
             }
            
             .fondo{
                 background: black;
                 padding:auto;
             }  
             
             
             
             
          #ninosD{
                 font-size: 10px;
                 color:#474747
             }
             
            
            #ima1{
                width:200px;
                height: 150px;
      }
      #contenedorPrincipalI{ 
          text-align: center;
      }
     
     
      .botones a{
  color: #fff;
  background-color: #212529;
  border-color: #212529; 
  text-decoration: none;   
   /* padding:3px;
    padding-left: 14px;
    padding-right: 14px;
    padding-top: 1px;*/
    padding:2%;
    padding-left: 5%;
    padding-right: 5%;
    padding-top: 1%;
   
}
.botones a:hover{
    color: #CB72AE;
}
      
  
             
         </style>
      <?php require_once 'views/script/script.php'?>  
    </head>
    
    
    <body>
       
     
        <header>
            
        
                   
                     
                 <?php 
      
               if(isset($_SESSION["user"])){  ?>
              <div class="encabezado"> 
              <img  id="logoprincipal" src="assets/images/imgmenu/logoP.png" alt="logo "  />
              <a class="micuenta" href="index.php?c=Login&a=cerrarSesion" style="text-decoration: none;">     
              <img id="logo_ingresar" src="assets/images/imgmenu/cuenta.png" alt="logo"/>
                 <span>CERRAR SESION</span>
                  </a>
               <?php   if($_SESSION["rol"] == "cliente"){  ?>
                  <a class="micuenta" href="index.php?c=Registro&a=mostrar" style="text-decoration: none;">
                  <img id="logo_ingresar" src="assets/images/imgmenu/cuenta.png" alt="logo"/>
                  <span>MI CUENTA</span>
                  </a>
               <?php  }  ?>
              
                   </div>  
             
 <?php  }else {  ?>     
                     <div class="encabezado">
             <img  id="logoprincipal" src="assets/images/imgmenu/logoP.png" alt="logo "  />
              <a class="micuenta" href="index.php?c=Login&a=Login&p=login" style="text-decoration: none;">     
             <img id="logo_ingresar" src="assets/images/imgmenu/cuenta.png" alt="logo"/>
              <span>INGRESAR</span>
                  </a>
                   </div>
                  <?php   }?>
                      
                 
                  
               
            
        <nav class="menu"> 
               <ul >
                <li><div><a  href="index.php">INICIO</a></div></li>
                <li><div><a  href="index.php?c=index&a=estaticas&p=mujeres">MUJERES</a></div></li>
                
                   <?php
             if((isset($_SESSION["rol"])) && $_SESSION['rol'] =="admin") {  ?>
                <li><div><a  href="index.php?c=Deporte&a=deporteAdmin">DEPORTE</a></div> </li>
                <?php } ?> 
                <?php if((!isset($_SESSION["rol"])) || $_SESSION["rol"] == "cliente") {  ?>
                <li><div><a  href="index.php?c=Deporte&a=deporteCliente">DEPORTE</a></div></li>
             <?php } ?>
                
                
                
                <li><div><a  href="index.php?c=index&a=estaticas&p=niños">NIÑOS</a></div></li>
                <li><div><a  href="index.php?c=index&a=estaticas&p=regaloform">T.REGALO</a></div></li>
                <li><div><a  href="index.php?c=index&a=estaticas&p=rebajas">REBAJA</a></div></li>    
              
                <?php
          if(isset($_SESSION["user"])){
                 if($_SESSION['rol'] =="admin") {  ?>
                <li><div><a  href="index.php?c=Deporte&a=mostrarForm">REGISTRO PRODUCTO</a></div></li>
             <?php } ?>
                   <?php if($_SESSION["rol"] == "cliente") {  ?>
                <li><div><a  href="index.php?c=Carrito&a=listar">CARRITO</a></div></li>
             <?php } } ?>
                
                
                </ul>
           
          
        </nav>
        </header>
        
        