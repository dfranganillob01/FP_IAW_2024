<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio27 Estructura de control Daniel</title>
    <form method="get">
        <select name="desplegable">
            <option value="Trapecio">Trapecio</option>
            <option value="Triangulo">Triangulo</option>
            <option value="Cuadrado">Cuadrado</option>
            <option value="Rectangulo">Rectangulo</option>
            <option value="Circulo">Circulo</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
    <br>
<?php
    $desplegable = $_GET['desplegable'] ?? 1;
    switch ($desplegable) {
        case 'Trapecio':
            echo '<form method="get" action="">
                <input type="text" name="base1" required>
                <input type="text" name="base2" required>
                <input type="text" name="altura" required>
                <input type="hidden" name="desplegable" value="Trapecio">
                <input type="submit" value="Enviar">
              </form>';
            $base1 = floatval($_GET['base1'] ?? 1);
            $base2 = floatval($_GET['base2'] ?? 1);
            $altura = floatval($_GET['altura'] ?? 1);
            echo "El area de ese trapecio es de ".(($base1 + $base2) * $altura) / 2;
        break;
        case 'Triangulo':
            echo '<form method="get" action="">
                <input type="text" name="base1" required>
                <input type="text" name="altura" required>
                <input type="hidden" name="desplegable" value="Triangulo">
                <input type="submit" value="Enviar">
              </form>';
            $base1 = floatval($_GET['base1'] ?? 1);
            $altura = floatval($_GET['altura'] ?? 1);
            echo "El area de ese Triangulo es de ".($base1 * $altura) / 2;
        break;
        case 'Cuadrado':
            echo '<form method="get" action="">
                <input type="text" name="lado" required>
                <input type="text" name="lado" required>
                <input type="hidden" name="desplegable" value="Cuadrado">
                <input type="submit" value="Enviar">
              </form>';
            $lado = floatval($_GET['lado'] ?? 1);
            $lado = floatval($_GET['lado'] ?? 1);
            echo "El area de ese Cuadrado es de ".$lado * $lado;
        break;
        case 'Rectangulo':
            echo '<form method="get" action="">
                <input type="text" name="largo" required>
                <input type="text" name="ancho" required>
                <input type="hidden" name="desplegable" value="Rectangulo">
                <input type="submit" value="Enviar">
              </form>';
            $largo = floatval($_GET['largo'] ?? 1);
            $ancho = floatval($_GET['ancho'] ?? 1);
            echo "El area de ese Rectangulo es de ".$largo * $ancho;
        break;
        case 'Circulo':
            echo '<form method="get" action="">
                <input type="text" name="radio" required>
                <input type="hidden" name="desplegable" value="Circulo">
                <input type="submit" value="Enviar">
              </form>';
            $radio = floatval($_GET['radio'] ?? 1);
            echo "El area de ese Circulo es de ".M_PI * pow(2,$radio);
        break;
        default:
            echo "Opción no válida"; 
            break;
    }
    ?>
</body>
</html>