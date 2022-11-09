<?php
/* Smarty version 3.1.36, created on 2022-09-21 01:02:58
  from 'C:\wamp64\www\sis_onboarding\privada\reportes\templates\rpt_tipos_especializacion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_632a62c2049084_84143180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae1a4cbb00b362e8ae36984988c1c9fb9b019f73' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_onboarding\\privada\\reportes\\templates\\rpt_tipos_especializacion.tpl',
      1 => 1661914048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632a62c2049084_84143180 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="esp">
	<head>
		<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
		<meta charset="UTF-8">
		
		<?php echo '<script'; ?>
 type="text/javascript">
			function validar() {
				especializacion = document.formu.especializacion.value;
				if (document.formu.especializacion.value == "") {
					alert("Por favor seleccione la especializacion");
					document.formu.especializacion.focus();
					return;
				}
				ventanaCalendario = window.open("rpt_tipos_especializacion1.php?especializacion=" + especializacion , "calendario", "width=600, height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
			}
		<?php echo '</script'; ?>
>
		
	</head>
	<body>
		<div class="formu_ingreso_datos">
			<h2> RPT DE ESPECIALIDADES POR EL TIPO DE ESPECIALIDAD</h2>
			<form method="post" name="formu">
			<p>
				<b>*Seleccione la Especializacion</b>
				<select name="especializacion">
					<option value="">--Seleccione--</option>
					<option value="T">Todos</option>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipos_especialidades']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['especializacion'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['especializacion'];?>
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
