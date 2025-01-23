<?php include("cabecera.php"); ?>

    <h1>Calcular el Doble y el Triple de un Número</h1>
    <form method="post">
        <label for="numero">Ingrese un número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Calcular</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtiene el número ingresado por el usuario desde el formulario
        $numero = $_POST['numero'];
        // Calcula el doble y el triple del número ingresado
        $doble = $numero * 2;
        $triple = $numero * 3;
        // Muestra los resultados
        echo "<p>El doble de $numero es: $doble</p>";
        echo "<p>El triple de $numero es: $triple</p>";
    }
    ?>
    
<?php include("pie_pagina.php"); ?>
