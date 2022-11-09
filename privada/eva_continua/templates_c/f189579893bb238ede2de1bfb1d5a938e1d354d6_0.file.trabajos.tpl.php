<?php
/* Smarty version 3.1.36, created on 2022-09-09 05:57:14
  from 'C:\wamp64\www\sis_onboarding\privada\eva_continua\templates\trabajos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_631ad5ba6798e9_37740025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f189579893bb238ede2de1bfb1d5a938e1d354d6' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_onboarding\\privada\\eva_continua\\templates\\trabajos.tpl',
      1 => 1662703030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_631ad5ba6798e9_37740025 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="../js/buscar_trabajos.js"><?php echo '</script'; ?>
>

  </head>
  <body>
    <table width="100%" border="0">
      <tr>
        <td width="33%">
          <table border="0">
            <tr>
            </tr>            
          </table>
        </td>
        <td align="center" width="33%">
          <h1>TRABAJOS</h1>          
        </td>
        <td align="right" width="33%">
          <form name="formNuevo" method="post" action="trabajos_nuevo.php">
            <a href="javascript:document.formNuevo.submit();">
              Nuevo>>>
            </a>            
          </form>          
        </td>
      </tr>      
    </table>
<!-----INICIO BUSCADOR----->
  <center>
    <form action="#" method="post" name="formu">
      <table border="1" class="listado">
        <tr>
            <th>
            <b>PERSONA</b><br />
          <select name="nombres" onchange="buscar_trabajos()">
          <option value="">--Seleccione--</option>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personas1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
          </th>
          <th>
            <b>TRABAJO</b><br />
            <input type="text" name="trabajo" value="" size="10" onkeyup="buscar_trabajos()">
          </th>
          <th>
            <b>SALARIO</b><br />
            <input type="text" name="salario" value="" size="10" onkeyup="buscar_trabajos()">
          </th>
        </tr>
      </table>
    </form>
  </center>
<!-------FIN BUSCADOR------>

    <center>
      <div id="trabajos">
      <table class="listado">
        <tr>
          <th>NRO</th><th>PERSONA</th><th>TRABAJO</th><th>SALARIO</th>
        </tr>
        <?php $_smarty_tpl->_assignInScope('b', "1");?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trabajos']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
        <tr>
          <td align="center"> <?php echo $_smarty_tpl->tpl_vars['b']->value;?>
 </td>
          <td> <?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</td>
          <td> <?php echo $_smarty_tpl->tpl_vars['r']->value['trabajo'];?>
</td>
          <td> <?php echo $_smarty_tpl->tpl_vars['r']->value['salario'];?>
 </td>
          <?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tr>
      </table>
  </center>
 </body>
</html><?php }
}
