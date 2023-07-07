
function validar() {
    var resultado = true;
    var txtNombres = document.getElementById("nombres");
    var txtApellidos = document.getElementById("apellidos");
    var selectipoDocumento = document.getElementById("tipoDocumento");
    var selecPais = document.getElementById("pais");
    var txtnumDocumento = document.getElementById("numDocumento");
    var txtCorreo = document.getElementById("correo");
    var radiosGenero = document.getElementsByName("genero");
    var passContraseña = document.getElementById("contraseña");
    var passRepContraseña = document.getElementById("recontraseña");
    var chkNotificacion = document.getElementById("suscripcion");
    var chkTerminos = document.getElementById("terminos");
   
   

    var letra = /^[a-z ,.'-]+$/i;// letrasyespacio   ///^[A-Z]+$/i;// solo letras
    var correo = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    var numDoc = /^[0-9]{10}$/g; // para validar datos que deban tener 10 numeros

    limpiarMensajes();

    //validacion para nombres
    if (txtNombres.value === '') {
        resultado = false;
        mensaje("Nombre es requerido", txtNombres);
    } else if (!letra.test(txtNombres.value)) {
        resultado = false;
        mensaje("Nombre solo debe contener letras", txtNombres);
    } else if (txtNombres.value.length > 20) {
        resultado = false;
        mensaje("Nombre maximo 20 caracteres", txtNombres);
    }
    
    //validacion paraapellidos
     if (txtApellidos.value === '') {
        resultado = false;
        mensaje("Apellido es requerido", txtApellidos);
    } else if (!letra.test(txtApellidos.value)) {
        resultado = false;
        mensaje("Apellido solo debe contener letras", txtApellidos);
    } else if (txtApellidos.value.length > 20) {
        resultado = false;
        mensaje("Apellido maximo 20 caracteres", txtApellidos);
    }
    
//validacion select de tipo documento-----------------------------------------------------------------
    if (selectipoDocumento.value === null || selectipoDocumento.value === '0') {
        resultado = false;
        mensaje("Dese seleccionar el tipo de Documento", selectipoDocumento);
    }
    
    
    
     //validacion numero de documento
    if (txtnumDocumento.value === "") {
        resultado = false;
        mensaje("Numero de Documento es requerido", txtnumDocumento);
    } else if (!numDoc.test(txtnumDocumento.value)) {
        resultado = false;
        mensaje("Numero de Documento debe ser de 10 digitos", txtnumDocumento);
    }

    
    
    
    
    
    
    //validacion select de pais
    if (selecPais.value === null || selecPais.value === 'Sel') {
        resultado = false;
        mensaje("Debe seleccionar un pais", selecPais);
    }

    
    
   
    //validacion de correo     
    if (txtCorreo.value === "") {
        resultado = false;
         mensaje("Email es requerido", txtCorreo);
    } else if (!correo.test(txtCorreo.value)) {
        resultado = false;
        mensaje("Email no es correcto", txtCorreo);
    }

  

    
    
    //validacion de genero
    var sel = false;
    for (let i = 0; i < radiosGenero.length; i++) {
        if (radiosGenero[i].checked) {
            sel = true;
            break;
        }
    }
    if (!sel) {
        resultado = false;
        mensaje("Debe seleccionar un genero", radiosGenero[0]);
    }






//*////////// VALIDAR CONTRASEÑA
    if (passContraseña.value === '') {
        resultado = false;
        mensaje("Contraseña es requerida", passContraseña);
    } else if (passContraseña.value.length < 1) {
        resultado = false;
        mensaje("Contraseña minimo 6 caracteres", passContraseña);
    }
    
 if (passRepContraseña.value === '') {
        resultado = false;
        mensaje("Contraseña es requerida", passRepContraseña);
    }  else if (passRepContraseña.value  !== passContraseña.value ){
     resultado = false;
     mensaje("La Contraseña no coincide", passRepContraseña);
 }
  
 
  

    //validacion de terminos  y condicones
      if(!chkTerminos.checked){
     resultado=false;
     mensaje("Debe aceptar los terminos y condiciones", chkTerminos);
     }
     
    return resultado;
}

function validarCuenta(){
    var resultado = true;
    limpiarMensajes();
    var correo = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    var txtCorreo = document.getElementById("correo");
    var passContraseña = document.getElementById("contraseña");
     //validacion de correo     
    if (txtCorreo.value === "") {
        resultado = false;
         mensaje("Email es requerido", txtCorreo);
    } else if (!correo.test(txtCorreo.value)) {
        resultado = false;
        mensaje("Email no es correcto", txtCorreo);
    }

    
        if (passContraseña.value === '') {
        resultado = false;
        mensaje("Contraseña es requerida", passContraseña);
    } else if (passContraseña.value.length < 1) {
        resultado = false;
        mensaje("Contraseña minimo 6 caracteres", passContraseña);
    }
    
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
