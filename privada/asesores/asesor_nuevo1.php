<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$cedula_identidad = $_POST["cedula_identidad"];
$registro_universitario =$_POST["registro_universitario"];
var_dump( $_POST);
//$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["id_sistema_web"] = 1;
$reg["nombres"] = $nombres;
$reg["apellidos"] = $apellidos;
$reg["telefono"] = $telefono;
$reg["email"] = $email;
$reg["cedula_identidad"] = $cedula_identidad;
$reg["registro_universitario"] = $registro_universitario;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = '1';
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("asesores", $reg, "INSERT");

if ($rs1){
	header("Location: asesores.php");
	exit();
}else{
	$smarty->assing("mensaje", "ERROR: Los datos no se insertaron!!!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("asesor_nuevo1.tpl");
}
?>