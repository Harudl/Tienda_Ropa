<?php require_once 'views/partials/encabezado.php'; ?>
<section>
            
            <div class="todo_el_cuerpo">
            
             <h1 id="demo" onmouseover="mouseOver()" onmouseout="mouseOut()"> ROPA DEPORTIVAS </h1>

             <div class="subtitulo"><h2>HOMBRES </h2></div>
             
            <div class="col-sm-6">
       
                
               <?php  if ((!isset($_SESSION["rol"])) || $_SESSION["rol"] == "cliente") { ?> 
            <form action="" method="POST">
               BUSQUEDA POR HOMBRES:<input type="text" name="busqueda" id="busqueda"  placeholder="buscar..." onkeyup="cargarDeporte()" />
              </form>  
                
             <?php } ?> 
  
           </div>
             
             <div id ="contenedorPrincipal">

            <div id="galeria"  >
            
            <?php foreach ($resultados as $fila) { 
        
                if ($fila['genero'] == "masculino" ) {  ?>
              <div class="elemento" >
               <img id ="i1" onmouseover="des()"
                        onmouseout="ant()"
                         src="<?php echo $fila['imagen']?> " alt="Camisa"/>
            <?php 
            if($fila['stock'] == 0){  /////////////////////////////////////////?>
               <div  class="fondo" style="color:red;  margin-top:-13%; position: relative;" > <p><strong > no stock</strong></p> </div>
           <?php } ?> 
                  
           <div class="itemtext" >
           <h3><?php echo $fila['nombre_producto']?></h3>
          <p><strong >$<?php echo $fila['precio']?></strong></p>
      
          <?php 
          if ((isset($_SESSION["rol"]))){
          if ($_SESSION["rol"] == "admin" ) {?>
          <div style="text-align: center; margin-top: 6.5%; "  class="botones" > 
             <a style="margin-right: 6.5%;" href="index.php?c=deporte&a=mostrar&id=<?php echo $fila['id_producto'] ?> "> Editar </a> 
              <a onclick="if (!confirm('Esta seguro de eliminar el producto?' )) return false;" 
                   href="index.php?c=deporte&a=eliminar&id=<?php echo $fila['id_producto'] ?>&archivoDelete=<?php echo $fila['imagen'] ?>"> Eliminar </a>
           </div>
          
         
          
          <?php } }
          if ((!isset($_SESSION["rol"])) || $_SESSION["rol"] == "cliente") {
            $redireccionar = "index.php?c=carrito&a=listar";
           if ((!isset($_SESSION["rol"]))){  // Si no existe rol
               $redireccionar = "index.php?c=Login&a=login";
           }
          }
          ?>
            <form method="post" action="<?php echo $redireccionar?>"  >  
                 <input type="hidden" name="idC" id="idC" value="<?php echo $fila['id_producto']?>"/>
                  <input type="hidden" name="nombre" id="nombre" value="<?php echo $fila['nombre_producto']?>"/>
                    <input type="hidden" name="precio" id="precio" value="<?php echo $fila['precio']?>"/>
                     <input type="hidden" name="imagen" id="imagen" value="<?php echo $fila['imagen']?>"/>
                      <input type="hidden" name="genero" id="genero" value="<?php echo $fila['genero']?>"/>
                       <input type="hidden" name="stock" id="stock" value="<?php echo $fila['stock']?>"/>
         <?php 
          if ((!isset($_SESSION["rol"])) || $_SESSION["rol"] == "cliente") {      ?>
        <p>    <input type="submit" name="enviar" id="enviar" value="Enviar"/></p>  
         <?php  } ?>
            
           </form>
           </div>
         
              </div>
                <?php }    } ?> 
            </div>
                
                  <script type="text/javascript" src="assets/js/AjaxDeporte.js">

</script>   
                 
              
         <div class="subtitulo"><h2 > MUJERES </h2></div>
         <div class="col-sm-6">
             
              <?php  if ((!isset($_SESSION["rol"])) || $_SESSION["rol"] == "cliente") { ?>
            <form action="" method="POST">
               BUSQUEDA POR MUJERES:<input type="text" name="busqueda" id="busqueda1"  placeholder="buscar..." onkeyup="cargarDeporteF()" />
              </form>       
           </div>
              <?php  } ?>
          
             <div id="galeria2">
                <?php foreach ($resultados as $fila) {   
                if ($fila['genero'] == "femenino"  ) {  ?>
                <div class="elemento">
                    <img id ="il" onmouseover="des()"
                        onmouseout="ant()" src="<?php echo $fila['imagen']?> " alt="Camisa"/>
                    
                      <?php if($fila['stock'] == 0){ ?>
               <div  class="fondo" style="color:red;  margin-top:-13%; position: relative;" > <p><strong > no stock</strong></p> </div>
           <?php } ?> 
               
                    <div class="itemtext">
                    <h3><?php echo $fila['nombre_producto']?></h3>
                   <strong >$<?php echo $fila['precio']?></strong></p>
               
                 
                     <?php 
                          if ((isset($_SESSION["rol"]))){
                     if ($_SESSION["rol"] == "admin" && (isset($_SESSION["rol"]))) { ?>     
           <div style="text-align: center; margin-top: 6.5%; "  class="botones" > 
             <a style="margin-right: 6.5%;" href="index.php?c=deporte&a=mostrar&id=<?php echo $fila['id_producto'] ?>"> Editar </a> 
              <a onclick="if (!confirm('Esta seguro de eliminar el producto?' )) return false;" 
                   href="index.php?c=deporte&a=eliminar&id=<?php echo $fila['id_producto'] ?>&archivoDelete=<?php echo $fila['imagen'] ?>"> Eliminar </a>
           </div>
                          <?php } }
                          if ((!isset($_SESSION["rol"])) || $_SESSION["rol"] == "cliente") {
            $redireccionar = "index.php?c=carrito&a=listar";
           if ((!isset($_SESSION["rol"]))){  // Si no existe rol
               $redireccionar = "index.php?c=Login&a=login";
           }
           
          }  ?>    
                <form method="post" action="<?php echo $redireccionar?>" >  
                  <input type="hidden" name="idC" id="idC" value="<?php echo $fila['id_producto']?>"/>
                    <input type="hidden" name="nombre" id="nombre" value="<?php echo $fila['nombre_producto']?>"/>
                    <input type="hidden" name="precio" id="precio" value="<?php echo $fila['precio']?>"/>
                     <input type="hidden" name="imagen" id="imagen" value="<?php echo $fila['imagen']?>"/>
                      <input type="hidden" name="genero" id="genero" value="<?php echo $fila['genero']?>"/>
                       <input type="hidden" name="stock" id="stock" value="<?php echo $fila['stock']?>"/>
                    <?php 
            if ((!isset($_SESSION["rol"])) || $_SESSION["rol"] == "cliente") {?>   
                    <p> <input type="submit" name="enviar" id="enviar" value="Enviar"/></p>
                  <?php }  ?>
                </form>
                    </div>
                </div>
                <?php }    } ?> 
                 
             </div>
          <script type="text/javascript" src="assets/js/AjaxDeporte.js">

</script>   
       
       </div>
             
           
             
             
          </div>
          </section>

 <?php require_once 'views/partials/piedepagina.php'; ?>