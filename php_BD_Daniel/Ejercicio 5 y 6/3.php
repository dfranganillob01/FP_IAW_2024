<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar instrumento</title>
</head>
<body>
    <form method="post">
        Nombre: <input type="text" name="nombre" required><br>
        Tipo: <input type="text" name="tipo"><br>
        Origen: <input type="text" name="origen"><br>
        Modelo: <input type="text" name="modelo"><br>
        <input type="submit" value="Registrar instrumento">
    </form>
    <a href="inicio3.html">Volver a inicio</br></a>
    <?php
        include 'BD3.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['nombre'];
            $tipo = $_POST['tipo'];
            $origen = $_POST['origen'];
            $modelo = $_POST['modelo'];
        
        function añadir_instrumento($conn,$nombre,$tipo,$origen,$modelo) {    
            $sql = "SELECT Nombre FROM Instrumento WHERE Nombre='$nombre';";
            $resultado = mysqli_query($conn,$sql);
            $comprobacion = mysqli_num_rows($resultado);
            if ($comprobacion > 0) {
                echo "Este instrumento ya esta registrado, pulsa el boton para volver hacia atras";
            } else {
                $sql = "INSERT INTO Instrumento (Nombre, Tipo, Origen, Modelo) 
                VALUES ('$nombre','$tipo','$origen','$modelo');";
                $resultado = mysqli_query($conn,$sql);
                if ($resultado) {
                    echo "Tabla creada correctamente";
                } else {
                    echo "".mysqli_error($conn);
                }
            }
        }
        añadir_instrumento($conn,$nombre,$tipo,$origen,$modelo);
        }
    ?>
</body>
</html>