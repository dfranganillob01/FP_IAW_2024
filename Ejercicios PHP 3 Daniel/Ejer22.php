<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio22 Estructura de control Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe el numero 1" name="num1"/>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
    <br>
<?php
    $num1 = floatval($_GET['num1'] ?? 0);
    for ($a = 1; $a <= $num1; $a++){
        $b *=$a;
    }
    echo "El factorial de $num1 es $b\n";
?>
</body>
</html>