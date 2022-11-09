<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$nombre = strip_tags(stripslashes($_POST["nombre"]));
$origen = strip_tags(stripslashes($_POST["origen"]));
$destino = strip_tags(stripcslashes($_POST["destino"]));



//$db->debug=true;

if ($nombre or $origen or $destino){
	$sql3 = $db->Prepare("SELECT ho.nombre, vue.origen, vue.destino, vue.id_hotel
						  FROM hoteles ho, vuelos vue
						  WHERE ho.nombre LIKE ?
						  AND vue.origen LIKE ?
						  AND vue.destino LIKE ?
						  AND ho.id_hotel=vue.id_hotel
						  ");
	$rs3 = $db->GetAll($sql3, array($nombre."%",$origen."%", $destino."%"));

	if($rs3) {
		echo"<center>
			<table width='60%' border='1'
				<tr>
					<th>NOMBRE</th><th>ORIGEN</th><th>DESTINO</th><th>?</th>
					</tr>";
				foreach ($rs3 as $k => $fila) {
						$str = $fila["nombre"];
						 $str1 = $fila["origen"];
						 $str2 = $fila["destino"];
					echo"<tr>
							<td align='center'>".resaltar($nombre, $str)."</td>
							<td>".resaltar($origen, $str1)."</td>
							<td>".resaltar($destino, $str2)."</td>
							<td align='center'>
								<input type='radio' name='opcion' value='' onClick='mostrar(".$fila["id_hotel"].")'>
							</tr>";
				}
				echo"</table>
				</center>";
	}else {
		echo"<center><b> EL VUELO NO EXISTE!!</b></center><br>";
		
	}
}
?>