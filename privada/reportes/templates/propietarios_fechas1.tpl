<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		var ventanaCalendario=false
		function imprimir(){
			if(confirm(' Desea Imprimir ?')){
				window.print();
			}
		}
	</script>
</head>
<body style='cursor:pointer;cursor:hand' onclick='imprimir();'>
	<table width="100%" border="0">
		<tr>
			<td>
				<img src="../../imagenes/{$logo}" width="70%">
			</td>
			<td align="center" width="80%">
				<h1> PROPIETARIOS CON FECHAS</h1>
			</td>
		</tr>
	</table>
	<br>
	<center>
		<table border="1" cellpadding="0">
			<tr>
				<th>NRO</th><th>PROPIETARIOS</th><th>FECHA INGRESO</th>
			</tr>
			{assign var="b" value="1"}
			{foreach item=r from=$empresa_fechas1}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.nombres}</td>
				<td>{$r.fecha_ingreso_cargo}</td>
				{assign var="b" value="`$b+1`"}
				{/foreach}
			</tr>
		</table>
		<br><br>
	</center>
	<b>DEL:</b>{$fecha1} <b>A</b>{$fecha2}
</body>
</html>