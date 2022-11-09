<?php 
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_tipo_egreso=$_REQUEST["id_tipo_egreso"];

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
	                  FROM egresos
	                  WHERE id_tipo_egreso=?
	                  AND estado <> '0'
	                  ");
$rs = $db->GetAll($sql, array($id_tipo_egreso));

if(!$rs) {
	$reg=array();
	$reg["estado"]='0';
	$reg["usuario"]=$_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("tipos_egresos", $reg, "UPDATE", "id_tipo_egreso='".$id_tipo_egreso."'");
	header("Location:tipos_egresos.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("tipos_egresos_eliminar.tpl");
}
?>