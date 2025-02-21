<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio12 Funciones nativas Daniel</title>
</head>
<body>
<?php 
    $uno = 0;
    $dos = 15;
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyz';   
    echo "La frase random es: ",substr(str_shuffle($caracteres), $uno, $dos);
?>
</body>
</html>