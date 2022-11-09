<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_tarea=$_REQUEST["id_tarea"];

$smarty = new Smarty;

	$reg=array();
	$reg["estado"] ='0';
	$reg["usuario"]=$_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("tareas", $reg, "UPDATE", "id_tarea='".$id_tarea."'");
	header("Location:tareas.php");
	exit();
?>