<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="" content="10; URL=11alta_articulos.php">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alta de Articulos</title>
	<style>
    table{
	background-color: white;
	text-align: left;
	border-collapse: collapse;
	width: 100%;
    }

    th, td{
	padding: 20px;
    }

    thead{
	background-color: #246355;
	border-bottom: solid 5px #0F362D;
	color: white;
     } 

    tr:nth-child(even){
	background-color: #ddd;
    }

    tr:hover td{
	background-color: #369681;
	color: white;
    }
</style>
</head>
<body bgcolor="white">
	<h1 align="center">Alta de articulos</h1>
	<?php 
		$mysql = new mysqli("localhost", "root", "", "proyecto");
		if ($mysql->connect_error)
			die("Problemas con la conexión a la base de datos");

		$mysql->query("INSERT INTO producto(descripcion, precio, categoria)
			VALUES ('$_REQUEST[descripcion]', '$_REQUEST[precio]', '$_REQUEST[codigorubro]')") or 
		die($mysql->error);

		echo "<center>El nuevo articulo se almacenó</center>";

		$mysql->close();
	 ?>
	 <br>
	 <table border="1" bgcolor="F0DB0F" align="center">
	 	<tr align="center">
	 		<td><a href="productos.php">
	 		<input type="button" value="Regresar"></a></td>
	 	</tr>
	 </table>
</body>
</html>