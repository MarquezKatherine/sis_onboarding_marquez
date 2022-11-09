"use strict"
function validar(){
	var nombre= document.formu.nombre.value;

	if (nombre== ""){
		alert(" Porfavor ingrese el nombre del sistema contable");
		document.formu.nombre.focus();
		return;
	}
	document.formu.submit();
}