<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$nombre = strip_tags(stripslashes($_POST["nombre"]));
$nombres = strip_tags(stripslashes($_POST["nombres"]));
$ci = strip_tags(stripslashes($_POST["ci"]));
$telef = strip_tags(stripslashes($_POST["telef"]));


//$db->debug=true;
if ($nombre or $nombres or $ci or $telef){
	$sql3 = $db->Prepare("SELECT car.nombre, per.nombres, per.ci, per.telef, per.fk_cargo
						FROM personas1 per, cargos car
						WHERE car.nombre LIKE ?
						AND per.nombres LIKE ? 
						AND per.ci LIKE ?
						AND per.telef LIKE ?
						AND per.fk_cargo=car.pk_id
						");
	$rs3 = $db->GetAll($sql3, array($nombre."%",$nombres."%", $ci."%", $telef."%"));
	if ($rs3) {
		echo"<center>
			<table class='listado'>
					<tr>
					<th>CARGO</th><th>NOMBRE</th><th>CI</th><th>TELEFONO</th>
					</tr>";
		foreach ($rs3 as $k => $fila) {
			$str = $fila["nombre"];
			$str1 = $fila["nombres"];
			$str2 = $fila["ci"];
			$str3 = $fila["telef"];
			echo"
			<td aling='center'>".resaltar($nombre, $str)."</td>
				<td>".resaltar($nombres, $str1)."</td>
				<td>".resaltar($ci, $str2)."</td>
				<td>".resaltar($telef, $str3)."</td>
				</tr>";
		}
		echo "</table>
		</center>";
	}else {
		echo "<center><b>LA PERSONA NO EXISTE!!</b></center><br>";
	}
}
?>