<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio15 Estructura de control Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe el numero 1" name="num1"/>
        <input type="text" placeholder="Escribe el numero 2" name="num2"/>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
    <br>
<?php
    $num1 = floatval($_GET['num1'] ?? 0);
    $num2 = floatval($_GET['num2'] ?? 0);
    if ($num1 < $num2){
        echo "El ".$num1." es menor que el ".$num2;
    }elseif ($num1 > $num2) {
        echo "El ".$num1." es mayor que el ".$num2;
    }else {
        echo "El ".$num1." es igual que el ".$num2;
    }
?>
</body>
</html>