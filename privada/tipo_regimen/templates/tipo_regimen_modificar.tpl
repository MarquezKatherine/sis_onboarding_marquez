<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../{$direc_css}">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="../js/validar_tipo_regimen.js"></script>
	<link rel="stylesheet" type="text/css" href="../calendario/tcal.css">
		<script type="text/javascript" src="../calendario/tcal.js"></script>
</head>
<body>

	<div class="formu_ingreso_datos">
		<form action="tipo_regimen_modificar1.php" method="post" name="formu">
			<h2>MODIFICAR TIPO DE REGIMEN</h2>
			<b>Empresa (*)</b>
			<select name="id_empresa">
				{foreach item=r from=$persona}
				<option value="{$r.id_empresa}">{$r.razon_social}</option>
				{/foreach}
				{foreach item=r from=$empresa}
				<option value="{$r.id_empresa}">{$r.razon_social}</option>
				{/foreach}
			</select>
			{foreach item=r from=$tipo_regimen}
			<p>
					Regimen (*):<br>
					<input type="radio" name="regimen" value="Simplificado" {if $r.regimen == 'Simplificado'} checked {/if}> Simplicado
					<input type="radio" name="regimen" value="Unificado" {if $r.regimen == 'Unificado'} checked {/if}> Unificado
					<input type="radio" name="regimen" value="Pecuario" {if $r.regimen == 'Pecuario'} checked {/if}> Pecuario &nbsp;&nbsp;&nbsp;
				</p>
				<br>
				Fecha de Cierre Contables:<br>
				<input type="text" name="fecha_cierre" placeholder="Fecha de Cierre Contable(*)" class="tcal" value="{$r.fecha_cierre}">
				<br>
				Descripcion de tipo de empresa (*):				
				<select name="descripcion_tipo_empresa">
				<option value="">{$r.descripcion_tipo_empresa}</option>
				<option value="Minera">Minera</option>
				<option value="Petrolera">Petrolera</option>	
				<option value="Servicios">Servicios</option>
				<option value="Comercial">Comercial</option>
				<option value="Industrial">Insdustrial</option>
				</select>
				
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="hidden" name="id_tipo_regimen" value="{$r.id_tipo_regimen}">
				<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value="Cancelar" onclick="javascript:location.href='tipo_regimen.php';" class="boton2">
			</p>
			{/foreach}
			<p><b>(*) Campos Obligatorios</b></p>
		</form>
	</div>
</body>
</html>