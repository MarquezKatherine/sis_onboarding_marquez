"use strict"
function validar(){
	var tipo_mueble = document.formu.tipo_mueble.value;
	var nombres = document.formu.nombres.value;
	var codigo = document.formu.codigo.value;
	var color = document.formu.color.value;
	var tamano = document.formu.tamano.value;

	if(tipo_mueble == ""){
		alert("La Razon Social esta vacia");
		document.formu.tipo_mueble.focus();
		return;
	}
	if(nombres == ""){
		alert("La direccion esta vacia");
		document.formu.nombres.focus();
		return;
	}
	if(codigo == ""){
		alert("La direccion esta vacia");
		document.formu.codigo.focus();
		return;
	}
	if(color == ""){
		alert("La direccion esta vacia");
		document.formu.color.focus();
		return;
	}
	if(tamano == ""){
		alert("La direccion esta vacia");
		document.formu.tamano.focus();
		return;
	}

	document.formu.submit();
}