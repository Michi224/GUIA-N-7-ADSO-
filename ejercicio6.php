<?php include("cabecera.php"); ?>

    <h1>Encontrar el Menor Valor</h1>
    <form method="post">
        <label for="a">Ingrese el valor de A:</label>
        <input type="number" id="a" name="a" required><br><br>
        <label for="b">Ingrese el valor de B:</label>
        <input type="number" id="b" name="b" required><br><br>
        <label for="c">Ingrese el valor de C:</label>
        <input type="number" id="c" name="c" required><br><br>
        <button type="submit">Encontrar el Menor</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtiene los valores del formulario
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        // Asumiendo que los valores son distintos, determinamos el menor valor
        $menor = min($a, $b, $c);
        // Muestra el resultado
        echo "<p>El menor valor es: $menor</p>";
    }
    ?>
    
<?php include("pie_pagina.php"); ?>
