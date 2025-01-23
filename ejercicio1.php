<?php include("cabecera.php"); ?>

    <h1>Ingrese la edad de dos hermanos</h1>
    <form method="post">
        <label for="edad1">Edad del primer hermano:</label>
        <input type="number" id="edad1" name="edad1" required>
        <br><br>
        <label for="edad2">Edad del segundo hermano:</label>
        <input type="number" id="edad2" name="edad2" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener las edades de los hermanos desde el formulario
        $edad1 = $_POST["edad1"];
        $edad2 = $_POST["edad2"];
        // Verificar cuál es el mayor y calcular la diferencia de edad
        if ($edad1 > $edad2) {
            $mayor = $edad1;
            $menor = $edad2;
        } else if ($edad2 > $edad1) {
            $mayor = $edad2;
            $menor = $edad1;
        } else {
            echo "<p>Ambos hermanos tienen la misma edad: $edad1 años.</p>";
            exit;
        }
        $diferencia = $mayor - $menor;
        // Mostrar el mensaje con la edad del mayor y la diferencia de edad
        echo "<p>El hermano mayor tiene $mayor años y hay una diferencia de $diferencia años con el menor.</p>";
    }
    ?>
    
<?php include("pie_pagina.php"); ?>
