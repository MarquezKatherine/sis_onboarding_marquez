<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;
$sql = $db->Prepare("SELECT *
					FROM personas1 
	                ");	
$rs = $db->GetAll($sql);

//$db->debug = true;}

$smarty->assign("personas1", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("ficha_tec_trabajos.tpl");
?>