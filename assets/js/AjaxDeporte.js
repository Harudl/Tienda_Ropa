function cargarDeporte(){
    // leer paramteros
    var bus= document.getElementById("busqueda").value;
    
    // realizar la peticion
    var url="index.php?c=Deporte&a=buscarAjaxd&b="+ bus;
    var xmlh = new XMLHttpRequest();
    xmlh.open("GET", url, true);
    xmlh.send();
    
    // lectura de respuesta
     xmlh.onreadystatechange = function(){
        if(xmlh.readyState === 4 && xmlh.status===200){
            var respuesta = xmlh.responseText;
             var facturas = JSON.parse(respuesta);
             //actualizar cierta parte de la pagina
              console.log(facturas);
            // actualizar cierta parte de la pagina
                       resultados = '';
             
                       
            for (var i = 0; i < facturas.length; i++) {
                factura = facturas[i];
               
                if(factura.genero ==="masculino" && factura.stock > 0){
              
                resultados += '<div class="elemento" > ';
                resultados += '<img src="' + factura.imagen + '"/>';
                resultados += '<div class="itemtext"> ';
                resultados += '<h3>' + factura.nombre_producto + '</h3>';
                resultados += '<p $><strong >$' + factura.precio + '</strong></p>';
                resultados += '<form method="post" action="index.php?c=carrito&a=listar"> ';

     resultados +='<input type="hidden" name="idC" id="idC" value="'+factura.id_producto+'"/>';
     resultados += ' <input type="hidden" name="nombre" id="nombre" value="'+factura.nombre_producto+'"/>';
     resultados +='<input type="hidden" name="precio" id="precio" value="'+factura.precio+'"/>';
     resultados +=' <input type="hidden" name="imagen" id="imagen" value="'+factura.imagen+'"/>';
     resultados +=    ' <input type="hidden" name="genero" id="genero" value="'+factura.genero+'"/>';
     resultados +=   ' <input type="hidden" name="stock" id="stock" value="'+factura.stock+'"/>';
     resultados +='<p><input type="submit"name="enviar" id="enviar" value="Enviar" /></p>';
                
                resultados += '</form>';
                resultados += '</div>';
                resultados += '</div>';
             }
                       
           }
            document.getElementById('galeria').innerHTML = resultados;} 
    
     
    };
}

function cargarDeporteF(){
    // leer paramteros
    var bus= document.getElementById("busqueda1").value;
    
    // realizar la peticion
    var url="index.php?c=Deporte&a=buscarAjaxd&b="+ bus;
    var xmlh = new XMLHttpRequest();
    xmlh.open("GET", url, true);
    xmlh.send();
    
    // lectura de respuesta
     xmlh.onreadystatechange = function(){
        if(xmlh.readyState === 4 && xmlh.status===200){
            var respuesta = xmlh.responseText;
             var facturas = JSON.parse(respuesta);
             //actualizar cierta parte de la pagina
              console.log(facturas);
            // actualizar cierta parte de la pagina
                       resultados = '';
                  
                       
            for (var i = 0; i < facturas.length; i++) {
                factura = facturas[i];
               
               if(factura.genero ==="femenino" && factura.stock > 0){
             
                resultados += '<div class="elemento" > ';
                resultados += '<img src="' + factura.imagen + '"/>';
                resultados += '<div class="itemtext"> ';
                resultados += '<h3>' + factura.nombre_producto + '</h3>';
                resultados += '<p ><strong >$' + factura.precio + '</strong></p>';
                resultados += '<form method="post" action="index.php?c=carrito&a=listar"> ';

     resultados +='<input type="hidden" name="idC" id="idC" value="'+factura.id_producto+'"/>';
     resultados += ' <input type="hidden" name="nombre" id="nombre" value="'+factura.nombre_producto+'"/>';
     resultados +='<input type="hidden" name="precio" id="precio" value="'+factura.precio+'"/>';
     resultados +=' <input type="hidden" name="imagen" id="imagen" value="'+factura.imagen+'"/>';
     resultados +=    ' <input type="hidden" name="genero" id="genero" value="'+factura.genero+'"/>';
     resultados +=   ' <input type="hidden" name="stock" id="stock" value="'+factura.stock+'"/>';
     resultados +='<p><input type="submit"name="enviar" id="enviar" value="Enviar" /></p>';

                     resultados += '</form>';
                resultados += '</div>';
                resultados += '</div>';
             }
           
           }
            document.getElementById('galeria2').innerHTML = resultados;} 
    
     
    };
}
