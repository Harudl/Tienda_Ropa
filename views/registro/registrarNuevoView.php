<?php require_once 'views/partials/encabezado.php'; ?>
        <section class="registro">
        <div id="contenedor">
          <div >
              <div class="subtitulo"> <h2 style="text-align:center;">Registro de Usuario</h2></div>
                     <h4  >Ingrese sus datos</h4>
                <hr  id="barraform">
                
                <div class="formularios">
                    <form id="formContacto" action="index.php?c=Registro&a=agregar" " method="post"  onsubmit=" return validarregistro()" enctype="multipart/form-data" ">
                        <div class="row">
                            <div class=" col-md-6">
                                <label >Nombre</label> <br>
                                <input type="text" name="nombres" id="nombres" class="expansion"/>
                            </div>
                            <div class="col-md-6 ">
                                <label >Apellido</label> <br>
                                <input type="text" name="apellidos" id="apellidos" class="expansion" />
                            </div>
                        </div>
                          <div class="row">
                            <div class="col-md-6">
                                <label>Correo Electronico:</label> <br>
                                <input type="email" name="correo" id="correo" class="expansion" />
                            </div>
                         </div>
                            <div class="col-md-6">
                                <label>Username:</label> <br>
                                <input type="text" name="user" id="user" class="expansion" />
                            </div>

                       <div class="row">
                            <div class=" col-md-6">
                              
                                <label class=" col-md-6">Contraseña </label>  
                                <input type="password" name="password" id="password" class="expansion"/>
                                <p style="font-size: 70%; color:gray;"> Minimo 6 caracteres </p>
                            </div>
                            <div class="col-md-6 ">
                                <label >Repetir Contraseña</label> <br>
                                <input type="password" name="recontraseña" id="recontraseña" class="expansion"/>
                            </div>
                        </div>
                     <input type="hidden" name="cliente" id="cliente" value="3"/>
                        <div class="row" >
                            <div class="col-md-9">
                           <label>   <input type="checkbox" name="terminos" />
                               He leído y aceptado los Términos de uso y condiciones <br></label> 
                             </div> 
                               <div class="col-md-9">
                                <label>  <input type="checkbox" name="terminos2" />
                          Desea estar informado de todas las promociones  y ofertas que Onii-Chan tiene</label>
                            </div>
                        </div>

                         <div id="espacio">
                            <div style="text-align:center;"> 

                         <div style="display:inline-block;"> 
                             <input type="submit" class="btn-dark" value="Registrarse"> 
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