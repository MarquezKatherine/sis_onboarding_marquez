<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_informacion_complementaria=$_REQUEST["id_informacion_complementaria"];

$smarty = new Smarty;

	$reg=array();
	$reg["estado"] ='0';
	$reg["usuario"]=$_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("informaciones_complementarias", $reg, "UPDATE", "id_informacion_complementaria='".$id_informacion_complementaria."'");
	header("Location:informaciones_complementarias.php");
	exit();
?>
