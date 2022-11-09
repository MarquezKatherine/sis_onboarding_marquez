"use strict"
function validar(){
var experiencia=document.formu.experiencia.selectedIndex;
var lugar_especializacion= document.formu.lugar_especializacion.value;
var especificacion = document.formu.especificacion.value;
var curriculum = document.formu.curriculum.value;


if(experiencia == ""){
		alert("No a seleccionado los años de Experiencia");
		return;
	}

	if (!v1.test(lugar_especializacion)){
		alert("El lugar de adquicision de su especialidad esta vacio o  es erroneo el dato");
		document.formu.lugar_especializacion.focus();
		return;
	}

if (!v1.test(especificacion)){
		alert("El dato de especificacion esta vacio");
		document.formu.especificacion.focus();
		return;
	}
if(curriculum == ""){
		alert("El curriculum esta vacio");
		document.formu.curriculum.focus();
		return;
	}
		document.formu.submit();

}