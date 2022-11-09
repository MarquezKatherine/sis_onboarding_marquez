<?php
/* Smarty version 3.1.36, created on 2022-09-26 20:43:58
  from 'C:\wamp64\www\sis_onboarding\privada\eva_continua\templates\ficha_tec_trabajos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_63320f0e1edd80_11095867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4538d956bea10cd1cc1aabf800c2a56d502aacd' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_onboarding\\privada\\eva_continua\\templates\\ficha_tec_trabajos.tpl',
      1 => 1664225030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63320f0e1edd80_11095867 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
</html>
<html lang = "esp">
	<head>
		<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
		<meta charset="utf-8">
		<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
			function buscar() {
			var d1, d2, d3, contenedor, ajax, url, param;
				contenedor = document.getElementById('trabajo1');
				d1 = document.formu.ci.value;
				d2 = document.formu.trabajo.value;
				d3 = document.formu.salario.value;
				ajax = nuevoAjax();
				url = "ajax_buscar_trabajo1.php"
				param = "ci="+d1+"&trabajo="+d2+"&salario="+d3;
				//alert(param);
				ajax.open("POST", url, true);
				ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
				ajax.onreadystatechange = function() {
					if (ajax.readyState == 4) {
						contenedor.innerHTML = ajax.responseText;
					}
				}
				ajax.send(param);
			}

			function mostrar(id_trabajo) {
			var d1, ventanaCalendario;
			d1 = id_trabajo;
			//alert(id_tarea);
			ventanaCalendario = window.open("ficha_tec_trabajos1.php?id_trabajo=" + d1 , "calendario", "width=600, height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
			}
		<?php echo '</script'; ?>
>
	</head>
	<body>
		<!---------BUSCAODR----------->
		<h1>
				FICHA TECNICA TRABAJOS
			</h1>
		<center>
		<form action="#" method="post" name="formu">
			<table border="1" class="listado">
				<tr>
					<th>
            <b>CEDULA DE IDENTIDAD</b><br />
          <select name="ci" onchange="buscar()">
          <option value="">--Seleccione--</option>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personas1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['ci'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['ci'];?>
</option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
          </th>
					<th>
						<b>TRABAJO</b><br />
						<input type="text" name="trabajo" value="" size="10" onkeyup="buscar()">
					</th>
					<th>
						<b>SALARIO</b><br />
						<input type="text" name="salario" value="" size="10" onkeyup="buscar()">
					</th>
				</tr>
			</table>
		</form>
	</center>
		<!-----------BUSCADOR------------->
		<center>
			<div id="trabajo1">
			</div>
		</center>
	</body>
</html>
<?php }
}
