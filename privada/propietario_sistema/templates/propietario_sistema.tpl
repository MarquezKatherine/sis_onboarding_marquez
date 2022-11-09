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
          <h1>PROPIETARIO SISTEMA</h1>          
        </td>
        <td align="right" width="33%">
          <form name="formNuevo" method="post" action="propietario_sistema_nuevo.php">
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
          <th>NRO</th><th>NOMBRES</th><th>FECHA INGRESO</th><th>ESPECIALIDAD</th><th>NOMBRE</th>
          <th><img src="../../imagenes/modificar.jpg" width="20%"></th><th><img src="../../imagenes/borrar.jpg" width="20%"></th>
        </tr>
        {assign var="b" value="1"}
        {foreach item=r from=$propietario_sistema}
        <tr>
          <td align="center"> {$b} </td>
          <td> {$r.nombres} </td>
          <td> {$r.fecha_ingreso_cargo} </td>
          <td> {$r.especialidad} </td>
          <td> {$r.nombre} </td>
          <td align="center">
            <form name="formModif {$r.id_propietario_sistema}" method="post" action="propietario_modificar.php">
              <input type="hidden" name="id_propietario_sistema" value="{$r.id_propietario_sistema}">
              <input type="hidden" name="id_sistema_web" value="{$r.id_sistema_web}">
              <a href="javascript:document.formModif {$r.id_propietario_sistema}.submit(); " title="Modificar Propietario">
                Modificar>>
              </a>
            </form>
          </td>
          <td align="center">
            <form name="formElimi {$r.id_propietario_sistema}" method="post" action="propietario_eliminar.php">
              <input type="hidden" name="id_propietario_sistema" value="{$r.id_propietario_sistema}">
              <a href="javascript:document.formElimi {$r.id_propietario_sistema}.submit(); " title="Eliminar Propietario" onclick='javascript: return(confirm("Desea realmente Eliminar a la empresa ::: {$r.id_propietario_sistema}?"));'>
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