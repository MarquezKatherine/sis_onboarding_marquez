<?php
/* Smarty version 3.1.36, created on 2022-09-28 00:09:06
  from 'C:\wamp64\www\sis_onboarding1\privada\claves\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_633390a2603ae8_01153681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f73a17c9855247ac9f61d402ba18b9e56928f7a1' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_onboarding1\\privada\\claves\\templates\\index.tpl',
      1 => 1652403286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633390a2603ae8_01153681 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
<?php echo '<script'; ?>
 type="text/javascript">
function refrescar() {
var p = window.parent;
p.location.href='../';
}
<?php echo '</script'; ?>
>

</head>
<body ONLOAD="self.setTimeout('refrescar()',5000);">
<center>
<h1><?php echo $_smarty_tpl->tpl_vars['mensage']->value;?>
</h3>
<h5 style="color:white;"><?php echo $_smarty_tpl->tpl_vars['nom_completo']->value;?>
</h5>
<br>
<h1><?php echo $_smarty_tpl->tpl_vars['mensage1']->value;?>
</h1>
</center>
</body>
</html>

<?php }
}
