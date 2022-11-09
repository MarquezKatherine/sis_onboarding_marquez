<?php
session_start(); 
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;


//$db->debug=true;

$sql = $db->Prepare("SELECT *
                    FROM tipo_regimen tip
                    INNER JOIN empresa emp ON tip.id_empresa = emp.id_empresa
                    WHERE tip.estado <> '0'
                    AND emp.estado <> '0'
                    ORDER BY tip.id_tipo_regimen DESC
                    ");
$rs = $db->GetAll($sql);

$smarty->assign("tipo_regimen", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("tipo_regimen.tpl");
?>