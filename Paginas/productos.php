<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/agregar.css">
  <title>Agregar Producto</title>
</head>
<body>
<form action="resultadoproducto.php" method="post" class="form-register">
  <section >
    <h4 align="center">Agregar Producto</h4>
    <input class="controls" type="text" name="descripcion" id="nombres" placeholder="Ingrese descripcion del producto">
	<input class="controls" type="text" name="precio" id="nombres" placeholder="Ingrese precio">
    <select class="controls" name="codigorubro"><option value="<?php 
					$mysql = new mysqli("localhost", "root", "", "proyecto");

					if ($mysql->connect_error) {
						die("Problemas con la conexion a la base de datos");
					}

					$registros = $mysql->query("select id,categoria from categ") or die($mysql->error);
					while ($reg = $registros->fetch_array()) {
						echo "<option value=\"". $reg["id"]."\">" . $reg["categoria"]. "</option>";
					}
					 ?> </option></select>
					 
					 <input class="botons" type="submit" value="Confirmar" >
					 <a href="principal.html"><input class="botons" type="button" value="Regresar"></a>
  </section>
</form>
</body>
</html>