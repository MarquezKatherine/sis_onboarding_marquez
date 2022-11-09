<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="../js/validar_tipo_especialidad.js"></script>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="tipos_especialidades_nuevo1.php" method="post" name="formu" class="formu">
			<fieldset>
					<legend><center><h3>Tenga un saludo cordial......</h3></center></legend>
					<p>	
					<h2>REGISTRAR TIPO DE ESPECIALIDAD</h2>
					Especializacion:<br>
					<select name="especializacion" required="">
					<option value="">...(*)...</option>
					<option value="Analista en Economia">Analista en Economia</option>
					<option value="Analista Financiero">Analista Financiero</option>
					<option value="Analista en Contabilidad">Analista en Contabilidad</option>
					</select>
					<p>
					<input type="hidden" name="accion" value="">
					<input type="button" value="Aceptar" onclick="validar();" class="boton2">
					<input type="button" value="Cancelar" onclick="javascript:location.href='personas.php';" class="boton2">
					</p>
					<p><b>(*)Campos Obligatorios</b></p>
			</fieldset>
		</form>
	</div>
</body>
</html>
