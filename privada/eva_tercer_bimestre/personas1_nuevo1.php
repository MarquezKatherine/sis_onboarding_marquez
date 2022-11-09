<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
var_dump($_POST);
$nombres =$_POST["nombres"];
$ci =$_POST["ci"];
$telef= $_POST["telef"];
$fk_cargo =$_POST["fk_cargo1"];


$smarty=new Smarty;
$db->debug=true;
	$reg=array();
	$reg["nombres"]=$nombres;
	$reg["ci"]=$ci;
	$reg["telef"]=$telef;
	$reg["fk_cargo"] =$fk_cargo;
	$reg["fec_insercion"]=date("Y-m-d H:i:s");
	$reg["estado"]='0';
	$reg["usuario"]=$_SESSION["sesion_id_usuario"];
	$rs1=$db->AutoExecute("personas1", $reg, "INSERT");

if ($rs1){
	header("Location: personas1.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insetaron!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("personas1_nuevo1.tpl");
}
?>

