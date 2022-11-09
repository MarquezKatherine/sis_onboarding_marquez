<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../{$direc_css}">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="../js/validar_especialidad.js"></script>
</head>
<body>

	<div class="formu_ingreso_datos">
		<form action="especialidades_nuevo1.php" method="post" name="formu">
			<fieldset>
					<legend><center><h3>Tenga un saludo cordial......</h3></center></legend>
			<h2>REGISTRAR ESPECIALIDAD</h2>
			<b>Tipo de Especialidad (*)</b>
			<select name="id_tipo_especialidad">
				<option value="">selecione</option>
				{foreach item=r from=$tipos_especialidades}
				<option value="{$r.id_tipo_especialidad}">{$r.especializacion}</option>
				{/foreach}
			</select>
			<p></p>
			Experiencia:
				<br>
				</select>
				<select name="experiencia" required="">
				<option value="">...(*)...</option>
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
				<input type="text" name="lugar_especializacion" placeholder="Lugar (*)" onkeyup="this.value=this.value.toUpperCase()" class="otro" placeholder="Lugar de Especializacion">
				<br>
				Especificacion:<br>
				<input type="text" name="especificacion" placeholder="Especialidad (*)" onkeyup="this.value=this.value.toUpperCase()" class="otro">
				<br>
				Ingrese su Curriculum Sustentatorio de Especialidad:<br>
				<input type="file" name="curriculum" accept=".pdf">
				<br>
				Dato complementario de su especialidad especifique:<br>
				<textarea name="datos_complementarios" placeholder="Complemente la informacion en caso de necesitarse" cols="40" ></textarea>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value="Cancelar" onclick="javascript:location.href='usuarios.php';" class="boton2">
			</p>
			<p><b>(*) Campos Obligatorios</b></p>
		</fieldset>
		</form>
	</div>
</body>
</html>