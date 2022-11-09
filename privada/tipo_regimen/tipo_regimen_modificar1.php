<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

var_dump($_POST);

$id_empresa=$_POST["id_empresa"];
$id_tipo_regimen=$_POST["id_tipo_regimen"];
$regimen=$_POST["regimen"];
$fecha_cierre= $_POST["fecha_cierre"];
$descripcion_tipo_empresa= $_POST["descripcion_tipo_empresa"];

$smarty=new Smarty;

$reg=array();
$reg["id_empresa"] =$id_empresa;
$reg["regimen"]=$regimen;
$reg["fecha_cierre"]=$fecha_cierre;
$reg["descripcion_tipo_empresa"]=$descripcion_tipo_empresa;
$reg["usuario"]=$_SESSION["sesion_id_usuario"];
$rs1=$db->AutoExecute("tipo_regimen", $reg, "UPDATE", "id_tipo_regimen='".$id_tipo_regimen."'");

if ($rs1){
	header("Location: tipo_regimen.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("id_tipo_regimen", $id_tipo_regimen);
	$smarty->display("tipo_regimen_modificar1.tpl");
}
?>

