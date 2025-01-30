<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio23 Estructura de control Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe la temperatura" name="num1"/>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
    <br>
<?php
    $farenheit = floatval($_GET['num1'] ?? 1);
    if ($farenheit < 999) {
        $celsius = (5 / 9) * ($farenheit - 32);
        echo "$farenheit grados Fahrenheit son $celsius grados celsius.";
    } else {
        echo "El programa a terminado y no puede continuar.";
    }
    ?>
</body>
</html>