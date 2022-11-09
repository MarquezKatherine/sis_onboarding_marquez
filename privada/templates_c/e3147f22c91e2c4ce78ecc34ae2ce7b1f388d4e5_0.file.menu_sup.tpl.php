<?php
/* Smarty version 3.1.36, created on 2022-09-28 00:48:03
  from 'C:\wamp64\www\sis_onboarding1\privada\templates\menu_sup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_633399c314f915_69713608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3147f22c91e2c4ce78ecc34ae2ce7b1f388d4e5' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_onboarding1\\privada\\templates\\menu_sup.tpl',
      1 => 1659668734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633399c314f915_69713608 (Smarty_Internal_Template $_smarty_tpl) {
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
