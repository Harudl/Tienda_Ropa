 <?php require_once 'views/partials/encabezado.php'; ?>


<style>
        
  textarea,
  input[type="text"]
  {
  width :80%;
  background-image: linear-gradient(to right, pink, lightgreen);
  border: 2px dashed black;
  box-sizing: border-box;
}
 
input[type=submit]{
   width: 100px; 
   height: 50px; 
   padding: 10px ;
   background:plum;
   color:white;
   border: 2px solid #CB72AE;
   font-family:monospace;
}

input[type=reset] {
  border: 2px solid #CB72AE;
    width: 100px; 
   height: 50px; 
   padding: 10px ;
   background:plum;
   color:white;
    font-family:monospace;
 
}
#contenedorPrincipalI img {
   padding: 10px;
    width: 25%;
    height: 25%;
    margin-right: 10%;
    text-align: center;
}
.formularios{
    margin-top: 5%;
}
             
    
</style>

<section>
        <div id="contenedor">
          <div id ="contenedorPrincipalF" >

              <div class="subtitulo"><h2> TU OPINIÓN ES IMPORTANTE</h2></div>
                <div class="formularios">
                     
                      <form id="formSugerencia" onsubmit="return validar()">

                        
               <div id ="contenedorPrincipalI">

            <div id="galeriaI">
             
               <img id ="ima1" onmouseover="des()"
                        onmouseout="ant()"
                         src="assets/images/imtar/t1.jpeg" alt="regalo"/>
                 </div>
           </div>
                            <div class="rowf">
                            <div class=" col-md-6">
                                <label >Nombres</label> <br>
                                <input type="text" name="nombres" id="nombres" class="formItems"/>
                            </div>
                          </div>
                            <div class="rowf">
                            <div class="col-md-6 ">
                               <label >Apellidos</label> <br>
                                <input type="text" name="apellidos" id="apellidos" class="formItems" />
                            </div>
                            </div>
                           <div class="rowf">
                            <div class="col-md-6">
                                <label>Correo Electronico:</label> <br>
                                <input type="text" name="correo" id="correo" class="formItems" />
                            </div>
                         </div>
                            <div class="rowf">
                            <div class="col-md-6">
                                <label>¿Como consideras la Calidad del Producto?</label> <br>
                                <input class="cla" id="mb" type="radio" name="calidad" value="MB"/>Muy Buena
                                <input class="cla" id="b" type="radio" name="calidad" value="B"/>Buena
                                <input class="cla" id="r" type="radio" name="calidad" value="R"/>Regular
                                <input class="cla" id="m" type="radio" name="calidad" value="M"/>Mala

                            </div>
                            </div>
                            <div class="rowf" >
                               <div class="col-md-9">
                                <label>  
                          Desea estar informado de todas las promociones  y ofertas que DeOnichan tiene</label>
                          <input type="checkbox" name="suscripcion" value="suscripcion" id="suscripcion" >
                            </div>
                        </div>

                         <div class="rowf">
                            <div class="col-md-6">
                                <label>Sugerencias en tener una tarjeta de regalo </label> <br>
                                <textarea class="form-control" id="texto" rows="3" ></textarea>
                            </div>
                         </div>

                     
                        
                         <div id="espacio">
                            <div style="text-align:  center;">
                             
                                <input type="submit" class="btn btn-primary" value="Enviar">
                                <input type="reset" class="btn btn-primary" value="Salir"> 
                                
                                
                            </div>
                        </div>
                    </form>

                </div>
            </div> 
        </div>
        </section>
 <?php require_once 'views/partials/piedepagina.php'; ?>    

