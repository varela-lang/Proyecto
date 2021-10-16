<?php

include 'conexion_be.php';

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'
and password='$password'");

if(mysqli_num_rows($validar_login) > 0)
{
	echo "<script> alert('Bienvenido $usuario'); window.location='../paginas/principal.html' </script>";
}else{
    echo
            '<script>
            alert("Usuario no existe, por favor verifique los datos introducidos");
            window.location = "../login.html";
        </script>';
    exit;
}
?>

?>
