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
          <h1>INGRESOS</h1>          
        </td>
        <td align="right" width="33%">
          <form name="formNuevo" method="post" action="ingresos_nuevo.php">
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
          <th>NRO</th><th>ESPECIALIDAD</th><th>ESPECIFICACION</th><th>FECHA</th><th>MONTO</th><th>FORMA COBRO</th><th>DESCRIPCION</th>
          <th><img src="../../imagenes/modificar.jpg" width="20%"></th><th><img src="../../imagenes/borrar.jpg" width="20%"></th>
        </tr>
        {assign var="b" value="1"}
        {foreach item=r from=$ingresos}
        <tr>
          <td align="center"> {$b} </td>
          <td> {$r.grado_especialidad}</td>
          <td> {$r.especificacion_ingreso}</td>
          <td> {$r.fecha_ingreso}</td>
          <td> {$r.monto_asignado}</td>
          <td> {$r.forma_cobro}</td>
          <td> {$r.descripcion_ingreso}</td>
          <td align="center">
            <form name="formModif {$r.id_ingreso}" method="post" action="ingreso_modificar.php">
              <input type="hidden" name="id_ingreso" value="{$r.id_ingreso}">
              <input type="hidden" name="id_asesor_especialidad" value="{$r.id_asesor_especialidad}">
              <input type="hidden" name="id_tipo_ingreso" value="{$r.id_tipo_ingreso}">
              <a href="javascript:document.formModif {$r.id_ingreso}.submit(); " title="Modificar Ingreso">
                Modificar>>
              </a>
            </form>
          </td>
          <td align="center">
            <form name="formElimi {$r.id_ingreso}" method="post" action="ingreso_eliminar.php">
              <input type="hidden" name="id_ingreso" value="{$r.id_ingreso}">
              <a href="javascript:document.formElimi {$r.id_ingreso}.submit(); " title="Eliminar Ingreso" onclick='javascript: return(confirm("Desea realmente Eliminar al ingreso ::: {$r.id_ingreso}?"));'>
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