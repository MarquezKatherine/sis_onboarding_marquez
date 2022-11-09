<!DOCTYPE html>
<html lang="esp">
	<head>
		<link rel="stylesheet" href="../{$direc_css}" type="text/css">
		<meta charset="UTF-8">
		{literal}
		<script type="text/javascript">
			function validar() {
				especializacion = document.formu.especializacion.value;
				if (document.formu.especializacion.value == "") {
					alert("Por favor seleccione la especializacion");
					document.formu.especializacion.focus();
					return;
				}
				ventanaCalendario = window.open("rpt_tipos_especializacion1.php?especializacion=" + especializacion , "calendario", "width=600, height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
			}
		</script>
		{/literal}
	</head>
	<body>
		<div class="formu_ingreso_datos">
			<h2> RPT DE ESPECIALIDADES POR EL TIPO DE ESPECIALIDAD</h2>
			<form method="post" name="formu">
			<p>
				<b>*Seleccione la Especializacion</b>
				<select name="especializacion">
					<option value="">--Seleccione--</option>
					<option value="T">Todos</option>
					{foreach item=r from=$tipos_especialidades}
					<option value="{$r.especializacion}">{$r.especializacion}</option>
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

