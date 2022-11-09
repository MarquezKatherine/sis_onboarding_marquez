<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../{$direc_css}" type="text/css">
		<meta http-equiv="Content-type" content="text/html; charset= utf-8"/>
	</head>
	<body>
		<div class="titulo_listado">
			<h1>
				HORARIOS
			</h1>
		</div>
		<div class="titulo_listado">
			<form name="formNuevo" method="post" action="horarios_nuevo.php">
				<a href="javascript:document.formNuevo.submit();">
					Nuevo>>>
				</a>
			</form>
		</div>
		<center>
			<table class="listado">
				<tr>
					<th>NRO</th><th>TURNO TRABAJO</th><th>HORARIO ENTRADA SALIDA</th><th>DIAS TRABAJADOS MES</th>
					<th><img src="../../imagenes/modificar.jpg" width= "20%"></th><th><img src="../../imagenes/borrar.jpg" width="20%"></th>
				</tr>
				{assign var="b" value="0"}
				{assign var="total" value="`$pagina-1`"}
				{assign var="a" value="`$numreg*$total`"}
				{assign var="b" value="`$b+1+$a`"}
				{foreach item=r from=$horarios}
				<tr>
					<td align="center">{$b}</td>
					<td>{$r.turno_trabajo}</td>
					<td>{$r.horario_entrada_y_salida}</td>
					<td align="center">{$r.dias_trabajados_mes}</td>
					<td align="center">
						<form name="FormModif{$r.id_horario}" method="post" action="horarios_modificar.php">
  					<input type="hidden" name="id_horario" value="{$r.id_horario}">
  					<a href="javascript:document.FormModif{$r.id_horario}.submit();" title="modificar Horario Sistema">
  						Modificar>>>
							</a>							
						</form>
					</td>
					<td align="center">
							<form name="formElimi{$r.id_horario}" method="post" action="horarios_eliminar.php">
							<input type="hidden" name="id_horario" value="{$r.id_horario}">
							<a href="javascript:document.formElimi{$r.id_horario}.submit();" title="Desea eliminar el horario sistema" onclick="javascript:return(confirm('Desea realmente eliminar el horario)); location.href='horarios_eliminar.php'">
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