<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../{$direc_css}">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="../js/validar_especialidad.js"></script>
</head>
<body>

	<div class="formu_ingreso_datos">
		<form action="especialidades_modificar1.php" method="post" name="formu">
			<h2>MODIFICAR ESPECIALIDADES</h2>
			<b>Tipos Especialidades (*)</b>
			<select name="id_tipo_especialidad">
				{foreach item=r from=$persona}
				<option value="{$r.id_tipo_especialidad}">{$r.especializacion}</option>
				{/foreach}
				{foreach item=r from=$tipos_especialidades}
				<option value="{$r.id_tipo_especialidad}">{$r.especializacion}</option>
				{/foreach}
			</select>
			{foreach item=r from=$especialidades}
					<p>
			Experiencia:
				<br>
				</select>
				<select name="experiencia" required="">
				<option value="">{$r.experiencia}</option>
				<option value="1">1 año</option>
				<option value="2">2 años</option>
				<option value="3">3 años</option>
				<option value="4">4 años</option>
				<option value="5">5 años</option>
				<option value="6">6 años</option>
				<option value="7">7 años</option>
				<option value="8">8 años</option>
				<option value="9">9 años</option>
				<option value="10">10 años</option>
				<option value="11">Mas de 10 años</option>
			</select>
				<br>
				Lugar de Especializacion:<br>
				<input type="text" name="lugar_especializacion" placeholder="Lugar (*)" onkeyup="this.value=this.value.toUpperCase()" placeholder="Lugar de Especializacion" value="{$r.lugar_especializacion}">
				<br>
				Especificacion:<br>
				<input type="text" name="especificacion" placeholder="Especialidad (*)" onkeyup="this.value=this.value.toUpperCase()" value="{$r.especificacion}">
				<br>
				Ingrese su Curriculum Sustentatorio de Especialidad:<br>
				<input type="file" name="curriculum" accept=".pdf">{$r.curriculum}
				<br>
				Dato complementario de su especialidad especifique:<br>
				<textarea name="datos_complementarios" placeholder="Complemente la informacion en caso de necesitarse" cols="40" >{$r.datos_complementarios}</textarea>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="hidden" name="id_especialidad" value="{$r.id_especialidad}">
				<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value="Cancelar" onclick="javascript:location.href='especialidades.php';" class="boton2">
			</p>
			{/foreach}
			<p><b>(*) Campos Obligatorios</b></p>
		</form>
	</div>
</body>
</html>