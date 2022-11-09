<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$fk_cargo = $_POST["fk_cargo"];

//$db->debug=true;
$sql3 = $db->Prepare("SELECT *
						  FROM cargos
						  WHERE pk_id LIKE ?
					  ");
$rs3 = $db->GetAll($sql3, array($fk_cargo));

echo"<center>
		<table width='60%' border='1'>
			<tr>
				<th colspan='4'>Datos Cargos</th>
			</tr>
		";
	foreach ($rs3 as $k => $fila) {
		echo"<tr>
				<td align='center'>".$fila["nombre"]."</td>
			</tr>";
	}
	echo"</table>
		 </center>";

?>