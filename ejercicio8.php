<?php include("cabecera.php"); ?>

    <h1>Calcular Área de Figuras Geométricas</h1>
    <form method="post">
        <label for="figura">Seleccione una figura:</label>
        <select id="figura" name="figura" required>
            <option value="circulo">Círculo</option>
            <option value="cuadrado">Cuadrado</option>
            <option value="triangulo">Triángulo</option>
        </select><br><br>
        <div id="parametros">
            <!-- Aquí se mostrarán los campos de entrada necesarios según la figura seleccionada -->
        </div>
        <button type="submit">Calcular Area</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $figura = $_POST['figura'];
        $area = 0;
        switch ($figura) {
            case 'circulo':
                $radio = $_POST['radio'];
                $area = pi() * pow($radio, 2);
                echo "<p>El área del círculo con radio $radio es: " . number_format($area, 2) . "</p>";
                break;
            case 'cuadrado':
                $lado = $_POST['lado'];
                $area = pow($lado, 2);
                echo "<p>El área del cuadrado con lado $lado es: " . number_format($area, 2) . "</p>";
                break;
            case 'triangulo':
                $base = $_POST['base'];
                $altura = $_POST['altura'];
                $area = ($base * $altura) / 2;
                echo "<p>El área del triángulo con base $base y altura $altura es: " . number_format($area, 2) . "</p>";
                break;
            default:
                echo "<p>Figura no válida</p>";
                break;
        }
    }
    ?>
    <script>
        document.getElementById('figura').addEventListener('change', function() {
            const figura = this.value;
            const parametros = document.getElementById('parametros');
            let html = '';
            if (figura === 'circulo') {
                html = `
                    <label for="radio">Ingrese el radio del círculo:</label>
                    <input type="number" id="radio" name="radio" step="0.01" min="0" required><br><br>
                `;
            } else if (figura === 'cuadrado') {
                html = `
                    <label for="lado">Ingrese el lado del cuadrado:</label>
                    <input type="number" id="lado" name="lado" step="0.01" min="0" required><br><br>
                `;
            } else if (figura === 'triangulo') {
                html = `
                    <label for="base">Ingrese la base del triángulo:</label>
                    <input type="number" id="base" name="base" step="0.01" min="0" required><br><br>
                    <label for="altura">Ingrese la altura del triángulo:</label>
                    <input type="number" id="altura" name="altura" step="0.01" min="0" required><br><br>
                `;
            }
            parametros.innerHTML = html;
        });
    </script>
    
<?php include("pie_pagina.php"); ?>
