<?php include("cabecera.php"); ?>

    <h1>Calcular Nota del Primer Parcial de "Análisis"</h1>
    <form method="post">
        <label for="taller1">Nota del Taller 1:</label>
        <input type="number" id="taller1" name="taller1" step="0.01" min="0" max="5" required><br><br>
        <label for="taller2">Nota del Taller 2:</label>
        <input type="number" id="taller2" name="taller2" step="0.01" min="0" max="5" required><br><br>
        <label for="quiz">Nota del Quiz:</label>
        <input type="number" id="quiz" name="quiz" step="0.01" min="0" max="5" required><br><br>
        <label for="examen">Nota del Examen Parcial:</label>
        <input type="number" id="examen" name="examen" step="0.01" min="0" max="5" required><br><br>
        <button type="submit">Calcular Nota</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtiene las notas del formulario
        $taller1 = $_POST['taller1'];
        $taller2 = $_POST['taller2'];
        $quiz = $_POST['quiz'];
        $examen = $_POST['examen'];
        // Calcula la nota de los talleres y el quiz (30% de la nota final)
        $nota_talleres_quiz = ($taller1 + $taller2 + $quiz) / 3 * 0.3;
        // Calcula la nota del examen (70% de la nota final)
        $nota_examen = $examen * 0.7;
        // Calcula la nota final
        $nota_final = $nota_talleres_quiz + $nota_examen;
        // Muestra el resultado
        echo "<h2>Resultado</h2>";
        echo "<p>Nota final del primer parcial: " . number_format($nota_final, 2) . "</p>";
    }
    ?>
    
<?php include("pie_pagina.php"); ?>
