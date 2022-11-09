<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;
//$db->debug = true;
$sql = $db->Prepare("SELECT DISTINCT(especializacion)
			FROM tipos_especialidades
			WHERE estado <> '0'
		");
	$rs = $db->GetAll($sql);

$smarty->assign("direc_css", $direc_css);
$smarty->assign("tipos_especialidades", $rs);
$smarty->display("rpt_tipos_especializacion.tpl");
?>