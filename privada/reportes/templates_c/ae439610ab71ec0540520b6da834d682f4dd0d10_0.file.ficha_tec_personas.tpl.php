<?php
/* Smarty version 3.1.36, created on 2022-09-21 02:59:56
  from 'C:\wamp64\www\sis_onboarding\privada\reportes\templates\ficha_tec_personas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_632a7e2c710fa1_34751078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae439610ab71ec0540520b6da834d682f4dd0d10' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_onboarding\\privada\\reportes\\templates\\ficha_tec_personas.tpl',
      1 => 1662515310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632a7e2c710fa1_34751078 (Smarty_Internal_Template $_smarty_tpl) {
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
				contenedor = document.getElementById('personas1');
				d1 = document.formu.ap.value;
				d2 = document.formu.am.value;
				d3 = document.formu.nombres.value;
				d4 = document.formu.ci.value;
				ajax = nuevoAjax();
				url = "ajax_buscar_persona1.php"
				param = "ap="+d1+"&am="+d2+"&nombres="+d3+"&ci="+d4;
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

			function mostrar(id_persona) {
			var d1, ventanaCalendario;
			d1 = id_persona;
			//alert(id_persona);
			ventanaCalendario = window.open("ficha_tec_personas1.php?id_persona=" + d1 , "calendario", "width=600, height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
			}
		<?php echo '</script'; ?>
>
	</head>
	<body>
		<!---------BUSCAODR----------->
		<h1>
				FICHA TECNICA PERSONAS
			</h1>
		<center>
		<form action="#" method="post" name="formu">
			<table border="1" class="listado">
				<tr>
					<th>
						<b>Paterno</b><br />
						<input type="text" name="ap" value="" size="10" onkeyup="buscar()">
					</th>
					<th>
						<b>Materno</b><br />
						<input type="text" name="am" value="" size="10" onkeyup="buscar()">
					</th>
					<th>
						<b>Nombres</b><br />
						<input type="text" name="nombres" value="" size="10" onkeyup="buscar()">
					</th>
					<th>
						<b>C.I.</b><br />
						<input type="text" name="ci" value="" size="10" onkeyup="buscar()">
					</th>
				</tr>
			</table>
		</form>
	</center>
		<!-----------BUSCADOR------------->
		<center>
			<div id="personas1">
			</div>
		</center>
	</body>
</html>
<?php }
}
