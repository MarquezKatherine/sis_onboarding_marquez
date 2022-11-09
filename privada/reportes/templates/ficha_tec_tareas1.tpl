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
				<h1> FICHA TECNICA DE TAREAS</h1>
			</td>
		</tr>
	</table>
	<br>
	<center>
		<table border="1" cellpadding="0">
			<tr>
				<td>
					<table border="0">
						{foreach item=r from=$tarea}
						<tr>
							<th align="right">RAZON SOCIAL</th><th>:</th>
							<td><input type="text" name="razon_social" value="{$r.razon_social}" disabled=""> </td>
						</tr>
						<tr>
							<th align="right">FECHA DE INICIO DE LA TAREA</th><th>:</th>
							<td><input type="text" name="fecha_inicio" value="{$r.fecha_inicio}" disabled=""> </td>
						</tr>
						<tr>
							<th align="right">FECHA DE FINALIZACION DE LA TAREA</th><th>:</th>
							<td><input type="text" name="fecha_finalizacion" value="{$r.fecha_finalizacion}" disabled=""> </td>
						</tr>
						<tr>
							<th align="right">ESPECIFICACION DE LA TAREA</th><th>:</th>
							<td><textarea  cols="40" name="descripcion_actividad" disabled="">{$r.descripcion_actividad}</textarea> </td>
						</tr>
						{/foreach}
					</table>
				</td>
			</tr>
		</table>
	</center>
</body>
</html>
