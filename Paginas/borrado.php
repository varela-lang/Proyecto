<!DOCTYPE html>
<html>
<head>
	<title>Borrado de Rubros</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<h1 align="center">Borrado de Rubros</h1>
	<?php 
	$mysql = new mysqli("localhost", "root", "", "proyecto");
	if ($mysql->connect_error) {
		die("Problemas con la conexion a la base de datos");
	}

	$registro = $mysql->query("select categoria from categ where id=$_REQUEST[codigo]") or die($mysql->error);

	if ($reg = $registro->fetch_array()) {
		$mysql->query("delete from categ where id=$_REQUEST[codigo]") or die($mysql->error);
		echo "<center>La categoria que se elemino es: ".$reg["categoria"]."</center><br>";
	} else {
		echo "<center>No existe un rubro con dicho codigo</center>";
	}

	$mysql->close();

	 ?>
	 <br>
	 <table border="1" bgcolor="#52BE80" align="center">
	 	<tr align="center" > 
	 		<td><a href="eliminar.html"><input type="button" value="Regresar"></a></td>
	 	</tr>
	 </table>

</body>
</html>