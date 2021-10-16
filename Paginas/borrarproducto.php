<!DOCTYPE html>
<html>
<head>
	<title>Borrado de Productos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="REFRESH" content="10; URL=15borrado_articulos.html">
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
	<h1 align="center">Borrado de Productos</h1>
	<?php 
	$mysql = new mysqli("localhost", "root", "", "proyecto");
	if ($mysql->connect_error) {
		die("Problemas con la conexion de datos");
	}

	$registro=$mysql->query("SELECT descripcion FROM producto where id=$_REQUEST[codigo]") or die ($mysql->error);

	if ($reg=$registro->fetch_array()) {
		$mysql->query("DELETE FROM producto WHERE id=$_REQUEST[codigo]") or die ($mysql->error);
		echo "<center>La descripcion del Producto que se elemino es: ".$reg["descripcion"]."</center>";
	} else{
		echo "<center>No existe un articulo con dicho codigo</center>";
	}

	$mysql->close();
	 ?>
	 <br>
	 <table border="1" bgcolor="#EC7063" align="center">
	 	<tr align="center">
	 		<td><a href="borrarproducto.html"><input type="button" value="Regresar"></a></td>
	 	</tr>
	 </table>
</body>
</html>