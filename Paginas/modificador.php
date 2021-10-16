<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modificar Artículos</title>
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
	<h1 align="center">Modificar Artículos</h1>

  <?php
  $mysql = new mysqli("localhost", "root", "", "proyecto");
  if ($mysql->connect_error)
    die("Problemas con la conexión a la base de datos");

  $registro = $mysql->query('select categoria from categ where id="$_REQUEST[codigo]"') or
    die($mysql->error);

  if ($reg = $registro->fetch_array()) {
    ?>
    <form method="post" action="modificar.php">
    	<table border="1" bgcolor="purple" align="center">		
    <tr>
      <td>Descripción del artículo:</td>
      <td><input type="text" name="descripcion" size="50" value="<?php echo $reg['categoria']; ?>"></td>
      </tr>
  </tr>
      <input type="hidden" name="codigo" value="<?php echo $_REQUEST['id']; ?>">
      </td>
      </tr>
      <tr align="center">
      <td colspan="2"><input type="submit" value="Confirmar"></td>
  </tr>
</table>
    </form>
  <?php
  } else
    echo '<center>No existe un artículo con dicho código </center>';

  $mysql->close();
  ?>
  <br>
  <table border="1" bgcolor="pink" align="center">
  	<tr align="center">
  		<td>
  			<a href="principal.html">
  				<input type="button" value="Regresar">
  			</a>
  		</td>
  	</tr>
  </table>

</body>

</html>