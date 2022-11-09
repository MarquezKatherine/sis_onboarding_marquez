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
          <h1>INFORMES</h1>          
        </td>
        <td align="right" width="33%">
          <form name="formNuevo" method="post" action="informe_nuevo.php">
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
          <th>NRO</th><th>TOTAL INGRESO</th><th>TOTAL EGRESO</th><th>FECHA</th><th>DESCRIPCION INFORME</th>
          <th><img src="../../imagenes/modificar.jpg" width="20%"></th><th><img src="../../imagenes/borrar.jpg" width="20%"></th>
        </tr>
        {assign var="b" value="1"}
        {foreach item=r from=$informes}
        <tr>
          <td align="center"> {$b} </td>
          <td> {$r.monto_asignado}</td>
          <td> {$r.monto_asignado}</td>
          <td> {$r.fecha_informe}</td>
          <td> {$r.descripcion_informe}</td>
          <td align="center">
            <form name="formModif {$r.id_informe}" method="post" action="informe_modificar.php">
              <input type="hidden" name="id_informe" value="{$r.id_informe}">
              <input type="hidden" name="id_egreso" value="{$r.id_egreso}">
              <input type="hidden" name="id_ingreso" value="{$r.id_ingreso}">
              <a href="javascript:document.formModif {$r.id_informe}.submit(); " title="Modificar Informe">
                Modificar>>
              </a>
            </form>
          </td>
          <td align="center">
            <form name="formElimi{$r.id_informe}" method="post" action="informe_eliminar.php">
              <input type="hidden" name="id_informe" value="{$r.id_informe}">
              <a href="javascript:document.formElimi{$r.id_informe}.submit();" title="Eliminar Informe" onclick='javascript:return(confirm("Desea realmente Eliminar el Informe ::: {$r.fecha_informe}"));'>
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