<?php 
session_start();
require_once("../../smarty/libs//Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_informacion_complementaria = $_REQUEST["id_informacion_complementaria"];
$id_empresa= $_REQUEST["id_empresa"];

$smarty=new Smarty;



$sql = $db->Prepare("SELECT *
					FROM informaciones_complementarias
					WHERE id_informacion_complementaria =?
					");

$rs = $db->GetAll($sql, array($id_informacion_complementaria));

$sql1 = $db->Prepare("SELECT * 
					FROM empresa
					WHERE id_empresa = ?
					AND estado <> '0'
				");
$rs1 = $db->GetAll($sql1, array($id_empresa));


$sql2 = $db->Prepare("SELECT * 
					FROM empresa
					WHERE id_empresa <> ?
					AND estado <> '0'
				");
$rs2 = $db->GetAll($sql2, array($id_empresa));

$smarty->assign("informaciones_complementarias", $rs);
$smarty->assign("persona", $rs1);
$smarty->assign("empresa", $rs2);

$smarty->assign("direc_css", $direc_css);
$smarty->display("informacion_complementaria_modificar.tpl");
?>			