<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio25 Estructura de control Daniel</title>
</head>
<body>
    <form method="get">
        <input type="text" placeholder="Escribe un numero de un digito" name="alfabeto"/>
        <input type="text" placeholder="Escribe un número romano" name="romano"/>
        <input type="submit" value="Enviar">
    </form>        
    <br>
<?php
    $alfabeto = $_GET['alfabeto'] ?? 1;
    $romano = $_GET['romano'] ?? 1;
    switch ($alfabeto) {
        case '1':
            echo "El numero $alfabeto es a.";
            break;
        case '2':
            echo "El numero $alfabeto es b.";
            break;
        case '3':
            echo "El numero $alfabeto es c.";
            break;
        case '4':
            echo "El numero $alfabeto es d.";
            break;
        case '5':
            echo "El numero $alfabeto es e.";
            break;
        case '6':
            echo "El numero $alfabeto es f.";
            break;  
        case '7':
            echo "El numero $alfabeto es g.";
            break; 
        case '8':
            echo "El numero $alfabeto es h.";
            break;
        case '9':
            echo "El numero $alfabeto es i.";
            break;         
        default:
            echo "Este nñumero no es valido";
            break;
    }
    echo "<br>";
    switch ($romano) {
        case 'I':
            echo "1";
            break;
        case 'V';
            echo "5";
            break;
        case 'X';
            echo "10";
            break;
        case 'L';
            echo "50";
            break;
        case 'C';
            echo "100";
            break;
        case 'D';
            echo "500";
            break;
        case 'M';
            echo "1000";
            break;
        default:
            echo "Este numero romano no es válido";
    }
    ?>
</body>
</html>