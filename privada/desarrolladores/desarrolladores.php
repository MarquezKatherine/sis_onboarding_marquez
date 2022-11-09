<?php
session_start(); 
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;


//$db->debug=true;

$sql = $db->Prepare("SELECT *
                    FROM horarios ho
                    INNER JOIN desarrolladores des ON ho.id_horario = des.id_horario
                    WHERE ho.estado <> '0'
                    AND des.estado <> '0'
                    ORDER BY des.id_desarrollador DESC
                    ");
$rs = $db->GetAll($sql);

$smarty->assign("desarrolladores", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("desarrolladores.tpl");
?>