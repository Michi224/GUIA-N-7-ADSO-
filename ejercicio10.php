<?php include("cabecera.php"); ?>

    <h1>Tabla de Multiplicar</h1>
    <form method="post">
        <label for="numero">Ingrese un número (del 1 al 10):</label>
        <input type="number" id="numero" name="numero" min="1" max="10" required><br><br>
        <button type="submit">Mostrar Tabla</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtiene el número del formulario
        $numero = $_POST['numero'];
        // Muestra la tabla de multiplicar
        echo "<h2>Tabla de Multiplicar del $numero</h2>";
        echo "<ul>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<li>$numero x $i = $resultado</li>";
        }
        echo "</ul>";
    }
    ?>
    
<?php include("pie_pagina.php"); ?>
