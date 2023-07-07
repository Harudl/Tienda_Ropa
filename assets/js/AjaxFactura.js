function cargarFactura(){
    // leer paramteros
    var bus= document.getElementById("busqueda").value;
    // realizar la peticion
    var url="index.php?c=Factura&a=buscarAjax&b="+ bus;
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
                resultados += '<tr>';
                resultados += '<td>' + factura.id_producto + '</td>'; 
                resultados += '<td>' + factura.genero + '</td>';
                resultados += '<td>' + factura.nombre_producto + '</td>';
                resultados += '<td>' + factura.fecha_compra + '</td>';
                resultados += '<td>' + factura.precio_final + '</td>';
                resultados += '</tr>';
            }
            document.getElementById('tabladatos').innerHTML = resultados;
        }
     };
}