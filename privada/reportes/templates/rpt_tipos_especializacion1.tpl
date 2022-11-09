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
				<h1>  TIPOS ESPECIALIDADES--ESPECIALIZACION </h1>
			</td>
		</tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<th>NRO</th><th>ESPECIALIZACION</th><th>LUGAR ESPECIALIZACION</th><th>EXPERIENCIA</th><th>ESPECIFICACION</th>
			</tr>
			{assign var="b" value="1"}
			{foreach item=r from=$tipos_especializacion}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.especializacion}</td>
				<td>{$r.lugar_especializacion}</td>
				<td>{$r.experiencia}</td>
				<td>{$r.especificacion}</td>
				{assign var="b" value="`$b+1`"}
				{/foreach}
			</tr>
		</table>
		<br><br>
		<b>Fecha:</b> {$fecha}
	</center>
</body>
</html>
