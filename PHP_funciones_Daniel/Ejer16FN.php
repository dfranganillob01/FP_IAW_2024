<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio16 Funciones nativas Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe un número" name="numbajo"/>
        <input type="text" placeholder="¿A cuanto lo elevas?" name="numalto"/>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
<?php 
    $uno = $_GET['numbajo'] ?? 1;
    $potencia = $_GET['numalto'] ?? 1;
    $cuenta = pow($uno,$potencia);
    echo "<br>$uno elevado a $potencia es igal a $cuenta";
?>
</body>
</html>