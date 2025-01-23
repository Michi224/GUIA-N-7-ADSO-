<?php include("cabecera.php"); ?>

    <h1>Convertir Calificaciones Numéricas</h1>
    <form method="post">
        <label for="calificacion">Ingrese la calificación (1-20):</label>
        <input type="number" id="calificacion" name="calificacion" min="1" max="20" required>
        <button type="submit">Convertir</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtiene la calificación ingresada por el usuario desde el formulario
        $calificacion = $_POST['calificacion'];
        // Determina la letra correspondiente a la calificación numérica
        if ($calificacion >= 19 && $calificacion <= 20) {
            $letra = "A";
        } else if ($calificacion >= 16 && $calificacion <= 18) {
            $letra = "B";
        } else if ($calificacion >= 13 && $calificacion <= 15) {
            $letra = "C";
        } else if ($calificacion >= 10 && $calificacion <= 12) {
            $letra = "D";
        } else if ($calificacion >= 1 && $calificacion <= 9) {
            $letra = "E";
        } else {
            $letra = "Calificación fuera de rango.";
        }
        // Muestra el resultado
        echo "<p>La calificación $calificacion corresponde a: $letra</p>";
    }
    ?>
    
<?php include("pie_pagina.php"); ?>
