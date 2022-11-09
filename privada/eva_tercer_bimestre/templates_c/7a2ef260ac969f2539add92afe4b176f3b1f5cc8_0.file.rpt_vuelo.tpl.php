<?php
/* Smarty version 3.1.36, created on 2022-10-14 02:36:12
  from 'C:\wamp64\www\sis_onboarding1\privada\eva_tercer_bimestre\templates\rpt_vuelo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6348cb1c28cce0_78349101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a2ef260ac969f2539add92afe4b176f3b1f5cc8' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_onboarding1\\privada\\eva_tercer_bimestre\\templates\\rpt_vuelo.tpl',
      1 => 1664324186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6348cb1c28cce0_78349101 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="esp">
	<head>
		<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
		<meta charset="UTF-8">
		
		<?php echo '<script'; ?>
 type="text/javascript">
			function validar() {
				nombre = document.formu.nombre.value;
				if (document.formu.nombre.value == "") {
					alert("Por favor seleccione el nombre del hotel");
					document.formu.nombre.focus();
					return;
				}
				ventanaCalendario = window.open("rpt_vuelo1.php?nombre=" + nombre, "calendario", "width=600, height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
			}
		<?php echo '</script'; ?>
>
		
	</head>
	<body>
		<div class="formu_ingreso_datos">
			<h2> REPORTE POR VUELOS</h2>
			<form method="post" name="formu">
			<p>
				<b>*Seleccione el nombre</b>
				<select name="nombre">
					<option value="">--Seleccione--</option>
					<option value="T">Todos</option>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hoteles']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
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
