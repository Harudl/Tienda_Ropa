
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
      
<form action="index.php?c=Deporte&a=agregar" method="post" enctype="multipart/form-data" onsubmit=" return validar()"  >
<div class="formularios">
            <h2  style="text-align: center;">DE-ONIICHAN</h2>
  <p>     REGISTRO DE PRODUCTO DEPORTES:<br> </p>

    <div class="formItem">
        <label>Nombre del producto:</label>
       <input type="text" name="nombre"><br>
    </div>

    <div class="formItem">
        <label>precio del producto:</label>
       <input type="text" name="precio" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"><br>
    </div>

    <div class="formItem">
        <label>Género:</label><br>
        <input type="radio" name="genero" value="masculino"/>MASCULINO
        <input type="radio" name="genero" value="femenino"/>FEMENINO<br>
    </div>
  <div class="formItem">
        <label>STOCK disponible:</label>
        <input type="number" min="0" name="stock"><br>
    </div>

  <div>
        <label>Sube un archivo:</label>
        <input type="file" name="archivosubido" id="file" accept=".jpeg, .jpg">
  </div>
 <div class="formItem" style="text-align: center;">
  <input type="submit" value="GUARDAR">
  <input type="reset" value="CANCELAR"> 

  </div>
 </div>
</form>
 
 
  <?php require_once 'views/partials/piedepagina.php'; ?>    