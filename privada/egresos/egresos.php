<?php
session_start(); 
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;


//$db->debug=true;

$sql = $db->Prepare("SELECT *
                    FROM egresos egr
                    INNER JOIN tipos_egresos tip ON tip.id_tipo_egreso = egr.id_tipo_egreso
                    INNER JOIN asesores_especialidades as_e ON as_e.id_asesor_especialidad=egr.id_asesor_especialidad
                    WHERE egr.estado <> '0'
                    AND tip.estado <> '0'
                    AND as_e.estado<> '0'
                    ORDER BY egr.id_egreso DESC
                    ");
$rs = $db->GetAll($sql);

$smarty->assign("egresos", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("egresos.tpl");
?>