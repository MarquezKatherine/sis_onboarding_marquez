<?php 
require_once("adodb/adodb.inc.php");

$direc_css= "../css/colores.css";

$conServidor ="localhost";
$conUsuario ="root";
$conClave="";
$conBasededatos="bd_onboarding";

$db= ADONewConnection("mysqli");
$db -> debug = false; //para consultas true
$conex= $db->Connect($conServidor, $conUsuario, $conClave, $conBasededatos);
$db->Execute("SET NAMES 'utf8'");
?>