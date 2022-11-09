<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$turno_trabajo = $_POST["turno_trabajo"];
$horario_entrada_y_salida = $_POST["horario_entrada_y_salida"];
$dias_trabajados_mes = $_POST["dias_trabajados_mes"];

$smarty = new Smarty;

$reg = array();
$reg["id_sistema_web"] = 1;
$reg["turno_trabajo"] = $turno_trabajo;
$reg["horario_entrada_y_salida"] = $horario_entrada_y_salida;
$reg["dias_trabajados_mes"] = $dias_trabajados_mes;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = '1';
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("horarios", $reg, "INSERT");

if ($rs1){
	header("Location: horarios.php");
	exit();
}else{
	$smarty->assing("mensaje", "ERROR: Los datos no se insertaron!!!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("horarios_nuevo1.tpl");
}
?>