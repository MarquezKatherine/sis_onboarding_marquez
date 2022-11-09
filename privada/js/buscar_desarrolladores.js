"use strict"
function buscar_desarrolladores() {
	var d1, d2,d3, d4, d5, ajax, url, param, contenedor;
	contenedor = document.getElementById('desarrolladores1');
	d1 = document.formu.turno_trabajo.value;
	d2 = document.formu.nombres.value;
	d3 = document.formu.apellidos.value;
	d4 = document.formu.email.value;
	d5 = document.formu.telefono.value;
	ajax = nuevoAjax();
	url = "ajax_buscar_desarrollador.php"
	param = "turno_trabajo="+d1+"&nombres="+d2+"&apellidos="+d3+"&email="+d4+"&telefono="+d5;
	
	ajax.open("POST", url, true);
	ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	ajax.onreadystatechange = function() {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText;
		}
	}
	ajax.send(param);
}