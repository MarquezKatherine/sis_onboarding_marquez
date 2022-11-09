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
          <h1>ASESORES ESPECIALIDADES</h1>          
        </td>
        <td align="right" width="33%">
          <form name="formNuevo" method="post" action="asesores_especialidades_nuevo.php">
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
          <th>NRO</th><th>ASESOR</th><th>ESPECIFICACION</th><th>FECHA ADQUISICION ESPECIALIDAD</th><th>GRADO ESPECIALIDAD</th><th>TIPO ACREDITACION</th>
          <th><img src="../../imagenes/modificar.jpg" width="20%"></th><th><img src="../../imagenes/borrar.jpg" width="20%"></th>
        </tr>
        {assign var="b" value="1"}
        {foreach item=r from=$asesores_especialidades}
        <tr>
          <td align="center"> {$b} </td>
          <td> {$r.nombres} {$r.apellidos} </td>
          <td> {$r.especificacion}</td>
          <td> {$r.fecha_adquisicion_especialidad}</td>
          <td> {$r.grado_especialidad}</td>
          <td> {$r.tipo_acreditacion}</td>
          <td align="center">
            <form name="formModif {$r.id_asesor_especialidad}" method="post" action="asesor_especialidad_modificar.php">
              <input type="hidden" name="id_asesor_especialidad" value="{$r.id_asesor_especialidad}">
              <input type="hidden" name="id_asesor" value="{$r.id_asesor}">
              <input type="hidden" name="id_especialidad" value="{$r.id_especialidad}">
              <a href="javascript:document.formModif {$r.id_asesor_especialidad}.submit(); " title="Modificar Asesor Especialidad">
                Modificar>>
              </a>
            </form>
          </td>
          <td align="center">
          <form name="formElimi{$r.id_asesor_especialidad}" method="post" action="asesores_especialidades_eliminar.php">
          <input type="hidden" name="id_asesor_especialidad" value="{$r.id_asesor_especialidad}">
          <a href="javascript:document.formElimi{$r.id_asesor_especialidad}.submit();" title="Eliminar asesor especialidad sistema" onclick="javascript:return(confirm('Desea realmente eliminar a el Asesor Especialidad {$r.especificacion}')); location.href='asesores_especialidades_eliminar.php'">
          Eliminar>>>
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