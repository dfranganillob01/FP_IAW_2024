<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio14 Estructura de control Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe la altura" name="altura"/>
        <input type="text" placeholder="Escribe la anchura" name="anchura"/>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
    <br>
<?php
    $altura = floatval($_GET['altura'] ?? 0);
    $anchura = floatval($_GET['anchura'] ?? 0);
    $area = $anchura * $altura;
    echo "El area de un rectangulo con anchura ".$anchura." cm y altura ".$altura."cm es de ".$area." cm.";
?>
</body>
</html>