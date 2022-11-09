<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;
//$db->debug = true;
$sql = $db->Prepare("SELECT DISTINCT(grado_especialidad)
			FROM asesores_especialidades
			WHERE estado <> '0'
		");
	$rs = $db->GetAll($sql);

$smarty->assign("direc_css", $direc_css);
$smarty->assign("asesores_especialidades", $rs);
$smarty->display("rpt_asesores_grado.tpl");
?>