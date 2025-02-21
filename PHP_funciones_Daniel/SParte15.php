<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio15 Estructura de control Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe un número mayor que 9" name="num1"/>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
    <br>
<?php
    $uno = floatval($_GET['num1'] ?? 0);
    function factorial($uno) {
        if ($uno < 10) {
            echo "Esta opción no tiene al menos 2 dígitos";
        } elseif ($uno >= 10) {
            echo "Usted ha seleccionado el número: ".$uno;
            echo "<br>Si le damos la vuelta el igual a: ".strrev($uno);
        } else {
            echo "Opción no válida";
        }
    }
    factorial($uno);
    ?>
</body>
</html>