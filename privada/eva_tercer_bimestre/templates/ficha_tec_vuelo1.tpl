<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		var ventanaCalendario=false
		function imprimir(){
			if(confirm(' Desea imprimir ?')){
				window.print();
			}
		}
	</script>
</head>
<body style='cursor:pointer;cursor: hand' onclick="imprimir();">
	<table width="100%" border="0">
		<tr>
			<td>
				<img src="../sistema_web/logos/{$logo}" width="70%">
			</td>
			<td align="center" width="80%">
				<h1> FICHA TECNICA DE VUELOS</h1>
			</td>
		</tr>
	</table>
	<br>
	<center>
		<table border="1" cellpadding="0">
			<tr>
				<td>
					<table border="0">
						{foreach item=r from=$nombre}
						<tr>
							<th align="right">NOMBRES</th><th>:</th>
							<td><input type="text" name="nombre" value="{$r.nombre}" disabled=""> </td>
						</tr>
						<tr>
							<th align="right">ORIGEN</th><th>:</th>
							<td><input type="text" name="origen" value="{$r.origen}" disabled=""> </td>
						</tr>
						<tr>
							<th align="right">DESTINO</th><th>:</th>
							<td><input type="text" name="destino" value="{$r.destino}" disabled=""> </td>
						</tr>
						{/foreach}
					</table>
				</td>
			</tr>
		</table>
	</center>
</body>
</html>
