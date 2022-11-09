<!DOCTYPE html>
</html>
<html lang = "esp">
	<head>
		<link rel="stylesheet" href="../{$direc_css}" type="text/css">
		<meta charset="utf-8">
		<script type="text/javascript" src="../../ajax.js"></script>
		<script type="text/javascript">
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
		</script>
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
