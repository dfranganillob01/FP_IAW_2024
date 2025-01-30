<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio34 Estructura de control Daniel</title>
</head>
<body>
    <form method="get">
        <input type="text" placeholder="Escribe un numero" name="num"/>
        <input type="submit" value="Enviar">
    </form> 
    <br>
<?php
    $num = $_GET['num'] ?? 1;
    if (strlen($num) == 4){
        $invertir = strrev($num);
        echo "El numero $num invertido es ".$invertir;
    } else {
        echo "Este numero no tiene 4 cifras";
    }
    ?>
</body>
</html>