"use strict"
function buscar_muebles() {
	var d1, d2,d3, d4, ajax, url, param, contenedor;
	contenedor = document.getElementById('muebles1');
	d1 = document.formu.muebleria.value;
	d2 = document.formu.tipo_mueble.value;
	d3 = document.formu.nombres.value;
	d4 = document.formu.color.value;
	ajax = nuevoAjax();
	url = "ajax_buscar_mueble.php"
	param = "muebleria="+d1+"&tipo_mueble="+d2+"&nombres="+d3+"&color="+d4;
	ajax.open("POST", url, true);
	ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	ajax.onreadystatechange = function() {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText;
		}
	}
	ajax.send(param);
}