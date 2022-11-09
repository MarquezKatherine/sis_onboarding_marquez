<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$nombres = strip_tags(stripslashes($_POST["nombres"]));
$apellidos = strip_tags(stripcslashes($_POST["apellidos"]));
$telefono = strip_tags(stripcslashes($_POST["telefono"]));
$identificacion_tributaria = strip_tags(stripcslashes($_POST["identificacion_tributaria"]));

$db->debug=true;

if ($nombres or $apellidos or $telefono or $identificacion_tributaria){
	$sql3 = $db->Prepare("SELECT*
						  FROM gerentes_propietarios
						  WHERE nombres LIKE ?
						  AND apellidos LIKE ?
						  AND telefono LIKE ?
						  AND identificacion_tributaria LIKE ?
						  AND estado <> '0'
						  ");
	$rs3 = $db->GetAll($sql3, array($nombres."%", $apellidos."%", $telefono."%", $identificacion_tributaria."%"));

	if($rs3) {
		echo"<center>
			<table width='60%' border='1'
				<tr>
					<th>NOMBRES</th><th>APELLIDOS</th><th>TELEFONO</th><th>IDENTIFICACION_TRIBUTARIA<th>?</th>
					</tr>";
				foreach ($rs3 as $k => $fila) {
						 $str = $fila["nombres"];
						 $str1 = $fila["apellidos"];
						 $str2 = $fila["telefono"];
						 $str3 = $fila["identificacion_tributaria"];
					echo"<tr>
							<td align='center'>".resaltar($nombres, $str)."</td>
							<td>".resaltar($apellidos, $str1)."</td>
							<td>".resaltar($telefono, $str2)."</td>
							<td>".resaltar($identificacion_tributaria, $str3)."</td>
							<td align='center'>
								<input type='radio' name='opcion' value='' onClick='mostrar(".$fila["id_gerente_propietario"].")'>
							</td>
							</tr>";
				}
				echo"</table>
				</center>";
	}else {
		echo"<center><b> EL GERENTE NO EXISTE!!</b></center><br>";
		
	}
}
?>