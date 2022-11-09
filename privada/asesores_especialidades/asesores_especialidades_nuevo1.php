<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
var_dump($_POST);
$id_especialidad=$_POST["id_especialidad"];
$id_asesor=$_POST["id_asesor"];
$fecha_adquisicion_especialidad=$_POST["fecha_adquisicion_especialidad"];
$grado_especialidad=$_POST["grado_especialidad"];
$tipo_acreditacion= $_POST["tipo_acreditacion"];


$smarty=new Smarty;
//$db->debug=true;
	$reg=array();
	$reg["id_especialidad"]=$id_especialidad;
	$reg["id_asesor"]=$id_asesor;
	$reg["fecha_adquisicion_especialidad"] =$fecha_adquisicion_especialidad;
	$reg["grado_especialidad"]=$grado_especialidad;
	$reg["tipo_acreditacion"]=$tipo_acreditacion;
	$reg["fec_insercion"]=date("Y-m-d H:i:s");
	$reg["estado"]='1';
	$reg["usuario"]=$_SESSION["sesion_id_usuario"];
	$rs1=$db->AutoExecute("asesores_especialidades", $reg, "INSERT");

if ($rs1){
	header("Location: asesores_especialidades.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insetaron!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("asesores_especialidades_nuevo1.tpl");
}
?>