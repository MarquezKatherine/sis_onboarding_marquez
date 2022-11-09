<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
/*var_dump($_POST)*/

$id_asesor = $_REQUEST["id_asesor"];
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$cedula_identidad = $_POST["cedula_identidad"];
$registro_universitario = $_POST["registro_universitario"];

$db->debug=true;
$smarty = new Smarty;

$reg = array();
$reg["nombres"] = $nombres;
$reg["apellidos"] = $apellidos;
$reg["telefono"] = $telefono;
$reg["email"] = $email;
$reg["cedula_identidad"] = $cedula_identidad;
$reg["registro_universitario"] = $registro_universitario;
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("asesores", $reg, "UPDATE", "id_asesor='".$id_asesor."'");

if ($rs1) {
	header("Location: asesores.php");
	exit();
} else {
	$smarty->assing("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!!!!!");
	$smarty->assing("direc_css", $direc_css);
	$smarty->assing("id_asesor", $id_asesor);
	$smarty->display("asesor_modificar1.tpl");
}
?>