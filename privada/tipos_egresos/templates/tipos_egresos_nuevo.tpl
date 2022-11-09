<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="../js/validar_tipo_egreso.js"></script>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="tipos_egresos_nuevo1.php" method="post" name="formu" class="formu">
			<h2>REGISTRAR TIPO INGRESO</h2>
			<p>
					Especificacion de Egreso: <br>
					<input type="text" name="especificacion_egreso" size="15" placeholder="Especificacion" onkeyup="this.value=this.value.toUpperCase()">(*)
					</p>
			<p>
			<input type="hidden" name="accion" value="">
			<input type="button" value="Aceptar" onclick="validar();" class="boton2">
			<input type="button" value="Cancelar" onclick="javascript:location.href='tipos_egresos.php';" class="boton2">
			</p>
			<p><b>(*)Campos Obligatorios</b></p>
		</form>
	</div>
</body>
</html>