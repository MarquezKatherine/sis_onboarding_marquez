<?php
session_start(); 
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;


//$db->debug=true;

$sql = $db->Prepare("SELECT *
                    FROM informes inf
                    INNER JOIN egresos egr ON inf.id_egreso = egr.id_egreso
                    INNER JOIN ingresos ing ON inf.id_ingreso = ing.id_ingreso
                    WHERE egr.estado <> '0'
                    AND ing.estado <> '0'
                    AND inf.estado<> '0'
                    ORDER BY inf.id_informe DESC
                    ");
$rs = $db->GetAll($sql);

$smarty->assign("informes", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("informes.tpl");
?>