<?php
/* Smarty version 3.1.36, created on 2022-09-27 23:39:03
  from 'C:\wamp64\www\sis_onboarding\privada\eva_continua\templates\rpt_trabajos1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_63338997b73625_02142987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8ad0f83854e9f7f338222456fe5d0acbfd10946' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_onboarding\\privada\\eva_continua\\templates\\rpt_trabajos1.tpl',
      1 => 1664314659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63338997b73625_02142987 (Smarty_Internal_Template $_smarty_tpl) {
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
				<h1> CI DE ACUERDO A SU TRABAJO </h1>
			</td>
		</tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<th>NRO</th><th>CI</th><th>NOMBRES</th><th>AP</th><th>TRABAJO</th><th>SALARIO</th>
			</tr>
			<?php $_smarty_tpl->_assignInScope('b', "1");?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personas1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['ci'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['trabajo'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['salario'];?>
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
