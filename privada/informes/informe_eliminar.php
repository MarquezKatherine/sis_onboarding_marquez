<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_informe=$_REQUEST["id_informe"];

$smarty = new Smarty;

	$reg=array();
	$reg["estado"] ='0';
	$reg["usuario"]=$_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("informes", $reg, "UPDATE", "id_informe='".$id_informe."'");
	header("Location:informes.php");
	exit();
?>