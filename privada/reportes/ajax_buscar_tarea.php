<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$fecha_inicio = strip_tags(stripslashes($_POST["fecha_inicio"]));
$fecha_finalizacion = strip_tags(stripcslashes($_POST["fecha_finalizacion"]));
$descripcion_actividad = strip_tags(stripcslashes($_POST["descripcion_actividad"]));


//$db->debug=true;

if ($fecha_inicio or $fecha_finalizacion or $descripcion_actividad){
	$sql3 = $db->Prepare("SELECT*
						  FROM tareas
						  WHERE fecha_inicio LIKE ?
						  AND fecha_finalizacion LIKE ?
						  AND descripcion_actividad LIKE ?
						  AND estado <> '0'
						  ");
	$rs3 = $db->GetAll($sql3, array($fecha_inicio."%", $fecha_finalizacion."%", $descripcion_actividad."%"));

	if($rs3) {
		echo"<center>
			<table width='60%' border='1'
				<tr>
					<th>FECHA INICIO</th><th>FECHA FIN</th><th>DESCRIPCION</th><th>?</th>
					</tr>";
				foreach ($rs3 as $k => $fila) {
						 $str = $fila["fecha_inicio"];
						 $str1 = $fila["fecha_finalizacion"];
						 $str2 = $fila["descripcion_actividad"];
					echo"<tr>
							<td align='center'>".resaltar($fecha_inicio, $str)."</td>
							<td>".resaltar($fecha_finalizacion, $str1)."</td>
							<td>".resaltar($descripcion_actividad, $str2)."</td>
							<td align='center'>
								<input type='radio' name='opcion' value='' onClick='mostrar(".$fila["id_tarea"].")'>
							</td>
							</tr>";
				}
				echo"</table>
				</center>";
	}else {
		echo"<center><b> LA TAREA NO EXISTE!!</b></center><br>";
		
	}
}
?>