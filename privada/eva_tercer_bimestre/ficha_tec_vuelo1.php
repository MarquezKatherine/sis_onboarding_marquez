<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_vuelo =$_REQUEST["id_vuelo"];

$smarty = new Smarty;

//$db->debug=true;
$sql = $db->Prepare("SELECT *
					FROM vuelos 
	                ");	
$rs = $db->GetAll($sql);

$sql1 =$db->Prepare("SELECT ho.nombre, vue.origen, vue.destino
					FROM hoteles ho, vuelos vue
					WHERE vue.id_vuelo = ?
					AND ho.id_hotel=vue.id_hotel
					");
$rs1 = $db->GetAll($sql1, array($id_vuelo));

$sql2=$db->Prepare("SELECT *
					FROM sistema_web
					WHERE id_sistema_web = 1
					AND estado <> '0'
					");
$rs2 = $db->GetAll($sql2);
$nombre= $rs2[0]["nombre"];
$logo =$rs2[0]["logo"];
$smarty->assign("logo", $logo);

$smarty->assign("nombre", $rs1);
$smarty->assign("direc_css", $direc_css);
$smarty->display("ficha_tec_vuelo1.tpl");
?>
