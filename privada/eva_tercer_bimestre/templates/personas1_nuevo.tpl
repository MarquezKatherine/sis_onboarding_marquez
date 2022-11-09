<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../{$direc_css}">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="../js/validar_personas1.js"></script>
	<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript">
		function buscar(){
			
			var d1, contenedor, url;
			contenedor = document.getElementById('cargos');
			contenedor2= document.getElementById('cargos_seleccionado');
			contenedor3= document.getElementById('cargos_insertada');
		
			
			d1 = document.formu.nombre.value;
				
			ajax =nuevoAjax();
			url = "ajax_buscar_cargos.php"
			param = "nombre="+d1;
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
		function buscar_cargos(fk_cargo){
			var d1, contenedor, url;
			contenedor = document.getElementById('cargos_seleccionado');
			contenedor2 = document.getElementById('cargos');
			document.formu.fk_cargo1.value = fk_cargo;
			
			d1 = fk_cargo;
			ajax = nuevoAjax();
			url = "ajax_buscar_cargos1.php";
			param = "fk_cargo="+d1;
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
		function insertar_cargos(){
			var d1, contenedor, url;
			contenedor = document.getElementById('cargos_seleccionado');
			contenedor2 = document.getElementById('cargos');
			contenedor3 = document.getElementById('cargos_insertada');
			d1= document.formu.nombre1.value;

			if(d1 == ""){
				alert("El nombre se encuentra vacio");
				document.formu.nombre1.focus();
				return;
			}

			
			ajax= nuevoAjax();
			url = "ajax_inserta_cargos.php";
			param = "nombre1="+d1;
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
	<h1>REGISTRAR CARGO</h1>
	<center>
		<form action="personas1_nuevo1.php" method="post" name="formu">
			<table border="1">
				<tr>
					<th align="right"> Seleccione el cargo(*)</th>
					<th>:</th>
					<td>
						<table>
							<tr>
								<td>
									<b>Cargo</b><br />
									<input type="text" name="nombre" value="" size="10" onkeyup="buscar()">
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
									<div id="cargos"> </div>
									<input type="hidden" name="fk_cargo1">
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
									<div id="cargos_seleccionado"> </div>
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
									<input type="hidden" name="fk_cargo">
									<div id="cargos_insertada"> </div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th align="right">Nombres (*)</th>
					<th>:</th>
					<td><input type="text" name="nombres" size="15" placeholder="Nombres"> </td>
				</tr>
				<tr>
					<th align="right">Cedula de Identidad (*)</th>
					<th>:</th>
					<td><input type="text" name="ci" size="15" placeholder="Cedula de Identidad"> </td>
				</tr>
				<tr>
					<th align="right">Telefono (*)</th>
					<th>:</th>
					<td><input type="text" name="telef" size="15" placeholder="Telefono"> </td>
				</tr>
			<tr>
				<td align="center" colspan="3">
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" onclick="validar();">
				<input type="button" value="Cancelar" onclick="javascript:location.href='personas1.php';">
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