<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../{$direc_css}" type="text/css">
		<meta http-equiv="Content-type" content="text/html; charset= utf-8"/>
		<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript" src="../js/buscar_asesores.js"></script>
	</head>
	<body>
		<div class="titulo_listado">
			<h1>
				ASESORES
			</h1>
		</div>
		<div class="titulo_listado">
			<form name="formNuevo" method="post" action="asesor_nuevo.php">
				<a href="javascript:document.formNuevo.submit();">
					Nuevo>>>
				</a>
			</form>
		</div>
		<!-----INICIO BUSCADOR----->
	<center>
		<form action="#" method="post" name="formu">
			<table border="1" class="listado">
				<tr>
					<th>
						<b>Nombres</b><br />
						<input type="text" name="nombres" value="" size="10" onkeyup="buscar_asesores()">
					</th>
					<th>
						<b>Apellidos</b><br />
						<input type="text" name="apellidos" value="" size="10" onkeyup="buscar_asesores()">
					</th>
					<th>
						<b>C.I.</b><br />
						<input type="text" name="cedula_identidad" value="" size="10" onkeyup="buscar_asesores()">
					</th>
					<th>
						<b>REGISTRO UNIVERSITARIO</b><br />
						<input type="text" name="registro_universitario" value="" size="10" onkeyup="buscar_asesores()">
					</th>
				</tr>
			</table>
		</form>
	</center>
<!-------FIN BUSCADOR------>
	<center>
		<div id="asesores1">
			<table class="listado">
				<tr>
					<th>NRO</th><th>CI</th><th>NOMBRES</th><th>APELLIDOS</th><th>EMAIL</th><th>REGISTRO UNIVERSITARIO</th><th>TELEFONO</th>
					<th><img src="../../imagenes/modificar.jpg" width= "20%"></th><th><img src="../../imagenes/borrar.jpg" width="20%"></th>
				</tr>
				{assign var="b" value="0"}
				{assign var="total" value="`$pagina-1`"}
				{assign var="a" value="`$numreg*$total`"}
				{assign var="b" value="`$b+1+$a`"}
				{foreach item=r from=$asesores}
				<tr>
					<td align="center">{$b}</td>
					<td>{$r.cedula_identidad}</td>
					<td>{$r.nombres}</td>
					<td align="center">{$r.apellidos}</td>
					<td align="center">{$r.email}</td>
					<td align="center">{$r.registro_universitario}</td>
					<td align="center">{$r.telefono}</td>
					<td align="center">
							<form name="FormModif{$r.id_asesor}" method="post" action="asesor_modificar.php">
  					<input type="hidden" name="id_asesor" value="{$r.id_asesor}">
  					<a href="javascript:document.FormModif{$r.id_asesor}.submit();" title="modificar asesor Sistema">
  						Modificar>>>
							</a>							
						</form>
						 </td>
							<td align="center">
							<form name="formElimi{$r.id_asesor}" method="post" action="asesores_eliminar.php">
							<input type="hidden" name="id_asesor" value="{$r.id_asesor}">
							<a href="javascript:document.formElimi{$r.id_asesor}.submit();" title="eliminar asesor sistema" onclick="javascript:return(confirm('Desea realmente eliminar a el asesor del sistema {$r.nombres} {$r.apellidos}')); location.href='asesores_eliminar.php'">
							Eliminar>>>
							</a>
						</form>
					</td>
					{assign var="b" value="`$b+1`"}
					{/foreach}
				</tr>
			</table>


			<table>
				<tr align="center">
					<td>
						{if !empty($urlback)}
						<a onclick="location.href='{$urlback}'" style="font-family: Verdana; font-size: 9px; cursor: pointer";>&laquo; Anterior</a>
						{/if}
						{if !empty($paginas)}
							{foreach from=$paginas item=pag}
								{if $pag.npag== $pagina}
									{if $pagina neq '1'}|{/if} <b style="color:#FB992F; font-size: 12px;"> {$pag.npag}</b>
									{else}
									|<a onclick="location.href='{$pag.pagV}'" style="cursor: pointer;">{$pag.npag}</a>
									{/if}
									{/foreach}
									{/if}
									{if $numpaginas gt $numbotones and !empty($urlnext) and $pagina lt $numpaginas}
									| <a onclick="location.href='{$urlnext}'" style="font-family: Verdana; font-size: 9px; cursor: pointer">Siguinte&raquo;</a>
	
									{/if}
					</td>					
				</tr>
			</table>
		</center>
</body>
</html>