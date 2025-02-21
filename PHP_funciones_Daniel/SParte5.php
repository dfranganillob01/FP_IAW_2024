<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SParte5 Funciones Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe la cantidad que quieres convertir" name="num1"/>
        <select name="desplegable">
            <option value=1>Libras</option>
            <option value=2>Dolares</option>
            <option value=3>Yenes</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
<?php
    $uno = $_GET['num1'] ?? 1;
    $opciones = $_GET['desplegable'] ?? 1;
    function OPbasica($uno,$opciones) {
        switch ($opciones) {
            case '1':
                echo "<br>$uno libras = ".($uno * 1.22)."€";
            break;
            case '2':
                echo "<br>$uno dolares = ".($uno * 0.75)."€";
            break;
            case '3':
                echo "<br>$uno yenes = ".($uno * 0.009)."€";
            break;                     
            default:
                return "<br>No valido";
            break;
        }
    }
    OPbasica($uno,$opciones);
?>
</body>
</html>