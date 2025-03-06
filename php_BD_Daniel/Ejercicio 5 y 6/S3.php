<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar obra</title>
</head>
<body>
    <form method="post">
        Nombre: <input type="text" name="nombre"><br>
        Autor: <input type="text" name="autor"><br>
        Año_creacion: <input type="date" name="año_creacion"><br>
        <input type="submit" value="Registrar obra">
    </form>
    <a href="inicio3.html">Volver a inicio</br></a>
    <?php
        include 'BD3.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['nombre'];
            $autor = $_POST['autor'];
            $año_creacion = $_POST['año_creacion'];
        
        function añadir_obra($conn,$nombre,$autor,$año_creacion) {    
            $sql = "SELECT nombre_obra FROM Obras WHERE nombre_obra='$nombre';";
            $resultado = mysqli_query($conn,$sql);
            $comprobacion = mysqli_num_rows($resultado);
            if ($comprobacion > 0) {
                echo "Esta obra ya esta registrada, pulsa el boton para volver hacia atras";
                echo "</br><a href='inicio3.html'>Volver</a>";
            } else {
                $sql = "INSERT INTO Obras (Nombre_obra, autor, año_creacion) 
                VALUES ('$nombre','$autor','$año_creacion');";
                $resultado = mysqli_query($conn,$sql);
                if ($resultado) {
                    echo "Tabla creada correctamente";
                } else {
                    echo "".mysqli_error($conn);
                }
            }
        }
        añadir_obra($conn,$nombre,$autor,$año_creacion);
        }
    ?>
</body>
</html>