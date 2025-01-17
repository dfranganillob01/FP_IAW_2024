<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio10 Estructura de control Daniel</title>
</head>
<body>
<?php
    $resultado = 1;
    for ($a = 1; $a <=20; $a++){
        if ($a == 20){
            echo $a;
        }
        else{
            echo $a."*";
        }
        $resultado *=$a;
    }
    echo " = ".$resultado;
?>
</body>
</html>