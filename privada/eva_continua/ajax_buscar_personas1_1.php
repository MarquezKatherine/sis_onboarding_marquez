<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$id_persona1 = $_POST["id_persona1"];

//$db->debug=true;
$sql3 = $db->Prepare("SELECT *
					  FROM personas1
					  WHERE id_persona1 = ?
					  ");
$rs3 = $db->GetAll($sql3, array($id_persona1));

echo"<center>
		<table width='60%' border='1'>
			<tr>
				<th colspan='4'>Datos Personas</th>
			</tr>
		";
	foreach ($rs3 as $k => $fila) {
		echo"<tr>
				<td align='center'>".$fila["ci"]."</td>
				<td>".$fila["nombres"]."</td>
				<td>".$fila["ap"]."</td>
				<td>".$fila["am"]."</td>
				<td>".$fila["direccion"]."</td>
				<td>".$fila["fec_nac"]."</td>
			</tr>";
	}
	echo"</table>
		 </center>";

?>