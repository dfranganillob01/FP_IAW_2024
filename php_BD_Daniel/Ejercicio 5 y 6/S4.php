<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar interpretacion</title>
</head>
<body>
    <form method="post">
        Codigo_obra: <input type="text" name="codigo_obra"><br>
        Codigo_instrumento: <input type="text" name="codigo_instrumento"><br>
        fecha: <input type="date" name="fecha"><br>
        <input type="submit" value="Registrar obra">
    </form>
    <a href="inicio3.html">Volver a inicio</br></a>
    <?php
        include 'BD3.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $codigo_obra = $_POST['codigo_obra'];
            $codigo_instrumento = $_POST['codigo_instrumento'];
            $fecha = $_POST['fecha'];
        
        function añadir_interpretacion($conn,$codigo_obra,$codigo_instrumento,$fecha) {    
            $sql = "SELECT codigo_obra FROM Interpretacion WHERE codigo_obra='$codigo_obra' AND codigo_instrumento='$codigo_instrumento';";
            $resultado = mysqli_query($conn,$sql);
            $comprobacion = mysqli_num_rows($resultado);
            if ($comprobacion > 0) {
                echo "Esta interpretacion ya esta registrada, pulsa el boton para volver hacia atras";
                echo "</br><a href='inicio3.html'>Volver</a>";
            } else {
                $sql = "INSERT INTO Interpretacion (codigo_obra, codigo_instrumento, fecha) 
                VALUES ('$codigo_obra','$codigo_instrumento','$fecha');";
                $resultado = mysqli_query($conn,$sql);
                if ($resultado) {
                    echo "Tabla creada correctamente";
                } else {
                    echo "".mysqli_error($conn);
                }
            }
        }
        añadir_interpretacion($conn,$codigo_obra,$codigo_instrumento,$fecha);
        }
    ?>
</body>
</html>