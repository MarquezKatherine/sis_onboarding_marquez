<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{$direc_css}">	
</head>
<body>
	<div class="cabecera">
		<img src="sistema_web/logos/{$logo}" width="10%">
		<div class="titulo">
			SISTEMA CONTABLE "{$nombre}"
		</div>
		<div class="usuario">
			Usuario:<b>{$sesion.usuario}</b>
			Rol:<b>{$sesion.rol}</b>
		</div>
	</div>
</body>
</html>