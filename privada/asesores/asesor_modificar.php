<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_asesor = $_REQUEST["id_asesor"];

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
	                 FROM asesores 
	                 WHERE id_asesor = ? 
	                 ");
$rs = $db->GetAll($sql, array($id_asesor));
$smarty->assign("persona", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("asesor_modificar.tpl");
?>