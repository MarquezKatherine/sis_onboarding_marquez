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
          <h1>EGRESOS</h1>          
        </td>
        <td align="right" width="33%">
          <form name="formNuevo" method="post" action="egresos_nuevo.php">
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
          <th>NRO</th><th>GRADO ESPECIALIDAD</th><th>ESPECIFICACION</th><th>FECHA</th><th>MONTO</th><th>FORMA PAGO</th><th>DESCRIPCION</th>
          <th><img src="../../imagenes/modificar.jpg" width="20%"></th><th><img src="../../imagenes/borrar.jpg" width="20%"></th>
        </tr>
        {assign var="b" value="1"}
        {foreach item=r from=$egresos}
        <tr>
          <td align="center"> {$b} </td>
          <td> {$r.grado_especialidad}</td>
          <td> {$r.especificacion_egreso}</td>
          <td> {$r.fecha_egreso}</td>
          <td> {$r.monto_asignado}</td>
          <td> {$r.forma_pago}</td>
          <td> {$r.descripcion_pago}</td>
          <td align="center">
            <form name="formModif {$r.id_egreso}" method="post" action="egreso_modificar.php">
              <input type="hidden" name="id_egreso" value="{$r.id_egreso}">
              <input type="hidden" name="id_asesor_especialidad" value="{$r.id_asesor_especialidad}">
              <input type="hidden" name="id_tipo_egreso" value="{$r.id_tipo_egreso}">
              <a href="javascript:document.formModif {$r.id_egreso}.submit(); " title="Modificar Egreso">
                Modificar>>
              </a>
            </form>
          </td>
          <td align="center">
            <form name="formElimi {$r.id_egreso}" method="post" action="egreso_eliminar.php">
              <input type="hidden" name="id_egreso" value="{$r.id_egreso}">
              <a href="javascript:document.formElimi {$r.id_egreso}.submit(); " title="Eliminar Egreso" onclick='javascript: return(confirm("Desea realmente Eliminar al egreso ::: {$r.id_egreso}?"));'>
                Eliminar>>
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