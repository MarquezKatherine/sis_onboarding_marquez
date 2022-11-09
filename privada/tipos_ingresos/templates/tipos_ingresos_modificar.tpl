<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../{$direc_css}"  type="text/css">
		<script type="text/javascript" src="../js/expresiones_regulares.js"> </script>
		<script type="text/javascript" src="../js/validar_tipo_ingreso.js"> </script>
	</head>
	<body>
		<div class="formu_ingreso_datos">
			<form action="tipos_ingresos_modificar1.php" method="post" name="formu">
				<h2>MODIFICAR TIPO DE INGRESO</h2>
				{foreach item=r from=$tipos_ingresos}
				<p>
					Especificacion de Ingreso: <br>
					<input type="text" name="especificacion_ingreso" size="15" placeholder="Especificacion" onkeyup="this.value=this.value.toUpperCase()" value="{$r.especificacion_ingreso}">(*)
					</select>
					</p>
				<p>
					<input type="hidden" name="accion" value="" >
					<input type="hidden" name="id_tipo_ingreso" value="{$r.id_tipo_ingreso}" >
					<input type="button" name="Aceptar" onclick="validar();" class="boton2" value="Aceptar">
					<input type="button" name="Cancelar" onclick="javascript:location.href='tipos_ingresos.php';" class="boton2" value="Cancelar">
				</p>
				{/foreach}
				<p><b>(*)Campos Obligatorios</b></p>
			</form>
		</div>
	</body>
</html>