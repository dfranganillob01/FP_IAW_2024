<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio13 Estructura de control Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe aqui" name="euros"/>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
    <br>
<?php
    $euros = floatval($_GET['euros'] ?? 0);
    $dolares = $euros * 1.02;
    echo "Si conviertes $euros € a dólares, este se queda en $dolares $"; 
?>
</body>
</html>