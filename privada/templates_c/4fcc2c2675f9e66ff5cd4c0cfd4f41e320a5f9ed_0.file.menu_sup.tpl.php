<?php
/* Smarty version 3.1.36, created on 2022-09-16 01:12:06
  from 'C:\wamp64\www\sis_onboarding\privada\templates\menu_sup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6323cd66bc6f95_74730123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fcc2c2675f9e66ff5cd4c0cfd4f41e320a5f9ed' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_onboarding\\privada\\templates\\menu_sup.tpl',
      1 => 1659668734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6323cd66bc6f95_74730123 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
">	
</head>
<body>
	<div class="cabecera">
		<img src="sistema_web/logos/<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="10%">
		<div class="titulo">
			SISTEMA CONTABLE "<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
"
		</div>
		<div class="usuario">
			Usuario:<b><?php echo $_smarty_tpl->tpl_vars['sesion']->value['usuario'];?>
</b>
			Rol:<b><?php echo $_smarty_tpl->tpl_vars['sesion']->value['rol'];?>
</b>
		</div>
	</div>
</body>
</html><?php }
}
