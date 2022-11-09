<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../{$direc_css}">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="../js/validar_desarrollador.js"></script>
		<link rel="stylesheet" type="text/css" href="../calendario/tcal.css">
		<script type="text/javascript" src="../calendario/tcal.js"></script>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>

	<div class="formu_ingreso_datos">
		<form action="desarrolladores_nuevo1.php" method="post" name="formu">
			<h2>REGISTRAR DESARROLLADOR</h2>
			<b>Horario (*)</b>
			<select name="id_horario">
				<option value="">selecione</option>
				{foreach item=r from=$horarios}
				<option value="{$r.id_horario}">{$r.turno_trabajo}</option>
				{/foreach}
			</select>
			<p>
			Nombres:<br>
				<input type="text" name="nombres" placeholder="NOMBRES (*)" onkeyup="this.value=this.value.toUpperCase()">
			<br>
			Apellidos:<br>
				<input type="text" name="apellidos" placeholder="APELLIDOS (*)" onkeyup="this.value=this.value.toUpperCase()">
			<br>
			Email:<br>
				<input type="email" name="email" placeholder="CORREO ELECTRONICO (*)" onkeyup="this.value=this.value.toUpperCase()">
				<br>
			Telefono:<br>
				<input type="text" name="telefono" placeholder="TELEFONO (*)" size="40" onkeyup="this.value=this.value.toUpperCase()">
				<br>
					Fecha de Ingreso:<br>
				<input type="text" name="fecha_ingreso" placeholder="FECHA (*)" class="tcal">
				<br>
				<center>
					Genero (*):<br>
					<input type="radio" name="genero" value="Maculino"> Masculino
					<input type="radio" name="genero" value="Femenino"> Femenino
					<br></center>
				</p>
				<p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value="Cancelar" onclick="javascript:location.href='desarrollades.php';" class="boton2">
			</p>
			<p><b>(*) Campos Obligatorios</b></p>
		</form>
	</div>
</body>
</html>