<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SParte3 Funciones Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe un número" name="num1"/>
        <input type="text" placeholder="Escribe a cuanto lo elevas" name="num2"/>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
<?php 
    $uno = $_GET['num1'] ?? 1;
    $dos = $_GET['num2'] ?? 1;
    function elevado($uno,$dos) {return pow($uno,$dos);}
    $resultado = elevado($uno,$dos);
    echo "<br>El número $uno elevado a $dos es igual a = $resultado";
?>
</body>
</html>