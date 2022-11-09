<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
var_dump($_POST);
$id_empresa=$_POST["id_empresa"];
$fecha_inicio=$_POST["fecha_inicio"];
$fecha_finalizacion=$_POST["fecha_finalizacion"];
$descripcion_actividad= $_POST["descripcion_actividad"];

$smarty=new Smarty;
$db->debug=true;
	$reg=array();
	$reg["id_empresa"] =$id_empresa;
	$reg["fecha_inicio"] =$fecha_inicio;
	$reg["fecha_finalizacion"]=$fecha_finalizacion;
	$reg["descripcion_actividad"]=$descripcion_actividad;
	$reg["fec_insercion"]=date("Y-m-d H:i:s");
	$reg["estado"]='1';
	$reg["usuario"]=$_SESSION["sesion_id_usuario"];
	$rs1=$db->AutoExecute("tareas", $reg, "INSERT");

if ($rs1){
	header("Location: tareas.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insetaron!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("tarea_nuevo1.tpl");
}
?>
