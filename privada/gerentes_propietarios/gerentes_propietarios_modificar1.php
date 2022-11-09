<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

var_dump($_POST);

$id_empresa=$_POST["id_empresa"];
$id_gerente_propietario=$_POST["id_gerente_propietario"];
$nombres=$_POST["nombres"];
$apellidos= $_POST["apellidos"];
$telefono= $_POST["telefono"];
$identificacion_tributaria=$_POST["identificacion_tributaria"];


$smarty=new Smarty;

$reg=array();
$reg["id_empresa"] =$id_empresa;
$reg["nombres"]=$nombres;
$reg["apellidos"]=$apellidos;
$reg["telefono"]=$telefono;
$reg["identificacion_tributaria"]=$identificacion_tributaria;
$reg["usuario"]=$_SESSION["sesion_id_usuario"];
$rs1=$db->AutoExecute("gerentes_propietarios", $reg, "UPDATE", "id_gerente_propietario='".$id_gerente_propietario."'");

if ($rs1){
	header("Location: gerentes_propietarios.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("id_gerente_propietario", $id_gerente_propietario);
	$smarty->display("gerentes_propietarios_modificar1.tpl");
}
?>

