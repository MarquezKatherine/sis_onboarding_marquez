<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$smarty = new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
					 FROM empresa p, tipo_regimen u
					 WHERE p.id_empresa = u.id_empresa
					 AND p.estado <> '0'
					 AND u.estado <> '0'
					 ORDER BY (u.id_empresa) DESC
					 ");
$rs = $db->GetAll($sql);

$sql1 = $db->Prepare("SELECT *
					  FROM sistema_web
					  WHERE id_sistema_web = 1
					  AND estado <> '0'
					 ");
$rs1 = $db->GetAll($sql1);
$nombre = $rs1[0]["nombre"];
$logo = $rs1[0]["logo"];

$fecha = date("Y-m-d H:i:s");

$smarty->assign("empresa_regimen", $rs);
$smarty->assign("logo", $logo);
$smarty->assign("fecha", $fecha);
$smarty->assign("direc_css", $direc_css);
$smarty->display("empresa_regimen1.tpl");
?>