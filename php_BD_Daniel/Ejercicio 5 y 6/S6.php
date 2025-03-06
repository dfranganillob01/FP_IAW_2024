<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar obra nombre</title>
</head>
<body>
    <form method="post">
        Nombre: <input type="text" name="nombre" required><br>
        <input type="submit" value="Consultar">
    </form>
    <a href="inicio3.html">Volver a inicio</br></a>
    <?php
        include 'BD3.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['nombre'];
            
            function consultar_nombre($conn,$nombre) {
                $sql = "SELECT * FROM Obras WHERE nombre_obra='$nombre';";
                $resultado = mysqli_query($conn,$sql);
                $comprobación = mysqli_num_rows($resultado);
                if ($comprobación > 0) {
                    $row=mysqli_fetch_array($resultado);
                    echo "Codigo: ".$row["codigo_obra"]." Nombre: ".$row["nombre_obra"]." Autor: ".$row["autor"]." Año_creacion: ".$row["año_creacion"];
                } else {
                    echo "Codigo no registrado en la base de datos";
                }
            }
            consultar_nombre($conn,$nombre);
        }
    ?>
</body>
</html>