<?php
/* Smarty version 3.1.36, created on 2022-09-26 21:07:05
  from 'C:\wamp64\www\sis_onboarding\privada\eva_continua\templates\ficha_tec_trabajos1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_63321479cc71f0_57144523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea880544a2c4151ca83f4b4bd9044ceaa198a8d9' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_onboarding\\privada\\eva_continua\\templates\\ficha_tec_trabajos1.tpl',
      1 => 1664226415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63321479cc71f0_57144523 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<?php echo '<script'; ?>
 type="text/javascript">
		var ventanaCalendario=false
		function imprimir(){
			if(confirm(' Desea imprimir ?')){
				window.print();
			}
		}
	<?php echo '</script'; ?>
>
</head>
<body style='cursor:pointer;cursor: hand' onclick="imprimir();">
	<table width="100%" border="0">
		<tr>
			<td>
				<img src="../sistema_web/logos/<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="70%">
			</td>
			<td align="center" width="80%">
				<h1> FICHA TECNICA DE TRABAJOS</h1>
			</td>
		</tr>
	</table>
	<br>
	<center>
		<table border="1" cellpadding="0">
			<tr>
				<td>
					<table border="0">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trabajo']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
						<tr>
							<th align="right">CI</th><th>:</th>
							<td><input type="text" name="ci" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['ci'];?>
" disabled=""> </td>
						</tr>
						<tr>
							<th align="right">NOMBRES</th><th>:</th>
							<td><input type="text" name="nombres" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
" disabled=""> </td>
						</tr>
						<tr>
							<th align="right">APELLIDO PATERNO</th><th>:</th>
							<td><input type="text" name="ap" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
" disabled=""> </td>
						</tr>
						<tr>
							<th align="right">TRABAJO</th><th>:</th>
							<td><input type="text" name="trabajo" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['trabajo'];?>
" disabled=""> </td>
						</tr>
						<tr>
							<th align="right">SALARIO</th><th>:</th>
							<td><input type="text" name="salario" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['salario'];?>
" disabled=""> </td>
						</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</table>
				</td>
			</tr>
		</table>
	</center>
</body>
</html>
<?php }
}
