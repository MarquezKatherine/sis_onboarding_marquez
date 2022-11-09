<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_empresa = $_REQUEST["id_empresa"];

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
	                 FROM empresa 
	                 WHERE id_empresa = ? 
	                 ");
$rs = $db->GetAll($sql, array($id_empresa));
$smarty->assign("persona", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("empresa_modificar.tpl");
?>