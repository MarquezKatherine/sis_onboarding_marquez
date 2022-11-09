<!DOCTYPE html>
<head>
<link rel="stylesheet" href="{$direc_css}" type="text/css">
</head>
<body>
<form action="claves/"method="post" target="cuerpo">
{if $nick == ""}
<div class="formu_ingreso">
<p><h5>Ingresar al Sistema</h5></p>
<p><h2>Inicio de Sesion:</h2> <input type="text" name="nick" size="11" value="" class="limpiar"></p>
<p><h2>Contraseña:</h2><input type="password" name="password" size="11" value="" ></p>
<h3><input type="submit" name="accion" value="Ingresar" size="20" class="boton"></h3>
</div>
{/if}
</form>
</body>
</html>