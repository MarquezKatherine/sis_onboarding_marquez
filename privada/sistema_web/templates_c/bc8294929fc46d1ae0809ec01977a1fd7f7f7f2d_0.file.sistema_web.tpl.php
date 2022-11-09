<?php
/* Smarty version 3.1.36, created on 2022-09-21 02:12:12
  from 'C:\wamp64\www\sis_onboarding\privada\sistema_web\templates\sistema_web.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_632a72fc99a1a9_07014733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc8294929fc46d1ae0809ec01977a1fd7f7f7f2d' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_onboarding\\privada\\sistema_web\\templates\\sistema_web.tpl',
      1 => 1663293379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632a72fc99a1a9_07014733 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_sistema_web.js"><?php echo '</script'; ?>
>
</head>
<body>
<br>
		<center>
			<h1> SISTEMA WEB </h1>
		<form action="sistema_web1.php" method="post" name="formu" enctype="multipart/form-data">
			<table border="1">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sistema_web']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
				<tr>
					<th>Logo(*)</th><th>:</th>
					<td>
						<input type="hidden" name="MAX_FILE_SIZE" value="1000000" >
						<input type="file" name="logo">
						<input type="hidden" name="logo_1" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['logo'];?>
">
						<br><b><?php echo $_smarty_tpl->tpl_vars['r']->value['logo'];?>
</b>
					</td>
				</tr>
				<tr>
					<th align="right">Telefono</th><th>:</th>
					<td><input type="text" name="telefono" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['telefono'];?>
"> </td>
				</tr>
				<tr>
					<th align="right">Email</th><th>:</th>
					<td><input type="text" name="email" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['email'];?>
"> </td>
				</tr>
				<tr>
					<th align="right">Url</th><th>:</th>
					<td><input type="text" name="url" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['url'];?>
"> </td>
				</tr>
				<tr>
					<th>Nombre (*)</th><th>:</th>
					<td><input type="text" name="nombre" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
"> </td>
				</tr>
				<tr>
					<td align="center" colspan="3">
						<input type="hidden" name="accion" value="">
						<input type="hidden" name="id_sistema_web" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_sistema_web'];?>
">
						<input type="button" value="Aceptar" onclick="validar();">
					</td>
				</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</table>
			<table>
				<tr>
					<td colspan="3" align="center"><b>(*)Campos Obligatorios</b></td>
				</tr>
			</table>
		</form>
		</center>
</body>
</html><?php }
}
