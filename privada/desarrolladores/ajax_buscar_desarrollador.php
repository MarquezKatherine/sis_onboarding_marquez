<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$turno_trabajo = strip_tags(stripslashes($_POST["turno_trabajo"]));
$nombres = strip_tags(stripslashes($_POST["nombres"]));
$apellidos = strip_tags(stripslashes($_POST["apellidos"]));
$email = strip_tags(stripslashes($_POST["email"]));
$telefono = strip_tags(stripslashes($_POST["telefono"]));

//$db->debug=true;
if ($turno_trabajo or $nombres or $apellidos or $email or $telefono){
	$sql3 = $db->Prepare("SELECT hor.turno_trabajo, de.nombres, de.apellidos, de.email, de.telefono, de.id_desarrollador
						FROM desarrolladores de, horarios hor
						WHERE hor.turno_trabajo LIKE ? 
						AND de.nombres LIKE ?
						AND de.apellidos LIKE ?
						AND de.email LIKE ?
						AND de.telefono LIKE ?
						AND de.estado <> '0'
						AND hor.estado <> '0'
						AND hor.id_horario=de.id_horario
						");
	$rs3 = $db->GetAll($sql3, array($turno_trabajo."%", $nombres."%", $apellidos."%", $email."%", $telefono."%"));
	if ($rs3) {
		echo"<center>
			<table class='listado'>
					<tr>
					<th>TURNO DE TRABAJO</th><th>NOMBRES</th><th>APELLIDOS</th><th>EMAIL</th><th>TELEFONO</th><th><img src='../../imagenes/modificar.jpg'width='20%'</th><th><img src='../../imagenes/borrar.jpg' width='20%'></th>
					</tr>";
		foreach ($rs3 as $k => $fila) {
			$str = $fila["turno_trabajo"];
			$str1 = $fila["nombres"];
			$str2 = $fila["apellidos"];
			$str3 = $fila["email"];
			$str4 = $fila["telefono"];
			echo"
			<td aling='center'>".resaltar($turno_trabajo, $str)."</td>
				<td>".resaltar($nombres, $str1)."</td>
				<td>".resaltar($apellidos, $str2)."</td>
				<td>".resaltar($email, $str3)."</td>
				<td>".resaltar($telefono, $str4)."</td>
				<td aling='center'>
				<form name='formModif".$fila["id_desarrollador"]."' method='post' action='desarrollador_modificar.php'>
				<input type='hidden' name='id_desarrollador' value='".$fila['id_desarrollador']."'>
				<a href='javascript:document.formModif".$fila['id_desarrollador'].".submit();' title='Modificar Desarrollador Sistema'>
				Modificar>>
				</a>
				</form>
				</td>
				<td aling='center'>
				<form name='formElimi".$fila["id_desarrollador"]."' method='post' action='desarrollador_eliminar.php'>
				<input type='hidden' name='id_desarrollador' value='".$fila['id_desarrollador']."'>
				<a href='javascript:document.formElimi".$fila['id_desarrollador'].".submit();' title='Eliminar Desarrollador Sistema' onclick='javascript:return(confirm( \"Desea realmente Eliminar a la persona?\"))'; location.href='desarrollador_eliminar.php''>
				Eliminar>>
				</a>
				</form>
				</td>
				</tr>";
		}
		echo "</table>
		</center>";
	}else {
		echo "<center><b>EL DESARROLLADOR NO EXISTE!!</b></center><br>";
	}
}
?>