<!DOCTYPE html>
<html>
<head>
	<title>Modificacion de articulos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body bgcolor="white">
	<h1 align="center">Modificacion de Articulos</h1>
	<?php 
	$mysql = new mysqli("localhost", "root", "", "proyecto");
	if ($mysql -> connect_error) {
		die("Problemas con la conexion a la base de datos");
	}

	$mysql->query("update  set categ=´$_REQUEST[descripcion]´where id=$_REQUEST[codigo]") or die($mysql->error);

	echo "<center>Se modifico la descripcion del rubro </center>";

	$mysql->close();
	 ?>

	 <br>
	 <table border="1" bgcolor="#48C9B0" align="center">
	 	<tr>
	 		<td><a href="6modificar_rubros.html"><input type="button" value="Regresar a modificar rubros"></a></td>
	 	</tr>
	 </table>
</body>
</html>