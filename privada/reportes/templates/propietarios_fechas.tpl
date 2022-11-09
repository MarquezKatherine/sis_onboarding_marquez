<!DOCTYPE html>
<html lang="esp">
	<head>
		<link rel="stylesheet" href="../{$direc_css}" type="text/css">
		<link rel="stylesheet" type="text/css" href="../calendario/tcal.css">
		<script type="text/javascript" src="../calendario/tcal.js"></script>
		<meta http-equiv="Content-type" content="text/html; charset= utf-8"/>
		<script type="text/javascript">
			function validar(){
				fecha1 = document.formu.date1.value;
				fecha2 = document.formu.date2.value;
				if((document.formu.date1.value == "") || (document.formu.date2.value== "") || (document.formu.date1.value > document.formu.date2.value)){
					alert("Las fechas son incorrectas");
					document.formu.date1.focus();
					return;
				}
				ventanaCalendario = window.open("propietarios_fechas1.php?fecha1="+ fecha1 +"&fecha2=" +fecha2 , "calendario", "width=600, height=550, left=100, scrollbars=yes,menubars=no,statusbar=NO,resizable=YES,location=NO")
			}
		</script>
	</head>
	<body>
		<center>
			<br>
			<h1>REPORTES DE GERENTES CON FECHAS DE INGRESO</h1>
			<form method="post" name="formu">
				<table border="1">
					<tr>
						<th>*Fecha Inicio</th><th>:</th>
						<td><input type="text" name="date1" class="tcal" value=""  size="30"></td>
						<th>*Fecha Fin</th><th>:</th>
						<td><input type="text" name="date2" class="tcal" value="" size="30"></td>
					</tr>
					<tr>
						<td align="center" colspan="6">
							<input type="hidden" name="accion" value="">
							<input type="button" value="Aceptar" onclick="validar();" class="boton2">			
						</td>
					</tr>
				</table>
			</form>
		</center>
</body>
</html>