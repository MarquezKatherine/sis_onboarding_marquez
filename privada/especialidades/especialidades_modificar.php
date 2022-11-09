<?php 
session_start();
require_once("../../smarty/libs//Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");


$id_tipo_especialidad= $_REQUEST["id_tipo_especialidad"];
$id_especialidad = $_REQUEST["id_especialidad"];


$smarty=new Smarty;



$sql = $db->Prepare("SELECT *
					FROM especialidades
					WHERE id_especialidad =?
					");

$rs = $db->GetAll($sql, array($id_especialidad));

$sql1 = $db->Prepare("SELECT * 
					FROM tipos_especialidades
					WHERE id_tipo_especialidad = ?
					AND estado <> '0'
				");
$rs1 = $db->GetAll($sql1, array($id_tipo_especialidad));


$sql2 = $db->Prepare("SELECT * 
					FROM tipos_especialidades
					WHERE id_tipo_especialidad <> ?
					AND estado <> '0'
				");
$rs2 = $db->GetAll($sql2, array($id_tipo_especialidad));

$smarty->assign("especialidades", $rs);
$smarty->assign("persona", $rs1);
$smarty->assign("tipos_especialidades", $rs2);

$smarty->assign("direc_css", $direc_css);
$smarty->display("especialidades_modificar.tpl");
?>			