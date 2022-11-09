<!DOCTYPE html>
<html lang="esp">
	<head>
		<link rel="stylesheet" href="../{$direc_css}" type="text/css">
		<meta charset="UTF-8">
		{literal}
		<script type="text/javascript">
			function validar() {
				nombre = document.formu.nombre.value;
				if (document.formu.nombre.value == "") {
					alert("Por favor seleccione el nombre del hotel");
					document.formu.nombre.focus();
					return;
				}
				ventanaCalendario = window.open("rpt_vuelo1.php?nombre=" + nombre, "calendario", "width=600, height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
			}
		</script>
		{/literal}
	</head>
	<body>
		<div class="formu_ingreso_datos">
			<h2> REPORTE POR VUELOS</h2>
			<form method="post" name="formu">
			<p>
				<b>*Seleccione el nombre</b>
				<select name="nombre">
					<option value="">--Seleccione--</option>
					<option value="T">Todos</option>
					{foreach item=r from=$hoteles}
					<option value="{$r.nombre}">{$r.nombre}</option>
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

