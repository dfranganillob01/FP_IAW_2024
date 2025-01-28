<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio33 Estructura de control Daniel</title>
</head>
<body>
    <form method="get">
        <input type="text" placeholder="Escribe el número mas bajo" name="numbajo"/>
        <input type="text" placeholder="Escribe el número mas alto" name="numalto"/>
        <input type="submit" value="Enviar">
    </form> 
    <br>
<?php
    $numbajo = $_GET['numbajo'] ?? 1;
    $numalto = $_GET['numalto'] ?? 1;
    for ($i = 1; $i <= $numalto; $i++) {
        $esPrimo = true;
        if ($i < $numbajo) {
            $esPrimo = false;
        } else {
            for ($j = 2; $j <= sqrt($i); $j++) {
                if ($i % $j == 0) {
                    $esPrimo = false;
                    break;
                }
            }
        }
        if ($esPrimo) {
            echo $i . " <br>";
        }
    }
    ?>
</body>
</html>