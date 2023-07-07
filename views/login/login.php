 
<?php require_once 'views/partials/encabezado.php'; ?>
<section>
    <?php 
        
      if(isset($_GET["mg"])){
$msjex = $_GET["mg"];
if($msjex==1){   echo('<script language="javascript">alert("REGISTRO CON EXITO");</script>');}else{ echo('<script language="javascript">alert("No se pudo realizar el registro");</script>');}

}  
    ?>
    
    
        <div id="contenedor">
          <div >
            <div class="subtitulo"> <h2 style="text-align:center;">Iniciar Sesion</h2> </div>
               <div class="formularios">
                  <form  action="index.php?c=Login&a=usuario" " method="post" id="formContacto" >
                        <div class="row">
                            <div class=" col-md-6">
                                  <h4  >INGRESE CON SU CUIENTA</h4>
                                   <hr  id="barraform">
                                   <div>  
                                <label >Correo Electronico</label> <br>
                                <input type="text" name="correo" id="correo" class="expansion"/>
                                   </div>
                                <div style="margin-top: 5%;">
                                <label >Contraseña</label> 
                                <input type="password" name="contraseña" id="contraseña" class="expansion" />
                                  
                               </div>
                                   
                                                                  
                                <div style="text-align: center; margin-top: 5%"> 
                          <input type="submit" class="btn-dark" value="Ingresar"> 
                                </div>
                            </div>
                       
                                <div class=" col-md-6">
                                    <h3>NO ESTOY REGISTRADO</h3><br>
                                   <p>Con tu cuenta podrás realizar compras en línea, 
                                       consultar el saldo de tu Crédito Directo, 
                                       revisar tus estados del crédito y 
                                       acceder a todos los servicios que oniichan,
                                       tiene para tí.</p>
                                <div style="text-align: center; margin-top: 6.5%;" class="boton"> 
                                         
                                   <a href="index.php?c=Registro&a=mostrarFRegistro" > Registrarse </a> 
                          
                                  </div>
                                 </div> 
                                
                            </div>
                      
                    </form>

                </div>
            </div> 
            
      </div>
        
        
        </section> 
          
 <?php require_once 'views/partials/piedepagina.php'; ?>    