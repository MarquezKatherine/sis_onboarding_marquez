<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$nombres = $_POST["nombres"];
$fecha_ingreso_cargo = $_POST["fecha_ingreso_cargo"];
$especialidad = $_POST["especialidad"];
var_dump( $_POST);
//$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["id_sistema_web"] = 1;
$reg["nombres"] = $nombres;
$reg["fecha_ingreso_cargo"] = $fecha_ingreso_cargo;
$reg["especialidad"] = $especialidad;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = '1';
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("propietario_sistema", $reg, "INSERT");

if ($rs1){
	header("Location: propietario_sistema.php");
	exit();
}else{
	$smarty->assing("mensaje", "ERROR: Los datos no se insertaron!!!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("propietario_sistema_nuevo1.tpl");
}
?>