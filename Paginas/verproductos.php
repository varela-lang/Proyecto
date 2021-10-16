<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Listado de artículos</title>
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
	<h1 align="center">Listado de Productos</h1>

  <?php
  $mysql = new mysqli("localhost", "root", "", "proyecto");
  if ($mysql->connect_error)
    die("Problemas con la conexión a la base de datos");

  $registros = $mysql->query("select ar.id as codigoart,
                                     ar.descripcion as descripcionart,
                                     precio,
                                     ru.categoria as descripcionrub 
                                  from producto as ar
                                  inner join categ as ru on ru.id=ar.categoria") or
    die($mysql->error);

  echo '<form action="agregarcompra.php" method="Post">';
  echo '<table class="tablalistado">';
  echo '<tr><th>Código</th><th>Descripción</th><th>Precio</th><th>Categoria</th></tr>';
  while ($reg = $registros->fetch_array()) {
    echo '<tr>';
    echo '<td>';
    echo $reg['codigoart'];
    echo '</td>';
    echo '<td>';
    echo $reg['descripcionart'];
    echo '</td>';
    echo '<td>';
    echo $reg['precio'];
    echo '</td>';
    echo '<td>';
    echo $reg['descripcionrub'];
    echo '</td>';
    echo '</tr>';
  }
  echo '<table>';
  echo '</form>';
  
  $mysql->close();

  ?>
  <br>
  <table border="1" bgcolor="#A1DEA" align="center">
  	<tr align="center">
  		<td>
  			<a href="principal.html">
  				<input type="button" value="Inicio">
  			</a>
  		</td>
  	</tr>
  </table>


</body>

</html>