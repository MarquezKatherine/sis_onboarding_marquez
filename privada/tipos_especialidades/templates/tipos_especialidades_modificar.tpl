<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../{$direc_css}"  type="text/css">
		<script type="text/javascript" src="../js/expresiones_regulares.js"> </script>
		<script type="text/javascript" src="../js/validar_tipo_especialidad.js"> </script>
	</head>
	<body>
		<div class="formu_ingreso_datos">
			<form action="tipos_especialidades_modificar1.php" method="post" name="formu">
				<h2>MODIFICAR TIPO DE ESPECIALIDAD</h2>
				{foreach item=r from=$persona}
				Especializacion:<br>
					<select name="especializacion" required="">
					<option value="">{$r.especializacion}</option>
					<option value="Analista en Economia">Analista en Economia</option>
					<option value="Analista Financiero">Analista Financiero</option>
					<option value="Analista en Contabilidad">Analista en Contabilidad</option>
					</select>
				<p>
					<input type="hidden" name="accion" value="" >
					<input type="hidden" name="id_tipo_especialidad" value="{$r.id_tipo_especialidad}" >
					<input type="button" name="Aceptar" onclick="validar();" class="boton2" value="Aceptar">
					<input type="button" name="Cancelar" onclick="javascript:location.href='tipos_especialidades.php';" class="boton2" value="Cancelar">
				</p>
				{/foreach}
				<p><b>(*)Campos Obligatorios</b></p>
			</form>
		</div>
	</body>
</html>