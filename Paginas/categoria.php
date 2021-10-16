<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<body>
<?php 

$mysql = new mysqli("localhost", "root", "", "proyecto");


if ($mysql->connect_error) {
    die('Problemas a la conexión a la base de datos');
}

$mysql-> query("INSERT INTO categ (`id`, `categoria`) VALUES (NULL, '$_REQUEST[cate]')") or die($mysql->error);

$mysql->close();

echo "<center><h1>La nueva categoria se almaceno</h1></center>";

?>

<br>
<table align="center">
    <tr align="center">
        <td>
           <a href="agregar.html" class="rainbow-button" target="blank_" alt="Regresar" aling="center"><input type="button" value="Regresar"></a>
        </td>
    </tr>
</table>
</body>
</html>