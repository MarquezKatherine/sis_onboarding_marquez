<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_tipo_especialidad = $_REQUEST["id_tipo_especialidad"];

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
	                 FROM tipos_especialidades
	                 WHERE id_tipo_especialidad = ? 
	                 ");
$rs = $db->GetAll($sql, array($id_tipo_especialidad));
$smarty->assign("persona", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("tipos_especialidades_modificar.tpl");
?>