<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$nombres = strip_tags(stripslashes($_POST["nombres"]));
$trabajo = strip_tags(stripslashes($_POST["trabajo"]));
$salario = strip_tags(stripslashes($_POST["salario"]));


//$db->debug=true;
if ($nombres or $trabajo or $salario){
	$sql3 = $db->Prepare("SELECT pe.nombres, tra.trabajo, tra.salario, tra.id_trabajo
						FROM personas1 pe, trabajos tra
						WHERE pe.nombres LIKE ? 
						AND tra.trabajo LIKE ?
						AND tra.salario LIKE ?
						AND pe.id_persona1=tra.id_persona1
						");
	$rs3 = $db->GetAll($sql3, array($nombres."%", $trabajo."%", $salario."%"));
	if ($rs3) {
		echo"<center>
			<table class='listado'>
					<tr>
					<th>PERSONA</th><th>TRABAJO</th><th>SALARIO</th>
					</tr>";
		foreach ($rs3 as $k => $fila) {
			$str = $fila["nombres"];
			$str1 = $fila["trabajo"];
			$str2 = $fila["salario"];
			echo"
			<td aling='center'>".resaltar($nombres, $str)."</td>
				<td>".resaltar($trabajo, $str1)."</td>
				<td>".resaltar($salario, $str2)."</td>
				</tr>";
		}
		echo "</table>
		</center>";
	}else {
		echo "<center><b>EL TRABAJO NO EXISTE!!</b></center><br>";
	}
}
?>