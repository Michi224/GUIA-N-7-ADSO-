<?php include("cabecera.php"); ?>

    <h1>Cálculo de Nómina</h1>
    <form method="post">
        <?php
        // Genera campos de entrada para las horas trabajadas de 50 obreros
        for ($i = 1; $i <= 50; $i++) {
            echo "<label for='obrero$i'>Horas trabajadas por el obrero $i:</label>";
            echo "<input type='number' id='obrero$i' name='obrero$i' min='0' required><br><br>";
        }
        ?>
        <button type="submit">Calcular Nómina</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Tarifa por hora trabajada
        $tarifa_hora = 30000;
        // Inicializa el total de la nómina
        $total_nomina = 0;
        // Calcula y muestra el salario de cada obrero
        echo "<h2>Detalle de Nómina</h2>";
        for ($i = 1; $i <= 50; $i++) {
            $horas_trabajadas = $_POST["obrero$i"];
            $salario = $horas_trabajadas * $tarifa_hora;
            $total_nomina += $salario;
            echo "<p>Obrero $i: Horas trabajadas = $horas_trabajadas, Salario = " . number_format($salario, 2) . " Bolívares</p>";
        }
        // Muestra el total de la nómina
        echo "<h2>Total de la Nómina</h2>";
        echo "<p>Total a cancelar: " . number_format($total_nomina, 2) . " Bolívares</p>";
    }
    ?>
    
<?php include("pie_pagina.php"); ?>
