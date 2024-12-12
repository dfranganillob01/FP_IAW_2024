<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio28 Daniel</title>
</head>
<body>
<?php
    $variable1 = 20;
    $variable2 = 45;
    echo "La variable 1 ahora es ".$variable1." y la variable 2 es ".$variable2."<br>";
    $cambio = $variable1;
    $variable1 = $variable2;
    $variable2 = $cambio;
    echo "La variable 1 ahora es ".$variable1." y la variable 2 es ".$variable2;
    ?>
</body>
</html>