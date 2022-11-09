<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_tarea =$_REQUEST["id_tarea"];

$smarty = new Smarty;

//$db->debug=true;
$sql =$db->Prepare("SELECT emp.razon_social, tar.fecha_inicio, tar.fecha_finalizacion, tar.descripcion_actividad
					FROM empresa emp, tareas tar
					WHERE tar.id_tarea = ?
					AND emp.estado <> '0'
					AND tar.estado <> '0'
					AND tar.id_empresa=emp.id_empresa 
					");
$rs = $db->GetAll($sql, array($id_tarea));

$sql1=$db->Prepare("SELECT *
					FROM sistema_web
					WHERE id_sistema_web = 1
					AND estado <> '0'
					");
$rs1 = $db->GetAll($sql1);
$nombre= $rs1[0]["nombre"];
$logo =$rs1[0]["logo"];
$smarty->assign("logo", $logo);

$smarty->assign("tarea", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("ficha_tec_tareas1.tpl");
?>
