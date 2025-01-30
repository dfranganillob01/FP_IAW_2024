<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio31 Estructura de control Daniel</title>
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
    //https://www.w3schools.com/php/php_arrays.asp
    if ($_SERVER['REQUEST_METHOD'] == 'GET') 
    {
        $notas = array();
        $menores7 =0;
        $iguales7 =0;
        $mayores =0;
        for ($i=1; $i <=10 ; $i++) 
        { 
            //array_push($notas,floatval($_GET[strval($i)]));
            if (floatval($_GET[strval($ i)]) >7) 
            {
                $mayores++;
            }
            elseif(floatval($_GET[strval($i)]) <7)
            {
                $menores7++;
            }
            else
            {
                $iguales7++;
            }
        }

        print("Mayores que 7: $mayores <br>Menores que 7: $menores7 <br>Iguales que 7: $iguales7 <br>");
        //print_r($notas);
    }
    
    ?>
</body>
</html>