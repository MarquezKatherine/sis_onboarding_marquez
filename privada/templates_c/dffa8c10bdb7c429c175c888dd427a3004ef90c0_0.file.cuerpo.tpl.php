<?php
/* Smarty version 3.1.36, created on 2022-09-16 01:12:06
  from 'C:\wamp64\www\sis_onboarding\privada\templates\cuerpo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6323cd66d55222_15193902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dffa8c10bdb7c429c175c888dd427a3004ef90c0' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_onboarding\\privada\\templates\\cuerpo.tpl',
      1 => 1652582152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6323cd66d55222_15193902 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
</head>
<body>
<form action="claves/"method="post" target="cuerpo">
<?php if ($_smarty_tpl->tpl_vars['nick']->value == '') {?>
<div class="formu_ingreso">
<p><h5>Ingresar al Sistema</h5></p>
<p><h2>Inicio de Sesion:</h2> <input type="text" name="nick" size="11" value="" class="limpiar"></p>
<p><h2>Contraseña:</h2><input type="password" name="password" size="11" value="" ></p>
<h3><input type="submit" name="accion" value="Ingresar" size="20" class="boton"></h3>
</div>
<?php }?>
</form>
</body>
</html><?php }
}
