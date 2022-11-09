<?php
/* Smarty version 3.1.36, created on 2022-10-09 21:34:23
  from 'C:\wamp64\www\sis_onboarding1\privada\eva_tercer_bimestre\templates\personas1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_63433e5feda878_64591956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a24e7d297641cabea2769f8b081ac74654695064' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_onboarding1\\privada\\eva_tercer_bimestre\\templates\\personas1.tpl',
      1 => 1665271999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63433e5feda878_64591956 (Smarty_Internal_Template $_smarty_tpl) {
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
 type="text/javascript" src="../js/buscar_personas1.js"><?php echo '</script'; ?>
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
          <h1>PERSONAS</h1>          
        </td>
        <td align="right" width="33%">
          <form name="formNuevo" method="post" action="personas1_nuevo.php">
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
            <b>CARGOS</b><br />
          <select name="nombre" onchange="buscar_personas1()">
          <option value="">--Seleccione--</option>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cargos']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
          </th>
          <th>
            <b>NOMBRES</b><br />
            <input type="text" name="nombres" value="" size="10" onkeyup="buscar_personas1()">
          </th>
          <th>
            <b>CI</b><br />
            <input type="text" name="ci" value="" size="10" onkeyup="buscar_personas1()">
          </th>
           <th>
            <b>TELEFONO</b><br />
            <input type="text" name="telef" value="" size="10" onkeyup="buscar_personas1()">
          </th>
        </tr>
      </table>
    </form>
  </center>
<!-------FIN BUSCADOR------>

    <center>
      <div id="personas1">
      <table class="listado">
        <tr>
          <th>NRO</th><th>CARGOS</th><th>NOMBRES</th><th>CI</th><th>TELEFONO</th>
        </tr>
        <?php $_smarty_tpl->_assignInScope('b', "1");?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personas1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
        <tr>
          <td align="center"> <?php echo $_smarty_tpl->tpl_vars['b']->value;?>
 </td>
          <td> <?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</td>
          <td> <?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</td>
          <td> <?php echo $_smarty_tpl->tpl_vars['r']->value['ci'];?>
</td>
          <td> <?php echo $_smarty_tpl->tpl_vars['r']->value['telef'];?>
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
