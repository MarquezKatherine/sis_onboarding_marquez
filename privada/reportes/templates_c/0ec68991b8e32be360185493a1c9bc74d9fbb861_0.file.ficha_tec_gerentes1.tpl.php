<?php
/* Smarty version 3.1.36, created on 2022-09-21 01:54:47
  from 'C:\wamp64\www\sis_onboarding\privada\reportes\templates\ficha_tec_gerentes1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_632a6ee715cd59_53242287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ec68991b8e32be360185493a1c9bc74d9fbb861' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_onboarding\\privada\\reportes\\templates\\ficha_tec_gerentes1.tpl',
      1 => 1662574382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632a6ee715cd59_53242287 (Smarty_Internal_Template $_smarty_tpl) {
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
				<h1> FICHA TECNICA DE GERENTES</h1>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gerente']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
						<tr>
							<th align="right">RAZON SOCIAL</th><th>:</th>
							<td><input type="text" name="razon_social" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['razon_social'];?>
" disabled=""> </td>
						</tr>
						<tr>
							<th align="right">NOMBRES DEL GERENTE</th><th>:</th>
							<td><input type="text" name="nombres" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
" disabled=""> </td>
						</tr>
						<tr>
							<th align="right">APELLIDOS DEL GERENTE</th><th>:</th>
							<td><input type="text" name="apellidos" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['apellidos'];?>
" disabled=""> </td>
						</tr>
						<tr>
							<th align="right">TELEFONO INTERNO DE GERENCIA</th><th>:</th>
							<td><input type="text" name="telefono" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['telefono'];?>
" disabled=""> </td>
						</tr>
						<tr>
							<th align="right">NUMERO DE INDETIFICACION TRIBUTARIA</th><th>:</th>
							<td><input type="text" name="identificacion_tributaria" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['identificacion_tributaria'];?>
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
