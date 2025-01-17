<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio12 Estructura de control Daniel</title>
</head>
<body>
<?php
    $resultado = 0;
    $nInicial = 2;
    for ($a =1; $a <=100; $a++){
        $resultado +=($nInicial+$a);
    }
    echo $resultado;
?>
</body>
</html>