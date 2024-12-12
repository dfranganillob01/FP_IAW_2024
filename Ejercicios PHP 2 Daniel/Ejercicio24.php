<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio24 Daniel</title>
</head>
<body>
<?php
    $hombres = 8;
    $mujeres = 6;
    $clase = $hombres + $mujeres;
    $porcentaje1 = ($mujeres / $clase) * 100;
    $porcentaje2 = ($hombres / $clase) * 100;
    echo "Hay un ".$porcentaje2."% de hombres <br>";
    echo "Hay un ".$porcentaje1."% de mujeres <br>";
    ?>
</body> 
</html>