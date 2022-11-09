<?php
session_start();

require_once("../smarty/libs/Smarty.class.php");
require_once("../conexion.php");

$smarty = new Smarty;

if(isset($_SESSION["sesion_id_usuario"])){
	$sesion =array ("id_usuario" => $_SESSION["sesion_id_usuario"],
					"usuario" => $_SESSION["sesion_usuario"],
					"id_rol" => $_SESSION["sesion_id_rol"],
					"rol" => $_SESSION["sesion_rol"],
				);
	$login = "NO";
}else{
	$sesion =array ("id_usuario"=>"_ _ _ _",
					"usuario" => "_ _ _ _",
					"id_rol" => "_ _ _ _",
					"rol" => "_ _ _",
				);
	$login = "SI";
}


	$sql1 = $db-> Prepare ("SELECT *
							FROM sistema_web
							WHERE id_sistema_web = 1
							AND estado <> '0'
							");
	$rs1 = $db->GetAll($sql1);
	$nombre = $rs1[0]["nombre"];
	$logo = $rs1[0]["logo"];
	$smarty->assign("nombre", $nombre);
	$smarty->assign("logo", $logo);


	$smarty->assign("sesion",$sesion);
	$smarty->assign("login", $login);
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("menu_sup.tpl");
?>