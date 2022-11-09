<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$especificacion_egreso = $_POST["especificacion_egreso"];

var_dump( $_POST);
//$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["id_sistema_web"] = 1;
$reg["especificacion_egreso"] = $especificacion_egreso;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = '1';
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("tipos_egresos", $reg, "INSERT");

if ($rs1){
	header("Location: tipos_egresos.php");
	exit();
}else{
	$smarty->assing("mensaje", "ERROR: Los datos no se insertaron!!!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("tipos_egresos_nuevo1.tpl");
}
?>