<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

var_dump($_POST);

$id_empresa=$_POST["id_empresa"];
$id_informacion_complementaria=$_POST["id_informacion_complementaria"];
$periodo_funcionamiento=$_POST["periodo_funcionamiento"];
$utilidades_historicas= $_POST["utilidades_historicas"];
$perdidas_historicas= $_POST["perdidas_historicas"];
$deudas_tributarias= $_POST["deudas_tributarias"];

$smarty=new Smarty;

$reg=array();
$reg["id_empresa"] =$id_empresa;
$reg["periodo_funcionamiento"]=$periodo_funcionamiento;
$reg["utilidades_historicas"]=$utilidades_historicas;
$reg["perdidas_historicas"]=$perdidas_historicas;
$reg["deudas_tributarias"]=$deudas_tributarias;
$reg["usuario"]=$_SESSION["sesion_id_usuario"];
$rs1=$db->AutoExecute("informaciones_complementarias", $reg, "UPDATE", "id_informacion_complementaria='".$id_informacion_complementaria."'");

if ($rs1){
	header("Location: informaciones_complementarias.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("id_informacion_complementaria", $id_informacion_complementaria);
	$smarty->display("informacion_complementaria_modificar1.tpl");
}
?>
