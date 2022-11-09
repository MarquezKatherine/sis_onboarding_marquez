<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
//$db->debug=true;
$ci1 = $_POST["ci1"];
$nombres1 = $_POST["nombres1"];
$ap1 = $_POST["ap1"];
$am1 = $_POST["am1"];
$direccion1 = $_POST["direccion1"];
$fec_nac1 = $_POST["fec_nac1"];


$reg =array();
$reg["id_sistema_web"] = 1;
$reg["ci"] = $ci1;
$reg["nombres"] = $nombres1;
$reg["ap"] = $ap1;
$reg["am"] = $am1;
$reg["direccion"] = $direccion1;
$reg["fec_nac"] = $fec_nac1;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = '0';
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("personas1", $reg, "INSERT");

?>