<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../{$direc_css}" type="text/css">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <script type="text/javascript" src="../../ajax.js"></script>
  <script type="text/javascript" src="../js/buscar_personas1.js"></script>

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
          <h1>PERSONAS</h1>          
        </td>
        <td align="right" width="33%">
          <form name="formNuevo" method="post" action="personas1_nuevo.php">
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
            <b>CARGOS</b><br />
          <select name="nombre" onchange="buscar_personas1()">
          <option value="">--Seleccione--</option>
          {foreach item=r from=$cargos}
          <option value="{$r.nombre}">{$r.nombre}</option>
          {/foreach}
        </select>
          </th>
          <th>
            <b>NOMBRES</b><br />
            <input type="text" name="nombres" value="" size="10" onkeyup="buscar_personas1()">
          </th>
          <th>
            <b>CI</b><br />
            <input type="text" name="ci" value="" size="10" onkeyup="buscar_personas1()">
          </th>
           <th>
            <b>TELEFONO</b><br />
            <input type="text" name="telef" value="" size="10" onkeyup="buscar_personas1()">
          </th>
        </tr>
      </table>
    </form>
  </center>
<!-------FIN BUSCADOR------>

    <center>
      <div id="personas1">
      <table class="listado">
        <tr>
          <th>NRO</th><th>CARGOS</th><th>NOMBRES</th><th>CI</th><th>TELEFONO</th>
        </tr>
        {assign var="b" value="1"}
        {foreach item=r from=$personas1}
        <tr>
          <td align="center"> {$b} </td>
          <td> {$r.nombre}</td>
          <td> {$r.nombres}</td>
          <td> {$r.ci}</td>
          <td> {$r.telef} </td>
          {assign var="b" value="`$b+1`"}
          {/foreach}
        </tr>
      </table>
  </center>
 </body>
</html>