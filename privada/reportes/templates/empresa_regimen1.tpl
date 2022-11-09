<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
	var ventanaCalendario = false
			function imprimir() {
				if (confirm(' Desea Imprimir ?')){
					window.print();
				}
			}
</script>	
</head>
<body style='cursor: pointer;cursor: hand' onclick='imprimir();'>
	<table width="100%" border="0">
		<tr>
			<td><img src="../sistema_web/logo/{$logo}" width="70%" ></td>
			<td align="center" width="80%"><h1> EMPRESA REGIMEN</h1></td>
		</tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<th>NRO</th><th>RAZON SOCIAL</th><th>REGIMEN</th><th>DESCRIPCION</th>
			</tr>
			{assign var="b" value="1"}
			{foreach item=r from=$empresa_regimen}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.razon_social}</td>
				<td><center>{$r.regimen}</center></td>
				<td>{$r.descripcion_tipo_empresa}</td>
				{assign var="b" value="`$b+1`"}
			</tr>
			{/foreach}
		</table>
		<br><br>
		<b>Fecha:</b> {$fecha}
	</center>
</body>
</html>