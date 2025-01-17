<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio19 Estructura de control Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe la edad" name="edad"/>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
    <br>
<?php
    $edad = floatval($_GET['edad'] ?? 0);
    if ($edad >= 0 && $edad <14) {
        echo "Esta persona con una edad de ".$edad." años, esta en su Infancia.";
    } elseif ($edad >= 14 && $edad <=26) {
        echo "Esta persona con una edad de ".$edad." años, esta en su Juventud.";
    } elseif ($edad >= 27 && $edad <=59) {
        echo "Esta persona con una edad de ".$edad." años, esta en su Adultez.";
    } elseif ($edad >= 60) {
        echo "Esta persona con una edad de ".$edad." años, esta en su Jubilacion.";
    } else {
        echo "Numero no válido";
    }
?>
</body>
</html>