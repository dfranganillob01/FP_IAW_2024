<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio35 Estructura de control Daniel</title>
</head>
<body>
    <form method="get">
        <input type="text" placeholder="Escribe un numero" name="num"/>
        <input type="submit" value="Enviar">
    </form> 
    <br>
<?php
    $num = $_GET['num'] ?? 1;
    $binario = decbin($num);
    echo "El numero decimal $num en binario es ".$binario;
    ?>
</body>
</html>