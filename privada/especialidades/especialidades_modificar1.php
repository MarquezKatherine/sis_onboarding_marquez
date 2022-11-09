<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

var_dump($_POST);

$id_tipo_especialidad=$_POST["id_tipo_especialidad"];
$id_especialidad=$_POST["id_especialidad"];
$experiencia=$_POST["experiencia"];
$lugar_especializacion= $_POST["lugar_especializacion"];
$especificacion= $_POST["especificacion"];
$curriculum=$_POST["curriculum"];
$datos_complementarios=$_POST["datos_complementarios"];

$smarty=new Smarty;

$reg=array();
$reg["id_tipo_especialidad"] =$id_tipo_especialidad;
$reg["experiencia"]=$experiencia;
$reg["lugar_especializacion"]=$lugar_especializacion;
$reg["especificacion"]=$especificacion;
$reg["curriculum"]=$curriculum;
$reg["datos_complementarios"]=$datos_complementarios;
$reg["usuario"]=$_SESSION["sesion_id_usuario"];
$rs1=$db->AutoExecute("especialidades", $reg, "UPDATE", "id_especialidad='".$id_especialidad."'");

if ($rs1){
	header("Location: especialidades.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("id_especialidad", $id_especialidad);
	$smarty->display("especialidades_modificar1.tpl");
}
?>

