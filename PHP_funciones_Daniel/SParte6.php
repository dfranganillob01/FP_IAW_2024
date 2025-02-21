<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SParte6 Funciones Daniel</title>
</head>
<body>
    <form method="get">
        <input type="text" placeholder="Escribe tu turno" name="num1"/>
        <input type="number" placeholder="Escribe la cantidad de horas" name="num2"/>
        <input type="submit" value="Enviar">
    </form>

    <h2>Debes una de las siguientes:</h2>
    <h3>diurno</h3>
    <h3>nocturno</h3>
    <h3>festD</h3>
    <h3>festN</h3>
<?php
    $uno = $_GET['num1'] ?? 1;
    $dos = $_GET['num2'] ?? 1;
    function jornal($uno,$dos) {
        $diurna = 10;
        $nocturna = 13.5;
        $fest_diurna = $diurna * 1.1;
        $fest_nocturna = $nocturna * 1.15;
            if ($uno == 'diurno') {
                echo "Has trabajado $dos horas en el turno diurno, es un total de ".$diurna * $dos;
            } elseif ($uno == 'nocturno') {
                echo "Has trabajado $dos horas en el turno nocturno, es un total de ".$nocturno * $dos;
            } elseif ($uno == 'festD') {
                echo "Has trabajado $dos horas en el turno diurno en un dia festivo, es un total de ".$fest_diurna * $dos;
            } elseif ($uno == 'festN') {
                echo "Has trabajado $dos horas en el turno nocturno en un dia festivo, es un total de ".$fest_nocturna * $dos;
            } else {
                return "<br>Opción no válida";
            }
    }
    jornal($uno,$dos);
?>
</body>
</html>