<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../{$direc_css}"  type="text/css">
		<script type="text/javascript" src="../js/expresiones_regulares.js"> </script>
		<script type="text/javascript" src="../js/validar_asesor.js"> </script>
	</head>
	<body>
		<div class="formu_ingreso_datos">
			<form action="asesor_modificar1.php" method="post" name="formu">
				<h2>MODIFICAR ASESOR</h2>
				{foreach item=r from=$persona}
				<input type="text" name="nombres" size="15" placeholder="Nombres" value="{$r.nombres}">(*)
			<p>
				<input type="text" name="apellidos" size="15" placeholder="Apellidos" onkeyup="this.value=this.value.toUpperCase()" value="{$r.apellidos}">(*)
			</p>
			<p>
				<input type="text" name="telefono" size="15" placeholder="Telefono" onkeyup="this.value=this.value.toUpperCase()" value="{$r.telefono}">(*)
			</p>
			<p>
				<input type="text" name="email" size="15" placeholder="Email" onkeyup="this.value=this.value.toUpperCase()" value="{$r.email}">(*)
			</p>
			<p>
				<input type="text" name="cedula_identidad" size="15" placeholder="Cedudal de Identidad" onkeyup="this.value=this.value.toUpperCase()" value="{$r.cedula_identidad}">(*)
			</p>
			<p>
				<input type="text" name="registro_universitario" size="15" placeholder="Registro Universitario" value="{$r.registro_universitario}">
			</p>
				<p>
					<input type="hidden" name="accion" value="" >
					<input type="hidden" name="id_asesor" value="{$r.id_asesor}" >
					<input type="button" name="Aceptar" onclick="validar();" class="boton2" value="Aceptar">
					<input type="button" name="Cancelar" onclick="javascript:location.href='asesores.php';" class="boton2" value="Cancelar">
				</p>
				{/foreach}
				<p><b>(*)Campos Obligatorios</b></p>
			</form>
		</div>
	</body>
</html>