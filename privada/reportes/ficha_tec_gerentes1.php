<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_gerente_propietario =$_REQUEST["id_gerente_propietario"];

$smarty = new Smarty;

//$db->debug=true;
$sql =$db->Prepare("SELECT emp.razon_social, ger.nombres, ger.apellidos, ger.telefono, ger.identificacion_tributaria
					FROM empresa emp, gerentes_propietarios ger
					WHERE ger.id_gerente_propietario = ?
					AND emp.estado <> '0'
					AND ger.estado <> '0'
					AND ger.id_empresa=emp.id_empresa 
					");
$rs = $db->GetAll($sql, array($id_gerente_propietario));

$sql1=$db->Prepare("SELECT *
					FROM sistema_web
					WHERE id_sistema_web = 1
					AND estado <> '0'
					");
$rs1 = $db->GetAll($sql1);
$nombre= $rs1[0]["nombre"];
$logo =$rs1[0]["logo"];
$smarty->assign("logo", $logo);

$smarty->assign("gerente", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("ficha_tec_gerentes1.tpl");
?>
