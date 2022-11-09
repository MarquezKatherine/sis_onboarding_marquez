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
		</script>
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
          {foreach item=r from=$personas1}
          <option value="{$r.ci}">{$r.ci}</option>
          {/foreach}
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
