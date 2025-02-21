<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio9 Funciones nativas Daniel</title>
</head>
<body>
<?php 
    $uno = "Estamos haciendo php";
    $cambio = str_replace("php","nada",$uno);
    echo $uno."<br>";
    echo "Al texto de arriba vamos a cambiar la palabra php: <br>".$cambio;
?>
</body>
</html>