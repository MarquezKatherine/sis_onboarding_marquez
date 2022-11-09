<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../{$direc_css}">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="../js/validar_trabajos.js"></script>
	<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript">
		function buscar(){
			
			var d1, contenedor, url;
			contenedor = document.getElementById('personas1');
			contenedor2= document.getElementById('personas1_seleccionado');
			contenedor3= document.getElementById('personas1_insertada');
					
			d1 = document.formu.ci.value;
			d2 = document.formu.nombres.value;
			d3 = document.formu.ap.value;

				
			ajax =nuevoAjax();
			url = "ajax_buscar_personas1.php"
			param = "ci="+d1+"&nombres="+d2+"&ap="+d3;
			ajax.open("POST", url, true);
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			ajax.onreadystatechange = function(){
				if (ajax.readyState == 4){
					contenedor.innerHTML = ajax.responseText;
					contenedor2.innerHTML = "";
					contenedor3.innerHTML = "";
				}
			}
			ajax.send(param);
		}
		function buscar_personas1(id_persona1){
			var d1, contenedor, url;
			contenedor = document.getElementById('personas1_seleccionado');
			contenedor2 = document.getElementById('personas1');
			document.formu.id_persona1.value = id_persona1;

			d1 = id_persona1;

			ajax = nuevoAjax();
			url = "ajax_buscar_personas1_1.php";
			param = "id_persona1="+d1;
			ajax.open("POST", url, true);
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			ajax.onreadystatechange = function(){
				if (ajax.readyState == 4){
					contenedor.innerHTML = ajax.responseText;
					contenedor2.innerHTML = "";
				}
			}
			ajax.send(param);
		}

		function insertar_personas1(){
			var d1, contenedor, url;
			contenedor = document.getElementById('personas1_seleccionado');
			contenedor2 = document.getElementById('personas1');
			contenedor3 = document.getElementById('personas1_insertada');
			d1 = document.formu.ci1.value;
			d2 = document.formu.nombres1.value;
			d3 = document.formu.ap1.value;
			d4 = document.formu.am1.value;
			d5 = document.formu.direccion1.value;
			d6 = document.formu.fec_nac1.value;

			if(d1 == ""){
				alert("La cedula de identidad es incorrecta o el campo esta vacio");
				document.formu.ci1.focus();
				return;
			}

			if(d2 == ""){
				alert("Los nombres son incorrectos o el campo esta vacio");
				document.formu.nombres1.focus();
				return;
			}

			if(d5==""){
				alert("La direccion es incorrecto o el campo esta vacio");
				document.formu.direccion1.focus();
				return;
			}

			if(d6 == ""){
				alert("La fecha de nacimiento es incorrecta o esta vacia");
				document.formu.fec_nac1.focus();
				return;
			}

			ajax= nuevoAjax();
			url = "ajax_inserta_personas1.php";
			param = "ci1="+d1+"&nombres1="+d2+"&ap1="+d3+"&am1="+d4+"&direccion1="+d5+"&fec_nac1="+d6;
			ajax.open("POST", url, true);
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

			ajax.onreadystatechange = function(){
				if(ajax.readyState == 4){
					contenedor.innerHTML = "";
					contenedor2.innerHTML = "";
					contenedor3.innerHTML = ajax.responseText;
				}
			}

			ajax.send(param);
		}
	</script>
</head>
<body>
		<h1>REGISTRAR TRABAJOS</h1>
		<center>
		<form action="trabajos_nuevo1.php" method="post" name="formu">
			<table border="1">
				<tr>
					<th align="right">Seleccione la Persona (*)</th>
					<th>:</th>
					<td>
						<table>
							<tr>
								<td>
									<b><center>Cedula de Identidad</center></b><br />
									<input type="text" name="ci" value="" size="10" onkeyup="buscar()">
								</td>
								<td>
									<b><center>Nombres</center></b><br />
									<input type="text" name="nombres" value="" size="10" onkeyup="buscar()">
								</td>
								<td>
									<b><center>Apellido Paterno</center></b><br />
									<input type="text" name="ap" value="" size="10" onkeyup="buscar()">
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="6">
						<table width="100%">
							<tr>
								<td colspan="3">
									<div id="personas1"> </div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="6">
						<table width="100%">
							<tr>
								<td colspan="3">
									<div id="personas1_seleccionado"> </div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="6">
						<table width="100%">
							<tr>
								<td colspan="3">
									<input type="hidden" name="id_persona1">
									<div id="personas1_insertada"> </div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th align="right">Trabajo (*)</th>
					<th>:</th>
					<td><input type="text" name="trabajo" size="15" placeholder="Trabajo"> </td>
				</tr>
				<tr>
					<th align="right">Salario (*)</th>
					<th>:</th>
					<td><input type="text" name="salario" size="15" placeholder="Salario"> </td>
				</tr>
				<tr>
				<td align="center" colspan="3">			
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" onclick="validar();">
				<input type="button" value="Cancelar" onclick="javascript:location.href='trabajos.php';">
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td colspan="3" align="center"><b>(*) Campos Obligatorios</b></td>
		</tr>
	</table>
</form>
</center>
</body>
</html>