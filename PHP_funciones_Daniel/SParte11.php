<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SParte11 Funciones Daniel</title>
    <form method="get">
        <input type="text" placeholder="Escribe un número" name="num1"/>
        <input type="submit" value="Enviar">
    </form>
</head>
<body>
<?php
    $uno = $_GET['num1'] ?? 1;
    function primo($uno) {
        $primos = [];
        for ($i = 2; $i < $uno; $i++) {
            $Primos = true;
            for ($j = 2; $j * $j <= $i; $j++) {
                if ($i % $j == 0) {
                    $Primos = false;
                    break;
                }
            }
            if ($Primos) {
                $primos[] = $i;
            }
        }
        return $primos;
    }
    $resultado = primo($uno);
    print_r($resultado);
?>
</body>
</html>