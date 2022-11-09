"use strict"
function validar(){
	var razon_social = document.formu.razon_social.value;
	var telefono = document.formu.telefono.value;
	var ubicacion = document.formu.ubicacion.value;
	var correo_electronico= document.formu.correo_electronico.value;
	var sitio_web= document.formu.sitio_web.value;
	
	if(razon_social == ""){
		alert("La Razon Social esta vacia");
		document.formu.razon_social.focus();
		return;
	}
	if ((!v2.test(telefonos)) || (telefonos=="")) {
		alert("El Telefono es incorrecto o estan vacio");
		document.formu.telefonos.focus();
		return;
	}
	if(ubicacion == ""){
		alert("La direccion esta vacia");
		document.formu.ubicacion.focus();
		return;
	}
	
	if (!v3.test(correo_electronico)){
		alert("El correo es incorrecto o estan vacio");
		document.formu.correo_electronico.focus();
		return;
	}

	if(sitio_web == ""){
		alert("El sitio web esta vacio");
		document.formu.sitio_web.focus();
		return;
	}

	document.formu.submit();
}