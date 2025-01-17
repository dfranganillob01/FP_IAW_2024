<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio11 Estructura de control Daniel</title>
</head>
<body>
<?php
    $resultado = 1;
    for ($a = 1; $a <=100; $a++){
        $resultado +=pow($a,2);
    }
    echo $resultado;
?>
</body>
</html>