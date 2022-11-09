<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$grado_especialidad = $_REQUEST["grado_especialidad"];

$smarty = new Smarty;
//$db->debug=true;
if($grado_especialidad == "T"){
	$sql = $db->Prepare("SELECT ase.nombres, ase.apellidos, ase.cedula_identidad, ases.grado_especialidad, ases.fecha_adquisicion_especialidad
			FROM asesores ase, asesores_especialidades ases
			WHERE ase.estado <> '0'
			AND ases.estado <> '0'
			AND ase.id_asesor=ases.id_asesor
		");
	$rs = $db->GetAll($sql);
}else{
	$sql = $db->Prepare("SELECT ase.nombres, ase.apellidos, ase.cedula_identidad, ases.grado_especialidad, ases.fecha_adquisicion_especialidad
			FROM asesores ase, asesores_especialidades ases
			WHERE ases.grado_especialidad = ?
			AND ase.estado <> '0'
			AND ases.estado <> '0'
			AND ase.id_asesor=ases.id_asesor
		");
	$rs = $db->GetAll($sql, array($grado_especialidad));
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
$smarty->assign("asesores_especialidades", $rs);
$smarty->assign("fecha", $fecha);
$smarty->assign("direc_css", $direc_css);
$smarty->display("rpt_asesores_grado1.tpl");
?>
