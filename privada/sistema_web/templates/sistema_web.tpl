<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_sistema_web.js"></script>
</head>
<body>
<br>
		<center>
			<h1> SISTEMA WEB </h1>
		<form action="sistema_web1.php" method="post" name="formu" enctype="multipart/form-data">
			<table border="1">
				{foreach item=r from=$sistema_web}
				<tr>
					<th>Logo(*)</th><th>:</th>
					<td>
						<input type="hidden" name="MAX_FILE_SIZE" value="1000000" >
						<input type="file" name="logo">
						<input type="hidden" name="logo_1" value="{$r.logo}">
						<br><b>{$r.logo}</b>
					</td>
				</tr>
				<tr>
					<th align="right">Telefono</th><th>:</th>
					<td><input type="text" name="telefono" onkeyup="this.value=this.value.toUpperCase()" value="{$r.telefono}"> </td>
				</tr>
				<tr>
					<th align="right">Email</th><th>:</th>
					<td><input type="text" name="email" onkeyup="this.value=this.value.toUpperCase()" value="{$r.email}"> </td>
				</tr>
				<tr>
					<th align="right">Url</th><th>:</th>
					<td><input type="text" name="url" onkeyup="this.value=this.value.toUpperCase()" value="{$r.url}"> </td>
				</tr>
				<tr>
					<th>Nombre (*)</th><th>:</th>
					<td><input type="text" name="nombre" onkeyup="this.value=this.value.toUpperCase()" value="{$r.nombre}"> </td>
				</tr>
				<tr>
					<td align="center" colspan="3">
						<input type="hidden" name="accion" value="">
						<input type="hidden" name="id_sistema_web" value="{$r.id_sistema_web}">
						<input type="button" value="Aceptar" onclick="validar();">
					</td>
				</tr>
				{/foreach}
			</table>
			<table>
				<tr>
					<td colspan="3" align="center"><b>(*)Campos Obligatorios</b></td>
				</tr>
			</table>
		</form>
		</center>
</body>
</html>