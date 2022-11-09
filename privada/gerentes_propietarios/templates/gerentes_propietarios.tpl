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
          <h1>GERENTES_PROPIETARIOS</h1>          
        </td>
        <td align="right" width="33%">
          <form name="formNuevo" method="post" action="gerentes_propietarios_nuevo.php">
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
          <th>NRO</th><th>RAZON SOCIAL</th><th>GERENTE</th>
          <th><img src="../../imagenes/modificar.jpg" width="20%"></th><th><img src="../../imagenes/borrar.jpg" width="20%"></th>
        </tr>
        {assign var="b" value="1"}
        {foreach item=r from=$gerentes_propietarios}
        <tr>
          <td align="center"> {$b} </td>
          <td> {$r.razon_social} </td>
          <td> {$r.nombres} {$r.apellidos}</td>
          <td align="center">
            <form name="formModif{$r.id_gerente_propietario}" method="post" action="gerentes_propietarios_modificar.php">
              <input type="hidden" name="id_gerente_propietario" value="{$r.id_gerente_propietario}">
              <input type="hidden" name="id_empresa" value="{$r.id_empresa}">
              <a href="javascript:document.formModif{$r.id_gerente_propietario}.submit();" title="Modificar Gerente Propietario">
                Modificar>>
              </a>
            </form>
          </td>
          <td align="center">
            <form name="formElimi{$r.id_gerente_propietario}" method="post" action="gerentes_propietarios_eliminar.php">
              <input type="hidden" name="id_gerente_propietario" value="{$r.id_gerente_propietario}">
              <a href="javascript:document.formElimi{$r.id_gerente_propietario}.submit();" title="Eliminar Gerente Propietario" onclick='javascript:return(confirm("Desea realmente Eliminar al Gerente ::: {$r.nombres} {$r.apellidos}"));'>
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