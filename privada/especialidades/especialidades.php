<?php
session_start(); 
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;


//$db->debug=true;

$sql = $db->Prepare("SELECT *
                    FROM especialidades esp
                    INNER JOIN tipos_especialidades tip ON esp.id_tipo_especialidad= tip.id_tipo_especialidad
                    WHERE esp.estado <> '0'
                    AND tip.estado <> '0'
                    ORDER BY esp.id_especialidad DESC
                    ");
$rs = $db->GetAll($sql);

$smarty->assign("especialidades", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("especialidades.tpl");
?>