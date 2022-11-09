<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../{$direc_css}">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="../js/validar_asesor_especialidad.js"></script>
	<link rel="stylesheet" type="text/css" href="../calendario/tcal.css">
	<script type="text/javascript" src="../calendario/tcal.js"></script>
</head>
<body>

	<div class="formu_ingreso_datos">
		<form action="asesores_especialidades_nuevo1.php" method="post" name="formu">
			<h2>REGISTRAR ASESOR ESPECIALIDAD</h2>
			<b>Asesor (*)</b>
			<select name="id_asesor">
				<option value="">selecione</option>
				{foreach item=r from=$asesores}
				<option value="{$r.id_asesor}">{$r.nombres} {$r.apellidos}</option>
				{/foreach}
			</select>
			<br>
			<br>
			<b>Especialidad (*)</b>
			<select name="id_especialidad">
				<option value="">seleccione</option>
				{foreach item=r from=$especialidades}
				<option value="{$r.id_especialidad}">{$r.especificacion}</option>
				{/foreach}
			</select>
				<br>
				<br>
				Fecha de Adquisicion de especialidad:<br>
				<input type="text" name="fecha_adquisicion_especialidad" placeholder="Adquisicion" class="tcal">
				<br>
				Grado de Especialidad:<br>
				<select name="grado_especialidad" required="">
				<option value="">...(*)...</option>
				<option value="Licenciatura">Licenciatura</option>
				<option value="Doctorado">Doctorado</option>
				<option value="Masterado">Masterado</option>			
				</select>
				<br>
				Tipo de Acreditacion:<br>
				<select name="tipo_acreditacion" required="">
				<option value="">...(*)...</option>
				<option value="Departamental">Departamental</option>
				<option value="Nacional">Nacional</option>
				<option value="Internacional">Internacional</option>			
				</select>
				<br>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value="Cancelar" onclick="javascript:location.href='asesores_especialidades.php';" class="boton2">
			</p>
			<p><b>(*) Campos Obligatorios</b></p>
		</form>
	</div>
</body>
</html>