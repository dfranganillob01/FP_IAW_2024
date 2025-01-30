<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio28 Estructura de control Daniel</title>
</head>
<body>
    <h3>Triángulo 1</h3>
    <form method="get">
        <input type="text" placeholder="Escribe la altura" name="altura1"/>
        <input type="text" placeholder="Escribe la base" name="base1"/>
        <br>
        <h3>Triángulo 2</h3>
        <input type="text" placeholder="Escribe la altura" name="altura2"/>
        <input type="text" placeholder="Escribe la base" name="base2"/>
        <input type="submit" value="Enviar">
    </form>
    <br>
<?php
    $base1 = floatval($_GET['base1'] ?? 1);
    $base2 = floatval($_GET['base2'] ?? 1);
    $altura1 = floatval($_GET['altura1'] ?? 1);
    $altura2 = floatval($_GET['altura2'] ?? 1);
    $triangulo1 = ($base1 * $altura1) / 2;
    $triangulo2 = ($base2 * $altura2) / 2;
    echo "El área del triangulo1 es ".$triangulo1."<br>";
    echo "El área del triangulo2 es ".$triangulo2."<br>";
    if ($triangulo1 > $triangulo2) {
        echo "El área del triangulo1 es mayor al del triangulo2."; 
    } elseif ($triangulo1 < $triangulo2) {
        echo "El área del triangulo1 es menor al del triangulo2."; 
    } else {
        echo "Las dos áreas son iguales.";
    }
    ?>
</body>
</html>