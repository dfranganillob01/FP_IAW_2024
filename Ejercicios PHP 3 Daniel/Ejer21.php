<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio21 Estructura de control Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe el numero 1" name="num1"/>
        <input type="text" placeholder="Escribe el numero 2" name="num2"/>
        <input type="text" placeholder="Escribe el numero 3" name="num3"/>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
    <br>
<?php
    $a = floatval($_GET['num1'] ?? 1);
    $b = floatval($_GET['num2'] ?? 1);
    $c = floatval($_GET['num3'] ?? 1);

    $ecuación = $b * $b - 4 * $a * $c;

    if ($ecuación < 0) {
        echo "La ecuación no tiene soluciones reales.\n";
    } elseif ($ecuación == 0) {
        $solucion = -$b / (2 * $a);
        echo "La solución única es: $solucion\n";
    } else {
        $sol1 = (-$b + sqrt($ecuación)) / (2 * $a);
        $sol2 = (-$b - sqrt($ecuación)) / (2 * $a);
        echo "Las soluciones son: $sol1 y $sol2\n";
    }
?>
</body>
</html>