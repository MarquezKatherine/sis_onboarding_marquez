<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_trabajo =$_REQUEST["id_trabajo"];

$smarty = new Smarty;

//$db->debug=true;
$sql = $db->Prepare("SELECT *
					FROM personas1 
	                ");	
$rs = $db->GetAll($sql);

$sql1 =$db->Prepare("SELECT pe1.ci, pe1.nombres, pe1.ap, tra.trabajo, tra.salario
					FROM personas1 pe1, trabajos tra
					WHERE tra.id_trabajo = ?
					AND pe1.id_persona1=tra.id_persona1 
					");
$rs1 = $db->GetAll($sql1, array($id_trabajo));

$sql2=$db->Prepare("SELECT *
					FROM sistema_web
					WHERE id_sistema_web = 1
					AND estado <> '0'
					");
$rs2 = $db->GetAll($sql2);
$nombre= $rs2[0]["nombre"];
$logo =$rs2[0]["logo"];
$smarty->assign("logo", $logo);

$smarty->assign("trabajo", $rs1);
$smarty->assign("direc_css", $direc_css);
$smarty->display("ficha_tec_trabajos1.tpl");
?>
