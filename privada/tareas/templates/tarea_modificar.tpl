<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../{$direc_css}">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="../js/validar_tarea.js"></script>
	<link rel="stylesheet" type="text/css" href="../calendario/tcal.css">
		<script type="text/javascript" src="../calendario/tcal.js"></script>
</head>
<body>

	<div class="formu_ingreso_datos">
		<form action="tarea_modificar1.php" method="post" name="formu">
			<h2>MODIFICAR TAREA</h2>
			<b>Empresa (*)</b>
			<select name="id_empresa">
				{foreach item=r from=$persona}
				<option value="{$r.id_empresa}">{$r.razon_social}</option>
				{/foreach}
				{foreach item=r from=$empresa}
				<option value="{$r.id_empresa}">{$r.razon_social}</option>
				{/foreach}
			</select>
			{foreach item=r from=$tareas}
			<p>
							<h3>Fecha Inicio</h3><br>
							<input type="text" name="fecha_inicio" size="15" placeholder="Inicio" class="tcal" value="{$r.fecha_inicio}"> (*)
						</p>
						<p>
							<h3>Fecha Finalizacion</h3><br>
							<input type="text" name="fecha_finalizacion" size="15" placeholder="Finalizacion" class="tcal" value="{$r.fecha_finalizacion}"> (*)
						</p>
						<p>
							<h3>Descripcion de la Tarea</h3><br>
							<textarea  cols="40" name="descripcion_actividad">{$r.descripcion_actividad}</textarea>
						</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="hidden" name="id_tarea" value="{$r.id_tarea}">
				<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value="Cancelar" onclick="javascript:location.href='tareas.php';" class="boton2">
			</p>
			{/foreach}
			<p><b>(*) Campos Obligatorios</b></p>
		</form>
	</div>
</body>
</html>