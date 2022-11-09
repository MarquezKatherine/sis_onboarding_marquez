<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$ci = $_REQUEST["ci"];

$smarty = new Smarty;
//$db->debug=true;
if($ci == "T"){
	$sql = $db->Prepare("SELECT pe1.ci, pe1.nombres, pe1.ap, tra.trabajo, tra.salario
			FROM personas1 pe1, trabajos tra
			WHERE pe1.id_persona1=tra.id_persona1
		");
	$rs = $db->GetAll($sql);
}else{
	$sql = $db->Prepare("SELECT  pe1.ci, pe1.nombres, pe1.ap, tra.trabajo, tra.salario
			FROM personas1 pe1, trabajos tra
			WHERE pe1.ci = ?
			AND pe1.id_persona1=tra.id_persona1
		");
	$rs = $db->GetAll($sql, array($ci));
}

$sql1 = $db->Prepare("SELECT *
					FROM sistema_web
					WHERE id_sistema_web = 1
					AND estado <> '0'	
					");
$rs1 = $db->GetAll("$sql1");
$nombre = $rs1[0]["nombre"];
$logo= $rs1[0]["logo"];
$smarty->assign("logo", $logo);

$fecha= date("Y-m-d H:i:s");
$smarty->assign("personas1", $rs);
$smarty->assign("fecha", $fecha);
$smarty->assign("direc_css", $direc_css);
$smarty->display("rpt_trabajos1.tpl");
?>
