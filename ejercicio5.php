<?php include("cabecera.php"); ?>

    <h1>Comparar Valores</h1>
    <form method="post">
        <label for="a">Ingrese el valor de A:</label>
        <input type="number" id="a" name="a" required><br><br>
        <label for="b">Ingrese el valor de B:</label>
        <input type="number" id="b" name="b" required><br><br>
        <label for="c">Ingrese el valor de C:</label>
        <input type="number" id="c" name="c" required><br><br>
        <button type="submit">Comparar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtiene los valores del formulario
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        // Verifica si los valores son distintos
        if ($a == $b || $a == $c || $b == $c) {
            echo "<p style='color: red;'>Los valores deben ser distintos. Por favor, ingrese valores diferentes para A, B y C.</p>";
        } else {
            // Determina el mayor y el menor valor
            $mayor = max($a, $b, $c);
            $menor = min($a, $b, $c);
            // Muestra los resultados
            echo "<p>El mayor valor es: $mayor</p>";
            echo "<p>El menor valor es: $menor</p>";
        }
    }
    ?>
    
<?php include("pie_pagina.php"); ?>
