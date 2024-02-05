//Buscador de contenido
$(document).ready(function() {
	//Funcion para mostrar el buscador
	$('#icon-search').click(function() {
		document.getElementById('ctn-bars-search').style.top =  "75px";
		document.getElementById('cover-ctn-search').style.display = "block";
		document.getElementById('inputSearch').focus();
		if(document.getElementById('inputSearch').value === ""){
					document.getElementById('box-search').style.display = "none";
		}
	});


	//funcion para ocultar el buscador
	$('#cover-ctn-search').click(function() {
		document.getElementById('ctn-bars-search').style.top = "-100px";
		document.getElementById('cover-ctn-search').style.display = "none";
		document.getElementById('inputSearch').value = "";
		document.getElementById('box-search').style.display = "none";
	});		
});

//Ejecución de codigo al precionar una tecla

	function presionar_tecla(){

		tecla_esc = event.keyCode;

		if (tecla_esc == 27){
			
			document.getElementById('ctn-bars-search').style.top = "-100px";
			document.getElementById('cover-ctn-search').style.display = "none";
			document.getElementById('inputSearch').value = "";
			document.getElementById('box-search').style.display = "none";

		}

	}

	window.onkeydown = presionar_tecla;



//creando filtrado de busqueda

	addEventListener('keyup', buscador_interno)
	function buscador_interno(){


		var filter = document.getElementById('inputSearch').value.toUpperCase();
		var li = document.getElementById('box-search').getElementsByTagName("li");


		//Recorriendo elementos a filtrar meidante los "li"
		for (i = 0; i < li.length; i++) {

			var a = li[i].getElementsByTagName("a")[0];
			var textValue = a.textContent || a.innerText;

			if(textValue.toUpperCase().indexOf(filter) > -1){

				li[i].style.display = "";
				document.getElementById('box-search').style.display =  "block";

				if(document.getElementById('inputSearch').value === ""){
					document.getElementById('box-search').style.display = "none";
				}

			}else{
				li[i].style.display = "none";
			}

		}
	};