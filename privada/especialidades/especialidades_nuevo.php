<?php 
session_start();
require_once("../../smarty/libs//Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty=new Smarty;
 //$db->debug=true;
$sql = $db->Prepare("SELECT *
					FROM tipos_especialidades p
					WHERE p.estado<> '0'
					ORDER BY p.id_tipo_especialidad DESC
					");
$rs = $db->GetAll($sql);

$smarty->assign("tipos_especialidades", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("especialidades_nuevo.tpl");
?>		