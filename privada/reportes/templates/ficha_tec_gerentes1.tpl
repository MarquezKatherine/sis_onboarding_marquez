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
				<h1> FICHA TECNICA DE GERENTES</h1>
			</td>
		</tr>
	</table>
	<br>
	<center>
		<table border="1" cellpadding="0">
			<tr>
				<td>
					<table border="0">
						{foreach item=r from=$gerente}
						<tr>
							<th align="right">RAZON SOCIAL</th><th>:</th>
							<td><input type="text" name="razon_social" value="{$r.razon_social}" disabled=""> </td>
						</tr>
						<tr>
							<th align="right">NOMBRES DEL GERENTE</th><th>:</th>
							<td><input type="text" name="nombres" value="{$r.nombres}" disabled=""> </td>
						</tr>
						<tr>
							<th align="right">APELLIDOS DEL GERENTE</th><th>:</th>
							<td><input type="text" name="apellidos" value="{$r.apellidos}" disabled=""> </td>
						</tr>
						<tr>
							<th align="right">TELEFONO INTERNO DE GERENCIA</th><th>:</th>
							<td><input type="text" name="telefono" value="{$r.telefono}" disabled=""> </td>
						</tr>
						<tr>
							<th align="right">NUMERO DE INDETIFICACION TRIBUTARIA</th><th>:</th>
							<td><input type="text" name="identificacion_tributaria" value="{$r.identificacion_tributaria}" disabled=""> </td>
						</tr>
						{/foreach}
					</table>
				</td>
			</tr>
		</table>
	</center>
</body>
</html>
