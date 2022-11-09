<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
/*var_dump($_POST)*/

$id_empresa = $_REQUEST["id_empresa"];
$razon_social = $_POST["razon_social"];
$telefonos = $_POST["telefonos"];
$ubicacion = $_POST["ubicacion"];
$correo_electronico = $_POST["correo_electronico"];
$sitio_web = $_POST["sitio_web"];

//$db->debug=true;
$smarty = new Smarty;

$reg = array();
$reg["razon_social"] = $razon_social;
$reg["telefonos"] = $telefonos;
$reg["ubicacion"] = $ubicacion;
$reg["correo_electronico"] = $correo_electronico;
$reg["sitio_web"] = $sitio_web;
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("empresa", $reg, "UPDATE", "id_empresa='".$id_empresa."'");

if ($rs1) {
	header("Location: empresa.php");
	exit();
} else {
	$smarty->assing("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!!!!!");
	$smarty->assing("direc_css", $direc_css);
	$smarty->assing("id_empresa", $id_empresa);
	$smarty->display("empresa_modificar1.tpl");
}
?>