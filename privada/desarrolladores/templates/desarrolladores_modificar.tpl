<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../{$direc_css}">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="../js/validar_desarrollador.js"></script>
	<link rel="stylesheet" type="text/css" href="../calendario/tcal.css">
		<script type="text/javascript" src="../calendario/tcal.js"></script>
</head>
<body>

	<div class="formu_ingreso_datos">
		<form action="desarrolladores_modificar1.php" method="post" name="formu">
			<h2>MODIFICAR DESARROLLADOR</h2>
			<b>Horarios (*)</b>
			<select name="id_horario">
				{foreach item=r from=$persona}
				<option value="{$r.id_horario}">{$r.turno_trabajo}</option>
				{/foreach}
				{foreach item=r from=$horarios}
				<option value="{$r.id_horario}">{$r.turno_trabajo}</option>
				{/foreach}
			</select>
			{foreach item=r from=$desarrolladores}
					<p>
			Nombres:<br>
				<input type="text" name="nombres" placeholder="NOMBRES (*)" onkeyup="this.value=this.value.toUpperCase()" value="{$r.nombres}">
			<br>
			Apellidos:<br>
				<input type="text" name="apellidos" placeholder="APELLIDOS (*)" onkeyup="this.value=this.value.toUpperCase()" value="{$r.apellidos}">
			<br>
			Email:<br>
				<input type="email" name="email" placeholder="CORREO ELECTRONICO (*)" onkeyup="this.value=this.value.toUpperCase()"  value="{$r.email}">
				<br>
			Telefono:<br>
				<input type="text" name="telefono" placeholder="TELEFONO (*)"  value="{$r.telefono}">
				<br>
					Fecha de Ingreso:<br>
				<input type="text" name="fecha_ingreso" placeholder="Fecha de Ingreso (*)" class="tcal" value="{$r.fecha_ingreso}">
				<br>
				<center>
					Genero (*):<br>
					<input type="radio" name="genero" value="Masculino" {if $r.genero == 'Masculino'} checked {/if}> Masculino
					<input type="radio" name="genero" value="Femenino" {if $r.genero == 'Femenino'} checked {/if}> Femenino &nbsp;&nbsp;&nbsp;
					<br></center>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="hidden" name="id_desarrollador" value="{$r.id_desarrollador}">
				<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value="Cancelar" onclick="javascript:location.href='desarrolladores.php';" class="boton2">
			</p>
			{/foreach}
			<p><b>(*) Campos Obligatorios</b></p>
		</form>
	</div>
</body>
</html>