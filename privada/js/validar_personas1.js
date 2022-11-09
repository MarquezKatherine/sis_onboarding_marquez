"use strict"
function validar(){
	var nombres = document.formu.nombres.value;
	var ci = document.formu.ci.value;
	var telef = document.formu.telef.value;

	if(nombres == ""){
		alert("El nombre esta vacio");
		document.formu.nombres.focus();
		return;
	}
	if(ci == ""){
		alert("La cedula de identidad esta vacia");
		document.formu.ci.focus();
		return;
	}
	if(telef == ""){
		alert("El telefono esta vacio");
		document.formu.telef.focus();
		return;
	}

	document.formu.submit();
}