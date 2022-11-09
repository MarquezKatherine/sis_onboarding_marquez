<?php
/* Smarty version 3.1.36, created on 2022-09-28 00:48:03
  from 'C:\wamp64\www\sis_onboarding1\privada\templates\cuerpo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_633399c30bc3f5_60651251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0eca2439c39835eeb82c488e6e209fb93b30b39' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_onboarding1\\privada\\templates\\cuerpo.tpl',
      1 => 1652582152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633399c30bc3f5_60651251 (Smarty_Internal_Template $_smarty_tpl) {
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
