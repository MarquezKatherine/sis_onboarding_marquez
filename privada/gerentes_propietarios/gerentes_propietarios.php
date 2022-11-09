<?php
session_start(); 
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;


//$db->debug=true;

$sql = $db->Prepare("SELECT *
                    FROM empresa em
                    INNER JOIN gerentes_propietarios ger ON em.id_empresa = ger.id_empresa
                    WHERE em.estado <> '0'
                    AND ger.estado <> '0'
                    ORDER BY ger.id_gerente_propietario DESC
                    ");
$rs = $db->GetAll($sql);

$smarty->assign("gerentes_propietarios", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("gerentes_propietarios.tpl");
?>