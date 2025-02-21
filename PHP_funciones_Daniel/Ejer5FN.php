<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5 Funciones nativas Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe un número" name="numbajo"/>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
<?php 
    $uno = $_GET['numbajo'] ?? 1;
    $num1 = empty($uno);
    echo $num1;
?>
</body>
</html>