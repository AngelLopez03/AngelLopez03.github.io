//DECLARACIÓN DE VARIABLES
let contenedor_login_register
let formulario_login
let formulario_register
let caja_trasera_login
let caja_trasera_register
let btn_register
//VALOR DE LAS VARIABLES
contenedor_login_register = document.querySelector(".contenedor_login_register");
formulario_login = document.querySelector(".formulario_login");
formulario_register = document.querySelector(".formulario_register");
caja_trasera_login = document.querySelector(".caja_trasera_login");
caja_trasera_register = document.querySelector(".caja_trasera_register");
btn_register = document.getElementById("btn_register");

//LLAMANDO A LAS FUNCIONES
btn_register.addEventListener('click', register);
document.getElementById("btn_iniciar").addEventListener('click', iniciarSesion);
window.addEventListener("resize", anchoPage);

//CREANDO FUNCIONES

function anchoPage(){
	if(window.innerWidth > 850){
		caja_trasera_login.style.display = "block";
		caja_trasera_register.style.display = "block";
	}else{
		caja_trasera_register.style.display = "block";
		caja_trasera_register.style.opacity = "1";
		caja_trasera_login.style.display = "none";
		formulario_login.style.display = "block";
		formulario_register.style.display = "none";
		contenedor_login_register.style.left = "0px";
	}
}

anchoPage();

//INICIAR SESIÓN
function iniciarSesion(){

	if(window.innerWidth > 850){
		formulario_register.style.display = "none";
		contenedor_login_register.style.left = "10px";
		formulario_login.style.display = "block";
		caja_trasera_register.style.opacity = "1";
		caja_trasera_login.style.opacity = "0";
	}else{
		formulario_register.style.display = "none";
		contenedor_login_register.style.left = "0px";
		formulario_login.style.display = "block";
		caja_trasera_register.style.display = "block";
		caja_trasera_login.style.display = "none";
	}	
}

//Registro
function register(){

	if (window.innerWidth > 850){
		formulario_register.style.display = "block";
		contenedor_login_register.style.left = "410px";
		formulario_login.style.display = "none";
		caja_trasera_register.style.opacity = "0";
		caja_trasera_login.style.opacity = "1";	
	}else{
		formulario_register.style.display = "block";
		contenedor_login_register.style.left = "0px";
		formulario_login.style.display = "none";
		caja_trasera_register.style.display = "none";
		caja_trasera_login.style.display = "block";
		caja_trasera_login.style.opacity = "1";	
	}
	
}