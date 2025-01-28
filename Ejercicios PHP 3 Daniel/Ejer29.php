<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio29 Estructura de control Daniel</title>
</head>
<body>
<?php
    for ($i = 1; $i <= 100; $i++) {
        $esPrimo = true;
        if ($i < 2) {
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