"use strict"
function validar(){

	var periodo_funcionamiento = document.formu.periodo_funcionamiento.value;
	var utilidades_historicas = document.formu.utilidades_historicas.value;
	var perdidas_historicas = document.formu.perdidas_historicas.value;
	var deudas_tributarias = document.formu.deudas_tributarias.value;

	if ((!v2.test(periodo_funcionamiento)) || (periodo_funcionamiento=="")) {
		alert("El periodo funcionamiento no aceptan letras, o esta vacio");
		document.formu.periodo_funcionamiento.focus();
		return;
	}

	if ((!v2.test(utilidades_historicas)) || (utilidades_historicas=="")) {
		alert("Las utilidades no aceptan letras, o esta vacio");
		document.formu.utilidades_historicas.focus();
		return;
	}

	if ((!v2.test(perdidas_historicas)) || (perdidas_historicas=="")) {
		alert("Las perdidas no aceptan letras, o esta vacio");
		document.formu.perdidas_historicas.focus();
		return;
	}

	if ((!v2.test(deudas_tributarias)) || (deudas_tributarias=="")) {
		alert("Las deudas tributarias no aceptan letras, o estan vacio");
		document.formu.deudas_tributarias.focus();
		return;
	}
document.formu.submit();
}