<?php
session_start(); 
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;


//$db->debug=true;

$sql = $db->Prepare("SELECT *
                    FROM propietario_sistema pro,  sistema_web sis
                    WHERE pro.id_sistema_web= sis.id_sistema_web
                    AND pro.estado <> '0'
                    AND sis.estado <> '0'
                    ORDER BY pro.id_sistema_web DESC
                    ");
$rs = $db->GetAll($sql);

$smarty->assign("propietario_sistema", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("propietario_sistema.tpl");
?>