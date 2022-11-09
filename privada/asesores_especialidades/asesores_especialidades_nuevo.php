<?php 
session_start();
require_once("../../smarty/libs//Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty=new Smarty;
// $db->debug=true;
$sql1 = $db->Prepare("SELECT *
					FROM asesores 
					WHERE estado<> '0'
					ORDER BY id_asesor DESC
					");
$rs1 = $db->GetAll($sql1);

$sql2 = $db->Prepare("SELECT *
					FROM especialidades 
					WHERE estado<> '0'
					ORDER BY id_especialidad DESC
					");
$rs2 = $db->GetAll($sql2);

$smarty->assign("asesores", $rs1);
$smarty->assign("especialidades", $rs2);

$smarty->assign("direc_css", $direc_css);
$smarty->display("asesores_especialidades_nuevo.tpl");
?>		