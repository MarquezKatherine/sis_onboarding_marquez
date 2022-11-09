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
				<h1> REPORTE DE ACUERDO AL NOMBRE DEL HOTEL </h1>
			</td>
		</tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<th>NRO</th><th>NOMBRE</th><th>CIUDAD</th><th>ORIGEN</th><th>DESTINO</th>
			</tr>
			{assign var="b" value="1"}
			{foreach item=r from=$hoteles}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.nombre}</td>
				<td>{$r.ciudad}</td>
				<td>{$r.origen}</td>
				<td>{$r.destino}</td>
				{assign var="b" value="`$b+1`"}
				{/foreach}
			</tr>
		</table>
		<br><br>
		<b>Fecha:</b> {$fecha}
	</center>
</body>
</html>
