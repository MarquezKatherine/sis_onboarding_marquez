<?php
/* Smarty version 3.1.36, created on 2022-10-14 02:36:16
  from 'C:\wamp64\www\sis_onboarding1\privada\eva_tercer_bimestre\templates\rpt_vuelo1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6348cb2056c1d1_40564235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57562b8a20e85927f54352395ce19f38d500430e' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_onboarding1\\privada\\eva_tercer_bimestre\\templates\\rpt_vuelo1.tpl',
      1 => 1664324190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6348cb2056c1d1_40564235 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<?php echo '<script'; ?>
 type="text/javascript">
		var ventanaCalendario=false
			function imprimir() {
			if (confirm(' Desea Imprimir ?')) {
				window.print();
			 }
			}
	<?php echo '</script'; ?>
>
</head>
<body style='cursor:pointer;cursor:hand' onclick='imprimir();'>
	<table width="100%" border="0">
		<tr>
			<td>
				<img src="../sistema_web/logos/<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="70%">
			</td>
			<td align="center" width="80%">
				<h1> REPORTE DE ACUERDO AL NOMBRE DEL HOTEL </h1>
			</td>
		</tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<th>NRO</th><th>NOMBRE</th><th>CIUDAD</th><th>ORIGEN</th><th>DESTINO</th>
			</tr>
			<?php $_smarty_tpl->_assignInScope('b', "1");?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hoteles']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['ciudad'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['origen'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['destino'];?>
</td>
				<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tr>
		</table>
		<br><br>
		<b>Fecha:</b> <?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>

	</center>
</body>
</html>
<?php }
}
