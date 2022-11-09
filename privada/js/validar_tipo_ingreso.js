"use strict"
function validar(){

var especificacion_ingreso=document.formu.especificacion_ingreso.value;

if (!v1.test(especificacion_ingreso)){
		alert("La especificacion es incorrecta o esta vacia");
		document.formu.especificacion_ingreso.focus();
		return;
	}


	document.formu.submit();
}