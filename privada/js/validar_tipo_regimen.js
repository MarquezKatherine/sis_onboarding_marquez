"use strict"
function validar(){

var Simplificado = document.formu.regimen[0].checked;
var Unificado = document.formu.regimen[1].checked;
var Pecuario = document.formu.regimen[2].checked;
var fecha_cierre = document.formu.fecha_cierre.value;
var descripcion_tipo_empresa = document.formu.descripcion_tipo_empresa.selectedIndex;


if ((Simplificado=="")&&(Unificado =="")&&(Pecuario == "")){
		alert("El campo de regimen esta vacio");
		return;
	}

if (fecha_cierre==""){
		alert("La fecha de cierre esta vacia");
		document.formu.fecha_cierre.focus();
		return;
	}

if (descripcion_tipo_empresa==""){
		alert("La descripcion del tipo de empresa esta vacio");
		return;
	}

	document.formu.submit();
} 