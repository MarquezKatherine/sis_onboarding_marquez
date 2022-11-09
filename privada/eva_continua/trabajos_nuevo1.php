<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
var_dump($_POST);
$id_persona1 =$_POST["id_persona1"];
$trabajo =$_POST["trabajo"];
$salario= $_POST["salario"];


$smarty=new Smarty;
//$db->debug=true;
	$reg=array();
	$reg["id_persona1"] =$id_persona1;
	$reg["trabajo"]=$trabajo;
	$reg["salario"]=$salario;
	$reg["fec_insercion"]=date("Y-m-d H:i:s");
	$reg["estado"]='0';
	$reg["usuario"]=$_SESSION["sesion_id_usuario"];
	$rs1=$db->AutoExecute("trabajos", $reg, "INSERT");

if ($rs1){
	header("Location: trabajos.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insetaron!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("trabajos_nuevo1.tpl");
}
?>

