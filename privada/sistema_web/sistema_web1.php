<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
$db -> debug = false;
$id_sistema_web= $_REQUEST["id_sistema_web"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$url = $_POST["url"];
$nombre = $_POST["nombre"];

$logo_1= $_POST["logo_1"];
$nombre_log = $_FILES['logo']['name'];

$smarty =new Smarty;

if ((!empty($_FILES['logo'])) and is_uploaded_file($_FILES['logo']['tmp_name'])){
	copy($_FILES['logo']['tmp_name'], 'logos/'.$nombre_log);
	$logo=$_FILES['logo']['name'];
} elseif ($logo_1 == ""){
	$logo = '';
	$nombre_log = '';
} else
$nombre_log = $logo_1;

$reg = array();
$reg["telefono"]= $telefono;
$reg["email"]=$email;
$reg["url"]=$url;
$reg["nombre"]=$nombre;
$reg["logo"]=$nombre_log;
$reg["usuario"]= $_SESSION["sesion_id_usuario"];
$rs1 =$db->AutoExecute("sistema_web", $reg, "UPDATE", "id_sistema_web='".$id_sistema_web."'");

if($rs1){
	$smarty->assign("mensaje", "Los datos se modificaron ACTUALIZAR EL SISTEMA!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("sistema_web1.tpl");
}else{
	$smarty->assign("mensaje", "ERROR: Los Dastos no se Modificaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("sistema_web1.tpl");
}
?>