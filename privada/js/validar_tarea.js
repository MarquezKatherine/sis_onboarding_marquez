"use strict"
function validar(){

	var fecha_inicio = document.formu.fecha_inicio.value;
	var fecha_finalizacion = document.formu.fecha_finalizacion.value;
	var descripcion_actividad = document.formu.descripcion_actividad.value;

if (fecha_inicio==""){
		alert("La fecha de inicio no a sido seleccionado");
		document.formu.fecha_inicio.focus();
		return;
	}
if (fecha_finalizacion==""){
		alert("La fecha de finalizacion no a sido seleccionado");
		document.formu.fecha_finalizacion.focus();
		return;
	}

if(fecha_inicio>fecha_finalizacion){
	alert("La fecha inicial no puede ser mayor a la fecha final");
	document.formu.fecha_inicio.focus();
		return;
}

if (descripcion_actividad==""){
		alert("La descripcion no a sido llenada");
		document.formu.descripcion_actividad.focus();
		return;
	}
	document.formu.submit();
}