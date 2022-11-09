<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_gerente_propietario=$_REQUEST["id_gerente_propietario"];

$smarty = new Smarty;

	$reg=array();
	$reg["estado"] ='0';
	$reg["usuario"]=$_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("gerentes_propietarios", $reg, "UPDATE", "id_gerente_propietario='".$id_gerente_propietario."'");
	header("Location:gerentes_propietarios.php");
	exit();
?>
