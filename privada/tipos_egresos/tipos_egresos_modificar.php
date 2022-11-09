<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_tipo_egreso = $_REQUEST["id_tipo_egreso"];

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
	                 FROM tipos_egresos
	                 WHERE id_tipo_egreso = ? 
	                 ");
$rs = $db->GetAll($sql, array($id_tipo_egreso));
$smarty->assign("persona", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("tipos_egresos_modificar.tpl");
?>