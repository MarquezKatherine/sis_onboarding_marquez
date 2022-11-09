<?php
/* Smarty version 3.1.36, created on 2022-09-21 01:03:18
  from 'C:\wamp64\www\sis_onboarding\privada\reportes\templates\ficha_tec_tareas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_632a62d667e979_13480812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e7845c78f2dbf67e8a61ec10f162839150c4d54' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_onboarding\\privada\\reportes\\templates\\ficha_tec_tareas.tpl',
      1 => 1662573439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632a62d667e979_13480812 (Smarty_Internal_Template $_smarty_tpl) {
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
				contenedor = document.getElementById('tareas1');
				d1 = document.formu.fecha_inicio.value;
				d2 = document.formu.fecha_finalizacion.value;
				d3 = document.formu.descripcion_actividad.value;
				ajax = nuevoAjax();
				url = "ajax_buscar_tarea.php"
				param = "fecha_inicio="+d1+"&fecha_finalizacion="+d2+"&descripcion_actividad="+d3;
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

			function mostrar(id_tarea) {
			var d1, ventanaCalendario;
			d1 = id_tarea;
			//alert(id_tarea);
			ventanaCalendario = window.open("ficha_tec_tareas1.php?id_tarea=" + d1 , "calendario", "width=600, height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
			}
		<?php echo '</script'; ?>
>
	</head>
	<body>
		<!---------BUSCAODR----------->
		<h1>
				FICHA TECNICA TAREAS
			</h1>
		<center>
		<form action="#" method="post" name="formu">
			<table border="1" class="listado">
				<tr>
					<th>
						<b>FECHA INICIO</b><br />
						<input type="text" name="fecha_inicio" value="" size="10" onkeyup="buscar()">
					</th>
					<th>
						<b>FECHA FIN</b><br />
						<input type="text" name="fecha_finalizacion" value="" size="10" onkeyup="buscar()">
					</th>
					<th>
						<b>DESCRIPCION</b><br />
						<input type="text" name="descripcion_actividad" value="" size="10" onkeyup="buscar()">
					</th>
				</tr>
			</table>
		</form>
	</center>
		<!-----------BUSCADOR------------->
		<center>
			<div id="tareas1">
			</div>
		</center>
	</body>
</html>
<?php }
}
