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
                <input type="text" name="busqueda" id="busqueda"  placeholder="buscar..."/>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>       
        </div>
        <div class="col-sm-6 d-flex flex-column align-items-end">
           
        </div>
    </div>
     
    <div class="table-responsive mt-2">
        <table class="tablaclase">
            <thead class="thead-dark">
             <th>ID</th>
            <th>Nombre_producto</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>Genero </th>
            <th>Cantidad </th>
            <th>Acciones</th>
            </thead>
            <tbody class="tabladatos">
                <?php
              if(isset($_SESSION)){              
              }
                if(isset($_SESSION['lista'])){
                $lista=$_SESSION['lista'];
               foreach ($lista as $n=>$N){
         
                ?>
                <tr>
                     <td><?php echo $N->getIDCarrito();?></td>
                   <td><?php echo $N->getNombre();?></td>
                    <td><?php echo $N->getPrecio();?></td>
                    <td><img style="width: 70%; height: 70%" src="<?php echo $N->getArchivo();?>" ></td>
                    <td><?php echo $N->getGenero();?></td>
                   <td>1</td>
                   
                     <td>
                    
                   <a class="eliminarunproducto" onclick="if (!confirm('Esta seguro de eliminar el producto?' )) return false;" 
                      href="index.php?c=carrito&a=eliminarunproducto&id=<?php echo $n ?>">eliminar</a>
                    
                   </td>
  
             </tr>
     <?php }  }else{
                    
                }
                ?>
            </tbody>
        </table>
   

     <div style=" text-align: center; margin-top: 6.5%; "  class="botones"  > 
         <a href="index.php?c=carrito&a=cerrarsesion">VACIAR</button></a> 
         <a href=" index.php?c=Factura&a=compra">COMPRA</button></a> 
             <a href=" index.php?c=Factura&a=mostrar">HISTORIAL DE COMPRA</button></a>
      </div>
        
     </div>
  
           </section>
 <?php require_once 'views/partials/piedepagina.php'; ?>    

