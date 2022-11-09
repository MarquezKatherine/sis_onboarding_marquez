<?php
session_start(); 
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;


//$db->debug=true;

$sql = $db->Prepare("SELECT *
                    FROM asesores ase, especialidades esp, asesores_especialidades as_e
                    WHERE  as_e.id_especialidad = esp.id_especialidad
                    AND as_e.id_asesor=ase.id_asesor
                    AND ase.estado <> '0'
                    AND esp.estado <> '0'
                    AND as_e.estado<> '0'
                    ORDER BY as_e.id_asesor_especialidad DESC
                    ");
$rs = $db->GetAll($sql);

$smarty->assign("asesores_especialidades", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("asesores_especialidades.tpl");
?>