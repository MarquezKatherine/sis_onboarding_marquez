<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");
$direc_css ="../css/colores.css";

$smarty=new Smarty;


$db -> debug = false;
contarRegistros($db, "asesores");

paginacion("asesores.php?", $smarty);

$sql3= $db->Prepare("SELECT *
					FROM asesores
					WHERE estado<>'0'
					AND id_asesor >1
					ORDER BY id_asesor DESC
					LIMIT ? OFFSET ?
					");
$smarty->assign("asesores", $db->GetAll($sql3, array($nElem, $regIni)));


$smarty->assign("direc_css", $direc_css);
$smarty->display("asesores.tpl");
?>