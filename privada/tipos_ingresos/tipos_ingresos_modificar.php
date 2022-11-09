<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_tipo_ingreso = $_REQUEST["id_tipo_ingreso"];

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
	                 FROM tipos_ingresos 
	                 WHERE id_tipo_ingreso = ? 
	                 ");
$rs = $db->GetAll($sql, array($id_tipo_ingreso));
$smarty->assign("tipos_ingresos", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("tipos_ingresos_modificar.tpl");
?>