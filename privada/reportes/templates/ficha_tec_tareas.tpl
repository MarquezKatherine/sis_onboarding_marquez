<!DOCTYPE html>
</html>
<html lang = "esp">
	<head>
		<link rel="stylesheet" href="../{$direc_css}" type="text/css">
		<meta charset="utf-8">
		<script type="text/javascript" src="../../ajax.js"></script>
		<script type="text/javascript">
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
		</script>
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
