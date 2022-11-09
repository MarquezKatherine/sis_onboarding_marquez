<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
var_dump($_POST);
$id_ingreso=$_POST["id_ingreso"];
$id_egreso=$_POST["id_egreso"];
$fecha_informe=$_POST["fecha_informe"];
$descripcion_informe= $_POST["descripcion_informe"];

$smarty=new Smarty;

	$reg=array();
	$reg["id_ingreso"] =$id_ingreso;
	$reg["id_egreso"]=$id_egreso;
	$reg["fecha_informe"]=$fecha_informe;
	$reg["descripcion_informe"]=$descripcion_informe;
	$reg["fec_insercion"]=date("Y-m-d H:i:s");
	$reg["estado"]='1';
	$reg["usuario"]=$_SESSION["sesion_id_usuario"];
	$rs1=$db->AutoExecute("informes", $reg, "INSERT");

if ($rs1){
	header("Location: informes.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insetaron!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("informes_nuevo1.tpl");
}
?>