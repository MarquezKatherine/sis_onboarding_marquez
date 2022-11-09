<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
/*var_dump($_POST)*/

$id_tipo_especialidad = $_REQUEST["id_tipo_especialidad"];
$especializacion = $_POST["especializacion"];


$db->debug=true;
$smarty = new Smarty;

$reg = array();
$reg["especializacion"] = $especializacion;
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("tipos_especialidades", $reg, "UPDATE", "id_tipo_especialidad='".$id_tipo_especialidad."'");

if ($rs1) {
	header("Location: tipos_especialidades.php");
	exit();
} else {
	$smarty->assing("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!!!!!");
	$smarty->assing("direc_css", $direc_css);
	$smarty->assing("id_tipo_especialidad", $id_tipo_especialidad);
	$smarty->display("tipos_especialidades_modificar1.tpl");
}
?>