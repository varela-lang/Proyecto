<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Articulos</title>

</head>
<body bgcolor="white">
    <h1 align="center">Modificar Articulos</h1>
    <?php 
    $mysql = new mysqli("localhost", "root", "", "proyecto");

    if ($mysql -> connect_error) {
        die("Problemas con la conexion a la base de datos");
    }

    $mysql->query('update producto set 
    descripcion="$_REQUEST[descripcion]",
    precio="$_REQUEST[precio]",
    categoria="$_REQUEST[codigorubro]"
    where id="$_REQUEST[codigo]"') or
    die($mysql->error);
    
    echo "<center>Se modificaron los datos del articulo</center>";

    $mysql->close();
    ?>
    <br>
	      <table border="1" bgcolor="#48C9B0" align="center">
	 	  <tr align="center">
	 	  <td><a href="modificarproductos.html"><input type="button" value="Alta de Articulos"></a></td>
	 	  </tr>
	      </table>
</body>
</html>