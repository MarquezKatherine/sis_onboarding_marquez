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
          <h1>EMPRESA</h1>          
        </td>
        <td align="right" width="33%">
          <form name="formNuevo" method="post" action="empresa_nuevo.php">
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
          <th>NRO</th><th>RAZON SOCIAL</th><th>TELEFONO</th><th>UBICACION</th><th>CORREO ELECTRONICO</th><th>SITIO WEB</th><th>NOMBRE</th>
          <th><img src="../../imagenes/modificar.jpg" width="20%"></th><th><img src="../../imagenes/borrar.jpg" width="20%"></th>
        </tr>
        {assign var="b" value="1"}
        {foreach item=r from=$empresa}
        <tr>
          <td align="center"> {$b} </td>
          <td> {$r.razon_social} </td>
          <td> {$r.telefonos} </td>
          <td> {$r.ubicacion} </td>
          <td> {$r.correo_electronico} </td>
          <td> {$r.sitio_web} </td>
          <td> {$r.nombre} </td>
          <td align="center">
            <form name="FormModif{$r.id_empresa}" method="post" action="empresa_modificar.php">
            <input type="hidden" name="id_empresa" value="{$r.id_empresa}">
            <a href="javascript:document.FormModif{$r.id_empresa}.submit();" title="modificar empresa">
              Modificar>>>
              </a>  
            </form>
          </td>
          <td align="center">
            <form name="formElimi {$r.id_empresa}" method="post" action="empresa_eliminar.php">
              <input type="hidden" name="id_empresa" value="{$r.id_empresa}">
              <a href="javascript:document.formElimi {$r.id_empresa}.submit(); " title="Eliminar Empresa" onclick='javascript: return(confirm("Desea realmente Eliminar a la empresa ::: {$r.id_empresa}?"));'>
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