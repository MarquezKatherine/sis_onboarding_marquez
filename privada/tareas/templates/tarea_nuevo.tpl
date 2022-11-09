<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../{$direc_css}">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="../js/validar_tarea.js"></script>
	<link rel="stylesheet" type="text/css" href="../calendario/tcal.css">
		<script type="text/javascript" src="../calendario/tcal.js"></script>
		<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript">
		function buscar(){
			
			var d1, contenedor, url;
			contenedor = document.getElementById('empresa');
			contenedor2= document.getElementById('empresa_seleccionado');
			contenedor3= document.getElementById('empresa_insertada');
		
			
			d1 = document.formu.razon_social.value;
			d2 = document.formu.telefonos.value;
			d3 = document.formu.ubicacion.value;
			d4 = document.formu.correo_electronico.value;
				
			ajax =nuevoAjax();
			url = "ajax_buscar_empresa.php"
			param = "razon_social="+d1+"&telefonos="+d2+"&ubicacion="+d3+"&correo_electronico="+d4;
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
		function buscar_empresa(id_empresa){
			var d1, contenedor, url;
			contenedor = document.getElementById('empresa_seleccionado');
			contenedor2 = document.getElementById('empresa');
			document.formu.id_empresa.value = id_empresa;

			d1 = id_empresa;

			ajax = nuevoAjax();
			url = "ajax_buscar_empresa1.php";
			param = "id_empresa="+d1;
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
			function insertar_empresa(){
			var d1, contenedor, url;
			contenedor = document.getElementById('empresa_seleccionado');
			contenedor2 = document.getElementById('empresa');
			contenedor3 = document.getElementById('empresa_insertada');
			d1= document.formu.razon_social1.value;
			d2= document.formu.telefonos1.value;
			d3= document.formu.ubicacion1.value;
			d4= document.formu.correo_electronico1.value;
			d5= document.formu.sitio_web1.value;

			if(d1 == ""){
				alert("La Razon Social esta vacia");
				document.formu.razon_social1.focus();
				return;
			}

			if (d2=="") {
				alert("El Telefono es incorrecto o estan vacio");
				document.formu.telefonos1.focus();
				return;
			}

			if(d3 == ""){
				alert("La direccion esta vacia");
				document.formu.ubicacion1.focus();
				return;
			}

			if (d4 == ""){
				alert("El correo es incorrecto o estan vacio");
				document.formu.correo_electronico1.focus();
				return;
			}

			if(d5 == ""){
				alert("El sitio web esta vacio");
				document.formu.sitio_web1.focus();
				return;
			}
			
			ajax= nuevoAjax();
			url = "ajax_inserta_empresa.php";
			param = "razon_social1="+d1+"&telefonos1="+d2+"&ubicacion1="+d3+"&correo_electronico1="+d4+"&sitio_web1="+d5;
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
	<h1>REGISTRAR TAREA</h1>
	<center>
		<form action="tarea_nuevo1.php" method="post" name="formu">
			<table border="1">
				<tr>
					<th align="right"> Seleccione la Empresa(*)</th>
					<th>:</th>
					<td>
						<table>
							<tr>
								<td>
									<b>Razon Social</b><br />
									<input type="text" name="razon_social" value="" size="10" onkeyup="buscar()">
								</td>
								<td>
									<b>Telefono</b><br />
									<input type="text" name="telefonos" value="" size="10" onkeyup="buscar()">
								</td>
								<td>
									<b>Ubicacion</b><br />
									<input type="text" name="ubicacion" value="" size="10" onkeyup="buscar()">
								</td>
								<td>
									<b>Correo Electronico</b><br />
									<input type="text" name="correo_electronico" value="" size="10" onkeyup="buscar()">
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
									<div id="empresa"> </div>
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
									<div id="empresa_seleccionado"> </div>
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
									<input type="hidden" name="id_empresa">
									<div id="empresa_insertada"> </div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th align="right">Fecha Inicio (*)</th>
					<th>:</th>
					<td><input type="text" name="fecha_inicio" size="15" placeholder="Inicio" class="tcal"> </td>
				</tr>
				<tr>
					<th align="right">Fecha Finalizacion (*)</th>
					<th>:</th>
					<td><input type="text" name="fecha_finalizacion" size="15" placeholder="Finalizacion" class="tcal"> </td>
				</tr>
				<tr>
					<th align="right">Descripcion de la Tarea (*)</th>
					<th>:</th>
					<td><textarea placeholder="Describa la Tarea....(*)......" cols="40" name="descripcion_actividad" ></textarea> </td>
				</tr>
				<tr>
				<td align="center" colspan="3">
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" onclick="validar();">
				<input type="button" value="Cancelar" onclick="javascript:location.href='tareas.php';">
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