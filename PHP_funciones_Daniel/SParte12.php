<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio12 Estructura de control Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe un número" name="num1"/>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
    <br>
<?php
    $uno = floatval($_GET['num1'] ?? 0);
    function factorial($uno) {
        $b = 1;
        for ($a = 1; $a <= $uno; $a++){
            $b *=$a;
        }
        echo "El factorial de $uno es $b\n";
    }
    factorial($uno);
    ?>
</body>
</html>