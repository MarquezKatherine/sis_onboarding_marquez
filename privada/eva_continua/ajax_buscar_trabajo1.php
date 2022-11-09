<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$ci = strip_tags(stripslashes($_POST["ci"]));
$trabajo = strip_tags(stripslashes($_POST["trabajo"]));
$salario = strip_tags(stripcslashes($_POST["salario"]));



//$db->debug=true;

if ($ci or $trabajo or $salario){
	$sql3 = $db->Prepare("SELECT pe1.ci, tra.trabajo, tra.salario, tra.id_trabajo
						  FROM personas1 pe1, trabajos tra
						  WHERE pe1.ci LIKE ?
						  AND tra.trabajo LIKE ?
						  AND tra.salario LIKE ?
						  AND pe1.id_persona1=tra.id_persona1
						  ");
	$rs3 = $db->GetAll($sql3, array($ci."%",$trabajo."%", $salario."%"));

	if($rs3) {
		echo"<center>
			<table width='60%' border='1'
				<tr>
					<th>CEDULA DE IDENTIDAD</th><th>TRABAJO</th><th>SALARIO</th><th>?</th>
					</tr>";
				foreach ($rs3 as $k => $fila) {
						$str = $fila["ci"];
						 $str1 = $fila["trabajo"];
						 $str2 = $fila["salario"];
					echo"<tr>
							<td align='center'>".resaltar($ci, $str)."</td>
							<td>".resaltar($trabajo, $str1)."</td>
							<td>".resaltar($salario, $str2)."</td>
							<td align='center'>
								<input type='radio' name='opcion' value='' onClick='mostrar(".$fila["id_trabajo"].")'>
							</tr>";
				}
				echo"</table>
				</center>";
	}else {
		echo"<center><b> EL TRABAJO NO EXISTE!!</b></center><br>";
		
	}
}
?>