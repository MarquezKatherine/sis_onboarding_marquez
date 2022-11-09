"use strict"
function validar(){

	
	var turno_trabajo= document.formu.turno_trabajo.selectedIndex;
	var horario_entrada_y_salida= document.formu.horario_entrada_y_salida.selectedIndex;
	var dias_trabajados_mes = document.formu.dias_trabajados_mes.value;


if (turno_trabajo==""){
		alert("El turno de trabajo no fue seleccionado");
		return;
	}
if (horario_entrada_y_salida==""){
		alert("El horario de entrada y salida no fue seleccionado");
		return;
	}
if(dias_trabajados_mes==""){
		alert("Por favor ingrese los dias que trabajo en el mes");
		document.formu.dias_trabajados_mes.focus();
		return;
	}


	document.formu.submit();
}