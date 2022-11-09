<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../{$direc_css}">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="../js/validar_informe.js"></script>
		<link rel="stylesheet" type="text/css" href="../calendario/tcal.css">
		<script type="text/javascript" src="../calendario/tcal.js"></script>
</head>
<body>

	<div class="formu_ingreso_datos">
		<form action="informe_nuevo1.php" method="post" name="formu">
			<h2>REDACTAR INFORME</h2>
			<b>Ingreso (*)</b>
			<select name="id_ingreso">
				<option value="">selecione</option>
				{foreach item=r from=$ingresos}
				<option value="{$r.id_ingreso}">{$r.monto_asignado}</option>
				{/foreach}
			</select>
			<br>
			<br>
				<b>Egreso (*)</b>
			<select name="id_egreso">
				<option value="">selecione</option>
				{foreach item=r from=$egresos}
				<option value="{$r.id_egreso}">{$r.monto_asignado}</option>
				{/foreach}
			</select>
			<br>
			<br>
			Fecha del Informe:<br>
				<input type="text" name="fecha_informe" placeholder="Fecha (*)" class="tcal">
				<br>		
				<br>
			Describa del Informe:<br>
				<textarea name="descripcion_informe" placeholder="Redacte el Informe...(*)......." ></textarea>
				<br>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value="Cancelar" onclick="javascript:location.href='informes.php';" class="boton2">
			</p>
			<p><b>(*) Campos Obligatorios</b></p>
		</form>
	</div>
</body>
</html>