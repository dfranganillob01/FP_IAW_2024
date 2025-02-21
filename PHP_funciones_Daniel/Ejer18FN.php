<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio18 Funciones nativas Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe un número" name="num1"/>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
<?php 
    $uno = $_GET['num1'] ?? 1;
    echo "<br>El número $uno redondeado hacia abajo es ".floor($uno);
?>
</body>
</html>