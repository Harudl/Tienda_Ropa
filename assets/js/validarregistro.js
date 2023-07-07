function validarregistro(){
      var resultado = true;
    var txtNombres = document.querySelector("input[name='nombres']");
    var txtApellidos = document.querySelector("input[name='apellidos']");
    var txtCorreo = document.querySelector("input[name='correo']");
    var txtUser = document.querySelector("input[name='user']");
    var txtPassword = document.querySelector("input[name='password']");
    var txtContrasena = document.querySelector("input[name='recontraseña']");//document.querySelector("input[name='nombres']"); // reotrna el primer input que tenga name ='nombres'
      var chkSuscrip = document.querySelector("input[name='terminos']");
         var chkSuscrip2 = document.querySelector("input[name='terminos2']");
    
       limpiarMensajes();
    
    
    if (txtNombres.value === '') {
        resultado = false;
        mensaje("<br>Nombre es requerido</br>", txtNombres);
    }
    if (txtApellidos.value === '') {
        resultado = false;
        mensaje("<br>apellido es requerido</br>", txtApellidos);
    }
    if (txtCorreo.value === '') {
        resultado = false;
        mensaje("<br>correo es requerido</br>", txtCorreo);
    }
    if (txtUser.value === '') {
        resultado = false;
        mensaje("<br>user es requerido</br>", txtUser);
    }
    if (txtPassword.value === '') {
        resultado = false;
        mensaje("<br>password es requerido</br>", txtPassword);
    }
    if (txtContrasena.value === '') {
        resultado = false;
        mensaje("<br>confirm password es requerido</br>", txtContrasena);
    }
   
   
   if(!chkSuscrip.checked){
        resultado=false;
          mensaje("<br>Debe aceptar los terminos y condiciones </br>",chkSuscrip);
    }
   
    if(!chkSuscrip2.checked){
        resultado=false;
          mensaje("<br>Debe aceptar recibir promociones y ofertas </br>",chkSuscrip2);
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




