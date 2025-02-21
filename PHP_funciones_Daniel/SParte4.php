<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SParte4 Funciones Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe un número" name="num1"/>
        <input type="text" placeholder="Escribe un número" name="num2"/>
        <select name="desplegable">
            <option value=1>Suma</option>
            <option value=2>Resta</option>
            <option value=3>Multiplicacion</option>
            <option value=4>Division</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
<?php
    $uno = $_GET['num1'] ?? 1;
    $dos = $_GET['num2'] ?? 1;
    $opciones = $_GET['desplegable'] ?? 1;
    function OPbasica($uno,$dos,$opciones) {
        switch ($opciones) {
            case '1':
                echo "<br>La suma de $uno + $dos = ".$uno + $dos;
            break;
            case '2':
                echo "<br>La resta de $uno - $dos = ".$uno - $dos;
            break;
            case '3':
                echo "<br>La multiplicación de $uno * $dos = ".$uno * $dos;
            break;
            case '4':
                echo "<br>La division de $uno / $dos = ".$uno / $dos;
            break;                      
            default:
                return "<br>No valido";
            break;
        }
    }
    OPbasica($uno,$dos,$opciones);
?>
</body>
</html>