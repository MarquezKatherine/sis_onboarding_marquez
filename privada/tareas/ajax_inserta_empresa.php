<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
$db->debug=true;
$razon_social1 = $_POST["razon_social1"];
$telefonos1 = $_POST["telefonos1"];
$ubicacion1 = $_POST["ubicacion1"];
$correo_electronico1 = $_POST["correo_electronico1"];
$sitio_web1 = $_POST["sitio_web1"];

$reg =array();
$reg["id_sistema_web"] = 1;
$reg["razon_social"] = $razon_social1;
$reg["telefonos"] = $telefonos1;
$reg["ubicacion"] = $ubicacion1;
$reg["correo_electronico"] = $correo_electronico1;
$reg["sitio_web"] = $sitio_web1;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = 'A';
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("empresa", $reg, "INSERT");

?>