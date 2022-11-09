<?php 
session_start();
require_once("../../smarty/libs//Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty=new Smarty;
 //$db->debug=true;
$sql = $db->Prepare("SELECT pk_id AS fk_cargo, nombre
					FROM cargos
					");
$rs = $db->GetAll($sql);

$smarty->assign("cargos", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("personas1_nuevo.tpl");
?>		