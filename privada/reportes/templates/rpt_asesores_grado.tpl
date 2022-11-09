<!DOCTYPE html>
<html lang="esp">
	<head>
		<link rel="stylesheet" href="../{$direc_css}" type="text/css">
		<meta charset="UTF-8">
		{literal}
		<script type="text/javascript">
			function validar() {
					grado_especialidad = document.formu.grado_especialidad.value;
				if (document.formu.grado_especialidad.value == "") {
					alert("Por favor seleccione la especializacion");
					document.formu.grado_especialidad.focus();
					return;
				}
				ventanaCalendario = window.open("rpt_asesores_grado1.php?grado_especialidad=" + grado_especialidad, "calendario", "width=600, height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
			}
		</script>
		{/literal}
	</head>
	<body>
		<div class="formu_ingreso_datos">
			<h2> RPT DE ASESORES POR EL GRADO DE ESPECIALIDAD</h2>
			<form method="post" name="formu">
			<p>
				<b>*Seleccione el Grado de Especialidad</b>
				<select name="grado_especialidad">
					<option value="">--Seleccione--</option>
					<option value="T">Todos</option>
					{foreach item=r from=$asesores_especialidades}
					<option value="{$r.grado_especialidad}">{$r.grado_especialidad}</option>
					{/foreach}
				</select>
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" onclick="validar();" class="boton">
			</p>
			</form>
		</div>
	</body>
</html>