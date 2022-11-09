<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;
//$db->debug = true;
$sql = $db->Prepare("SELECT DISTINCT(ci)
			FROM personas1
		");
	$rs = $db->GetAll($sql);

$smarty->assign("direc_css", $direc_css);
$smarty->assign("personas1", $rs);
$smarty->display("rpt_trabajos.tpl");
?>