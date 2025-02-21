<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SParte10 Funciones Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe un número" name="num1"/>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
<?php
    $uno = $_GET['num1'] ?? 1;
    function primo($uno) {
        if ($uno <=1) {
            echo "<br>El $uno no es primo";
            return false;
        }
        for ($i=2; $i < $uno; $i++) { 
            if ($uno % $i==0) {
                echo "<br>El $uno no es primo";
                return false;
            }
        }
        echo "<br>El $uno si es un numero primo";
        return true;
    }
    primo($uno);
?>
</body>
</html>