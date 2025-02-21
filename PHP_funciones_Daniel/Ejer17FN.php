<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio17 Funciones nativas Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe un número" name="num1"/>
        <input type="text" placeholder="Escribe un número" name="num2"/>
        <input type="text" placeholder="Escribe un número" name="num3"/>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
<?php 
    $uno = $_GET['num1'] ?? 1;
    $dos = $_GET['num2'] ?? 1;
    $tres = $_GET['num3'] ?? 1;
    $maximo = max($uno, $dos, $tres);
    $minimo = min($uno, $dos, $tres);
    echo "<br>El número más alto de estos tres números es el $maximo <br>";
    echo "El número más bajo de estos tres números es el $minimo";
?>
</body>
</html>