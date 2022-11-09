<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../{$direc_css}">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="../js/validar_tipo_regimen.js"></script>
	<link rel="stylesheet" type="text/css" href="../calendario/tcal.css">
		<script type="text/javascript" src="../calendario/tcal.js"></script>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>

	<div class="formu_ingreso_datos">
		<form action="tipo_regimen_nuevo1.php" method="post" name="formu">
			<h2>REGISTRAR REGIMEN</h2>
			<b>Empresa (*)</b>
			<select name="id_empresa">
				<option value="">selecione</option>
				{foreach item=r from=$empresa}
				<option value="{$r.id_empresa}">{$r.razon_social}</option>
				{/foreach}
			</select>
			<p>
				<br>
				Regimen (*):<br>
					<input type="radio" name="regimen" value="Simplificado"> Simplicado
					<input type="radio" name="regimen" value="Unificado"> Unificado
					<input type="radio" name="regimen" value="Pecuario"> Pecuario
				</p>
				<br>
				Fecha de Cierre:<br>
				<input type="text" name="fecha_cierre" placeholder="Fecha(*)" class="tcal">
				<br>
				<p>
				Descripcion de tipo de empresa (*):
				<br>
				<select name="descripcion_tipo_empresa">
				<option value="l">-------</option>
				<option value="Minera">Minera</option>
				<option value="Petrolera">Petrolera</option>	
				<option value="Servicios">Servicios</option>
				<option value="Comercial">Comercial</option>
				<option value="Industrial">Insdustrial</option>
				</select>
				</p>
				<br>
				</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value="Cancelar" onclick="javascript:location.href='tipo_regimen.php';" class="boton2">
			</p>
			<p><b>(*) Campos Obligatorios</b></p>
		</form>
	</div>
</body>
</html>