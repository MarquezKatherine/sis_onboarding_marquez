<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../{$direc_css}" type="text/css">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <script type="text/javascript" src="../../ajax.js"></script>
  <script type="text/javascript" src="../js/buscar_trabajos.js"></script>

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
          <h1>TRABAJOS</h1>          
        </td>
        <td align="right" width="33%">
          <form name="formNuevo" method="post" action="trabajos_nuevo.php">
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
            <b>PERSONA</b><br />
          <select name="nombres" onchange="buscar_trabajos()">
          <option value="">--Seleccione--</option>
          {foreach item=r from=$personas1}
          <option value="{$r.nombres}">{$r.nombres}</option>
          {/foreach}
        </select>
          </th>
          <th>
            <b>TRABAJO</b><br />
            <input type="text" name="trabajo" value="" size="10" onkeyup="buscar_trabajos()">
          </th>
          <th>
            <b>SALARIO</b><br />
            <input type="text" name="salario" value="" size="10" onkeyup="buscar_trabajos()">
          </th>
        </tr>
      </table>
    </form>
  </center>
<!-------FIN BUSCADOR------>

    <center>
      <div id="trabajos">
      <table class="listado">
        <tr>
          <th>NRO</th><th>PERSONA</th><th>TRABAJO</th><th>SALARIO</th>
        </tr>
        {assign var="b" value="1"}
        {foreach item=r from=$trabajos}
        <tr>
          <td align="center"> {$b} </td>
          <td> {$r.nombres}</td>
          <td> {$r.trabajo}</td>
          <td> {$r.salario} </td>
          {assign var="b" value="`$b+1`"}
          {/foreach}
        </tr>
      </table>
  </center>
 </body>
</html>