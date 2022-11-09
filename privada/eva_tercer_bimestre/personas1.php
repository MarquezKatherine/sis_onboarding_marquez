<?php
session_start(); 
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;


//$db->debug=true;
$sql = $db->Prepare("SELECT *
					FROM cargos 
	                ");	
$rs = $db->GetAll($sql);

$sql1 = $db->Prepare("SELECT car.nombre, per.nombres, per.ci, per.telef
                    FROM cargos car
                    INNER JOIN personas1 per ON car.pk_id = per.fk_cargo
                    ");
$rs1 = $db->GetAll($sql1);

$smarty->assign("cargos", $rs); 
$smarty->assign("personas1", $rs1); 
$smarty->assign("direc_css", $direc_css);
$smarty->display("personas1.tpl");
?>