function validar() {

    var resultado = true;
    var txtNombres = document.querySelector("input[name='nombre']");//document.querySelector("input[name='nombres']"); // reotrna el primer input que tenga name ='nombres'
     var txtPrecio = document.querySelector("input[name='precio']");
    var radiosGenero = document.getElementsByName("genero");// document.querySelectorAll("input[name='genero']");
    var txtStock = document.querySelector("input[name='stock']");   
   var txtarchivo=document.querySelector("input[name='archivosubido']");
   var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
    var allowedExtensions = /(.jpg|.jpeg|.png|.gif)$/i;
    
    

    var letra = /^[a-z ,.'-]+$/i;// letrasyespacio   ///^[A-Z]+$/i;// solo letras
    var numero = /^[1-9]\d$/;// letrasyespacio   ///^[A-Z]+$/i;// solo letras

    limpiarMensajes();
    // validar que solo sea png jpg  gif
    
    //validacion para nombres
    if (txtNombres.value === '') {
        resultado = false;
        mensaje("<br>Nombre es requerido</br>", txtNombres);
    } else if (!letra.test(txtNombres.value)) {
        resultado = false;
        mensaje("<br>Nombre solo debe contener letras</br>", txtNombres);
    } else if (txtNombres.value.length > 20) {
        resultado = false;
        mensaje("<br>Nombre maximo 20 caracteres</br>", txtNombres);
    }
    if (txtPrecio.value === '') {
        resultado = false;
        mensaje("<br>Precio es requerido</br>", txtPrecio);
    } 
    

   
  
   
    if (txtarchivo.value === '') {
        resultado = false;
        mensaje("<br>el archivo debe ser requerido</br>", txtarchivo);
    }else{
         if(!allowedExtensions.exec(filePath)){
          resultado = false;
        mensaje("<br>por favor solo se permite extencion .jpeg/.jpg/.png/.gif only.br>", fileInput);
      
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
    

    } 
      if (txtStock.value === '') {
        resultado = false;
        mensaje("<br>stock debe ser requerido</br>", txtStock);
    } 
  
    
    //validacion radio button
    
    var sel = false;
    for (let i = 0; i < radiosGenero.length; i++) {
        if (radiosGenero[i].checked) {
            sel = true;
            break;
        }
    }
    if (!sel) {
        resultado = false;
        mensaje("<br>Debe seleccionar un genero</br>", radiosGenero[0]);
    }
    
    //validacion precio que sea solo numero else if (!letra.test(txtNombres.value))

    

    return resultado;
}




function mensaje(cadenaMensaje, elemento) {
    elemento.focus();
    var nodoPadre = elemento.parentNode;
    var nodoMensaje = document.createElement("span");
    nodoMensaje.innerHTML = cadenaMensaje;
    nodoMensaje.style.color = "red";
    nodoMensaje.display = "block";
    nodoMensaje.setAttribute("class", "mensaje");
    nodoPadre.appendChild(nodoMensaje);

}

function limpiarMensajes() {
    var mensajes = document.querySelectorAll(".mensaje");
    for (let i = 0; i < mensajes.length; i++) {
        mensajes[i].remove();// remueve o elimina un elemento de mi doc html
    }

}

