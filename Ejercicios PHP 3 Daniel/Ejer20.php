<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio20 Estructura de control Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe el numero 1" name="num1"/>
        <input type="text" placeholder="Escribe el numero 2" name="num2"/>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
    <br>
<?php
    $a = floatval($_GET['num1'] ?? 1);
    $b = floatval($_GET['num2'] ?? 1);
    while ($b != 0) {
        $resto = $a % $b;
        $a = $b;
        $b = $resto;
        echo "El mcd es ".$b;
    }
?>
</body>
</html>