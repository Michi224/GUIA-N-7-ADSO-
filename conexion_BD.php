<?php
function retornarConexion() {
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "5882";
    $base_datos = "escuela_musica";

    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $base_datos);

    if (!$conexion) {
        die("Error en la conexión: " . mysqli_connect_error());
    }

    return $conexion;
}
?>