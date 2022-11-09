<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../{$direc_css}" type="text/css">
		<meta http-equiv="Content-type" content="text/html; charset= utf-8"/>
	</head>
	<body>
		<div class="titulo_listado">
			<h1>
				INFORMACIONES COMPLEMENTARIAS
			</h1>
		</div>
		<div class="titulo_listado">
			<form name="formNuevo" method="post" action="informacion_complementaria_nuevo.php">
				<a href="javascript:document.formNuevo.submit();">
					Nuevo>>>
				</a>
			</form>
		</div>
		<center>
			<table class="listado">
				<tr>
					<th>NRO</th><th>PERIODO FUNCIONAMIENTO</th><th>UTILIDADES</th><th>PERDIDAS</th><th>DEUDAS TRIBUTARIAS</th>
					<th><img src="../../imagenes/modificar.jpg" width= "20%"></th><th><img src="../../imagenes/borrar.jpg" width="20%"></th>
				</tr>
				{assign var="b" value="0"}
				{assign var="total" value="`$pagina-1`"}
				{assign var="a" value="`$numreg*$total`"}
				{assign var="b" value="`$b+1+$a`"}
				{foreach item=r from=$informaciones_complementarias}
				<tr>
					<td align="center">{$b}</td>
					<td>{$r.periodo_funcionamiento}</td>
					<td>{$r.utilidades_historicas}</td>
					<td align="center">{$r.perdidas_historicas}</td>
					<td align="center">{$r.deudas_tributarias}</td>
					<td align="center">
			               <form name="formModif{$r.id_informacion_complementaria}" method="post" action="informacion_complementaria_modificar.php">
			              <input type="hidden" name="id_informacion_complementaria" value="{$r.id_informacion_complementaria}">
			              <input type="hidden" name="id_empresa" value="{$r.id_empresa}">
			              <a href="javascript:document.formModif{$r.id_informacion_complementaria}.submit();" title="Modificar Informacion">
			                Modificar>>
			              </a>						
						</form>
					</td>
					<td align="center">
			            <form name="formElimi{$r.id_informacion_complementaria}" method="post" action="informacion_complementaria_eliminar.php">
			              <input type="hidden" name="id_informacion_complementaria" value="{$r.id_informacion_complementaria}">
			              <a href="javascript:document.formElimi{$r.id_informacion_complementaria}.submit();" title="Eliminar la informacion Complementaria" onclick='javascript:return(confirm("Desea realmente Eliminar la Informacion Complementaria"));'>
			                Eliminara>>
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