<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="../js/validar_horario.js"></script>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="horarios_nuevo1.php" method="post" name="formu" class="formu">
			<fieldset>
					<legend><center><h3>Tenga un saludo cordial......</h3></center></legend>
					<h2>REGISTRAR PERSONA</h2>
					<p>
					Turno de Entrada: <br><select name="turno_trabajo">
					<option value="s">Seleccione (*)</option>
					<option value="Mañana">Mañana</option>
					<option value="Tarde">Tarde</option>
					<option value="Noche">Noche</option>
					</select>
					</p>
					Horario de Entrada y Salida: <br><select name="horario_entrada_y_salida">
					<option value="se">Seleccione (*)</option>
					<option value="7:00 AM a 12:00PM">7:00 AM a 12:00PM</option>
					<option value="12:00PM a 19:00PM">12:00PM a 19:00PM</option>
					<option value="19:00PM a 7: 00AM">19:00PM a 7:00AM</option>
					</select>
					</p>
					<p>
					Dias Trabajados del mes:<br>
					<input type="text" name="dias_trabajados_mes" size="15" placeholder="Dias Trabajados">			
			<p>
			<input type="hidden" name="accion" value="">
			<input type="button" value="Aceptar" onclick="validar();" class="boton2">
			<input type="button" value="Cancelar" onclick="javascript:location.href='horarios.php';" class="boton2">
			</p>
			<p><b>(*)Campos Obligatorios</b></p>
			</p>
			</fieldset>
		</form>
	</div>
</body>
</html>