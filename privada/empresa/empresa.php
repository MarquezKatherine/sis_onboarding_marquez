<?php
session_start(); 
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;


//$db->debug=true;

$sql = $db->Prepare("SELECT *
                    FROM empresa emp,  sistema_web sis
                    WHERE emp.id_sistema_web= sis.id_sistema_web
                    AND emp.estado <> '0'
                    AND sis.estado <> '0'
                    ORDER BY emp.id_empresa DESC
                    ");
$rs = $db->GetAll($sql);

$smarty->assign("empresa", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("empresa.tpl");
?>