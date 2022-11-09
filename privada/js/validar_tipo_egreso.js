"use strict"
function validar(){

var especificacion_egreso=document.formu.especificacion_egreso.value;

if (!v1.test(especificacion_egreso)){
		alert("La especificacion es incorrecta o esta vacia");
		document.formu.especificacion_egreso.focus();
		return;
	}


	document.formu.submit();
}