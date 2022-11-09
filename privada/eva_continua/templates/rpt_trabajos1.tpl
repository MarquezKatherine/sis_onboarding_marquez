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
				<h1> CI DE ACUERDO A SU TRABAJO </h1>
			</td>
		</tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<th>NRO</th><th>CI</th><th>NOMBRES</th><th>AP</th><th>TRABAJO</th><th>SALARIO</th>
			</tr>
			{assign var="b" value="1"}
			{foreach item=r from=$personas1}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.ci}</td>
				<td>{$r.nombres}</td>
				<td>{$r.ap}</td>
				<td>{$r.trabajo}</td>
				<td>{$r.salario}</td>
				{assign var="b" value="`$b+1`"}
				{/foreach}
			</tr>
		</table>
		<br><br>
		<b>Fecha:</b> {$fecha}
	</center>
</body>
</html>
