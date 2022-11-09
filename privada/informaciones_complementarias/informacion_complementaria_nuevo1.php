<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
var_dump($_POST);
$id_empresa=$_POST["id_empresa"];
$periodo_funcionamiento=$_POST["periodo_funcionamiento"];
$utilidades_historicas=$_POST["utilidades_historicas"];
$perdidas_historicas= $_POST["perdidas_historicas"];
$deudas_tributarias= $_POST["deudas_tributarias"];

$smarty=new Smarty;
$db->debug=true;
	$reg=array();
	$reg["id_empresa"] =$id_empresa;
	$reg["periodo_funcionamiento"] =$periodo_funcionamiento;
	$reg["utilidades_historicas"]=$utilidades_historicas;
	$reg["perdidas_historicas"]=$perdidas_historicas;
	$reg["deudas_tributarias"]=$deudas_tributarias;
	$reg["fec_insercion"]=date("Y-m-d H:i:s");
	$reg["estado"]='1';
	$reg["usuario"]=$_SESSION["sesion_id_usuario"];
	$rs1=$db->AutoExecute("informaciones_complementarias", $reg, "INSERT");

if ($rs1){
	header("Location: informaciones_complementarias.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insetaron!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("informacion_complementaria_nuevo1.tpl");
}
?>
