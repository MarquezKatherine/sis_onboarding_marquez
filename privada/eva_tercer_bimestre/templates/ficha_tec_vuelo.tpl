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
		</script>
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
          {foreach item=r from=$hoteles}
          <option value="{$r.nombre}">{$r.nombre}</option>
          {/foreach}
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
