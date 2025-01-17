<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio17 Estructura de control Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe el numero 1" name="num1"/>
        <input type="text" placeholder="Escribe el numero 2" name="num2"/>
        <input type="text" placeholder="Escribe el numero 3" name="num3"/>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
    <br>
<?php
    $num1 = floatval($_GET['num1'] ?? 0);
    $num2 = floatval($_GET['num2'] ?? 0);
    $num3 = floatval($_GET['num3'] ?? 0);
    if ($num1 < 0){
        echo "El producto de ".$num1." ".$num2." ".$num3." es igual a ".$num1*$num2*$num3;
    }else {
        echo "El suma de ".$num1." ".$num2." ".$num3." es igual a ".$num1+$num2+$num3;
    }
?>
</body>
</html>