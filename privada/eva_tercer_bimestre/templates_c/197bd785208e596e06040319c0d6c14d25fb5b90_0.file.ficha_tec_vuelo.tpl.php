<?php
/* Smarty version 3.1.36, created on 2022-10-10 02:24:58
  from 'C:\wamp64\www\sis_onboarding1\privada\eva_tercer_bimestre\templates\ficha_tec_vuelo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6343827a202df3_56723755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '197bd785208e596e06040319c0d6c14d25fb5b90' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_onboarding1\\privada\\eva_tercer_bimestre\\templates\\ficha_tec_vuelo.tpl',
      1 => 1664326932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6343827a202df3_56723755 (Smarty_Internal_Template $_smarty_tpl) {
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
				contenedor = document.getElementById('vuelo1');
				d1 = document.formu.nombre.value;
				d2 = document.formu.origen.value;
				d3 = document.formu.destino.value;
				ajax = nuevoAjax();
				url = "ajax_buscar_vuelo1.php"
				param = "nombre="+d1+"&origen="+d2+"&destino="+d3;
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

			function mostrar(id_vuelo) {
			var d1, ventanaCalendario;
			d1 = id_vuelo;
			//alert(id_tarea);
			ventanaCalendario = window.open("ficha_tec_vuelo1.php?id_vuelo=" + d1 , "calendario", "width=600, height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
			}
		<?php echo '</script'; ?>
>
	</head>
	<body>
		<!---------BUSCAODR----------->
		<h1>
				FICHA TECNICA VUELO
			</h1>
		<center>
		<form action="#" method="post" name="formu">
			<table border="1" class="listado">
				<tr>
					<th>
            <b>NOMBRE</b><br />
          <select name="nombre" onchange="buscar()">
          <option value="">--Seleccione--</option>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hoteles']->value, 'r');
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
						<b>ORIGEN</b><br />
						<input type="text" name="origen" value="" size="10" onkeyup="buscar()">
					</th>
					<th>
						<b>DESTINO</b><br />
						<input type="text" name="destino" value="" size="10" onkeyup="buscar()">
					</th>
				</tr>
			</table>
		</form>
	</center>
		<!-----------BUSCADOR------------->
		<center>
			<div id="vuelo1">
			</div>
		</center>
	</body>
</html>
<?php }
}
