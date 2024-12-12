<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio33 Daniel</title>
</head>
<body>
<?php
    $cateto1 = 3;
    $cateto2 = 5;
    $hipotenusacuadrado = pow($cateto1, 2) + pow($cateto2, 2);
    $hipotenusa = sqrt($hipotenusacuadrado);
    echo "La hipotenusa de un triangulo con catetos que miden 3 y 5 cm es de: ".$hipotenusa." cm";
    ?>
</body>
</html>