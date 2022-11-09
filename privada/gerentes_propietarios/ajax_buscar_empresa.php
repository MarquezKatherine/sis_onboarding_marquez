<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$razon_social = strip_tags(stripslashes($_POST["razon_social"]));
$telefonos = strip_tags(stripcslashes($_POST["telefonos"]));
$ubicacion = strip_tags(stripcslashes($_POST["ubicacion"]));
$correo_electronico = strip_tags(stripcslashes($_POST["correo_electronico"]));

//$db->debug=true;

if ($razon_social or $telefonos or $ubicacion or $correo_electronico){
	$sql3 = $db->Prepare("SELECT*
						  FROM empresa
						  WHERE razon_social LIKE ?
						  AND telefonos LIKE ?
						  AND ubicacion LIKE ?
						  AND correo_electronico LIKE ?
						  AND estado <> '0'
						  ");
	$rs3 = $db->GetAll($sql3, array($razon_social."%", $telefonos."%", $ubicacion."%", $correo_electronico."%"));

	if($rs3) {
		echo"<center>
			<table width='60%' border='1'
				<tr>
					<th>RAZON SOCIAL</th><th>TELEFONO</th><th>UBICACION</th><th>CORREO ELECTRONICO<th>?</th>
					</tr>";
				foreach ($rs3 as $k => $fila) {
						 $str = $fila["razon_social"];
						 $str1 = $fila["telefonos"];
						 $str2 = $fila["ubicacion"];
						 $str3 = $fila["correo_electronico"];
					echo"<tr>
							<td align='center'>".resaltar($razon_social, $str)."</td>
							<td>".resaltar($telefonos, $str1)."</td>
							<td>".resaltar($ubicacion, $str2)."</td>
							<td>".resaltar($correo_electronico, $str3)."</td>
							<td align='center'>
								<input type='radio' name='opcion' value='' onClick='buscar_empresa(".$fila["id_empresa"].")'>
							</td>
							</tr>";
				}
				echo"</table>
				</center>";
	}else {
		echo"<center><b> LA EMPRESA NO EXISTE!!</b></center><br>";
		echo"<center>
			<table class='listado'>
				<tr>
					<td><b>RAZON SOCIAL</b></td>
					<td><input type='text' name='razon_social1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
				</tr>
				<tr>
					<td><b>TELEFONO</b></td>
					<td><input type='text' name='telefonos1' size='10'></td>
				</tr>
				<tr>
					<td><b>UBICACION</b></td>
					<td><input type='text' name='ubicacion1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
				</tr>
				<tr>
					<td><b>CORREO ELECTRONICO</b></td>
					<td><input type='text' name='correo_electronico1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
				</tr>
				<tr>
					<td><b>SITIO WEB</b></td>
					<td><input type='text' name='sitio_web1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
				</tr>
				<tr>
				<td align='center' colspan='2'>
					<input type='button' value='ADICIONAR EMPRESA' onClick='insertar_empresa()' >
				</td>
				</tr>
			</table>
			</center>
			";
	}
}
?>