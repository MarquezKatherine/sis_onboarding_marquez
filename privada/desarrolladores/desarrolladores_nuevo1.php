<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
var_dump($_POST);
$id_horario=$_POST["id_horario"];
$nombres=$_POST["nombres"];
$apellidos= $_POST["apellidos"];
$email=$_POST["email"];
$telefono= $_POST["telefono"];
$fecha_ingreso= $_POST["fecha_ingreso"];
$genero=$_POST["genero"];


$smarty=new Smarty;
//$db->debug=true;
	$reg=array();
	$reg["id_horario"] =$id_horario;
	$reg["nombres"]=$nombres;
	$reg["apellidos"]=$apellidos;
	$reg["email"]=$email;
	$reg["telefono"]=$telefono;
	$reg["fecha_ingreso"]=$fecha_ingreso;
	$reg["genero"]=$genero;
	$reg["fec_insercion"]=date("Y-m-d H:i:s");
	$reg["estado"]='1';
	$reg["usuario"]=$_SESSION["sesion_id_usuario"];
	$rs1=$db->AutoExecute("desarrolladores", $reg, "INSERT");

if ($rs1){
	header("Location: desarrolladores.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insetaron!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("desarrolladores_nuevo1.tpl");
}
?>