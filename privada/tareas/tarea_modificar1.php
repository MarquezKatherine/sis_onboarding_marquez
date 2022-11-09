<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

var_dump($_POST);

$id_empresa=$_POST["id_empresa"];
$id_tarea=$_POST["id_tarea"];
$fecha_inicio=$_POST["fecha_inicio"];
$fecha_finalizacion= $_POST["fecha_finalizacion"];
$descripcion_actividad= $_POST["descripcion_actividad"];

$smarty=new Smarty;

$reg=array();
$reg["id_empresa"] =$id_empresa;
$reg["fecha_inicio"]=$fecha_inicio;
$reg["fecha_finalizacion"]=$fecha_finalizacion;
$reg["descripcion_actividad"]=$descripcion_actividad;
$reg["usuario"]=$_SESSION["sesion_id_usuario"];
$rs1=$db->AutoExecute("tareas", $reg, "UPDATE", "id_tarea='".$id_tarea."'");

if ($rs1){
	header("Location: tareas.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("id_tarea", $id_tarea);
	$smarty->display("tarea_modificar1.tpl");
}
?>

