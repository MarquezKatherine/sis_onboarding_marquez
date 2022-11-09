<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$nombre = strip_tags(stripslashes($_POST["nombre"]));


//$db->debug=true;

if ($nombre){
	$sql3 = $db->Prepare("SELECT pk_id AS fk_cargo, nombre
						  FROM cargos
						  WHERE nombre LIKE ?
						  ");
	$rs3 = $db->GetAll($sql3, array($nombre."%"));

	if($rs3) {
		echo"<center>
			<table width='60%' border='1'
				<tr>
					<th>CARGO</th><th>?</th>
					</tr>";
				foreach ($rs3 as $k => $fila) {
						 $str = $fila["nombre"];
					echo"<tr>
							<td align='center'>".resaltar($nombre, $str)."</td>
							<td align='center'>
								<input type='radio' name='fk_cargo' onClick='buscar_cargos(".$fila["fk_cargo"].")'>
							</td>
							</tr>";
				}
				echo"</table>
				</center>";
	}else {
		echo"<center><b> EL CARGO NO EXISTE!!</b></center><br>";
		echo"<center>
			<table class='listado'>
				<tr>
					<td><b>NOMBRE</b></td>
					<td><input type='text' name='nombre1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
				</tr>
				<tr>
				<td align='center' colspan='2'>
					<input type='button' value='ADICIONAR CARGO' onClick='insertar_cargos()' >
				</td>
				</tr>
			</table>
			</center>
			";
	}
}
?>