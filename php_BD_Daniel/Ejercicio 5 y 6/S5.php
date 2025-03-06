<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar obra codigo</title>
</head>
<body>
    <form method="post">
        Codigo: <input type="text" name="codigo" required><br>
        <input type="submit" value="Consultar">
    </form>
    <a href="inicio3.html">Volver a inicio</br></a>
    <?php
        include 'BD3.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $codigo = $_POST['codigo'];
            
            function consultar_codigo($conn,$codigo) {
                $sql = "SELECT * FROM Obras WHERE codigo_obra='$codigo';";
                $resultado = mysqli_query($conn,$sql);
                $comprobación = mysqli_num_rows($resultado);
                if ($comprobación > 0) {
                    $row=mysqli_fetch_array($resultado);
                    echo "Codigo: ".$row["codigo_obra"]." Nombre: ".$row["nombre_obra"]." Autor: ".$row["autor"]." Año_creacion: ".$row["año_creacion"];
                } else {
                    echo "Codigo no registrado en la base de datos";
                }
            }
            consultar_codigo($conn,$codigo);
        }
    ?>
</body>
</html>