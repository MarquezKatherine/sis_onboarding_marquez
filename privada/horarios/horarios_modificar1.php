<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
/*var_dump($_POST)*/

$id_horario = $_REQUEST["id_horario"];
$turno_trabajo = $_POST["turno_trabajo"];
$horario_entrada_y_salida = $_POST["horario_entrada_y_salida"];
$dias_trabajados_mes =$_POST["dias_trabajados_mes"];


$db->debug=true;
$smarty = new Smarty;

$reg = array();
$reg["turno_trabajo"] = $turno_trabajo;
$reg["horario_entrada_y_salida"] = $horario_entrada_y_salida;
$reg["dias_trabajados_mes"]=$dias_trabajados_mes;
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("horarios", $reg, "UPDATE", "id_horario='".$id_horario."'");

if ($rs1) {
	header("Location: horarios.php");
	exit();
} else {
	$smarty->assing("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!!!!!");
	$smarty->assing("direc_css", $direc_css);
	$smarty->assing("id_horario", $id_horario);
	$smarty->display("horarios_modificar1.tpl");
}
?>