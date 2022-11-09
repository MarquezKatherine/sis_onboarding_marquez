<?php
/* Smarty version 3.1.36, created on 2022-09-27 23:39:00
  from 'C:\wamp64\www\sis_onboarding\privada\eva_continua\templates\rpt_trabajos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_63338994151279_73179980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82324bb89a653b655d29d082a88e4fd5e60593d3' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_onboarding\\privada\\eva_continua\\templates\\rpt_trabajos.tpl',
      1 => 1664314041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63338994151279_73179980 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="esp">
	<head>
		<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
		<meta charset="UTF-8">
		
		<?php echo '<script'; ?>
 type="text/javascript">
			function validar() {
				ci = document.formu.ci.value;
				if (document.formu.ci.value == "") {
					alert("Por favor seleccione la cedula de identidad");
					document.formu.ci.focus();
					return;
				}
				ventanaCalendario = window.open("rpt_trabajos1.php?ci=" + ci, "calendario", "width=600, height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
			}
		<?php echo '</script'; ?>
>
		
	</head>
	<body>
		<div class="formu_ingreso_datos">
			<h2> REPORTE DE TRABAJOS POR LA CEDULA DE IDENTIDAD</h2>
			<form method="post" name="formu">
			<p>
				<b>*Seleccione la cedula</b>
				<select name="ci">
					<option value="">--Seleccione--</option>
					<option value="T">Todos</option>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personas1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['ci'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['ci'];?>
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
</html>

<?php }
}
