<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$nombre = $_REQUEST["nombre"];

$smarty = new Smarty;
//$db->debug=true;
if($nombre == "T"){
	$sql = $db->Prepare("SELECT ho.nombre, ho.ciudad, vue.origen, vue.destino
			FROM hoteles ho, vuelos vue
			WHERE ho.id_hotel=vue.id_hotel
		");
	$rs = $db->GetAll($sql);
}else{
	$sql = $db->Prepare("SELECT  ho.nombre, ho.ciudad, vue.origen, vue.destino
			FROM hoteles ho, vuelos vue
			WHERE ho.nombre = ?
			AND ho.id_hotel=vue.id_hotel
		");
	$rs = $db->GetAll($sql, array($nombre));
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
$smarty->assign("hoteles", $rs);
$smarty->assign("fecha", $fecha);
$smarty->assign("direc_css", $direc_css);
$smarty->display("rpt_vuelo1.tpl");
?>
