<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../{$direc_css}" type="text/css">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <script type="text/javascript" src="../../ajax.js"></script>
  <script type="text/javascript" src="../js/buscar_desarrolladores.js"></script>

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
          <h1>DESARROLLADORES</h1>          
        </td>
        <td align="right" width="33%">
          <form name="formNuevo" method="post" action="desarrolladores_nuevo.php">
            <a href="javascript:document.formNuevo.submit();">
              Nuevo>>>
            </a>            
          </form>          
        </td>
      </tr>      
    </table>
<!-----INICIO BUSCADOR----->
  <center>
    <form action="#" method="post" name="formu">
      <table border="1" class="listado">
        <tr>
            <th>
            <b>Turno de Trabajo</b><br />
            <input type="text" name="turno_trabajo" value="" size="10" onkeyup="buscar_desarrolladores()">
          </th>
          <th>
            <b>Nombres</b><br />
            <input type="text" name="nombres" value="" size="10" onkeyup="buscar_desarrolladores()">
          </th>
          <th>
            <b>Apellidos</b><br />
            <input type="text" name="apellidos" value="" size="10" onkeyup="buscar_desarrolladores()">
          </th>
          <th>
            <b>Email</b><br />
             <input type="email" name="email" value="" size="10" onkeyup="buscar_desarrolladores()">
          </th>
          <th>
            <b>Telefono</b><br />
            <input type="text" name="telefono" value="" size="10" onkeyup="buscar_desarrolladores()">
          </th>
        </tr>
      </table>
    </form>
  </center>
<!-------FIN BUSCADOR------>

    <center>
      <div id="desarrolladores1">
      <table class="listado">
        <tr>
          <th>NRO</th><th>TURNO TRABAJO</th><th>DESARROLLADOR</th><th>EMAIL</th><th>TELEFONO</th><th>FECHA INGRESO</th><th>GENERO</th>
          <th><img src="../../imagenes/modificar.jpg" width="20%"></th><th><img src="../../imagenes/borrar.jpg" width="20%"></th>
        </tr>
        {assign var="b" value="1"}
        {foreach item=r from=$desarrolladores}
        <tr>
          <td align="center"> {$b} </td>
          <td> {$r.turno_trabajo} </td>
          <td> {$r.nombres} {$r.apellidos}</td>
          <td> {$r.email} </td>
          <td> {$r.telefono} </td>
          <td> {$r.fecha_ingreso} </td>
          <td> {$r.genero} </td>
          <td align="center">
            <form name="formModif{$r.id_desarrollador}" method="post" action="desarrolladores_modificar.php">
              <input type="hidden" name="id_desarrollador" value="{$r.id_desarrollador}">
              <input type="hidden" name="id_horario" value="{$r.id_horario}">
              <a href="javascript:document.formModif{$r.id_desarrollador}.submit();" title="Modificar Desarrollador">
                Modificar>>
              </a>
            </form>
          </td>
          <td align="center">
            <form name="formElimi {$r.id_desarrollador}" method="post" action="desarrollador_eliminar.php">
              <input type="hidden" name="id_desarrollador" value="{$r.id_desarrollador}">
              <a href="javascript:document.formElimi {$r.id_desarrollador}.submit(); " title="Eliminar Desarrollador" onclick='javascript: return(confirm("Desea realmente Eliminar al desarrollador ::: {$r.id_desarrollador}?"));'>
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