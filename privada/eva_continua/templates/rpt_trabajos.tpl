<!DOCTYPE html>
<html lang="esp">
	<head>
		<link rel="stylesheet" href="../{$direc_css}" type="text/css">
		<meta charset="UTF-8">
		{literal}
		<script type="text/javascript">
			function validar() {
				ci = document.formu.ci.value;
				if (document.formu.ci.value == "") {
					alert("Por favor seleccione la cedula de identidad");
					document.formu.ci.focus();
					return;
				}
				ventanaCalendario = window.open("rpt_trabajos1.php?ci=" + ci, "calendario", "width=600, height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
			}
		</script>
		{/literal}
	</head>
	<body>
		<div class="formu_ingreso_datos">
			<h2> REPORTE DE TRABAJOS POR LA CEDULA DE IDENTIDAD</h2>
			<form method="post" name="formu">
			<p>
				<b>*Seleccione la cedula</b>
				<select name="ci">
					<option value="">--Seleccione--</option>
					<option value="T">Todos</option>
					{foreach item=r from=$personas1}
					<option value="{$r.ci}">{$r.ci}</option>
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

