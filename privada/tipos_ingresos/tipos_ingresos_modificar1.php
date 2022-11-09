<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
/*var_dump($_POST)*/

$id_tipo_ingreso = $_REQUEST["id_tipo_ingreso"];
$especificacion_ingreso = $_POST["especificacion_ingreso"];

$db->debug=true;
$smarty = new Smarty;

$reg = array();
$reg["especificacion_ingreso"] = $especificacion_ingreso;
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("tipos_ingresos", $reg, "UPDATE", "id_tipo_ingreso='".$id_tipo_ingreso."'");

if ($rs1) {
	header("Location: tipos_ingresos.php");
	exit();
} else {
	$smarty->assing("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!!!!!");
	$smarty->assing("direc_css", $direc_css);
	$smarty->assing("id_tipo_ingreso", $id_tipo_ingreso);
	$smarty->display("tipos_ingresos_modificar1.tpl");
}
?>