<?php 
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_tipo_ingreso=$_REQUEST["id_tipo_ingreso"];

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
	                  FROM ingresos
	                  WHERE id_tipo_ingreso=?
	                  AND estado <> '0'
	                  ");
$rs = $db->GetAll($sql, array($id_tipo_ingreso));

if(!$rs) {
	$reg=array();
	$reg["estado"]='0';
	$reg["usuario"]=$_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("tipos_ingresos", $reg, "UPDATE", "id_tipo_ingreso='".$id_tipo_ingreso."'");
	header("Location:tipos_ingresos.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("tipos_ingresos_eliminar.tpl");
}
?>