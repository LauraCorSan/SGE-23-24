window.onload = iniciar

function iniciar(){
    document.getElementById("new2").addEventListener("keyup",comprobar,false)
    document.getElementById("botonCambiarPass").addEventListener("click",noPulsarBoton,false)
}

function comprobar(){
    newPassword = document.getElementById("new").value;
    newPassword2 = document.getElementById("new2").value;

    error = document.getElementById("error");

    if(newPassword != newPassword2){
        error.innerText="Las contraseñas no coinciden";
        return false;
    }else{
        return true;
        error.innerText="";
    } 
}

function noPulsarBoton(event){
    if(!comprobar()){
        event.preventDefault();
    }
}