<?php include("cabecera.php"); ?>

<?php
// Configuración de conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$contrasena = "5882";
$base_datos = "escuela_musica";

// Crear la conexión
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if (!$conexion) {
    die("Problemas con la conexión: " . mysqli_connect_error());
}

// Realizar la consulta
$registros = mysqli_query($conexion, "SELECT * FROM `solicitud`");

if (!$registros) {
    die("Problemas en el select: " . mysqli_error($conexion));
}

// Mostrar los resultados
while ($reg = mysqli_fetch_array($registros)) {
    echo "ID_solicitud: " . $reg['ID_solicitud'] . "<br>";
    echo "ID_usuario: " . $reg['ID_usuario'] . "<br>";
    echo "mensaje: " . $reg['mensaje'] . "<br>";
    echo "fecha_solicitud: " . $reg['fecha_solicitud'] . "<br>";
    echo "<br>";
    echo "<hr>";
}

// Cerrar la conexión
mysqli_close($conexion);
?>

<?php include("pie_pagina.php"); ?>