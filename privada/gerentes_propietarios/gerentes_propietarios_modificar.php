<?php 
session_start();
require_once("../../smarty/libs//Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_gerente_propietario = $_REQUEST["id_gerente_propietario"];
$id_empresa= $_REQUEST["id_empresa"];

$smarty=new Smarty;



$sql = $db->Prepare("SELECT *
					FROM gerentes_propietarios
					WHERE id_gerente_propietario =?
					");

$rs = $db->GetAll($sql, array($id_gerente_propietario));

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

$smarty->assign("gerentes_propietarios", $rs);
$smarty->assign("persona", $rs1);
$smarty->assign("empresa", $rs2);

$smarty->assign("direc_css", $direc_css);
$smarty->display("gerentes_propietarios_modificar.tpl");
?>			