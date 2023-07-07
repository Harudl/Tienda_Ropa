<?php require_once 'views/partials/encabezado.php'; ?>

<style>
           .formularios{
                border: 2px solid black;
                border-radius: 5px;
                padding: 10px;
                background: #F7E7E7;
                width: 40%;
                margin: 0 auto;
            }
            .formItem{
                padding: 10px;
            }
            .error{
                text-align: center;
                color:red;
                font-size: 15px;
            }

 </style>
 
      
<form action="index.php?c=Deporte&a=editar" " method="post" enctype="multipart/form-data" onsubmit=" return validar()"  >
<div class="formularios">
            <h2  style="text-align: center;">DE-ONIICHAN</h2>
  <p>     EDITAR PRODUCTO DE DEPORTES:<br> </p>
<input type="hidden" name="id" id="id" value="<?php echo $depor['id_producto']; ?>"/>
    <div class="formItem">
        <label>Nombre del producto:</label>
       <input type="text" name="nombre" value="<?php echo $depor['nombre_producto']; ?>"><br>
    </div>

    <div class="formItem">
        <label>precio del producto:</label>
        <input type="text" name="precio"  value="<?php echo $depor['precio'];?>"><br>
    </div>

    <div class="formItem">
        <label>Género:</label><br>
     
       <?php
          $checkF="";
          $checkM = "";
       if ($depor['genero'] == "masculino") { 
        $checkM = "checked";
          } if ($depor['genero'] == "femenino") { 
        $checkF = "checked";
          } ?>
        <input type="radio" name="genero" value="masculino" <?php echo $checkM ?>/>MASCULINO
        <input type="radio" name="genero" value="femenino" <?php echo $checkF ?>/>FEMENINO<br>
    </div>
  <div class="formItem">
        <label>STOCK disponible:</label>
        <input type="number" name="stock" min="0" value="<?php echo $depor['stock']; ?>"><br>
    </div>



<div style="text-align: center;" id="preview">
    <img style=" width: 25%; height:25%;" src="<?php echo $depor['imagen'];?> " alt="Camisa"/>  
 </div>


  <div>
        <label>Subir la imagen:</label>
        <input type="hidden" name="archivoDel" value="<?php echo $depor['imagen'];?>">
        <input type="file"  name="archivosubido"  id="archivosubido"  accept=".jpeg, .jpg" onechange="cambiarIMG()"">
<!--                                                 id="archivosubido"-->
  </div>

<script src="assets/js/actualizarImagen.js" ></script>


 <div class="formItem" style="text-align: center;">
  <input type="submit" value="GUARDAR">
  <input type="reset" value="CANCELAR"> 

  </div>
 </div>
</form>
 
 
  <?php require_once 'views/partials/piedepagina.php'; ?>   