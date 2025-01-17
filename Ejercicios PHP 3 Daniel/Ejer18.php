<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio18 Estructura de control Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe el numero 1" name="num1"/>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
    <br>
<?php
    $num1 = floatval($_GET['num1'] ?? 0);
    echo "Los numeros impares menores que ".$num1." son: <br>";
    for ($a = 1; $a < $num1; $a+=2){
        echo $a."<br>";
    }
?>
</body>
</html>