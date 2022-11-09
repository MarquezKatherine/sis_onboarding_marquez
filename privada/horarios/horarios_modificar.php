<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_horario = $_REQUEST["id_horario"];

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
	                 FROM horarios
	                 WHERE id_horario = ? 
	                 ");
$rs = $db->GetAll($sql, array($id_horario));
$smarty->assign("persona", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("horarios_modificar.tpl");
?>