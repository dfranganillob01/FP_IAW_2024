<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio26 Estructura de control Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe la temperatura" name="num1"/>
        <input type="text" placeholder="Escribe la temperatura" name="num2"/>
        <select name="desplegable">
            <option value="Suma" name="Suma">Suma</option>
            <option value="Resta" name="Resta">Resta</option>
            <option value="Multiplicacion">Multiplicacion</option>
            <option value="Division">Division</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
    <br>
<?php
    $num1 = floatval($_GET['num1'] ?? 1);
    $num2 = floatval($_GET['num2'] ?? 1);
    $desplegable = $_GET['desplegable'] ?? 1;
    switch ($desplegable) {
        case 'Suma':
            echo "$num1 + $num2 = ".$num1 + $num2;
            break;
        case 'Resta':
            echo "$num1 - $num2 = ".$num1 - $num2;
            break;
        case 'Multiplicacion':
            echo "$num1 x $num2 = ".$num1 * $num2;
            break;
        case 'Division':
            echo "$num1 / $num2 = ".$num1 / $num2;
            break;    
        default:
            echo "Cuenta no vlida"; 
            break;
    }
    ?>
</body>
</html>