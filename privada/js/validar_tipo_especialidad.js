"use strict"
function validar(){
var especializacion= document.formu.especializacion.selectedIndex; 
if (especializacion==""){
		alert("La especializacion no fue seleccionado");
		return;
	}
	document.formu.submit();
}