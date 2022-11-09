"use strict"
function buscar_asesores() {
	var d1, d2,d3, d4, ajax, url, param, contenedor;
	contenedor = document.getElementById('asesores1');
	d1 = document.formu.nombres.value;
	d2 = document.formu.apellidos.value;
	d3 = document.formu.cedula_identidad.value;
	d4 = document.formu.registro_universitario.value;
	ajax = nuevoAjax();
	url = "ajax_buscar_asesores.php"
	param = "nombres="+d1+"&apellidos="+d2+"&cedula_identidad="+d3+"&registro_universitario="+d4;
	//alert(param);
	ajax.open("POST", url, true);
	ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	ajax.onreadystatechange = function() {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText;
		}
	}
	ajax.send(param);
}