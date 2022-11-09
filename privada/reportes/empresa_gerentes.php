<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

//$db->debug=true;

/*$sql = $db->Prepare("SELECT *
					 FROM empresa p, gerentes_propietarios u
					 WHERE p.id_empresa = u.id_empresa
					 AND p.estado <> '0'
					 AND u.estado <> '0'
					 ORDER BY (u.id_empresa) DESC
					 ");*/

$sql = $db->Prepare("SELECT *
					FROM vista_empresa_gerentes");
$rs = $db->GetAll($sql);

$smarty->assign("empresa_gerentes", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("empresa_gerentes.tpl");
?>