<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio10 Funciones nativas Daniel</title>
</head>
<body>
<?php 
    $uno = "Estamos haciendo php";
    echo $uno."<br>";
    if (str_contains($uno, "h")) {
        echo "La letra h se encuentra en esta frase";
    } else {
        echo "La letra h no se encuentra en esta frase";
    }
?>
</body>
</html>