"use strict"
function validar(){

var fecha_informe = document.formu.fecha_informe.value;
var descripcion_informe= document.formu.descripcion_informe.value;

if (fecha_informe==""){
		alert("La fecha del informe esta vacia");
		document.formu.fecha_informe.focus();
		return;
	}

if(descripcion_informe == ""){
		alert("La descripcion esta vacia");
		document.formu.descripcion_informe.focus();
		return;
	}
document.formu.submit();
}