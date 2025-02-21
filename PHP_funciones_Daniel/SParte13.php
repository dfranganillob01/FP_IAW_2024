<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio13 Estructura de control Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe un número" name="num1"/>
        <input type="text" placeholder="Escribe un número mayor" name="num2"/>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
    <br>
<?php
    $uno = floatval($_GET['num1'] ?? 0);
    $dos = floatval($_GET['num2'] ?? 0);
    function factorial($uno,$dos) {
        $b = 1;
        for ($a = $uno; $a <= $dos; $a++){
            $b *=$a;
        }
        echo "El factorial entre $uno y $dos es $b\n";
    }
    factorial($uno,$dos);
    ?>
</body>
</html>