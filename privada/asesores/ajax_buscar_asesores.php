<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$nombres = strip_tags(stripslashes($_POST["nombres"]));
$apellidos = strip_tags(stripslashes($_POST["apellidos"]));
$cedula_identidad = strip_tags(stripslashes($_POST["cedula_identidad"]));
$registro_universitario = strip_tags(stripslashes($_POST["registro_universitario"]));

//$db->debug=true
if ($nombres or $apellidos or $cedula_identidad or $registro_universitario){
	$sql3 = $db->Prepare("SELECT *
						FROM asesores
						WHERE nombres LIKE ?
						AND apellidos LIKE ?
						AND cedula_identidad LIKE ?
						AND registro_universitario LIKE ?
						AND estado <> '0'
						");
	$rs3 = $db->GetAll($sql3, array($nombres."%", $apellidos."%", $cedula_identidad."%", $registro_universitario."%"));
	if ($rs3) {
		echo"<center>
			<table class='listado'>
					<tr>
					<th>NOMBRES</th><th>APELLIDOS</th><th>CEDULA DE IDENTIDAD</th><th>REGISTRO UNIVERSITARIO</th><th><img src='../../imagenes/modificar.jpg'width='20%'</th><th><img src='../../imagenes/borrar.jpg' width='20%'></th>
					</tr>";
		foreach ($rs3 as $k => $fila) {
			$str = $fila["nombres"];
			$str1 = $fila["apellidos"];
			$str2 = $fila["cedula_identidad"];
			$str3 = $fila["registro_universitario"];
			echo"
			<td aling='center'>".resaltar($nombres, $str)."</td>
				<td>".resaltar($apellidos, $str1)."</td>
				<td>".resaltar($cedula_identidad, $str2)."</td>
				<td>".resaltar($registro_universitario, $str3)."</td>
				<td aling='center'>
				<form name='formModif".$fila["id_asesor"]."' method='post' action='asesor_modificar.php'>
				<input type='hidden' name='id_asesor' value='".$fila['id_asesor']."'>
				<a href='javascript:document.formModif".$fila['id_asesor'].".submit();' title='Modificar Asesor Sistema'>
				Modificar>>
				</a>
				</form>
				</td>
				<td aling='center'>
				<form name='formElimi".$fila["id_asesor"]."' method='post' action='asesores_eliminar.php'>
				<input type='hidden' name='id_asesor' value='".$fila['id_asesor']."'>
				<a href='javascript:document.formElimi".$fila['id_asesor'].".submit();' title='Eliminar Asesor Sistema' onclick='javascript:return(confirm( \"Desea realmente Eliminar a el asesor?\" ))'; location.href='asesores_eliminar.php''>
				Eliminar>>
				</a>
				</form>
				</td>
				</tr>";
		}
		echo "</table>
		</center>";
	}else {
		echo "<center><b>El ASESOR NO EXISTE!!</b></center><br>";
	}
}
?>