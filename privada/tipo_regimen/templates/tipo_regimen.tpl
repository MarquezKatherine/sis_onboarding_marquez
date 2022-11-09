<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../{$direc_css}" type="text/css">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">

  </head>
  <body>
    <table width="100%" border="0">
      <tr>
        <td width="33%">
          <table border="0">
            <tr>
            </tr>            
          </table>
        </td>
        <td align="center" width="33%">
          <h1>TIPO REGIMEN</h1>          
        </td>
        <td align="right" width="33%">
          <form name="formNuevo" method="post" action="tipo_regimen_nuevo.php">
            <a href="javascript:document.formNuevo.submit();">
              Nuevo>>>
            </a>            
          </form>          
        </td>
      </tr>      
    </table>

    <center>
      <table class="listado">
        <tr>
          <th>NRO</th><th>RAZON SOCIAL</th><th>REGIMEN</th><th>FECHA CIERRE</th><th>DESCRIPCION</th>
          <th><img src="../../imagenes/modificar.jpg" width="20%"></th><th><img src="../../imagenes/borrar.jpg" width="20%"></th>
        </tr>
        {assign var="b" value="1"}
        {foreach item=r from=$tipo_regimen}
        <tr>
          <td align="center"> {$b} </td>
          <td> {$r.razon_social} </td>
          <td> {$r.regimen}</td>
          <td> {$r.fecha_cierre}</td>
          <td> {$r.descripcion_tipo_empresa}</td>
          <td align="center">
           <form name="formModif{$r.id_tipo_regimen}" method="post" action="tipo_regimen_modificar.php">
              <input type="hidden" name="id_tipo_regimen" value="{$r.id_tipo_regimen}">
              <input type="hidden" name="id_empresa" value="{$r.id_empresa}">
              <a href="javascript:document.formModif{$r.id_tipo_regimen}.submit();" title="Modificar Tipo Regimen">
                Modificar>>
              </a>
            </form>
          </td>
          <td align="center">
            <form name="formElimi{$r.id_tipo_regimen}" method="post" action="tipo_regimen_eliminar.php">
              <input type="hidden" name="id_tipo_regimen" value="{$r.id_tipo_regimen}">
              <a href="javascript:document.formElimi{$r.id_tipo_regimen}.submit();" title="Eliminar Regimen" onclick='javascript:return(confirm("Desea realmente el tipo de regimen ::: {$r.regimen}"));'>
                Eliminara>>
              </a>
            </form>
          </td>
          {assign var="b" value="`$b+1`"}
          {/foreach}
        </tr>
      </table>
    </center>

  </body>
</html>