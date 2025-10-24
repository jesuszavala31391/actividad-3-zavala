<!DOCTYPE html>
<html>
<head>
    <title>Suma de Números Aleatorios</title>
</head>
<body>
    <h2>Generador de Suma Aleatoria</h2>

    <?php
        // ENTRADA
        // Generar tres números aleatorios entre 1 y 100
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $num3 = rand(1, 100);

        // PROCESO
        // Calcular la suma
        $suma = $num1 + $num2 + $num3;

        //SALIDA
        // Mostrar los números y el resultado
        echo "<p>Número 1: $num1</p>";
        echo "<p>Número 2: $num2</p>";
        echo "<p>Número 3: $num3</p>";
        echo "<h3>Suma total: $suma</h3>";
    ?>
</body>
</html>