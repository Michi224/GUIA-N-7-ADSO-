<?php include("cabecera.php"); ?>

<?php
require("conexion_BD.php");

// Establecer conexión a la base de datos
$conexion = retornarConexion();

// Realizar la consulta a la base de datos
$registros = mysqli_query($conexion, "SELECT * FROM solicitud") 
    or die("Problemas en el select: " . mysqli_error($conexion));
?>

<!-- Botón para agregar un nuevo registro -->
<a href=""><button type="submit" class="btn btn-primary">Nuevo Registro</button></a>
<br><br>

<!-- Tabla para mostrar los registros -->
<table class="table table-hover table-striped table-bordered display" id="tablausu">
    <thead>
        <tr>
            <th>ID_solicitud</th>
            <th>ID_usuario</th>
            <th>mensaje</th>
            <th>fecha_solicitud</th>
            <th>Acciones</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Iterar sobre los registros y mostrarlos en la tabla
        while ($reg = mysqli_fetch_array($registros)) { ?>
            <tr>
                <td><?php echo $reg['ID_solicitud']; ?></td>
                <td><?php echo $reg['ID_usuario']; ?></td>
                <td><?php echo $reg['mensaje']; ?></td>
                <td><?php echo $reg['fecha_solicitud']; ?></td>
                <td>
                    <button type="button" class="btn btn-success">Editar</button>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php
// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>

<!-- Script para inicializar DataTables -->
<script>
    $(document).ready(function () {
        $('#tablausu').DataTable();
    });
</script>

<?php include("pie_pagina.php"); ?>