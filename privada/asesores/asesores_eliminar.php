<?php 
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_asesor=$_REQUEST["id_asesor"];

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
	                  FROM asesores_especialidades
	                  WHERE id_asesor=?
	                  AND estado <> '0'
	                  ");
$rs = $db->GetAll($sql, array($id_asesor));

if(!$rs) {
	$reg=array();
	$reg["estado"]='0';
	$reg["usuario"]=$_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("asesores", $reg, "UPDATE", "id_asesor='".$id_asesor."'");
	header("Location:asesores.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("asesores_eliminar.tpl");
}
?>