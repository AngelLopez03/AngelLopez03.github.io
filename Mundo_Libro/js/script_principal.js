				//BOTON CONTACTO
function contacto(){
	//MOSTRAR CONTACTO
	$('#btn-contacto').click(function() {
		document.getElementById('contacto').style.top = "90px";
		document.getElementById('cover-ctn-contacto').style.display = "block";
		document.getElementById('btn-contacto').style.border = "opx";
	});


	//OCULTAR CONTACTO
	$('#cover-ctn-contacto').click(function() {
		document.getElementById('contacto').style.top = "-100px";
		document.getElementById('cover-ctn-contacto').style.display = "none";
	});
};

//OCULTAR CON UNA TECLA

function ocultar_tecla(){

		esc = event.keyCode;

		if (esc == 27){
			
			document.getElementById('contacto').style.top = "-100px";
			document.getElementById('cover-ctn-contacto').style.display = "none";

		}

	}

	window.onkeydown = ocultar_tecla;

					