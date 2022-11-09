<?php 
session_start();
require_once("../../smarty/libs//Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty=new Smarty;
//$db->debug=true;
$sql = $db->Prepare("SELECT *
					FROM personas1
					ORDER BY id_persona1 DESC
					");
$rs = $db->GetAll($sql);

$smarty->assign("personas1", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("trabajos_nuevo.tpl");
?>		