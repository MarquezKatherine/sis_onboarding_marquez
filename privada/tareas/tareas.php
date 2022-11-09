<?php
session_start(); 
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;


//$db->debug=true;

$sql = $db->Prepare("SELECT *
                    FROM empresa em
                    INNER JOIN tareas tar ON em.id_empresa = tar.id_empresa
                    WHERE em.estado <> '0'
                    AND tar.estado <> '0'
                    ORDER BY tar.id_tarea DESC
                    ");
$rs = $db->GetAll($sql);

$smarty->assign("tareas", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("tareas.tpl");
?>