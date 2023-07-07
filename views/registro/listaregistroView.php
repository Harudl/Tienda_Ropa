<?php require_once 'views/partials/encabezado.php'; ?>
       
<section class="registro">
     <?php 
        
      if(isset($_GET["mg"])){
$msjex = $_GET["mg"];
if($msjex==1){   echo('<script language="javascript">alert("EDICION REALIZADA CON EXITO");</script>');}else{ echo('<script language="javascript">alert("ERROR AL EDITAR");</script>');}

}  
    ?>
    
        <div id="contenedor">
          <div >
              <div class="subtitulo"> <h2 style="text-align:center;">MI CUENTA</h2></div>
                     <h4  >Mi Usuario</h4>
                <hr  id="barraform">
                
                <div class="formularios">
                 <form id="formContacto" action="index.php?c=Registro&a=editar" " method="post" enctype="multipart/form-data" ">
                        <div class="row">
                            <div class=" col-md-6">
                                <label >Nombre</label> <br>
                                <input type="text" name="nombres" id="nombres" class="expansion" value="<?php echo $registro['nombre']; ?>""/>
                            </div>
                            <div class="col-md-6 ">
                                <label >Apellido</label> <br>
                                <input type="text" name="apellidos" id="apellidos" class="expansion" value="<?php echo $registro['apellidos']; ?>" />
                            </div>
                        </div>
                          <div class="row">
                            <div class="col-md-6">
                                <label>Correo Electronico:</label> <br>
                                <input type="text" name="correo" id="correo" class="expansion" value="<?php echo $registro['email']; ?>" />
                            </div>
                         </div>
                            <div class="col-md-6">
                                <label>Username:</label> <br>
                                <input type="text" name="user" id="user" class="expansion" value="<?php echo $registro['username']; ?>" />
                            </div>

                       <div class="row">
                            <div class=" col-md-6">
                              
                                <label class=" col-md-6">Contraseña </label>  
                                <input type="password" name="password" id="password" class="expansion" value="<?php echo $registro['password']; ?>"/>
                                <p style="font-size: 70%; color:gray;"> Minimo 6 caracteres </p>
                            </div>
                            <div class="col-md-6 ">
                                <label >Repetir Contraseña</label> <br>
                                <input type="password" name="recontraseña" id="recontraseña" class="expansion" value="<?php echo $registro['password']; ?>"/>
                            </div>
                        </div>
                     <input type="hidden" name="cliente" id="cliente" value="3"/>
                         <div id="espacio">
                            <div style="text-align:center;"> 

                         <div style="display:inline-block;"> 
                             <input type="submit" class="btn-dark" value="Guardar Edicion"> 
                         </div>
                          <div style="display:inline-block; " class="boton"> 
                               <a href="index.php " style="font-weight: lighter;"> Regresar </a> 
                           </div>
                          </div>
                          </div>
                   
                    </form>

                </div>
            </div> 
            
      </div>
        
        </section> 
           <?php require_once 'views/partials/piedepagina.php'; ?>    