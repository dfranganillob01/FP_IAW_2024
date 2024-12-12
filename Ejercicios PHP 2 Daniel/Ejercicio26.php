<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio26 Daniel</title>
</head>
<body>
<?php
    $trabajador1 = 1200;
    $trabajador2 = 1500;
    $trabajador3 = 950;
    $incremento1 = $trabajador1 * 0.13;
    $incremento2 = $trabajador2 * 0.26;
    $incremento3 = $trabajador3 * 0.39;
    echo "El sueldo del trabajado 1 era 1200 € y ahora será de ".($trabajador1 + $incremento1)." €.<br>";
    echo "El sueldo del trabajado 2 era 1500 € y ahora será de ".($trabajador2 + $incremento2)." €.<br>";
    echo "El sueldo del trabajado 3 era 950 € y ahora será de ".($trabajador3 + $incremento3)." €.";
    ?>
</body>
</html>