//DECLARACION DE VARIABLES
var boton_iniciar_sesion = document.getElementById('iniciar-sesion');
var boton_registrar = document.getElementById('registrar');
boton_registrar.addEventListener("click",registrar);
boton_iniciar_sesion.addEventListener("click",iniciarSesion);
function registrar(){

}
function iniciarSesion(){
    window.location= "../inicioAdmin.php";
}