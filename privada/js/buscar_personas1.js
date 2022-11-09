"use strict"
function buscar_personas1() {
	var d1, d2,d3, d4, ajax, url, param, contenedor;
	contenedor = document.getElementById('personas1');
	d1 = document.formu.nombre.value;
	d2 = document.formu.nombres.value;
	d3 = document.formu.ci.value;
	d4 = document.formu.telef.value;
	ajax = nuevoAjax();
	url = "ajax_buscar_personas1.php"
	param = "nombre="+d1+"&nombres="+d2+"&ci="+d3+"&telef="+d4;
	ajax.open("POST", url, true);
	ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	ajax.onreadystatechange = function() {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText;
		}
	}
	ajax.send(param);
}