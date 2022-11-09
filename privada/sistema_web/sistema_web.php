<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;
$db -> debug = false;
$sql = $db->Prepare("SELECT *
					FROM sistema_web
					WHERE id_sistema_web=1
					");
$rs = $db->GetAll($sql);
$smarty->assign("sistema_web", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("sistema_web.tpl");
?>