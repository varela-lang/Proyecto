<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado</title>
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
<head>
<body bgcolor="white">
    <h1 align="center">Listado de categorias</h1>
    <?php
    $mysql = new mysqli("Localhost", "root", "", "proyecto");
    if ($mysql->connect_error)
    die("Problemas con la conexión a la base de datos");

    $registros = $mysql->query("select id,categoria from categ") or
    die($mysql->connect_error);

    echo '<table border="1" class="tablalistado" align="center">';
    echo '<tr><th>Codigo</th><th>Usuario</th></tr>';
    while ($reg = $registros->fetch_array()) {
        echo '<tr>';
        echo '<td>';
        echo $reg['id'];
        echo '</td>';
        echo '<td>';
        echo $reg['categoria'];
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
    $mysql->close();
    ?>
    <br>
        <table border="1" bgcolor="#48C9B0" align="center">
            <tr align="center">
                <td><a href="principal.html"><input type="button" value="Inicio"></a></td>
            </tr>
        </table>
</body>
</html>