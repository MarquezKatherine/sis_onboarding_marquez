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
          <h1>ESPECIALIDADES</h1>          
        </td>
        <td align="right" width="33%">
          <form name="formNuevo" method="post" action="especialidades_nuevo.php">
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
          <th>NRO</th><th>ESPECIALIZACION</th><th>EXPERIENCIA</th><th>LUGAR ESPECIALIZACION</th><th>ESPECIFICACION</th><th>CURRICULUM</th><th>DATOS</th>
        <th><img src="../../imagenes/modificar.jpg" width="20%"></th><th><img src="../../imagenes/borrar.jpg" width="20%"></th>
        </tr>
        {assign var="b" value="1"}
        {foreach item=r from=$especialidades}
        <tr>
          <td align="center"> {$b} </td>
          <td> {$r.especializacion} </td>
          <td> {$r.experiencia}</td>
          <td> {$r.lugar_especializacion}</td>
          <td> {$r.especificacion}</td>
          <td> {$r.curriculum}</td>
          <td> {$r.datos_complementarios}</td>
          <td align="center">
             <form name="formModif{$r.id_especialidad}" method="post" action="especialidades_modificar.php">
              <input type="hidden" name="id_especialidad" value="{$r.id_especialidad}">
              <input type="hidden" name="id_tipo_especialidad" value="{$r.id_tipo_especialidad}">
              <a href="javascript:document.formModif{$r.id_especialidad}.submit();" title="Modificar Especialidades">
                Modificar>>
              </a>
            </form>
          </td>
          <td align="center">
            <form name="formElimi {$r.id_especialidad}" method="post" action="especialidad_eliminar.php">
              <input type="hidden" name="id_especialidad" value="{$r.id_especialidad}">
              <a href="javascript:document.formElimi {$r.id_especialidad}.submit(); " title="Eliminar Especialidad" onclick='javascript: return(confirm("Desea realmente Eliminar la especialidad ::: {$r.id_especialidad}?"));'>
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