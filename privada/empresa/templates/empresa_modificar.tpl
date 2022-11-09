<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../{$direc_css}"  type="text/css">
		<script type="text/javascript" src="../js/expresiones_regulares.js"> </script>
		<script type="text/javascript" src="../js/validar_empresa.js"> </script>
	</head>
	<body>
		<div class="formu_ingreso_datos">
			<form action="empresa_modificar1.php" method="post" name="formu">
				<h2>MODIFICAR EMPRESA</h2>
				{foreach item=r from=$persona}
					Razon Social:<br>
				<input type="text" name="razon_social" placeholder="RazonSocial (*)" onkeyup="this value=this.value.toUpperCase()" value="{$r.razon_social}">
				<br>
				Telefono:<br>
				<input type="Numero" name="telefonos" placeholder="Telefono" value="{$r.telefono}">
				<br>
				Ubicacion:<br>
				<input type="text" name="ubicacion" placeholder="Direccion(*)" onkeyup="this.value=this.value.toUpperCase()" value="{$r.ubicacion}">
				<br>
				Correo Electronico:<br>
				<input type="text" name="correo_electronico" placeholder="Email (*)" onkeyup="this.value=this.value.toUpperCase()" value="{$r.correo_electronico}">
				<br>
				Sitio Web:<br>
				<input type="text" name="sitio_web" placeholder="Sitio Web (*)" onkeyup="this.value=this.value.toUpperCase()" value="{$r.sitio_web}">
				<p>
					<input type="hidden" name="accion" value="" >
					<input type="hidden" name="id_empresa" value="{$r.id_empresa}" >
					<input type="button" name="Aceptar" onclick="validar();" class="boton2" value="Aceptar">
					<input type="button" name="Cancelar" onclick="javascript:location.href='empresa.php';" class="boton2" value="Cancelar">
				</p>
				{/foreach}
				<p><b>(*)Campos Obligatorios</b></p>
			</form>
		</div>
	</body>
</html>