<?php include("cabecera.php"); ?>

    <h1>Venta de Zapatos</h1>
    <form method="post">
        <label for="nombre">Nombre del cliente:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="sandalias">Cantidad de Sandalias:</label>
        <input type="number" id="sandalias" name="sandalias" min="0" required><br><br>
        <label for="tenis">Cantidad de Tenis:</label>
        <input type="number" id="tenis" name="tenis" min="0" required><br><br>
        <label for="mocasines">Cantidad de Mocasines:</label>
        <input type="number" id="mocasines" name="mocasines" min="0" required><br><br>
        <button type="submit">Calcular</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtiene los datos del formulario
        $nombre = $_POST['nombre'];
        $cantidad_sandalias = $_POST['sandalias'];
        $cantidad_tenis = $_POST['tenis'];
        $cantidad_mocasines = $_POST['mocasines'];
        // Costos de adquisición de cada tipo de zapato
        $costo_sandalias = 20.00;
        $costo_tenis = 50.00;
        $costo_mocasines = 70.00;
        // Ganancia del 55%
        $ganancia = 0.55;
        // Precios de venta
        $precio_sandalias = $costo_sandalias * (1 + $ganancia);
        $precio_tenis = $costo_tenis * (1 + $ganancia);
        $precio_mocasines = $costo_mocasines * (1 + $ganancia);
        // Valor de la venta sin descuento
        $venta_sin_descuento = ($cantidad_sandalias * $precio_sandalias) + ($cantidad_tenis * $precio_tenis) +    ($cantidad_mocasines * $precio_mocasines);
        // Descuento del 8%
        $descuento = $venta_sin_descuento * 0.08;
        $venta_con_descuento = $venta_sin_descuento - $descuento;
        // IVA del 19% (puede cambiarse según la tasa aplicable en tu región)
        $iva = 0.19;
        $venta_neta_final = $venta_con_descuento * (1 + $iva);
        // Muestra los resultados
        echo "<h2>Detalles de la Venta</h2>";
        echo "<p>Nombre del cliente: $nombre</p>";
        echo "<p>Valor de la venta sin descuento: $" . number_format($venta_sin_descuento, 2) . "</p>";
        echo "<p>Descuento (8%): $" . number_format($descuento, 2) . "</p>";
        echo "<p>Valor de la venta con descuento: $" . number_format($venta_con_descuento, 2) . "</p>";
        echo "<p>Valor de la venta incluyendo IVA: $" . number_format($venta_neta_final, 2) . "</p>";
    }
    ?>
    
<?php include("pie_pagina.php"); ?>
