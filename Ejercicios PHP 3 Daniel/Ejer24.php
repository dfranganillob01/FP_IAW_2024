<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio24 Estructura de control Daniel</title>
</head>
<body>
    <h3>Escribe un numero del 1 al 7</h3>
    <form method="get">
        <input type="text" placeholder="Escribe el numero" name="num1"/>
        <input type="submit" value="Enviar">
    </form>
    <br>
<?php
    $num1 = floatval($_GET['num1'] ?? 1);
    switch ($num1) {
        case '1':
            echo "Lunes";
            break;
        case '2';
            echo "Martes";
            break;
        case '3';
            echo "Miércoles";
            break;
        case '4';
            echo "Jueves";
            break;
        case '5';
            echo "Viernes";
            break;
        case '6';
            echo "Sábado";
            break;
        case '7';
            echo "Domingo";
            break;
        default:
            echo "Este número no es válido";
    }
    ?>
</body>
</html>