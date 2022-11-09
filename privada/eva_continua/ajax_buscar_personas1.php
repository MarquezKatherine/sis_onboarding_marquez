<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$ci = strip_tags(stripslashes($_POST["ci"]));
$nombres = strip_tags(stripcslashes($_POST["nombres"]));
$ap = strip_tags(stripcslashes($_POST["ap"]));
//$db->debug=true;

if ($ci or $nombres or $ap){
	$sql3 = $db->Prepare("SELECT *
						  FROM personas1
						  WHERE ci LIKE ?
						  AND nombres LIKE ?
						  AND ap LIKE ?
						  ");
	$rs3 = $db->GetAll($sql3, array($ci."%", $nombres."%", $ap."%"));

	if($rs3) {
		echo"<center>
			<table width='60%' border='1'
				<tr>
					<th>CEDULA IDENTIDAD</th><th>NOMBRES</th><th>APELLIDO PATERNO</th><th>?</th>
					</tr>";
				foreach ($rs3 as $k => $fila) {
						 $str = $fila["ci"];
						 $str1 = $fila["nombres"];
						 $str2 = $fila["ap"];
					echo"<tr>
							<td align='center'>".resaltar($ci, $str)."</td>
							<td align='center'>".resaltar($nombres, $str1)."</td>
							<td align='center'>".resaltar($ap, $str2)."</td>
						</td>
							<td align='center'>
								<input type='radio' name='opcion' value='' onClick='buscar_personas1(".$fila["id_persona1"].")'>
							</td>
							</tr>";
				}
				echo"</table>
				</center>";
	}else {
		echo"<center><b> LA PERSONA NO EXISTE!!</b></center><br>";
		echo"<center>
			<table class='listado'>
				<tr>
					<td><b>C.I.</b></td>
					<td><input type='text' name='ci1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
				</tr>
				<tr>
					<td><b>Nombres</b></td>
					<td><input type='text' name='nombres1' size='10'></td>
				</tr>
				<tr>
					<td><b>Apellido Paterno</b></td>
					<td><input type='text' name='ap1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
				</tr>
				<tr>
					<td><b>Apellido Materno</b></td>
					<td><input type='text' name='am1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
				</tr>
				<tr>
					<td><b>Direccion</b></td>
					<td><input type='text' name='direccion1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
				</tr>
				<tr>
					<td><b>Fecha de Nacimiento</b></td>
					<td><input type='text' name='fec_nac1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
				</tr>
				<tr>
				<td align='center' colspan='2'>
					<input type='button' value='ADICIONAR PERSONAS' onClick='insertar_personas1()' >
				</td>
				</tr>
			</table>
			</center>
			";
	}
}
?>