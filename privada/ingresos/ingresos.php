<?php
session_start(); 
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;


//$db->debug=true;

$sql = $db->Prepare("SELECT *
                    FROM ingresos igr
                    INNER JOIN tipos_ingresos tip ON tip.id_tipo_ingreso = igr.id_tipo_ingreso
                    INNER JOIN asesores_especialidades as_e ON as_e.id_asesor_especialidad=igr.id_asesor_especialidad
                    WHERE igr.estado <> '0'
                    AND tip.estado <> '0'
                    AND as_e.estado<> '0'
                    ORDER BY igr.id_ingreso DESC
                    ");
$rs = $db->GetAll($sql);

$smarty->assign("ingresos", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("ingresos.tpl");
?>