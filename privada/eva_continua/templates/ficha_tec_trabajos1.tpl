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
				<h1> FICHA TECNICA DE TRABAJOS</h1>
			</td>
		</tr>
	</table>
	<br>
	<center>
		<table border="1" cellpadding="0">
			<tr>
				<td>
					<table border="0">
						{foreach item=r from=$trabajo}
						<tr>
							<th align="right">CI</th><th>:</th>
							<td><input type="text" name="ci" value="{$r.ci}" disabled=""> </td>
						</tr>
						<tr>
							<th align="right">NOMBRES</th><th>:</th>
							<td><input type="text" name="nombres" value="{$r.nombres}" disabled=""> </td>
						</tr>
						<tr>
							<th align="right">APELLIDO PATERNO</th><th>:</th>
							<td><input type="text" name="ap" value="{$r.ap}" disabled=""> </td>
						</tr>
						<tr>
							<th align="right">TRABAJO</th><th>:</th>
							<td><input type="text" name="trabajo" value="{$r.trabajo}" disabled=""> </td>
						</tr>
						<tr>
							<th align="right">SALARIO</th><th>:</th>
							<td><input type="text" name="salario" value="{$r.salario}" disabled=""> </td>
						</tr>
						{/foreach}
					</table>
				</td>
			</tr>
		</table>
	</center>
</body>
</html>
