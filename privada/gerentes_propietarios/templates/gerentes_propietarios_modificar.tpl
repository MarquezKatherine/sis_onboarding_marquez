<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../{$direc_css}">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="../js/validar_gerente_propietario.js"></script>
</head>
<body>

	<div class="formu_ingreso_datos">
		<form action="gerentes_propietarios_modificar1.php" method="post" name="formu">
			<h2>MODIFICAR GERENTES PROPIETARIOS</h2>
			<b>Empresa (*)</b>
			<select name="id_empresa">
				{foreach item=r from=$persona}
				<option value="{$r.id_empresa}">{$r.razon_social}</option>
				{/foreach}
				<!--
				{foreach item=r from=$empresa}
				<option value="{$r.id_empresa}">{$r.razon_social}</option>
				{/foreach}-->
			</select>
			{foreach item=r from=$gerentes_propietarios}
			<p>
				<input type="text" name="nombres" size="15" placeholder="Nombres" value="{$r.nombres}" onkeyup="this.value=this.value.toUpperCase()"> (*)
			</p>
			<p>
				<input type="text" name="apellidos" size="15" placeholder="Apellidos" value="{$r.apellidos}" onkeyup="this.value=this.value.toUpperCase()"> (*)
			</p>
			<p>
				<input type="text" name="telefono" size="15" placeholder="Telefono" value="{$r.telefono}" onkeyup="this.value=this.value.toUpperCase()"> (*)
			</p>
			<p>
				<input type="text" name="identificacion_tributaria" size="15" placeholder="Identificacion Tributaria" value="{$r.identificacion_tributaria}" onkeyup="this.value=this.value.toUpperCase()"> (*)
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="hidden" name="id_gerente_propietario" value="{$r.id_gerente_propietario}">
				<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value="Cancelar" onclick="javascript:location.href='gerentes_propietarios.php';" class="boton2">
			</p>
			{/foreach}
			<p><b>(*) Campos Obligatorios</b></p>
		</form>
	</div>
</body>
</html>