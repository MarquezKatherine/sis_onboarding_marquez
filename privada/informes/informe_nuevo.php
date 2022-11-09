<?php 
session_start();
require_once("../../smarty/libs//Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty=new Smarty;

$sql = $db->Prepare("SELECT *
					FROM ingresos p
					WHERE p.estado<> '0'
					ORDER BY p.id_ingreso DESC
					");
$rs = $db->GetAll($sql);

$sql2 = $db->Prepare("SELECT *
					FROM egresos p
					WHERE p.estado<> '0'
					ORDER BY p.id_egreso DESC
					");
$rs1 = $db->GetAll($sql2);

$smarty->assign("ingresos", $rs);
$smarty->assign("egresos", $rs1);
$smarty->assign("direc_css", $direc_css);
$smarty->display("informes_nuevo.tpl");
?>		