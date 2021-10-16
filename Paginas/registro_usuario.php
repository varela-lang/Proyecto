<?php

include 'conexion_be.php';

$usuario = $_POST['usuario'];
$pass = $_POST['password'];

$query = "INSERT INTO usuarios(usuario, password) 
            VALUES('$usuario', '$password')";

//Verificar que el nombre de usuario no se repita en la base de datos
$verificar_usuario =  "INSERT INTO usuarios (id, usuario, contra) VALUES (NULL, '$usuario', '$pass')";

if(mysqli_num_rows($verificar_usuario) > 0) {
    echo 
        '<script>
        alert("Este usuario ya esta registrado, intenta con otro diferente");
        window.location = "../login.html";
        </script>';
        exit(); 
}

$ejecutar = mysqli_query($conexion, $query); 

if($ejecutar){
    echo 
        '<script>
            alert("Usuario almacenado exitosamente");
            window.location = "../paginas/login.html";
        </script>';
}else{
    echo 
        '<script>
            alert("Intentalo de nuevo, usuario no almacenado");
            window.location = "../paginas/login.html";
        </script>';
}

mysqli_close($conexion);
?>