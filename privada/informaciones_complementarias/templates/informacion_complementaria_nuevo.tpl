<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../{$direc_css}">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="../js/validar_informacion.js"></script>
</head>
<body>

	<div class="formu_ingreso_datos">
		<form action="informacion_complementaria_nuevo1.php" method="post" name="formu">
			<fieldset>
					<legend><center><h3>Tenga un saludo cordial......</h3></center></legend>
					<p>	
						<h2>REGISTRAR NUEVA INFORMACION</h2>
						<b>Empresa (*)</b>
						<select name="id_empresa">
							<option value="">selecione</option>
							{foreach item=r from=$empresa}
							<option value="{$r.id_empresa}">{$r.razon_social}</option>
							{/foreach}
						</select>
						<br>
							Periodo de Funcionamiento:<br>
							<input type="Numero" name="periodo_funcionamiento" placeholder="Periodo de Funcionamiento (*)">
							<br>
							Utilidades Historicas:<br>
							<input type="Numero" name="utilidades_historicas" placeholder="Utilidades Historicas (*)">
							<br>
							Perdidas Historicas:<br>
							<input type="Numero" name="perdidas_historicas" placeholder="Perdidas Historicas (*)" >
							<br>
							Deudas Tributarias:<br>
							<input type="Numero" name="deudas_tributarias" placeholder="Deudas Tributarias (*)" >
							<br>
						<p>
							<input type="hidden" name="accion" value="">
							<input type="button" value="Aceptar" onclick="validar();" class="boton2">
							<input type="button" value="Cancelar" onclick="javascript:location.href='informaciones_complementarias.php';" class="boton2">
						</p>
						<p><b>(*) Campos Obligatorios</b></p>
					</p>
				</fieldset>
		</form>
	</div>
</body>
</html>