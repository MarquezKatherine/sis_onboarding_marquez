"use strict"
function validar(){

var nombres = document.formu.nombres.value;
var fecha_ingreso_cargo = document.formu.fecha_ingreso_cargo.value;
var especialidad = document.formu.especialidad.value;

if (!v1.test(nombres)){
		alert("Los nombres son incorrectos o estan vacio");
		document.formu.nombres.focus();
		return;
	}


if (fecha_ingreso_cargo==""){
		alert("La fecha de ingreso esta vacia");
		document.formu.fecha_ingreso_cargo.focus();
		return;
	}

if (!v1.test(especialidad)){
		alert("La especialidad es incorrecta o estan vacio");
		document.formu.especialidad.focus();
		return;
	}

document.formu.submit();
}