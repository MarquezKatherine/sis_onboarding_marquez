<?php 
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_asesor_especialidad=$_REQUEST["id_asesor_especialidad"];

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
	                  FROM egresos
	                  WHERE id_asesor_especialidad=?
	                  AND estado <> '0'
	                  ");
$rs = $db->GetAll($sql, array($id_asesor_especialidad));

$sql1 = $db->Prepare("SELECT *
	                  FROM ingresos
	                  WHERE id_asesor_especialidad=?
	                  AND estado <> '0'
	                  ");
$rs2 = $db->GetAll($sql1, array($id_asesor_especialidad));

if(!$rs and !$rs2) {
	$reg=array();
	$reg["estado"]='0';
	$reg["usuario"]=$_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("asesores_especialidades", $reg, "UPDATE", "id_asesor_especialidad='".$id_asesor_especialidad."'");
	header("Location:asesores_especialidades.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("asesores_especialidades_eliminar.tpl");
}
?>