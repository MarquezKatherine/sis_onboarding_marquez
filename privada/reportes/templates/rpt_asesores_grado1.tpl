<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		var ventanaCalendario=false
			function imprimir() {
			if (confirm(' Desea Imprimir ?')) {
				window.print();
			 }
			}
	</script>
</head>
<body style='cursor:pointer;cursor:hand' onclick='imprimir();'>
	<table width="100%" border="0">
		<tr>
			<td>
				<img src="../sistema_web/logos/{$logo}" width="70%">
			</td>
			<td align="center" width="80%">
				<h1>  ASESORES ESPECIALIDADES--GRADO ESPECIALIDAD </h1>
			</td>
		</tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<th>NRO</th><th>NOMBRES</th><th>APELLIDOS</th><th>C.I.</th><th>GRADO ESPECIALIDAD</th><th>FECHA DE ADQUSICION</th>
			</tr>
			{assign var="b" value="1"}
			{foreach item=r from=$asesores_especialidades}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.nombres}</td>
				<td>{$r.apellidos}</td>
				<td>{$r.cedula_identidad}</td>
				<td>{$r.grado_especialidad}</td>
				<td>{$r.fecha_adquisicion_especialidad}</td>
				{assign var="b" value="`$b+1`"}
				{/foreach}
			</tr>
		</table>
		<br><br>
		<b>Fecha:</b> {$fecha}
	</center>
</body>
</html>
