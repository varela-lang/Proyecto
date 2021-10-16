<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Productos</title>
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
    <h1 align="center">Modificar Productos</h1>
    <?php 
   $mysql = new mysqli("localhost", "root", "", "proyecto");
   if ($mysql -> connect_error) {
       die("Problemas con la conexion a la base de datos");
   }

   $registro=$mysql->query("SELECT descripcion, precio, categoria from producto where id=$_REQUEST[codigo]") or die($mysql->error);

   if($reg = $registro->fetch_array()){
    ?>
    <form action="mproductos2.php" method="POST">
        <table border="1" bgcolor="#5DADE2" align="center">
            <tr>
                <td>Descripcion del articulo:</td>
                <td><input type="text" name="descripcion" size="50" value="<?php echo $reg["descripcion"]; ?>"></td>
            </tr>
            <tr>
                <td>Precio:</td>
                <td><input type="text" name="precio" size="10" value="<?php echo $reg["precio"]; ?>"></td>
            </tr>
            <tr>
                <td>Rubro:</td>
                <td><select name="codigorubro">
                <?php 
					$mysql = new mysqli("localhost", "root", "", "proyecto");

					if ($mysql->connect_error) {
						die("Problemas con la conexion a la base de datos");
					}

					$registros = $mysql->query("select id,categoria from categ") or die($mysql->error);
					while ($reg = $registros->fetch_array()) {
						echo "<option value=\"". $reg["id"]."\">" . $reg["categoria"]. "</option>";
					}
					 ?> 
                </select><input type="hidden" name="codigo" value="<?php echo $_REQUEST["codigo"];?>"></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" value="Confirmar"></td>
            </tr> 
        </table>
    </form>
    <?php
   } else{
       echo "<center>No existe un articulo con dicho codigo</center>";

       $mysql->close();
   }
   ?>
   <br>
	      <table border="1" bgcolor="#48C9B0" align="center">
	 	  <tr align="center">
	 	  <td><a href="principal.html"><input type="button" value="Inicio"></a></td>
	 	  </tr>
	      </table>
</body>
</html>