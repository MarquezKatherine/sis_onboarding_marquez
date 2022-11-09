<?php
session_start(); 
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;


//$db->debug=true;
$sql = $db->Prepare("SELECT *
					FROM personas1 
	                ");	
$rs = $db->GetAll($sql);

$sql1 = $db->Prepare("SELECT *
                    FROM personas1 per
                    INNER JOIN trabajos tra ON per.id_persona1 = tra.id_persona1
                    ORDER BY tra.id_trabajo DESC
                    ");
$rs1 = $db->GetAll($sql1);

$smarty->assign("personas1", $rs); 
$smarty->assign("trabajos", $rs1); 
$smarty->assign("direc_css", $direc_css);
$smarty->display("trabajos.tpl");
?>