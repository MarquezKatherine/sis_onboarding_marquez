<?php 
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_horario=$_REQUEST["id_horario"];

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
	                  FROM desarrolladores
	                  WHERE id_horario=?
	                  AND estado <> '0'
	                  ");
$rs = $db->GetAll($sql, array($id_horario));

if(!$rs) {
	$reg=array();
	$reg["estado"]='0';
	$reg["usuario"]=$_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("horarios", $reg, "UPDATE", "id_horario='".$id_horario."'");
	header("Location:horarios.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("horarios_eliminar.tpl");
}
?>