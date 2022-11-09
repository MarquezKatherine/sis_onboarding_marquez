"use strict"
function validar(){
var nombres = document.formu.nombres.value;
var apellidos = document.formu.apellidos.value;
var telefono = document.formu.telefono.value;
var identificacion_tributaria = document.formu.identificacion_tributaria.value;

if (!v1.test(nombres)){
		alert("Los nombres son incorrectos o estan vacio");
		document.formu.nombres.focus();
		return;
	}
	
if (!v1.test(apellidos)){
		alert("Los(el) apellido son incorrectos o estan vacio");
		document.formu.apellidos.focus();
		return;
	}
if ((!v2.test(telefono)) || (telefono=="")) {
		alert("El Telefono es incorrecto o estan vacio");
		document.formu.telefono.focus();
		return;
	}

if ((!v2.test(identificacion_tributaria)) || (identificacion_tributaria=="")) {
		alert("La Identificacion es incorrecta o estan vacio");
		document.formu.identificacion_tributaria.focus();
		return;
	}
	document.formu.submit();
}