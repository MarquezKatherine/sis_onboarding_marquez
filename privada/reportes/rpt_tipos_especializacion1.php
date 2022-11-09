<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$especializacion = $_REQUEST["especializacion"];

$smarty = new Smarty;
//$db->debug=true;
if($especializacion == "T"){
	$sql = $db->Prepare("SELECT tip.especializacion, esp.lugar_especializacion, esp.experiencia, esp.especificacion
			FROM tipos_especialidades tip, especialidades esp
			WHERE tip.estado <> '0'
			AND esp.estado <> '0'
			AND tip.id_tipo_especialidad=esp.id_tipo_especialidad
		");
	$rs = $db->GetAll($sql);
}else{
	$sql = $db->Prepare("SELECT tip.especializacion, esp.lugar_especializacion, esp.experiencia, esp.especificacion
			FROM tipos_especialidades tip, especialidades esp
			WHERE tip.especializacion = ?
			AND tip.estado <> '0'
			AND esp.estado <> '0'
			AND tip.id_tipo_especialidad=esp.id_tipo_especialidad
		");
	$rs = $db->GetAll($sql, array($especializacion));
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
$smarty->assign("tipos_especializacion", $rs);
$smarty->assign("fecha", $fecha);
$smarty->assign("direc_css", $direc_css);
$smarty->display("rpt_tipos_especializacion1.tpl");
?>
