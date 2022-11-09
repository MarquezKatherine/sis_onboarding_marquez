<?php 
session_start();
require_once("../../smarty/libs//Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");


$id_horario= $_REQUEST["id_horario"];
$id_desarrollador = $_REQUEST["id_desarrollador"];


$smarty=new Smarty;



$sql = $db->Prepare("SELECT *
					FROM desarrolladores
					WHERE id_desarrollador =?
					");

$rs = $db->GetAll($sql, array($id_desarrollador));

$sql1 = $db->Prepare("SELECT * 
					FROM horarios
					WHERE id_horario = ?
					AND estado <> '0'
				");
$rs1 = $db->GetAll($sql1, array($id_horario));


$sql2 = $db->Prepare("SELECT * 
					FROM horarios
					WHERE id_horario <> ?
					AND estado <> '0'
				");
$rs2 = $db->GetAll($sql2, array($id_horario));

$smarty->assign("desarrolladores", $rs);
$smarty->assign("persona", $rs1);
$smarty->assign("horarios", $rs2);

$smarty->assign("direc_css", $direc_css);
$smarty->display("desarrolladores_modificar.tpl");
?>			