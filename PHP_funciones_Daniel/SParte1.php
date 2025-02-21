<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SParte1 Funciones Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe un número" name="num1"/>
        <input type="text" placeholder="Escribe un número" name="num2"/>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
<?php 
    $uno = $_GET['num1'] ?? 1;
    $dos = $_GET['num2'] ?? 1;
    function suma($uno, $dos) {return $uno+$dos;}
    $resultado = suma($uno, $dos);
    echo "$resultado";
?>
</body>
</html>