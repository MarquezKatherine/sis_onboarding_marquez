<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
/*var_dump($_POST)*/

$id_tipo_egreso = $_REQUEST["id_tipo_egreso"];
$especificacion_egreso = $_POST["especificacion_egreso"];


$db->debug=true;
$smarty = new Smarty;

$reg = array();
$reg["especificacion_egreso"] = $especificacion_egreso;
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("tipos_egresos", $reg, "UPDATE", "id_tipo_egreso='".$id_tipo_egreso."'");

if ($rs1) {
	header("Location: tipos_egresos.php");
	exit();
} else {
	$smarty->assing("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!!!!!");
	$smarty->assing("direc_css", $direc_css);
	$smarty->assing("id_tipo_egreso", $id_tipo_egreso);
	$smarty->display("tipos_egresos_modificar1.tpl");
}
?>