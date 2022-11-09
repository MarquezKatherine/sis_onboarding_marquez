<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
var_dump($_POST);
$id_empresa=$_POST["id_empresa"];
$regimen=$_POST["regimen"];
$fecha_cierre= $_POST["fecha_cierre"];
$descripcion_tipo_empresa= $_POST["descripcion_tipo_empresa"];



$smarty=new Smarty;
//$db->debug=true;
	$reg=array();
	$reg["id_empresa"] =$id_empresa;
	$reg["regimen"]=$regimen;
	$reg["fecha_cierre"]=$fecha_cierre;
	$reg["descripcion_tipo_empresa"]=$descripcion_tipo_empresa;
	$reg["fec_insercion"]=date("Y-m-d H:i:s");
	$reg["estado"]='1';
	$reg["usuario"]=$_SESSION["sesion_id_usuario"];
	$rs1=$db->AutoExecute("tipo_regimen", $reg, "INSERT");

if ($rs1){
	header("Location: tipo_regimen.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insetaron!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("tipo_regimen_nuevo1.tpl");
}
?>
