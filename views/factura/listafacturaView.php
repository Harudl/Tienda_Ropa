<?php require_once 'views/partials/encabezado.php' ?>

<style>
    .contenedortabla{
    margin: 50px auto;
    width: 600px;
}
.tablaclase{
    background-color: white;
    text-align: center;
    border-collapse: collapse;
    width:100%
        
}
th,td{
    padding: 20px;
}
thead{
    background-color: #cccccc;
    border-bottom: solid 5px;
    
}
tr:nth-child(event){
    background-color: whitesmoke;
}
.botonvaciar{
     border:solid 1px black;
     background-color: whitesmoke;
     text-decoration: none;
     font-size: 15px; 
     padding-left:10px; 
     padding-right:10px;
}
</style>


<section>
<div class="contenedortabla">
    <div class="row">
        <div class="col-sm-6">
            <form action="" method="POST">
                <input type="text" name="busqueda" id="busqueda"  placeholder="buscar..." onkeyup="cargarFactura()" />
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>       
        </div>
        <div class="col-sm-6 d-flex flex-column align-items-end">
           
        </div>
    </div>
     
    <div class="table-responsive mt-2">
        <table class="tablaclase"  >
            <thead class="thead-dark">
             <th>ID DE LA COMPRA</th>
               <th>CATEGORIA DEPORTES</th>
            <th>NOMBRE DEL PRODUCTO</th>
            <th>FECHA DE LA COMPRA</th>
            <th>PRECIO DEL PRODUCTO</th>
            
            </thead>
            <tbody class="tabladatos" id="tabladatos">
                <?php foreach ($resultados as $fila) {   ?>
                <tr>
                     <td><?php echo $fila['id_compras'];?></td>
                     <td><?php echo $fila['genero'];?></td>
                   <td><?php echo $fila['nombre_producto'];?></td>
                    <td><?php echo $fila['fecha_compra'];?></td>
                   <td><?php echo $fila['precio_final'];?></td>
             </tr>
                <?php }                ?>
                 </tbody>
        </table>
   

     <div style=" text-align: center; margin-top: 6.5%; "  class="botones"  > 
         <a href="index.php?c=carrito&a=cerrarsesion">VACIAR</button></a> 
         <a href=" index.php?c=Factura&a=compra">COMPRA</button></a> 
             <a href="" class="botonvaciar">HISTORIAL DE COMPRA</button></a>
      </div>
        
     </div>
    
        
    <script type="text/javascript" src="assets/js/AjaxFactura.js">

</script>  
  
           </section>
 <?php require_once 'views/partials/piedepagina.php'; ?>    

