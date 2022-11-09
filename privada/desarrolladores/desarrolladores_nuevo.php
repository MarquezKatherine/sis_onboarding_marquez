<?php 
session_start();
require_once("../../smarty/libs//Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty=new Smarty;
 //$db->debug=true;
$sql = $db->Prepare("SELECT *
					FROM horarios p
					WHERE p.estado<> '0'
					ORDER BY p.id_horario DESC
					");
$rs = $db->GetAll($sql);

$smarty->assign("horarios", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("desarrolladores_nuevo.tpl");
?>	