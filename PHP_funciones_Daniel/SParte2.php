<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SParte2 Funciones Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe el radio" name="num1"/>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
<?php 
    $uno = $_GET['num1'] ?? 1;
    function radio($uno) {return M_PI*pow($uno,2);}
    $resultado = radio($uno);
    echo "<br>$resultado";
?>
</body>
</html>