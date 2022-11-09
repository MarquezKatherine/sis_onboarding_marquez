<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");
$direc_css ="../css/colores.css";

$smarty=new Smarty;


$db -> debug = false;
contarRegistros($db, "ingresos");

paginacion("tipos_egresos.php?", $smarty);

$sql3= $db->Prepare("SELECT *
					FROM tipos_egresos
					WHERE estado<>'0'
					AND id_tipo_egreso >1
					ORDER BY id_tipo_egreso DESC
					LIMIT ? OFFSET ?
					");
$smarty->assign("tipos_egresos", $db->GetAll($sql3, array($nElem, $regIni)));


$smarty->assign("direc_css", $direc_css);
$smarty->display("tipos_egresos.tpl");
?>