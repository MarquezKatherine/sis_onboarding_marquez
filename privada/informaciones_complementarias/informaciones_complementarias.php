<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");
$direc_css ="../css/colores.css";

$smarty=new Smarty;


$db -> debug = false;
contarRegistros($db, "informaciones_complementarias");

paginacion("informaciones_complementarias.php?", $smarty);

$sql3= $db->Prepare("SELECT *
					FROM informaciones_complementarias
					WHERE estado<>'0'
					AND id_informacion_complementaria >1
					ORDER BY id_informacion_complementaria DESC
					LIMIT ? OFFSET ?
					");
$smarty->assign("informaciones_complementarias", $db->GetAll($sql3, array($nElem, $regIni)));


$smarty->assign("direc_css", $direc_css);
$smarty->display("informaciones_complementarias.tpl");
?>