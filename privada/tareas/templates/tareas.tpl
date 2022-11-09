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
          <h1>TAREAS</h1>          
        </td>
        <td align="right" width="33%">
          <form name="formNuevo" method="post" action="tarea_nuevo.php">
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
          <th>NRO</th><th>RAZON SOCIAL</th><th>TAREAS</th><th>FECHA INICIO</th><th>FECHA FIN</th>
          <th><img src="../../imagenes/modificar.jpg" width="20%"></th><th><img src="../../imagenes/borrar.jpg" width="20%"></th>
        </tr>
        {assign var="b" value="1"}
        {foreach item=r from=$tareas}
        <tr>
          <td align="center"> {$b} </td>
          <td> {$r.razon_social} </td>
          <td> {$r.descripcion_actividad} </td>
          <td>{$r.fecha_inicio}</td>
          <td>{$r.fecha_finalizacion}</td>
          <td align="center">
               <form name="formModif{$r.id_tarea}" method="post" action="tarea_modificar.php">
              <input type="hidden" name="id_tarea" value="{$r.id_tarea}">
              <input type="hidden" name="id_empresa" value="{$r.id_empresa}">
              <a href="javascript:document.formModif{$r.id_tarea}.submit();" title="Modificar Tarea">
                Modificar>>
              </a>
            </form>
          </td>
          <td align="center">
            <form name="formElimi{$r.id_tarea}" method="post" action="tareas_eliminar.php">
              <input type="hidden" name="id_tarea" value="{$r.id_tarea}">
              <a href="javascript:document.formElimi{$r.id_tarea}.submit();" title="Eliminar Tarea" onclick='javascript:return(confirm("Desea realmente la tare de fecha ::: {$r.fecha_inicio}"));'>
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