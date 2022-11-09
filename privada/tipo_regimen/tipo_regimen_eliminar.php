<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_tipo_regimen=$_REQUEST["id_tipo_regimen"];

$smarty = new Smarty;

	$reg=array();
	$reg["estado"] ='0';
	$reg["usuario"]=$_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("tipo_regimen", $reg, "UPDATE", "id_tipo_regimen='".$id_tipo_regimen."'");
	header("Location:tipo_regimen.php");
	exit();
?>