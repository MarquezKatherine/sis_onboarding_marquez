"use strict"
function validar(){
	var nombres = document.formu.nombres.value;
	var apellidos = document.formu.apellidos.value;
	var telefono = document.formu.telefono.value;
	var email= document.formu.email.value;
	var cedula_identidad=document.formu.cedula_identidad.value;
	var registro_universitario=document.formu.registro_universitario.value;
	/*¨Valida datos obligatorios*/
	
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
	if ((!v2.test(telefono)) || (telefono=="")) {
		alert("El Telefono es incorrecto o estan vacio");
		document.formu.telefono.focus();
		return;
	}
	if (!v3.test(email)){
		alert("El correo es incorrecto o estan vacio");
		document.formu.email.focus();
		return;
	}
	if ((!v2.test(cedula_identidad)) || (cedula_identidad=="")) {
		alert("La cedula de identidad es incorrecto o estan vacio");
		document.formu.cedula_identidad.focus();
		return;
	}
	if ((!v2.test(registro_universitario)) || (registro_universitario=="")) {
		alert("El codigo de registro universitario es incorrecto o estan vacio");
		document.formu.cod.focus();
		return;
	}

		document.formu.submit();
}