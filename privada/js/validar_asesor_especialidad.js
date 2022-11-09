"use strict"
function validar(){

	var fecha_adquisicion_especialidad = document.formu.fecha_adquisicion_especialidad.value;
	var grado_especialidad = document.formu.grado_especialidad.selectedIndex;
	var tipo_acreditacion = document.formu.tipo_acreditacion.selectedIndex;


	if (fecha_adquisicion_especialidad==""){
		alert("La fecha de adquisicion esta vacia");
		document.formu.fecha_adquisicion_especialidad.focus();
		return;
	}
	
	if (grado_especialidad==""){
		alert("El grado de especialidad no fue seleccionado");
		return;
	}
	if (tipo_acreditacion==""){
		alert("El tipo de Acreditacion no fue seleccionado");
		return;
	}

	document.formu.submit();
}