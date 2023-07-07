
function validar(){
    var resultado=true;
    var txtNombres = document.getElementById("nombres");//document.querySelector("input[name='nombres']"); // reotrna el primer input que tenga name ='nombres'
    var txtApellidos = document.getElementById("apellidos");
    var txtemail = document.getElementById("correo");
    var radiosCalidad = document.getElementsByName("calidad");// document.querySelectorAll("input[name='genero']");
    var chkSuscrip = document.getElementById("suscripcion");


    var letra = /^[a-z ,.'-]+$/i;// letrasyespacio   ///^[A-Z]+$/i;// solo letras
    var correo = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
  limpiarMensajes();
//validacion para nombres
    if (txtNombres.value === '') {
        resultado = false;
        mensaje("Nombre es requerido", txtNombres);
    } else if (!letra.test(txtNombres.value)) {
        resultado = false;
        mensaje("Nombre solo debe contener letras", txtNombres);
    } else if (txtNombres.value.length > 15 ) {
        resultado = false;
        mensaje("Nombre maximo 15 caracteres", txtNombres);
    }    

//validacion para apellidos
     if (txtApellidos.value === '') {
        resultado = false;
        mensaje("Apellido es requerido", txtApellidos);
    } else if (!letra.test(txtApellidos.value)) {
        resultado = false;
        mensaje("Apellido solo debe contener letras", txtApellidos);
    } else if (txtApellidos.value.length > 15) {
        resultado = false;
        mensaje("Apellido maximo 15 caracteres", txtApellidos);
    }

 //validacion email
    if (txtemail.value === "") {
        resultado = false;
        mensaje("Email es requerido", txtemail);
    } else if (!correo.test(txtemail.value)) {
        resultado = false;
        mensaje("Email no es correcto", txtemail);
    }
    
//validacion radio button
    var sel=false;
    for(let i=0; i<radiosCalidad.length;i++){
        if(radiosCalidad[i].checked){
            sel=true;
            break;
        }     
    }
    if (!sel) {
        resultado = false;
        mensaje("Debe seleccionar un genero", radiosCalidad[0]);
    }

  //validacion de un checkbox
   if(!chkSuscrip.checked){
        resultado=false;
        mensaje("Debe seleccionar una suscripcion", chkSuscrip);
    }
return resultado;
}
function mensaje(cadenaMensaje, elemento) {
    elemento.focus();
    var nodoPadre = elemento.parentNode;
    var nodoMensaje = document.createElement("span");
    nodoMensaje.innerHTML = cadenaMensaje;
    nodoMensaje.style.color = "purple";
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