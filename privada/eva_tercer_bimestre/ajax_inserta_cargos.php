<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
//$db->debug=true;
$nombre1 = $_POST["nombre1"];


$reg =array();
$reg["id_sistema_web"] = 1;
$reg["nombre"] = $nombre1;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = '0';
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("cargos", $reg, "INSERT");

?>