<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../{$direc_css}"  type="text/css">
		<script type="text/javascript" src="../js/expresiones_regulares.js"> </script>
		<script type="text/javascript" src="../js/validar_horario.js"> </script>
	</head>
	<body>
		<div class="formu_ingreso_datos">
			<form action="horarios_modificar1.php" method="post" name="formu">
				<h2>MODIFICAR HORARIOS</h2>
				{foreach item=r from=$persona}
				<p>
					Turno de Trabajo: <br><select name="turno_trabajo">
					<option value="s">{$r.turno_trabajo}</option>
					<option value="Mañana">Mañana</option>
					<option value="Tarde">Tarde</option>
					<option value="Noche">Noche</option>
					</select>
					</p>
					Horario de Entrada y Salida: <br><select name="horario_entrada_y_salida">
					<option value="se">{$r.horario_entrada_y_salida}</option>
					<option value="7:00 AM a 12:00PM">7:00 AM a 12:00PM</option>
					<option value="12:00PM a 19:00PM">12:00PM a 19:00PM</option>
					<option value="19:00PM a 7: 00AM">19:00PM a 7:00AM</option>
					</select>
					</p>
					<p>
					Dias Trabajados del mes:<br>
					<input type="text" name="dias_trabajados_mes" size="15" placeholder="Dias Trabajados" value="{$r.dias_trabajados_mes}">	
				<p>
					<input type="hidden" name="accion" value="" >
					<input type="hidden" name="id_horario" value="{$r.id_horario}" >
					<input type="button" name="Aceptar" onclick="validar();" class="boton2" value="Aceptar">
					<input type="button" name="Cancelar" onclick="javascript:location.href='horarios.php';" class="boton2" value="Cancelar">
				</p>
				{/foreach}
				<p><b>(*)Campos Obligatorios</b></p>
			</form>
		</div>
	</body>
</html>