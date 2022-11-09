<?php
/* Smarty version 3.1.36, created on 2022-10-14 02:55:21
  from 'C:\wamp64\www\sis_onboarding1\privada\eva_tercer_bimestre\templates\ficha_tec_vuelo1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6348cf9978f9e7_85153545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fd2a18cf018d9767757d00c36c2d535ea894628' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_onboarding1\\privada\\eva_tercer_bimestre\\templates\\ficha_tec_vuelo1.tpl',
      1 => 1665716113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6348cf9978f9e7_85153545 (Smarty_Internal_Template $_smarty_tpl) {
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
				<h1> FICHA TECNICA DE VUELOS</h1>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nombre']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
						<tr>
							<th align="right">NOMBRES</th><th>:</th>
							<td><input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
" disabled=""> </td>
						</tr>
						<tr>
							<th align="right">ORIGEN</th><th>:</th>
							<td><input type="text" name="origen" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['origen'];?>
" disabled=""> </td>
						</tr>
						<tr>
							<th align="right">DESTINO</th><th>:</th>
							<td><input type="text" name="destino" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['destino'];?>
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
