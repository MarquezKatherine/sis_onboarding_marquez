<?php
/* Smarty version 3.1.36, created on 2022-09-21 01:03:01
  from 'C:\wamp64\www\sis_onboarding\privada\reportes\templates\rpt_asesores_grado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_632a62c51e3479_07793339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19c8af78a371ec22f4da4bd72dcc4b4fa17026d7' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_onboarding\\privada\\reportes\\templates\\rpt_asesores_grado.tpl',
      1 => 1661921245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632a62c51e3479_07793339 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="esp">
	<head>
		<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
		<meta charset="UTF-8">
		
		<?php echo '<script'; ?>
 type="text/javascript">
			function validar() {
					grado_especialidad = document.formu.grado_especialidad.value;
				if (document.formu.grado_especialidad.value == "") {
					alert("Por favor seleccione la especializacion");
					document.formu.grado_especialidad.focus();
					return;
				}
				ventanaCalendario = window.open("rpt_asesores_grado1.php?grado_especialidad=" + grado_especialidad, "calendario", "width=600, height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
			}
		<?php echo '</script'; ?>
>
		
	</head>
	<body>
		<div class="formu_ingreso_datos">
			<h2> RPT DE ASESORES POR EL GRADO DE ESPECIALIDAD</h2>
			<form method="post" name="formu">
			<p>
				<b>*Seleccione el Grado de Especialidad</b>
				<select name="grado_especialidad">
					<option value="">--Seleccione--</option>
					<option value="T">Todos</option>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['asesores_especialidades']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['grado_especialidad'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['grado_especialidad'];?>
</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" onclick="validar();" class="boton">
			</p>
			</form>
		</div>
	</body>
</html><?php }
}
