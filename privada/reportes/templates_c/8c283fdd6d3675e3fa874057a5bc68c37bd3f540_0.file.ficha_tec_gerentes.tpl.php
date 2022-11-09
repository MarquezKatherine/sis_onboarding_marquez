<?php
/* Smarty version 3.1.36, created on 2022-09-21 01:54:33
  from 'C:\wamp64\www\sis_onboarding\privada\reportes\templates\ficha_tec_gerentes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_632a6ed9b8bd09_23324800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c283fdd6d3675e3fa874057a5bc68c37bd3f540' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_onboarding\\privada\\reportes\\templates\\ficha_tec_gerentes.tpl',
      1 => 1662519276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632a6ed9b8bd09_23324800 (Smarty_Internal_Template $_smarty_tpl) {
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
			var d1, d2, d3, d4, contenedor, ajax, url, param;
				contenedor = document.getElementById('gerentes1');
				d1 = document.formu.nombres.value;
				d2 = document.formu.apellidos.value;
				d3 = document.formu.telefono.value;
				d4 = document.formu.identificacion_tributaria.value;
				ajax = nuevoAjax();
				url = "ajax_buscar_gerente.php"
				param = "nombres="+d1+"&apellidos="+d2+"&telefono="+d3+"&identificacion_tributaria="+d4;
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

			function mostrar(id_gerente_propietario) {
			var d1, ventanaCalendario;
			d1 = id_gerente_propietario;
			//alert(id_persona);
			ventanaCalendario = window.open("ficha_tec_gerentes1.php?id_gerente_propietario=" + d1 , "calendario", "width=600, height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
			}
		<?php echo '</script'; ?>
>
	</head>
	<body>
		<!---------BUSCAODR----------->
		<h1>
				FICHA TECNICA GERENTES
			</h1>
		<center>
		<form action="#" method="post" name="formu">
			<table border="1" class="listado">
				<tr>
					<th>
						<b>NOMBRES</b><br />
						<input type="text" name="nombres" value="" size="10" onkeyup="buscar()">
					</th>
					<th>
						<b>APELLIDOS</b><br />
						<input type="text" name="apellidos" value="" size="10" onkeyup="buscar()">
					</th>
					<th>
						<b>TELEFONO</b><br />
						<input type="text" name="telefono" value="" size="10" onkeyup="buscar()">
					</th>
					<th>
						<b>NIT</b><br />
						<input type="text" name="identificacion_tributaria" value="" size="10" onkeyup="buscar()">
					</th>
				</tr>
			</table>
		</form>
	</center>
		<!-----------BUSCADOR------------->
		<center>
			<div id="gerentes1">
			</div>
		</center>
	</body>
</html>
<?php }
}
