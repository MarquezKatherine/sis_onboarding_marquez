"use strict"
function validar(){
var nombres = document.formu.nombres.value;
var apellidos = document.formu.apellidos.value;
var email= document.formu.email.value;
var telefono = document.formu.telefono.value;
var fecha_ingreso = document.formu.fecha_ingreso.value;
var Masculino = document.formu.genero[0].checked;
var Femenino = document.formu.genero[1].checked;

if (!v1.test(nombres)){
		alert("Los nombres son incorrectos o estan vacio");
		document.formu.nombres.focus();
		return;
	}
	
if (!v1.test(apellidos)){
		alert("Los(el) apellido son incorrectos o estan vacio");
		document.formu.apellidos.focus();
		return;
	}	

if (!v3.test(email)){
		alert("El correo es incorrecto o estan vacio");
		document.formu.email.focus();
		return;
	}

if ((!v2.test(telefono)) || (telefono=="")) {
		alert("El Telefono es incorrecto o estan vacio");
		document.formu.telefono.focus();
		return;
	}

if (fecha_ingreso==""){
		alert("La fecha de Ingreso esta vacia");
		document.formu.fecha_ingreso.focus();
		return;
	}

if ((Masculino=="")&&(Femenino =="")){
		alert("El campo de genero esta vacio");
		return;
	}
	document.formu.submit();
}