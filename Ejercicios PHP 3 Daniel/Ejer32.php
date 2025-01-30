<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio32 Estructura de control Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe un numero" name="1"/>
        <input type="text" placeholder="Escribe un número" name="2"/>
        <input type="text" placeholder="Escribe un numero" name="3"/>
        <input type="text" placeholder="Escribe un número" name="4"/>
        <input type="text" placeholder="Escribe un numero" name="5"/>
        <input type="text" placeholder="Escribe un número" name="6"/>
        <input type="text" placeholder="Escribe un numero" name="7"/>
        <input type="text" placeholder="Escribe un número" name="8"/>
        <input type="text" placeholder="Escribe un numero" name="9"/>
        <input type="text" placeholder="Escribe un número" name="10"/>
        <input type="submit" value="Enviar">
    </form>        
</head>
    <br>
<body>
<?php
     $num1 = floatval($_GET['1'] ?? 1);
     $num2 = floatval($_GET['2'] ?? 1);
     $num3 = floatval($_GET['3'] ?? 1);
     $num4 = floatval($_GET['4'] ?? 1);
     $num5 = floatval($_GET['5'] ?? 1);
     $num6 = floatval($_GET['6'] ?? 1);
     $num7 = floatval($_GET['7'] ?? 1);
     $num8 = floatval($_GET['8'] ?? 1);
     $num9 = floatval($_GET['9'] ?? 1);
     $num10 = floatval($_GET['10'] ?? 1);
     $multiplos_de_3 = 0;
     $multiplos_de_5 = 0;
     $multiplos_de_ambos = 0;

     $numeros = [$num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10];

     foreach ($numeros as $numero) {
         if ($numero % 3 == 0) {
             $multiplos_de_3++;
         }
         if ($numero % 5 == 0) {
             $multiplos_de_5++;
         }
         if ($numero % 3 == 0 && $numero % 5 == 0) {
             $multiplos_de_ambos++;
         }
     }

     echo "Cantidad de múltiplos de 3: " . $multiplos_de_3 . "<br>";
     echo "Cantidad de múltiplos de 5: " . $multiplos_de_5 . "<br>";
     echo "Cantidad de múltiplos de ambos: " . $multiplos_de_ambos . "<br>";
    ?>
</body>
</html>