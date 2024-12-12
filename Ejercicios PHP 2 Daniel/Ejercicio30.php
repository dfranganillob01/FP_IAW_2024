<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio30 Daniel</title>
</head>
<body>
<?php
    $salario = 10;
    $horasmaximas = 40;
    $horastrabajadas = 50;
    $horasextras = ($horastrabajadas - $horasmaximas) * ($salario * 1.5);
    $cobra = $horasextras + ($horasmaximas * $salario);
    echo "El trabajador cobra 10 € la hora y este ha hechado 50 horas, que con el incremento de horas extras el salario se le queda en: ".$cobra." €.";
    ?>
</body>
</html>