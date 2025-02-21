<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2 Funciones nativas Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe el número mas bajo" name="numbajo"/>
        <input type="text" placeholder="Escribe el número mas alto" name="numalto"/>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
<?php 
    $uno = $_GET['numbajo'] ?? 1;
    $dos = $_GET['numalto'] ?? 1;
    $num1 = rand($uno,$dos);
    echo $num1;
?>
</body>
</html>