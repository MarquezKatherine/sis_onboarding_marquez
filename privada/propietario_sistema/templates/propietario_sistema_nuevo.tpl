<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="../js/validar_propietario_sistema.js"></script>
	<link rel="stylesheet" type="text/css" href="../calendario/tcal.css">
		<script type="text/javascript" src="../calendario/tcal.js"></script>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="propietario_sistema_nuevo1.php" method="post" name="formu" class="formu">
			<h2>REGISTRAR AL PROPIETARIO DEL SISTEMA</h2>
			<p>
				<input type="text" name="nombres" size="15" placeholder="Nombres" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
				<input type="text" name="fecha_ingreso_cargo" size="15" placeholder="Fecha de Ingreso" class="tcal">(*)
			</p>
			<p>
				<input type="text" name="especialidad" size="15" placeholder="Especialidad" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
			<input type="hidden" name="accion" value="">
			<input type="button" value="Aceptar" onclick="validar();" class="boton2">
			<input type="button" value="Cancelar" onclick="javascript:location.href='propietario_sistema.php';" class="boton2">
			</p>
			<p><b>(*)Campos Obligatorios</b></p>
		</form>
	</div>
</body>
</html>