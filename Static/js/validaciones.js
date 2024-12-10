var expreEmail =/^[a-zA-Z0-9_.]{2,22}@upemor.edu.mx$/;
var expreContrasena =/^[a-zA-Z0-9#@]{7,14}$/;


function validacion(){
    if(!expreEmail.test(document.frm1.correo.value)){
        document.getElementById("correo").focus();
        cor.style.display="";
        return false;
    }
    cor.style.display="none";

    if(!expreContrasena.test(document.frm1.contrasena.value)){
        document.getElementById("contrasena").focus();
        contra.style.display="";
        return false;
    }
    contra.style.display="none";

    btn.style.display="";

    btnconf.style.display="";
}